<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    public function checkNumber(){

        return view('user.check-number');
    }

    public function Validate(){

    }
}
