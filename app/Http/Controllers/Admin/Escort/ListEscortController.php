<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
App\Services\Api\Escort\EscortService;
use Illuminate\Http\Request;

class ListEscortController extends Controller
{
    public function listEscort(){

        $escorts = (new EscortService())->list();

        return view('backend.escorts.list',compact('escorts'));
    }

    public function userByRole(Request $request){
        $users=(new AllUserService())->getUserByRole($request->role_id);
        $roles=(new AllUserService())->roles();

        return view('backend.users.list',compact('users',"roles"));

    }

    public function listUserBan(){
        $users=(new AllUserService())->listUserBan();
        $roles=(new AllUserService())->roles();

        return view('backend.users.users-suspend',compact('users',"roles"));
    }
}
