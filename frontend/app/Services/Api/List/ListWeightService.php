<?php

namespace App\Services\Api\List;

use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;

class ListWeightService{

    public function list(){
        return \App\Services\Api\LegacyShape::namedLookup('v1/lookups/weights', 'weight_name');
    }
}
