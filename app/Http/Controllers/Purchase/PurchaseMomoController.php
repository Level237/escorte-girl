<?php

namespace App\Http\Controllers\Purchase;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Services\Api\Purchase\PurchaseMembershipService;

class PurchaseMomoController extends Controller
{
    public function initPayment(Request $request){
        if(Session::has('paymentSession')){
            Session::forget('paymentSession');
        }
        try{

            $initPaymentResponse=(new PurchaseMembershipService())->initPayment($request->price);
             $code=$initPaymentResponse->code ?? null;
            if($code==201){
                Session::put('paymentSession',$initPaymentResponse->data);
                Session::save();
                return Redirect::intended($initPaymentResponse->data->payment_url);
            }
        }catch(Exception $e){
            dd($e->getMessage());
        }


    }
}
