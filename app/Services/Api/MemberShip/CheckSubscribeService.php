<?php

namespace App\Services\Api\MemberShip;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class CheckSubscribeService{

public function check(){
    $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::asForm()->get($url."/api/check-subscribe");
            $checkResponse = json_decode((string) $response->getBody(), true);
            //dd($memberships);
            return $checkResponse;

        }
        catch(\Exception $e){
            return null;
        }
}
}
