<?php

namespace App\Http\Controllers\Admin\Membership;
use App\Http\Controllers\Controller;
use App\Services\Api\MemberShip\MemberShipService;
use Illuminate\Http\Request;

class CreateMemberShipController extends Controller
{
   

     public function create(){

        return view('backend.memberships.create');
    }
}
