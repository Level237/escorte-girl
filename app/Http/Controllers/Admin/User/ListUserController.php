<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Services\Api\Admin\AllUserService;
use Illuminate\Http\Request;

class ListUserController extends Controller
{
    public function listUser(){

        $users=(new AllUserService())->list();

        return view('backend.users.list',compact('users'));
    }
}
