<?php

namespace App\Http\Controllers\Escort;
use App\Http\Controllers\Controller;
use  App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;

class EscortController extends Controller{

  //List of all Escorts with town and quarter names
   public static $escorts = [];

   public function index(){

     $url=(new UrlApiService())->getUrl();

        try{

            $response = Http::asForm()->get($url."/api/escorts");
            self::$escorts = json_decode((string) $response->getBody(), true);
            //error_log($escorts);
        }catch(\Exception $e){
             self::$escorts = [];
        }

        return  self::$escorts;
   }
}
