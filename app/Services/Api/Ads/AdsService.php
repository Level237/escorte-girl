<?php

namespace App\Services\Api\Ads;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AdsService{


    public function index(){

        $url=(new UrlApiService())->getUrl();
        $numberAdsByTown = null;
        try{

                $response = Http::asForm()->get($url."/api/announcementsTown");
                //dd(json_decode((string) $response->getBody(), true));
                $numberAdsByTown = json_decode((string) $response->getBody(), true);
                return  $numberAdsByTown;

        }catch(\Exception $e){
                return $numberAdsByTown;
        }
    }

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

    public function homeAds(){
        try{
            $url=(new UrlApiService())->getUrl();
            $response = Http::asForm()->get($url."/api/home/annonces");
            $ad = json_decode((string) $response->getBody(), true);
            if($ad['data'] === null){
                return null;
            }
            else{
                return $ad['data'];
            }
        }catch(Exception $e){
            return null;
        }
    }
    public function vipAds(){
        try{
            $url=(new UrlApiService())->getUrl();
            $response = Http::asForm()->get($url."/api/vip/annonces");
            $ad = json_decode((string) $response->getBody(), true);
            if($ad['data'] === null){
                return null;
            }
            else{
                return $ad['data'];
            }
        }catch(Exception $e){
            return null;
        }
    }
    public function goldAds(){
        try{
            $url=(new UrlApiService())->getUrl();
            $response = Http::asForm()->get($url."/api/gold/annonces");
            $ad = json_decode((string) $response->getBody(), true);
            if($ad['data'] === null){
                return null;
            }
            else{
                return $ad['data'];
            }
        }catch(Exception $e){
            return null;
        }
    }
}
