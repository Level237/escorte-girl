<?php

namespace App\Http\Controllers\Purchase;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Services\Api\Purchase\PurchaseMembershipService;
use  App\Services\Api\MemberShip\MemberShipService;
use Illuminate\Support\Facades\Mail;
use App\Mail\SuccessfulMembershipPayment;
use App\Services\Api\Purchase\PurchaseCreditService;

class PurchaseController extends Controller
{
    public function purchaseWithCredit(Request $request){
        $purchaseService=(new PurchaseMembershipService())->purchaseWithCredit($request->membership_id,$request->announcement_id);
        if($purchaseService->code===200){

            return view('membership.congrats');


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

    public function purchaseCredit(){
        return view('purchase.purchase-credit');
    }

    public function purchaseInitCredit(Request $request){
        $price=$request->price;

        return view('purchase.purchase-credit-with-momo',compact('price'));
    }

    public function purchaseStoreCredit($price){
        $purchaseResponse=(new PurchaseCreditService())->purchaseCredit($price);

        return view('purchase.congrats-credit');
    }

    public function purchaseSuccess(){

        return view('purchase.congrats-credit');
    }



    public function purchaseUserMomo(){
        $verifyPaymentResponse=(new PurchaseMembershipService())->verifyUserPayment();
        $membership = (new MemberShipService)->getMemberShip(4);

              Mail::to('delanofofe@gmail.com')
                ->send(new SuccessfulMembershipPayment($membership));

                 Mail::to('temerprodesign@yahoo.fr')
                ->send(new SuccessfulMembershipPayment($membership));
        return view('membership.congrats-premium');
    }

    public function purchaseUserCredit(){
        $verifyPaymentResponse=(new PurchaseMembershipService())->verifyUserPaymentWithCredit();
        $membership = (new MemberShipService)->getMemberShip(4);


        return view('membership.congrats-premium');
    }


}
