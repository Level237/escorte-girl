<?php

namespace App\Services\Api;

class UrlApiService{

    public static $url="http://127.0.0.1:8001" ?? "http://127.0.0.1:8000";

    public static function getUrl(){
        return self::$url;
    }
}
