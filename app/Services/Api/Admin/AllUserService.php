<?php

namespace App\Services\Api\Admin;

use Exception;
use App\Services\Api\UrlApiService;
use App\Services\AttachServices;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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
}

