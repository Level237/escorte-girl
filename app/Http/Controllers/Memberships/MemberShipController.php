<?php

namespace App\Http\Controllers\Memberships;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Services\Api\MemberShip\MemberShipService;

class MemberShipController extends Controller
{
    public function display($id){
        $memberships = (new MemberShipService)->MemberShip();
        if(Session::has('currentMembership')){
            Session::forget('currentMembership');
        }
        Session::put('currentMembership',$id);
        Session::save();
        return view('membership.index', compact('memberships'));
    }

     public function index(){

        $memberships = (new MemberShipService)->MemberShip();
        //dd($memberships);
    }
}
