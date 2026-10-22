<?php

namespace App\Services\Api;

class UrlApiService
{
    public static function base(): string
    {
        return rtrim((string) config('services.api.url'), '/');
    }

    public static function getUrl(): string
    {
        return self::base();
    }

    public static function endpoint(string $path): string
    {
        $path = ltrim($path, '/');

        if (str_starts_with($path, 'api/')) {
            return self::base().'/'.$path;
        }

        return self::base().'/api/'.$path;
    }
}
