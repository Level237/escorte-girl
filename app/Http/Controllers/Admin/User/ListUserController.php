<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Services\Api\Admin\AllUserService;
use Illuminate\Http\Request;

class ListUserController extends Controller
{
    public function listUser(Request $request){

        $users=(new AllUserService())->list();
        $roles=(new AllUserService())->roles();

        return $request;
    }

    public function userByRole(Request $request){

    }
}
