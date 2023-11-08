<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\services\Api\CurrentUserService;
use App\Services\Api\Escort\ProfileIsCompletedOrNotService;

class DashboardEscortController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth')->except('index');

        //Multiple exclude
        $this->middleware('escort')->except(['step-one','step-two']);
    }
    public function index(){

            $user = Session::get('currentUser');
            $profileIsCompletedOrNot=(new ProfileIsCompletedOrNotService())->isCompletedOrNot();
        $completed=$profileIsCompletedOrNot->completed ?? null;
            //Ensuring we are having an escort
            if($user->role_id === 2 && $completed==1){
                return view('dashboard.escort.index', compact('user'));
            }else if($completed==0){
                return to_route('step-one');
            }
            else{
                return to_route("homepage");
            }


    }

    public function profil (){
        $user = Session::get('currentUser');
        return view('dashboard.escort.profil', compact('user'));
    }

    public function ads (){
        $user = Session::get('currentUser');
        return view('dashboard.escort.ads', compact('user'));
    }

    public function messages (){
        $user = Session::get('currentUser');
        return view('dashboard.escort.messages', compact('user'));
    }

    public function finance (){
        $user = Session::get('currentUser');
        return view('dashboard.escort.finance', compact('user'));
    }

    public function advertise (){
        $user = Session::get('currentUser');
        return view('dashboard.escort.advertise', compact('user'));
    }

    public function settings (){
        $user = Session::get('currentUser');
        return view('dashboard.escort.settings', compact('user'));
    }

}
