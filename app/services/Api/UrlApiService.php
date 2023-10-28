<?php

namespace App\services\Api;

class UrlApiService{

    public static $url="http://127.0.0.1:8000";

    public static function getUrl(){
        return self::$url;
    }
}
