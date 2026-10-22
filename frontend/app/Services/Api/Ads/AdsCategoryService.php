<?php

namespace App\Services\Api\Ads;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AdsCategoryService{

     public function getCategories(){
        
        $url=(new UrlApiService())->getUrl();

          //Retrieving all Ads Categories
            
            try{

                $rows = Http::acceptJson()->get(UrlApiService::endpoint('v1/lookups/categories'))->json('data') ?? [];

                return array_map(function ($row) {
                    return [
                        'id' => $row['id'] ?? null,
                        'title' => $row['name'] ?? ($row['title'] ?? ''),
                        'name' => $row['name'] ?? ($row['title'] ?? ''),
                    ];
                }, $rows);

            }catch(\Exception $e){
                return null;
            }
    }
}
