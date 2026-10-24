<?php

namespace App\Http\Controllers;

use App\Services\Api\Ads\AdsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomepageController extends Controller
{
    public function homepage(Request $request)
    {
        $shelves = (new AdsService())->homeShelves();

        return view('Homepage', [
            'homeAds' => $shelves['home'],
            'vipAds' => $shelves['vip'],
            'goldAds' => $shelves['gold'],
            'ads' => [],
            'announcements' => [],
            'emptyTowns' => [],
        ]);
    }

    public function checkAge()
    {
        Session::put('checkAge', true);

        return 'Session set successfully';
    }
}
