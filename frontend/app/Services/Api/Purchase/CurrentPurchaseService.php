<?php

namespace App\Services\Api\Purchase;

use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class CurrentPurchaseService{

    public function currentPurchase(){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');
        $response=Http::withToken($token)->acceptJson()->get(UrlApiService::endpoint('v1/me/purchases'));
        $data = json_decode((string) $response->getBody(), true);
        if($data['data'] === null){
            return null;
        }
        else{
            return $data['data'];
        }
    }

    public function currentPayment(){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');
        $rows = Http::withToken($token)->acceptJson()->get(UrlApiService::endpoint('v1/me/payments'))->json('data') ?? [];

        return array_map(fn ($row) => (object) $row, $rows);
    }
}
