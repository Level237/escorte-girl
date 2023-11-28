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
        }else if(Session::has('announcement_id')){
            Session::forget('announcement_id');
        }else if(Session::has('membership_id')){
            Session::forget('membership_id');
        }
        try{
            $token=Session::get('tokenUser');
            //$initPaymentResponse=(new PurchaseMembershipService())->initPayment($request->price,$token);
             //$code=$initPaymentResponse->code ?? null;

                //Session::put('paymentSession',$initPaymentResponse->data);
                //Session::save();
                Session::put('announcement_id',$request->announcement_id);
                Session::save();
                Session::put('price',$request->price);
                Session::save();
                Session::put('membership_id',$request->membership_id);
                Session::save();
                //return Redirect::intended($initPaymentResponse->data->payment_url);
            return to_route('init-payment');
            //return $initPaymentResponse;
        }catch(Exception $e){
            dd($e->getMessage());
        }


    }

    public function openPopup(){
        $price=Session::get('price');
        $announcement=Session::get('announcement_id');
        $membership=Session::get('membership_id');
        return view('membership.test-popup',compact('price','membership','announcement'));
    }
}
