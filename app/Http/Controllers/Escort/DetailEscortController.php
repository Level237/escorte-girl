<?php

namespace App\Http\Controllers\Escort;
use App\Http\Controllers\Controller;
use  App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class DetailEscortController extends Controller{


   public static $escort = null;

   public function show(Request $request){

     $url=(new UrlApiService())->getUrl();

        try{

            $response = Http::asForm()->get($url."/api/escorts/$EscortId");
            self::$escort = json_decode((string) $response->getBody(), true);
            //error_log($escorts);
        }catch(\Exception $e){
             self::$escort = null;
        }

        return  view('escort.detail');
   }


}
