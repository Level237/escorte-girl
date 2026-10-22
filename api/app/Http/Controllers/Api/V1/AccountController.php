<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\PaymentResource;
use App\Http\Resources\V1\PurchaseResource;
use App\Http\Resources\V1\UserResource;
use App\Models\Memberships_user;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function show(): UserResource
    {
        return new UserResource($this->user());
    }

    public function update(Request $request): UserResource
    {
        $user = $this->user();

        $data = $request->validate([
            'username' => ['required', 'string', 'regex:/^\S+$/', 'unique:users,username,'.$user->id],
            'phone_number' => ['required', 'string', 'unique:users,phone_number,'.$user->id],
            'email' => ['nullable', 'email', 'unique:users,email,'.$user->id],
            'town_id' => ['sometimes', 'integer', 'exists:towns,id'],
        ]);

        $user->username = $data['username'];
        $user->phone_number = $data['phone_number'];

        if ($request->exists('email')) {
            $user->email = $data['email'];
        }

        if (array_key_exists('town_id', $data)) {
            $user->town_id = $data['town_id'];
        }

        $user->save();

        return new UserResource($user);
    }

    public function securityQuestion(Request $request): JsonResponse
    {
        $data = $request->validate([
            'question_id' => ['required', 'integer', 'exists:questions,id'],
            'answer' => ['required', 'string', 'max:255'],
        ]);

        $user = $this->user();
        $already = $user->questions()->where('questions.id', $data['question_id'])->exists();

        if ($already) {
            $user->questions()->updateExistingPivot($data['question_id'], [
                'answer' => $data['answer'],
            ]);
        } else {
            $user->questions()->attach($data['question_id'], [
                'answer' => $data['answer'],
            ]);
        }

        $user->isSecure = 1;
        $user->save();

        return response()->json([
            'data' => ['is_secure' => true],
        ]);
    }

    public function purchases(): AnonymousResourceCollection
    {
        $rows = Memberships_user::query()
            ->with(['membership', 'payment', 'announcement.User'])
            ->where('user_id', $this->user()->id)
            ->latest()
            ->get();

        return PurchaseResource::collection($rows);
    }

    public function payments(): AnonymousResourceCollection
    {
        $rows = Payment::query()
            ->where('user_id', $this->user()->id)
            ->latest('id')
            ->get();

        return PaymentResource::collection($rows);
    }

    private function user(): User
    {
        return Auth::guard('api')->user();
    }
}
