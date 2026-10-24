<?php

namespace App\Http\Controllers;

use App\Services\Api\CurrentUserService;
use App\Services\Api\Location\TownService;
use App\Services\Api\UrlApiService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class CreateUserController extends Controller
{
    public function create()
    {
        $towns = (new TownService())->getTowns();
        if ($towns == null) {
            return view('error');
        }

        return view('auth.register', compact('towns'));
    }

    public function store(Request $request)
    {
        $recaptchaRules = config('services.recaptcha.key')
            ? ['required', 'string']
            : ['nullable', 'string'];

        $data = $request->validate([
            'username' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'max:30', 'confirmed'],
            'role_id' => ['required', 'integer', 'in:2,3'],
            'town_id' => ['required', 'integer'],
            'email' => ['nullable', 'email'],
            'recaptcha' => $recaptchaRules,
            'cgu' => ['accepted'],
        ]);

        try {
            $response = Http::acceptJson()->timeout(20)->post(UrlApiService::endpoint('v1/auth/register'), [
                'username' => $data['username'],
                'phone_number' => $data['phone_number'],
                'password' => $data['password'],
                'role_id' => (int) $data['role_id'],
                'town_id' => (int) $data['town_id'],
                'email' => $data['email'] ?? null,
                'recaptcha' => $data['recaptcha'] ?? 'local',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => __('Request timeout, server unavailable'),
            ], 503);
        }

        if ($response->status() === 422) {
            return response()->json($response->json() ?: ['message' => $response->body()], 422);
        }

        if ($response->failed()) {
            $payload = $response->json() ?: [];
            if (! empty($payload['errors']) || ! empty($payload['message'])) {
                return response()->json($payload, $response->status());
            }

            return response()->json(['message' => __('An unknown error occurred')], $response->status() ?: 500);
        }

        $login = Http::asForm()->post(UrlApiService::endpoint('v1/auth/login'), [
            'phone_number' => $data['phone_number'],
            'password' => $data['password'],
        ]);

        if ($login->successful() && $login->json('access_token')) {
            Session::put('tokenUser', $login->json('access_token'));
            Session::save();
            $currentUser = (new CurrentUserService())->currentUser();
            Session::put('currentUser', $currentUser);
            Session::save();

            $role = (int) ($currentUser->role_id ?? $data['role_id']);
            $redirect = $role === 2
                ? route('show.plan', ['id' => 1, 'adsId' => null])
                : route('db.customer.index');

            return response()->json(['ok' => true, 'redirect' => $redirect]);
        }

        return response()->json(['ok' => true, 'redirect' => url('/login')]);
    }
}
