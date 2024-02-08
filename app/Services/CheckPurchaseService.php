<?php
namespace App\Services;

use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class CheckPurchaseService{

    public function checkEscortAds($user_id,$transaction_id,$memberShip_id,$announcement_id){
        $url=(new UrlApiService())->getUrl();
        $response=Http::post($url."/api/verify/payment/".$user_id."/".$transaction_id."/".$memberShip_id."/".$announcement_id);
        $data=json_decode($response);

        return $response;
    }

    public function checkCredit($price,$user_id,$transaction_id){
        $url=(new UrlApiService())->getUrl();
        $response=Http::post($url."/api/purchaseCredit/".$price."/".$user_id."/".$transaction_id);
        $data=json_decode($response);

        return $response;
    }

    public function checkPlan($user_id,$transaction_id){
        $url=(new UrlApiService())->getUrl();
        $response=Http::post($url."/api/subscribe/member/momo/".$user_id."/".$transaction_id);
        $data=json_decode($response);

        return $response;
    }
}