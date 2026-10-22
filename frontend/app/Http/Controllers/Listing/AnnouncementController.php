<?php

namespace App\Http\Controllers\Listing;
use App\Http\Controllers\Controller;
use  App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;

class AnnouncementController extends Controller{

  //List of all annoucement by towns
   public static $announcements = [];

   public function index(){

     $url=(new UrlApiService())->getUrl();

        try{

            self::$announcements = (new \App\Services\Api\Ads\AdsService())->index();
            //error_log($announcements);
        }catch(\Exception $e){
             self::$announcements = [];
        }

        return  self::$announcements;
   }

   public function filter(){
    $url=(new UrlApiService())->getUrl();
    try{
        self::$announcements = (new \App\Services\Api\Ads\AdsService())->index();
    }catch(\Exception $e){

    }
   }

}
