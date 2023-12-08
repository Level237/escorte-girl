<?php

namespace App\Services\Api\Escort;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class GetEscortService{

     public function getEscort(){

        //Get Escort
        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::withToken(Session::get('tokenUser', null))->get($url."/api/v1/getEscort");
            $escort = json_decode((string) $response->getBody(), true);
            return $response;

        }
        catch(\Exception $e){
            return null;
        }
    }
}
