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
            $rows = Http::withToken(Session::get('tokenUser'))
                ->acceptJson()
                ->get(UrlApiService::endpoint('v1/me/announcements'))
                ->json('data') ?? [];

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
