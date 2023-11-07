<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\services\Api\CurrentUserService;
use App\Services\Api\Escort\ProfileIsCompletedOrNotService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardEscortController extends Controller
{
    public function index(){

            $user = Session::get('currentUser');
            //Ensuring we are having an escort

            if($user->role_id === 2){
                $profileIsCompletedOrNot=(new ProfileIsCompletedOrNotService())->isCompletedOrNot();
                if($profileIsCompletedOrNot->completed===0){
                    return to_route('step-one');
                }else{
                    return view('dashboard.escort.index', compact('user'));
                }

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
