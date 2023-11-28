<?php

namespace App\Http\Controllers\Purchase;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Services\Api\Purchase\PurchaseMembershipService;

class PurchaseController extends Controller
{
    public function purchaseWithCredit(Request $request){
        $purchaseService=(new PurchaseMembershipService())->purchaseWithCredit($request->membership_id,$request->announcement_id);
        if($purchaseService->code===200){
            return to_route('congrats-purchase');
        }
    }

    public function purchaseFinal($membership_id,$announcement_id){

            $verifyPaymentResponse=(new PurchaseMembershipService())->verifyPayment($membership_id,$announcement_id);

            //return $verifyPaymentResponse;

        return view('membership.congrats');
    }

    public function purchaseFail(){

        return view('membership.fail');

    }


}
