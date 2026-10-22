<?php

namespace App\Services\Api;

use Exception;
use App\Services\Api\LegacyShape;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class SearchService{

     public function search($term){

        //Get API URL
        $url=(new UrlApiService())->getUrl();
        $result = [];

        try{
            $rows = Http::acceptJson()->get(UrlApiService::endpoint('v1/search'), ['q' => $term])->json('data') ?? [];
            return LegacyShape::searchHits($rows);

        }
        catch(\Exception $e){
            return null;
        }
    }
}
