<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomepageController extends Controller
{
    public function homepage(Request $request){

        $token=Session::get('tokenUser');

        return view('Homepage');
    }
}
