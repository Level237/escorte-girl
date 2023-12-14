<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\Ads\AdsController;
use App\Http\Controllers\Escort\EscortController;
use App\Http\Controllers\Listing\LocationController;
use App\Http\Controllers\Listing\AnnouncementController;
use App\Services\Api\Ads\AdsService;
use App\Services\Api\MemberShip\CheckSubscribeService;

class HomepageController extends Controller
{



    public function homepage(Request $request){

        $check=(new CheckSubscribeService())->check();
        $locationController = new LocationController();
        $locations = $locationController->index();
        $escorts = (new EscortController())->index();
        //dd($escorts);
        $data = (new AnnouncementController())->index();
        $homeAds=(new AdsService())->homeAds();
        $vipAds=(new AdsService())->vipAds();
        $goldAds=(new AdsService())->goldAds();
        $announcements = $data[0];
        $emptyTowns = $data[1];
        $ads = (new AdsController())->getAds();
        //dd($ads);
        //$currentUser=(new CurrentUserService())->currentUser();
        //if(Session::has('tokenUser')){
           // Session::forget('tokenUser');
        //}

        //return $homeAds;
        return view('Homepage', compact('locations','vipAds', 'announcements','emptyTowns','homeAds', 'escorts', 'ads','goldAds'));

    }
}
