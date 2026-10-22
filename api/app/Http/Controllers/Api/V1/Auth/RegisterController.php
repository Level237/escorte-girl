<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\IpUtils;

class RegisterController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'username' => ['required', 'string', 'unique:users,username', 'regex:/^\S+$/'],
            'phone_number' => ['required', 'string', 'unique:users,phone_number'],
            'password' => ['required', 'string', 'min:6', 'max:30'],
            'role_id' => ['required', 'integer', 'in:2,3'],
            'town_id' => ['required', 'integer', 'exists:towns,id'],
            'email' => ['nullable', 'email', 'unique:users,email'],
            'recaptcha' => ['required', 'string'],
        ]);

        $this->assertRecaptcha($request, $data['recaptcha']);

        $user = new User;
        $user->username = $data['username'];
        $user->phone_number = $data['phone_number'];
        $user->password = $data['password'];
        $user->role_id = $data['role_id'];
        $user->town_id = $data['town_id'];
        $user->email = $data['email'] ?? null;
        $user->save();

        return (new UserResource($user))
            ->response()
            ->setStatusCode(201);
    }

    private function assertRecaptcha(Request $request, string $token): void
    {
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('services.recaptcha.secret'),
            'response' => $token,
            'remoteip' => IpUtils::anonymize($request->ip()),
        ]);

        $result = $response->json();

        if (! $response->successful() || empty($result['success'])) {
            abort(response()->json([
                'message' => 'Recaptcha invalide.',
            ], 400));
        }
    }
}
