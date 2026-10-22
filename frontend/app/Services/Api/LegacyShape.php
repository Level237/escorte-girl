<?php

namespace App\Services\Api;

use Illuminate\Support\Facades\Http;

class LegacyShape
{
    public static function announcements(array $rows): array
    {
        return array_map([self::class, 'announcement'], $rows);
    }

    public static function announcement(array $row): array
    {
        if (isset($row['images']) && is_array($row['images'])) {
            $row['images'] = array_map(function ($image) {
                if (is_string($image)) {
                    return ['id' => $image, 'path' => $image];
                }

                return $image;
            }, $row['images']);
        }

        if (isset($row['category']['name']) && ! isset($row['category']['title'])) {
            $row['category']['title'] = $row['category']['name'];
        }

        if (array_key_exists('is_subscribed', $row) && ! array_key_exists('isSubscribe', $row)) {
            $row['isSubscribe'] = $row['is_subscribed'] ? 1 : 0;
        }

        return $row;
    }

    public static function user(array $row): object
    {
        return (object) [
            'id' => $row['id'] ?? null,
            'username' => $row['username'] ?? null,
            'email' => $row['email'] ?? null,
            'phone_number' => $row['phone_number'] ?? null,
            'role_id' => $row['role_id'] ?? null,
            'town_id' => $row['town_id'] ?? null,
            'balance' => $row['balance'] ?? null,
            'isSecure' => ! empty($row['is_secure']) ? 1 : 0,
            'isVerify' => ! empty($row['is_verified']) ? 1 : 0,
            'isSubscribe' => ! empty($row['is_subscribed']) ? 1 : 0,
            'suspended_at' => $row['suspended_at'] ?? null,
        ];
    }

    public static function namedLookup(string $path, string $legacyName): array
    {
        $rows = Http::acceptJson()->get(UrlApiService::endpoint($path))->json('data') ?? [];

        return array_map(function ($row) use ($legacyName) {
            $name = $row['name'] ?? '';

            return (object) [
                'id' => $row['id'] ?? null,
                'name' => $name,
                $legacyName => $name,
            ];
        }, $rows);
    }

    public static function searchHits(array $rows): array
    {
        return array_map(function ($row) {
            $ad = self::announcement($row);

            return [
                'type' => 'announcements',
                'searchable' => $ad,
            ];
        }, self::announcements($rows));
    }
}
