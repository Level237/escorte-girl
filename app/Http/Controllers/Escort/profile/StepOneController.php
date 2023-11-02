<?php

namespace App\Http\Controllers\Escort\profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StepOneController extends Controller
{
    public function stepOne(){
        return view('escort.profile.step-one');
    }
}
