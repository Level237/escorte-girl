<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\Api\CurrentUserService;
use App\Services\Api\UrlApiService;
use App\Services\User\UserTypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'phone_number' => 'required|string',
            'password' => 'required|string',
        ]);

        try {
            $response = Http::acceptJson()
                ->timeout(20)
                ->post(UrlApiService::endpoint('v1/auth/login'), [
                    'phone_number' => $request->phone_number,
                    'password' => $request->password,
                ]);
        } catch (\Throwable $e) {
            return back()->with('error', 'Connexion impossible. Réessayez.');
        }

        $payload = $response->json() ?: [];
        $message = is_string($payload['message'] ?? null) ? $payload['message'] : null;

        if ($response->status() === 403 || (int) ($payload['code'] ?? 0) === 203) {
            return back()->with('error', $message ?: 'Compte suspendu');
        }

        $accessToken = $payload['access_token'] ?? null;
        if (! $response->successful() || ! is_string($accessToken) || $accessToken === '') {
            return back()->with('error', 'Numero de telephone ou mot de passe invalide');
        }

        Session::forget('tokenUser');
        Session::forget('currentUser');
        Session::put('tokenUser', $accessToken);
        Session::save();

        $currentUser = (new CurrentUserService())->currentUser();
        if (! $currentUser) {
            return back()->with('error', 'Connexion réussie mais le profil est introuvable. Réessayez.');
        }

        Session::put('currentUser', $currentUser);
        Session::save();

        return (new UserTypeService())->checkRole($currentUser->role_id);
    }
}
