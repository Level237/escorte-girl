<?php

namespace App\Http\Controllers\Listing;
use App\Http\Controllers\Controller;
use  App\services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;

class LocationController extends Controller{

  //List of all escorts by towns and quarters
   public static $locations = [];

   public function index(){

     $url=(new UrlApiService())->getUrl();

        try{

            $response = Http::asForm()->get($url."/api/list/locations");
            self::$locations = json_decode((string) $response->getBody(), true);

        }catch(\Exception $e){
             self::$locations = [];
        }

        return  self::$locations;
   }
}
