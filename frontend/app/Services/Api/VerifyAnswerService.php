<?php

namespace App\Services\Api;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class VerifyAnswerService
{
    public function verify($phone_number, $question_id, $answer)
    {
        $response = Http::acceptJson()->post(UrlApiService::endpoint('v1/auth/password/verify'), [
            'phone_number' => $phone_number,
            'question_id' => $question_id,
            'answer' => $answer,
        ]);

        if (! $response->successful()) {
            return (object) ['code' => 0];
        }

        $token = $response->json('data.reset_token');
        Session::put('passwordResetToken', $token);

        return (object) [
            'code' => 1,
            'reset_token' => $token,
        ];
    }
}
