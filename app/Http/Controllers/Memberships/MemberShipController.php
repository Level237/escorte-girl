<?php

namespace App\Http\Controllers\Memberships;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberShipController extends Controller
{
    public function display(){
        return view('membership.index');
    }
}
