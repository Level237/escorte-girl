<?php

namespace App\Http\Controllers\Purchase;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Services\Api\Purchase\PurchaseMembershipService;
use  App\Services\Api\MemberShip\MemberShipService;
use Illuminate\Support\Facades\Mail;
use App\Mail\SuccessfulMembershipPayment;

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

            //Send mail to admin
            $membership = (new MemberShipService)->getMemberShip($membership_id);

              Mail::to('delanofofe@gmail.com')
                ->send(new SuccessfulMembershipPayment($membership));

                 Mail::to('temerprodesign@yahoo.fr')
                ->send(new SuccessfulMembershipPayment($membership));

        return view('membership.congrats');
    }

    public function purchaseFail(){

        return view('membership.fail');

    }


}
