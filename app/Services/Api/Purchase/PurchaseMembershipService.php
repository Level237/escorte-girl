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

    public function initPayment($price){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');
        $response=Http::withToken($token)->acceptJson()->post($url."/api/v1/init/payment/",[
            'price'=>$price
        ]);
        $data=json_decode($response);

        return $data;
    }

    public function verifyPayment($memberShip_id,$announcement_id){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');
        $response=Http::withToken($token)->acceptJson()->post($url."/api/v1/verify/payment/".$memberShip_id."/".$announcement_id);
        $data=json_decode($response);

        return $data;
    }
    public function verifyUserPayment(){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');
        $response=Http::withToken($token)->acceptJson()->post($url."/api/v1/subscribe/member/momo");
        $data=json_decode($response);

        return $data;
    }


}
