<?php

namespace App\Services\Api\Admin;

use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class StatService
{
    public function statUser()
    {
        return $this->object('v1/admin/stats/users');
    }

    public function statEscort()
    {
        return $this->object('v1/admin/stats/escorts');
    }

    public function statIncome()
    {
        return $this->object('v1/admin/stats/income');
    }

    public function statAnnounce()
    {
        return $this->object('v1/admin/stats/announcements');
    }

    public function statCurrentWeek()
    {
        return $this->total('v1/admin/stats/weeks/current');
    }

    public function statPreviousWeek()
    {
        return $this->total('v1/admin/stats/weeks/previous');
    }

    public function statTown()
    {
        $rows = $this->get('v1/admin/stats/towns')['data'] ?? [];

        return array_map(function ($row) {
            return [
                'id' => $row['id'] ?? null,
                'town_name' => $row['town_name'] ?? '',
                'users' => $row['users'] ?? 0,
                'ads' => $row['ads'] ?? $row['count'] ?? 0,
                'escorts' => $row['escorts'] ?? 0,
            ];
        }, $rows);
    }

    private function object(string $path): object
    {
        $data = $this->get($path)['data'] ?? [];

        return (object) $data;
    }

    private function total(string $path)
    {
        return $this->get($path)['data']['total'] ?? 0;
    }

    private function get(string $path): array
    {
        $response = Http::withToken(Session::get('tokenUser'))
            ->acceptJson()
            ->get(UrlApiService::endpoint($path));

        return $response->json() ?? [];
    }
}
