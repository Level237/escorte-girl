<?php

namespace App\Services\Api\Admin;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class AllUserService{

    public function list(){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');

        $response=Http::withToken($token)->get($url."/api/v1/users");

        $data=json_decode($response);

        return $data;
    }

    public function roles(){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');

        $response=Http::withToken($token)->get($url."/api/v1/roles");

        $data=json_decode($response);

        return $data;
    }

    public function getUserByRole($id){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');

        $response=Http::withToken($token)->get($url."/api/v1/users/role/".$id);

        $data=json_decode($response);

        return $data;
    }
}

