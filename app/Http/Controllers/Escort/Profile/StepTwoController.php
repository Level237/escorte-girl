<?php

namespace App\Http\Controllers\Escort\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StepTwoController extends Controller
{
    public function stepTwo(){
        return view('escort.profile.step-two');
    }
}
