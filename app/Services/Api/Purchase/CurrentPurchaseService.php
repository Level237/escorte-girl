<?php

namespace App\Services\Api\Purchase;

use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class CurrentPurchaseService{

    public function currentPurchase(){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');
        $response=Http::withToken($token)->acceptJson()->get($url."/api/v1/purchases/user/");
        $data=json_decode($response);

        return $data;
    }
}
