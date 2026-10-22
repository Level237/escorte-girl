<?php

namespace App\Services\Api;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class VerifySecureUserService
{
    public function verify($phone_number)
    {
        $response = Http::acceptJson()->post(UrlApiService::endpoint('v1/auth/password/questions'), [
            'phone_number' => $phone_number,
        ]);

        if ($response->status() === 404) {
            return (object) ['error' => 404];
        }

        if ($response->status() === 409) {
            return (object) ['error' => 500];
        }

        $questions = array_map(function ($question) {
            return (object) [
                'id' => $question['id'] ?? null,
                'question_name' => $question['question'] ?? $question['question_name'] ?? '',
            ];
        }, $response->json('data') ?? []);

        return (object) ['questions' => $questions];
    }
}
