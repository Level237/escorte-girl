<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Api\Admin\AllUserService;

class AddUserController extends Controller
{
    public function addView(){
        $roles=(new AllUserService())->roles();
        return view('backend.users.create',compact('roles'));
    }
}
