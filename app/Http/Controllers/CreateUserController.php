<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }
    
}
