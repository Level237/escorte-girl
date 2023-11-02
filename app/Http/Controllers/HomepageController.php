<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Listing\LocationController;
use App\Http\Controllers\Listing\AnnouncementController;
use App\Http\Controllers\Escort\EscortController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomepageController extends Controller
{



    public function homepage(Request $request){

        $locationController = new LocationController();
        $locations = $locationController->index();
        $escorts = (new EscortController())->index();
        $announcements = (new AnnouncementController())->index();

        return view('Homepage', compact('locations', 'announcements', 'escorts'));

    }
}
