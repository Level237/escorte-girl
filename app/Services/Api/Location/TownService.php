<?php

namespace App\Services\Api\Location;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class TownService{

     public function getTowns(){
        
        $url=(new UrlApiService())->getUrl();
         //Retrieving all towns
            $towns = null;
            
            try{

                $response = Http::asForm()->get($url."/api/towns");
                
                $towns = json_decode((string) $response->getBody(), true);

                //dd($towns);
                if($towns['data'] === null){
                    return null;
                }
                else{
                    return $towns['data'];
                }

            }catch(\Exception $e){

                return null;
            }

    }
}
