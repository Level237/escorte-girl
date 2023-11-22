<?php

namespace App\Http\Controllers\Purchase;

use App\Http\Controllers\Controller;
use App\Services\Api\Purchase\CurrentPurchaseService;
use Illuminate\Http\Request;

class CurrentUserPurchaseController extends Controller
{
    public function currentPurchase(){

        $currentPurchase=(new CurrentPurchaseService())->currentPurchase();

        return $currentPurchase;
    }
}
