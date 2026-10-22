<?php
namespace App\Services;

use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AttachServices{

    public function attach($services,$dataEscort){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');
        $ids = is_array($services) ? $services : [$services];
        $response=Http::withToken($token)->acceptJson()->put(UrlApiService::endpoint('v1/me/escort/services'),[
            "service_ids"=>array_values($ids),
        ]);

        return $response;
    }
}
