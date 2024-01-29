<?php

namespace App\Http\Controllers\Admin\Ads;
use App\Http\Controllers\Controller;
use App\Services\Api\Ads\AdsService;
use Illuminate\Http\Request;

class AdController extends Controller
{
    

     public function index(){

        $ads = (new AdsService)->getAds();
        dd($ads);
        return view('backend.ads.list', compact('quarters'));
    }
}
