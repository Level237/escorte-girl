<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Api\V1\AccessTokenIssuer;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    public function __construct(private AccessTokenIssuer $tokens) {}

    public function store(Request $request): Response
    {
        $data = $request->validate([
            'phone_number' => ['required', 'string', 'exists:users,phone_number'],
            'password' => ['required', 'string'],
        ]);

        $user = User::query()->where('phone_number', $data['phone_number'])->firstOrFail();

        if ($user->suspended_at) {
            return response()->json([
                'message' => "Votre compte a été suspendu. Contactez l'administrateur.",
            ], 403);
        }

        return $this->tokens->issue($user, $data['password']);
    }
}
