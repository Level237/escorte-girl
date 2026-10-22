<?php

namespace App\Services\Api\List;

use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;

class ListQuarterByTownService{

    public function list($id){
        $url=(new UrlApiService())->getUrl();
        $response=Http::acceptJson()->get(UrlApiService::endpoint('v1/towns/'.$id.'/quarters'));
        $data=json_decode($response);
        return $data;
    }
}
