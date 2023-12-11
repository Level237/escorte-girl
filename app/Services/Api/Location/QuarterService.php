<?php

namespace App\Services\Api\Location;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class QuarterService{

     public function list($townId){

         $url=(new UrlApiService())->getUrl();
         //Retrieving all quarters for this town
            $quarters = null;
            
            try{

                $response = Http::asForm()->get($url."/api/list/quarterByTown/".$townId);
                
                $quarters = json_decode((string) $response->getBody(), true);

                //dd($quarters);
                if($quarters['data'] === null){
                    return null;
                }
                else{
                    return $quarters['data'];
                }

            }catch(\Exception $e){

                return null;
            }
    }
}
