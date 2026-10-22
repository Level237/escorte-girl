<?php

namespace App\Services\Api;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class CurrentUserService
{
    public function currentUser()
    {
        try {
            $token = Session::get('tokenUser');
            $response = Http::retry(3, 400, throw: false)
                ->withToken($token)
                ->acceptJson()
                ->get(UrlApiService::endpoint('v1/me'));

            if (! $response->successful()) {
                return null;
            }

            $row = $response->json('data');

            return is_array($row) ? LegacyShape::user($row) : null;
        } catch (\Exception $e) {
            return null;
        }
    }
}
