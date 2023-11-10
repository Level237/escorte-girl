<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
            return back()->with("error","votre compte n'a pas été sécurisé veuillez contactez l'administrateur");
        }else if($error==404){
            return back()->with("error","Impossible de trouver le compte");
        }else{
            $questions=$questionsResponse;

            return $questions;
        }
    }
}
