<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function privacy(){
        return view('pages.privacy');
    }

    public function cgu(){
        return view('pages.cgu');
    }

    public function help(){
        return view('pages.help');
    }
}
