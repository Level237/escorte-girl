<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\Api\Admin\StatService;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index(){
        $statUser=(new StatService())->statUser();
        $statEscort=(new StatService())->statEscort();
        $statIncome=(new StatService())->statIncome();
        return $statIncome;
        //return view('backend.index',compact('statUser',"statEscort"));
    }
}
