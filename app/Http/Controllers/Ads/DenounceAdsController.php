<?php

namespace App\Http\Controllers\Ads;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DenounceAdsController extends Controller
{
    public function create($adsID){
        return view('ads.denounce');
    }
}
