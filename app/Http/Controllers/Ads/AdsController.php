<?php

namespace App\Http\Controllers\Ads;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function create(){

        //Retrieving all towns

        //Retrieving ads category
        return view('ads.create');
    }
}
