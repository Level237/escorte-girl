<?php

namespace App\services\Api;

use App\services\Api\UrlApiService;
use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class CurrentUserService{


    public  function currentUser(){
        $url=(new UrlApiService())->getUrl();

        try{
            if(Session::has('currentUser')){
                Session::forget('currentUser');
            }
            $token=Session::get('tokenUser');
            $response=Http::retry(3,400,throw: false)->withToken($token)->get($url.'/api/v1/currentUser');

            $currentUser=json_decode($response);
            Session::put('currentUser', $currentUser);
            Session::save();
            return $response;
        }catch(Exception $e){
            dd($e->getMessage());
        }

    }
}
