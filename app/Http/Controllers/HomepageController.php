<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Listing\LocationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomepageController extends Controller
{

  

    public function homepage(Request $request){
     
        $locationController = new LocationController();
        $locations = $locationController->index();
       
        return view('Homepage', compact('locations'));
    }
}
