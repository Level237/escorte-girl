<?php

namespace App\Services\Api\MemberShip;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class MemberShipService{

     public function MemberShip(){
        
        //Get all memberships
        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::asForm()->get($url."/api/memberships");
            $memberships = json_decode((string) $response->getBody(), true);
            //dd($memberships);
            return $memberships['data'];

        }
        catch(\Exception $e){
            return null;
        }
    }
}
