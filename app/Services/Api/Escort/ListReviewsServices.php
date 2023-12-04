<?php

namespace App\Services\Api\Escort;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ListReviewsServices{


    public function listReviews($escortId){

        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::asForm()->get($url."/api/list/reviews/".$escortId);
            $reviews = json_decode((string) $response->getBody(), true);
            $reviewsData = $reviews['data'];
            return $reviewsData;
        }catch(Exception $e){
            return null;
        }

    }
}
