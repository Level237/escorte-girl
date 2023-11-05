<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\services\Api\CurrentUserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardEscortController extends Controller
{
    public function dashboard(){

        if (Session::has('currentUser')){

            $user = Session::get('currentUser');
            //Ensuring we are having an escort
            if($user->role_id === 2){
                return view('dashboard.escort', compact('user'));
            }
            else{
                return to_route("homepage");
            }

        }
        else{
                return to_route("login");
            }
        
        
    }
    
}
