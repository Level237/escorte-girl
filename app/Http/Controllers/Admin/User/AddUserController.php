<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddUserController extends Controller
{
    public function addView(){

        return view('backend.users.create');
    }
}
