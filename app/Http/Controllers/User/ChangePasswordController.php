<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Services\Api\VerifySecureUserService;


class ChangePasswordController extends Controller
{
    public function checkNumber(){

        return view('user.check-number');
    }

    public function verify(Request $request){

        $verifyResponse=(new VerifySecureUserService())->verify($request->phone_number);
        $questionsResponse=$verifyResponse->questions ?? null;
        $error=$verifyResponse->error ?? null;
        if($error==500){
            return redirect()->back()->with("message","votre compte n'a pas été sécurisé veuillez contactez l'administrateur");
        }else if($error==404){
            return redirect()->back()->with("message","Impossible de trouver le compte");
        }else{
            if(Session::has('questionsUser')){
                Session::forget('questionsUser');
            }
            $questions=$questionsResponse;
            Session::put("questionsUser",$questions);
            Session::save();
            return to_route('answerView');
        }

    }

    public function answerView(){

        $questions=Session::get('questionsUser');
        return view("user.answer-question",compact('questions'));
    }
}
