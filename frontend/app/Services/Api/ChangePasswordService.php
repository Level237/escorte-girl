<?php

namespace App\Services\Api;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ChangePasswordService
{
    public function change($phone_number, $password)
    {
        return Http::acceptJson()->post(UrlApiService::endpoint('v1/auth/password'), [
            'phone_number' => $phone_number,
            'password' => $password,
            'reset_token' => Session::get('passwordResetToken'),
        ]);
    }
}
