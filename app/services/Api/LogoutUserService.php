<?php

namespace App\services\Api;

use Exception;
use App\services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use App\services\Api\HasTokenService;

class LogoutUserService{

    public function logout(){
        $hasToken=(new HasTokenService())->getToken();
        $url=(new UrlApiService())->getUrl();
        try{
            $response=Http::withToken($hasToken)->post($url.'/api/v1/logout');
            return $response;
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }
}
