<?php

namespace App\Http\Controllers\Escort\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StepThreeController extends Controller
{
    public function stepThree(){
        return view('escort.profile.step-three');
    }
}
