<?php

namespace App\Http\Controllers\Escort\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Escort\Profil\StepOneRequest;
use App\Services\Api\List\ListEthnicService;
use App\Services\Api\List\ListSkinColorService;
use App\Services\Api\List\ListTownService;
use Illuminate\Http\Request;

class StepOneController extends Controller
{
    public function stepOne(){

        $listEthnic=(new ListEthnicService())->list();
        $listSkinColor=(new ListSkinColorService())->list();
        $listTown=(new ListTownService())->list();
        //return $listEthnic;
        //return $request;
        return view('escort.profile.step-one',compact('listEthnic','listSkinColor','listTown'));
    }

    public function stepOneStore(StepOneRequest $request){

        return $request;
    }
}
