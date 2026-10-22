<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\UserResource;
use App\Models\Announcement;
use App\Models\Image;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(Request $request): AnonymousResourceCollection
    {
        $data = $request->validate([
            'role_id' => ['sometimes', 'integer', 'in:1,2,3'],
            'suspended' => ['sometimes', 'boolean'],
        ]);

        $users = User::query()
            ->when(isset($data['role_id']), fn ($query) => $query->where('role_id', $data['role_id']))
            ->when($request->exists('suspended'), function ($query) use ($request) {
                $request->boolean('suspended')
                    ? $query->whereNotNull('suspended_at')
                    : $query->whereNull('suspended_at');
            })
            ->latest()
            ->get();

        return UserResource::collection($users);
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'username' => ['required', 'string', 'unique:users,username', 'regex:/^\S+$/'],
            'phone_number' => ['required', 'string', 'unique:users,phone_number'],
            'password' => ['required', 'string', 'min:6', 'max:30'],
            'role_id' => ['required', 'integer', 'in:1,2,3'],
            'town_id' => ['required', 'integer', 'exists:towns,id'],
            'email' => ['nullable', 'email', 'unique:users,email'],
        ]);

        $user = new User;
        $user->username = $data['username'];
        $user->phone_number = $data['phone_number'];
        $user->password = $data['password'];
        $user->role_id = $data['role_id'];
        $user->town_id = $data['town_id'];
        $user->email = $data['email'] ?? null;
        $user->save();

        return (new UserResource($user))->response()->setStatusCode(201);
    }

    public function destroy(User $user): Response
    {
        $this->guardSelf($user);

        foreach ($user->ads as $ad) {
            $announcement = Announcement::query()->find($ad->id);
            if (! $announcement) {
                continue;
            }

            foreach ($announcement->images as $image) {
                Storage::delete('public/ads/'.$announcement->id.'/'.$image->path);
                Image::query()->whereKey($image->id)->delete();
            }

            Storage::deleteDirectory('public/ads/'.$announcement->id);
            $announcement->delete();
        }

        $user->delete();

        return response()->noContent();
    }

    public function suspend(User $user): UserResource
    {
        $this->guardSelf($user);
        $user->ban();

        return new UserResource($user);
    }

    public function activate(User $user): UserResource
    {
        $user->activate();

        return new UserResource($user);
    }

    public function credits(Request $request, User $user): UserResource
    {
        $data = $request->validate([
            'amount' => ['required', 'integer', 'min:1'],
        ]);

        $user->balance = (int) $user->balance + $data['amount'];
        $user->save();

        return new UserResource($user);
    }

    public function verify(User $user): UserResource
    {
        abort_unless((int) $user->role_id === 2, response()->json([
            'message' => 'Seuls les comptes escort peuvent être vérifiés.',
        ], 422));

        $user->isVerify = 1;
        $user->save();

        return new UserResource($user);
    }

    public function roles(): JsonResponse
    {
        $roles = Role::query()->orderBy('id')->get(['id', 'role_name']);

        return response()->json(['data' => $roles]);
    }

    private function guardSelf(User $user): void
    {
        abort_if((int) $user->id === (int) Auth::guard('api')->id(), response()->json([
            'message' => 'Vous ne pouvez pas modifier votre propre compte depuis cette action.',
        ], 422));
    }
}
