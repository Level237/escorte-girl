<?php

namespace App\Http\Controllers\Escort\Profile;

use App\Http\Controllers\Controller;
use App\Services\Api\List\ListQuarterByTownService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StepTwoController extends Controller
{
    public function stepTwo(){

        $dataStepOne=Session::get("EscortStepOne");
        if(empty($dataStepOne)){
            return to_route('step-one');
        }else{
            $listQuarter=(new ListQuarterByTownService())->list($dataStepOne['town_id']);
        return view('escort.profile.step-two',compact('listQuarter'));
        }

    }
}
