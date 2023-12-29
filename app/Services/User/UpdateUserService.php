<?php

namespace App\Services\User;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\Services\Api\Escort\ProfileIsCompletedOrNotService;

class UpdateUserService{

    public function update($user){

         $url=(new UrlApiService())->getUrl();
         $token = Session::get('tokenUser');
        try{
            $response = Http::withToken($token)->post($url."/api/v1/updateUser", [
                'username' => $user['username'],
                'town' => $user['town'],
                'phone' => $user['phone'],
            ]);

            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }
}
