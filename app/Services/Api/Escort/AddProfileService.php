<?php

namespace App\Services\Api\Escort;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;

class AddProfileService{

    public function addProfile($data){
        $url=(new UrlApiService())->getUrl();

        try{
            $response=Http::asForm()->post($url.'/api/addProfile', $data);
            return $response;
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }
}
