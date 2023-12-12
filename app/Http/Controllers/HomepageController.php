<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\Ads\AdsController;
use App\Http\Controllers\Escort\EscortController;
use App\Http\Controllers\Listing\LocationController;
use App\Http\Controllers\Listing\AnnouncementController;
use App\Services\Api\Ads\AdsService;
class HomepageController extends Controller
{



    public function homepage(Request $request){

      
        $locationController = new LocationController();
        $locations = $locationController->index();
 
        $data = (new AdsService())->index();
        $homeAds=(new AdsService())->homeAds();
        $announcements = $data[0];
        $emptyTowns = $data[1];
        $ads = (new AdsController())->getAds();
       

        //return $homeAds;
        return view('Homepage', compact('locations', 'announcements','emptyTowns','homeAds', 'ads'));

    }
}
