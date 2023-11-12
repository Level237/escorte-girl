<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\Ads\AdsController;
use App\Http\Controllers\Escort\EscortController;
use App\Http\Controllers\Listing\LocationController;
use App\Http\Controllers\Listing\AnnouncementController;

class HomepageController extends Controller
{



    public function homepage(Request $request){


        $locationController = new LocationController();
        $locations = $locationController->index();
        $escorts = (new EscortController())->index();
        $announcements = (new AnnouncementController())->index();
        $ads = (new AdsController())->getAds();
        //dd($ads);
        //$currentUser=(new CurrentUserService())->currentUser();
        //if(Session::has('tokenUser')){
           // Session::forget('tokenUser');
        //}
        return view('Homepage', compact('locations', 'announcements', 'escorts', 'ads'));

    }
}
