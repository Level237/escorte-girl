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
}
