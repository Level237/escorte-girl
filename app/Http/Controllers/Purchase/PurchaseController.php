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

    public function purchaseFinal(){
        return view('membership.congrats');
    }
}
