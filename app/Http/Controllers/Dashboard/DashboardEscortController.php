<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardEscortController extends Controller
{
    public function dashboard(){
        return view('dashboard.escort');
    }
    
}
