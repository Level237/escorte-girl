<?php

namespace App\Http\Controllers\Escort\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class StepFinalController extends Controller
{
    public function stepFinal(){
        $dataStepOne=Session::get("EscortStepOne");
        if(empty($dataStepOne)){
            return to_route('step-one');
        }
        return view('escort.profile.step-final');
    }
}
