<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\services\Api\CurrentUserService;
use App\Services\Api\Escort\ProfileIsCompletedOrNotService;
use App\Services\User\UserTypeService;

class DashboardEscortController extends Controller
{

    public function index(){

            return view('dashboard.escort.index');
    }

    public function profil (){
        $user = Session::get('currentUser');
        $profileIsCompletedOrNot=(new ProfileIsCompletedOrNotService())->isCompletedOrNot();
    $completed=$profileIsCompletedOrNot->completed ?? null;

    if($completed==0){
        return to_route('step-one');
    }else{
        return view('dashboard.escort.profil', compact('user'));
    }

    }

    public function ads (){
        $user = Session::get('currentUser');
        $profileIsCompletedOrNot=(new ProfileIsCompletedOrNotService())->isCompletedOrNot();
    $completed=$profileIsCompletedOrNot->completed ?? null;

    if($completed==0){
        return to_route('step-one');
    }else{
        return view('dashboard.escort.ads', compact('user'));
    }

    }

    public function messages (){
        $user = Session::get('currentUser');
        $profileIsCompletedOrNot=(new ProfileIsCompletedOrNotService())->isCompletedOrNot();
    $completed=$profileIsCompletedOrNot->completed ?? null;

    if($completed==0){
        return to_route('step-one');
    }else{
        return view('dashboard.escort.messages', compact('user'));
    }

    }

    public function finance (){
        $user = Session::get('currentUser');
        $profileIsCompletedOrNot=(new ProfileIsCompletedOrNotService())->isCompletedOrNot();
    $completed=$profileIsCompletedOrNot->completed ?? null;

    if($completed==0){
        return to_route('step-one');
    }else{
        return view('dashboard.escort.finance', compact('user'));
    }

    }

    public function advertise (){
        $user = Session::get('currentUser');
        $profileIsCompletedOrNot=(new ProfileIsCompletedOrNotService())->isCompletedOrNot();
    $completed=$profileIsCompletedOrNot->completed ?? null;

    if($completed==0){
        return to_route('step-one');
    }else{
        return view('dashboard.escort.advertise', compact('user'));
    }

    }

    public function settings (){
        $user = Session::get('currentUser');
        $profileIsCompletedOrNot=(new ProfileIsCompletedOrNotService())->isCompletedOrNot();
    $completed=$profileIsCompletedOrNot->completed ?? null;

    if($completed==0){
        return to_route('step-one');
    }else{
        return view('dashboard.escort.settings', compact('user'));
    }

    }

}
