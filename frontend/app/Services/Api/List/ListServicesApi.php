<?php

namespace App\Services\Api\List;

use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;

class ListServicesApi{

    public function list(){
        return \App\Services\Api\LegacyShape::namedLookup('v1/lookups/services', 'service_name');
    }
}
