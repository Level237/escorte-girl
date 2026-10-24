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
        $data = $this->payload($path);

        return (object) [
            'monthly' => $data['monthly'] ?? 0,
            'percent' => $data['percent'] ?? 0,
            'total' => $data['total'] ?? 0,
        ];
    }

    private function total(string $path)
    {
        return $this->payload($path)['total'] ?? 0;
    }

    private function payload(string $path): array
    {
        $json = $this->get($path);
        $data = $json['data'] ?? $json;

        if (is_array($data) && isset($data['data']) && is_array($data['data']) && ! array_key_exists('monthly', $data) && ! array_key_exists('total', $data)) {
            $data = $data['data'];
        }

        return is_array($data) ? $data : [];
    }

    private function get(string $path): array
    {
        $response = Http::withToken(Session::get('tokenUser'))
            ->acceptJson()
            ->get(UrlApiService::endpoint($path));

        $json = $response->json();

        return is_array($json) ? $json : [];
    }
}
