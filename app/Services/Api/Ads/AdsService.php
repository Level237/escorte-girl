<?php

namespace App\Services\Api\Ads;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AdsService{

     public function getAdsById($id){
        
        $url=(new UrlApiService())->getUrl();

         
           //Retrieving an add by its id
            
            try{

                $response = Http::asForm()->get($url."/api/announces/".$id);
                $ad = json_decode((string) $response->getBody(), true);
            
                if($ad['data'] === null){
                    return null;
                }
                else{
                    return $ad['data'];
                }

            }catch(\Exception $e){
                return null;
            }
    }

    
}
