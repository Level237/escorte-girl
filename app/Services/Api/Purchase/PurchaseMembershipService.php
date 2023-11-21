<?php

namespace App\Services\Api\Purchase;

use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class PurchaseMembershipService{

    public function purchaseWithCredit($memberShip_id,$announcement_id){

        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');
        $response=Http::withToken($token)->acceptJson()->post($url."/api/v1/subscribe/withCredit/".$memberShip_id."/".$announcement_id);
        $data=json_decode($response);

        return $data;
    }
}
