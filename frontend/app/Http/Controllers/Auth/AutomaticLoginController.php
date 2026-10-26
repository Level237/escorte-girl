<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Services\Api\CurrentUserService;
use App\Services\Api\UrlApiService;
use App\Services\User\UserTypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AutomaticLoginController extends Controller
{
    public function login(Request $request)
    {
        $response = Http::acceptJson()
            ->timeout(20)
            ->post(UrlApiService::endpoint('v1/auth/login'), [
                'phone_number' => $request->phone_number,
                'password' => $request->password,
            ]);

        $accessToken = $response->json('access_token');
        if (! $response->successful() || ! is_string($accessToken) || $accessToken === '') {
            return to_route('login');
        }

        Session::forget('tokenUser');
        Session::forget('currentUser');
        Session::put('tokenUser', $accessToken);
        Session::save();

        $currentUser = (new CurrentUserService())->currentUser();
        if (! $currentUser) {
            return to_route('login');
        }

        Session::put('currentUser', $currentUser);
        Session::save();

        return (new UserTypeService())->checkRole($currentUser->role_id);
    }
}
