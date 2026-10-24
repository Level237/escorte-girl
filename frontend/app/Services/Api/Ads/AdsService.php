<?php

namespace App\Services\Api\Ads;

use App\Services\Api\LegacyShape;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AdsService
{
    public function index()
    {
        try {
            $rows = Http::acceptJson()
                ->get(UrlApiService::endpoint('v1/announcements/by-town'))
                ->json('data') ?? [];

            $towns = array_map(function ($row) {
                return [
                    'id' => $row['town_id'] ?? $row['id'] ?? null,
                    'town_id' => $row['town_id'] ?? $row['id'] ?? null,
                    'town_name' => $row['town_name'] ?? '',
                    'totalAnnounces' => $row['count'] ?? $row['totalAnnounces'] ?? 0,
                ];
            }, $rows);

            return [$towns, []];
        } catch (\Exception $e) {
            return [];
        }
    }

    public function getAds()
    {
        return $this->collection('v1/announcements', ['per_page' => 100]);
    }

    public function getAdsById($id)
    {
        try {
            $row = Http::acceptJson()
                ->get(UrlApiService::endpoint('v1/announcements/'.$id))
                ->json('data');

            if (! is_array($row)) {
                return null;
            }

            return LegacyShape::announcement($row);
        } catch (\Exception $e) {
            return null;
        }
    }

    public function homeShelves(): array
    {
        $url = UrlApiService::endpoint('v1/announcements');

        try {
            $responses = Http::pool(fn ($pool) => [
                $pool->as('vip')->acceptJson()->get($url, ['tier' => 'vip', 'per_page' => 100]),
                $pool->as('gold')->acceptJson()->get($url, ['tier' => 'gold', 'per_page' => 100]),
                $pool->as('home')->acceptJson()->get($url, ['tier' => 'home']),
            ]);
        } catch (\Exception $e) {
            return ['vip' => [], 'gold' => [], 'home' => []];
        }

        return [
            'vip' => $this->fromResponse($responses['vip'] ?? null),
            'gold' => $this->fromResponse($responses['gold'] ?? null),
            'home' => $this->fromResponse($responses['home'] ?? null),
        ];
    }

    private function fromResponse($response): array
    {
        if (! is_object($response) || ! method_exists($response, 'successful') || ! $response->successful()) {
            return [];
        }

        $rows = $response->json('data') ?? [];

        return is_array($rows) ? LegacyShape::announcements($rows) : [];
    }

    public function homeAds()
    {
        return $this->collection('v1/announcements', ['tier' => 'home']);
    }

    public function vipAds()
    {
        return $this->collection('v1/announcements', ['tier' => 'vip', 'per_page' => 100]);
    }

    public function goldAds()
    {
        return $this->collection('v1/announcements', ['tier' => 'gold', 'per_page' => 100]);
    }

    public function popularsAds()
    {
        return $this->collection('v1/announcements', ['sort' => 'popular', 'per_page' => 100]);
    }

    public function recentAds()
    {
        return $this->collection('v1/announcements', ['sort' => 'recent', 'per_page' => 100]);
    }

    public function owned()
    {
        try {
            $response = Http::withToken(Session::get('tokenUser'))
                ->acceptJson()
                ->get(UrlApiService::endpoint('v1/me/announcements'));

            if (! $response->successful()) {
                return null;
            }

            $rows = $response->json('data') ?? [];
            if (! is_array($rows)) {
                $rows = [];
            }
            if ($rows !== [] && array_is_list($rows) === false && isset($rows['id'])) {
                $rows = [$rows];
            }

            return ['data' => LegacyShape::announcements($rows)];
        } catch (\Exception $e) {
            return null;
        }
    }

    public function collection(string $path, array $query = []): array
    {
        try {
            $rows = Http::acceptJson()
                ->get(UrlApiService::endpoint($path), $query)
                ->json('data') ?? [];

            return LegacyShape::announcements($rows);
        } catch (\Exception $e) {
            return [];
        }
    }
}
