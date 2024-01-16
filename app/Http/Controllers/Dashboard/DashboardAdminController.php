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
        $statAnnounce=(new StatService())->statAnnounce();
        $statCurrentWeek=(new StatService())->statCurrentWeek();
        $statPreviousWeek=(new StatService())->statPreviousWeek();
        //return $statPreviousWeek;
        return view('backend.index',compact('statUser',"statEscort",'statIncome','statAnnounce','statCurrentWeek','statPreviousWeek'));
    }
}
