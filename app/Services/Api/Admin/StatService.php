<?php

namespace App\Services\Api\Admin;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class StatService{

    public function statUser(){
        $url=(new UrlApiService())->getUrl();
        $response=Http::get($url."/api/stats/users");
        $data=json_decode($response);

        return $data;
    }


    public function statEscort(){
        $url=(new UrlApiService())->getUrl();
        $response=Http::get($url."/api/stats/escorts");
        $data=json_decode($response);

        return $data;
    }

}
