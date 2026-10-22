<?php

namespace App\Services\Api\V1;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PasswordResetToken
{
    private const TTL_MINUTES = 15;

    public function issue(string $phone): string
    {
        $token = Str::random(64);
        Cache::put($this->key($token), $phone, now()->addMinutes(self::TTL_MINUTES));

        return $token;
    }

    public function consume(string $phone, string $token): bool
    {
        $stored = Cache::pull($this->key($token));

        return is_string($stored) && hash_equals($stored, $phone);
    }

    private function key(string $token): string
    {
        return 'v1-password-reset:'.$token;
    }
}
