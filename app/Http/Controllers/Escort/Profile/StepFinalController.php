<?php

namespace App\Http\Controllers\Escort\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StepFinalController extends Controller
{
    public function stepFinal(){
        return view('escort.profile.step-final');
    }
}
