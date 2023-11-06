<?php

namespace App\Http\Controllers\Escort\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Escort\Profil\StepThreeRequest;
use App\Services\Api\Escort\AddProfileService;
use Illuminate\Support\Facades\Session;
use App\Services\Api\List\ListServicesApi;

class StepThreeController extends Controller
{
    public function stepThree(){

        $dataStepTwo=Session::get("EscortStepTwo");

        if(!Session::has('EscortStepOne') || empty($dataStepTwo)){

            return to_route('step-one');
        }
        $listServices=(new ListServicesApi())->list();

        return view('escort.profile.step-three',compact('listServices'));
    }

    public function stepThreeStore(StepThreeRequest $request){
        if(Session::has("EscortStepThree")){
            Session::forget("EscortStepThree");
        }

        $data=[

            'description'=>$request->description,
            'services'=>$request->services
        ];


        $stepTwoData=Session::get('EscortStepTwo');

        $stepThree=array_merge($data,$stepTwoData);
        $d=json_encode($stepThree);
        Session::put('EscortStepThree',$stepThree);
        Session::save();
        //$image_path = $request->photo->store('profile', 'public');
        $addProfile=(new AddProfileService())->addProfile($stepThree,$request->file('photo'));
        return $addProfile;
    }
}
