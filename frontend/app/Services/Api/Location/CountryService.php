<?php

namespace App\Services\Api\Location;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class CountryService{

     public function getCountries(){
        
        $url=(new UrlApiService())->getUrl();
         //Retrieving all countries
            $countries = null;
            
            try{

                $response = Http::acceptJson()->get(UrlApiService::endpoint('v1/countries'));
                
                $countries = json_decode((string) $response->getBody(), true);
                if (isset($countries['data']) && is_array($countries['data'])) {
                    $countries['data'] = array_map(function ($country) {
                        if (! isset($country['country_name']) && isset($country['name'])) {
                            $country['country_name'] = $country['name'];
                        }

                        return $country;
                    }, $countries['data']);
                }

                //dd($towns);
                if($countries['data'] === null){
                    return null;
                }
                else{
                    return $countries['data'];
                }

            }catch(\Exception $e){

                return null;
            }

    }
}
