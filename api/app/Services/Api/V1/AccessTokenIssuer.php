<?php

namespace App\Services\Api\V1;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Client;

class AccessTokenIssuer
{
    public function issue(User $user, string $password)
    {
        $client = Client::query()->find(2);

        if (! $client) {
            return response()->json([
                'message' => 'Client OAuth introuvable.',
            ], 500);
        }

        $proxy = Request::create('/oauth/token', 'POST', [
            'grant_type' => 'password',
            'client_id' => $client->id,
            'client_secret' => $client->secret,
            'username' => $user->phone_number,
            'password' => $password,
            'scope' => $this->scope((int) $user->role_id),
        ]);

        return Route::dispatch($proxy);
    }

    public function scope(int $roleId): string
    {
        return match ($roleId) {
            1 => 'admin',
            2 => 'escort',
            3 => 'customer',
            default => '',
        };
    }
}
