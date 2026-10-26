<?php

namespace App\Services\Api\Escort;

use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ProfileIsCompletedOrNotService
{
    public function isCompletedOrNot()
    {
        try {
            $response = Http::withToken(Session::get('tokenUser'))
                ->acceptJson()
                ->timeout(15)
                ->get(UrlApiService::endpoint('v1/me/escort'));

            return (object) ['completed' => $response->successful() ? 1 : 0];
        } catch (\Throwable $e) {
            return (object) ['completed' => 0];
        }
    }
}
