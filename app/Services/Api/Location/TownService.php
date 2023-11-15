<?php

namespace App\Services\Api\Escort;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class TownService{

     public function getTowns(){
        
         //Retrieving all towns
            $towns = null;
            try{

                $response = Http::asForm()->get($url."/api/list/towns");
                $towns = json_decode((string) $response->getBody(), true);

                if($towns['data'] === null){
                    return null;
                }
                else{
                    $towns = $towns['data'];
                }

            }catch(\Exception $e){

                return null;
            }

    }
}
