<?php

namespace App\Http\Controllers\Memberships;
use App\Http\Controllers\Controller;
use App\Services\Api\MemberShip\MemberShipService;
use Illuminate\Http\Request;

class MemberShipController extends Controller
{
    public function display(){
        $memberships = (new MemberShipService)->MemberShip();
        return view('membership.index', compact('memberships'));
    }

     public function index(){

        $memberships = (new MemberShipService)->MemberShip();
        //dd($memberships);
    }
}
