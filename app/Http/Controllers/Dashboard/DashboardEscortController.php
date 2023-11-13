<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use  App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\services\Api\CurrentUserService;
use App\Services\Api\Escort\ProfileIsCompletedOrNotService;

class DashboardEscortController extends Controller
{

    public function __construct()
    {
        $user = Session::get('currentUser');
            $profileIsCompletedOrNot=(new ProfileIsCompletedOrNotService())->isCompletedOrNot();
        $completed=$profileIsCompletedOrNot->completed ?? null;

        if($completed==0){
            return to_route('step-one');
        }
    }
    public function index(){

            $user = Session::get('currentUser');
            //dd($user);
            $profileIsCompletedOrNot=(new ProfileIsCompletedOrNotService())->isCompletedOrNot();
        $completed=$profileIsCompletedOrNot->completed ?? null;
            //Ensuring we are having an escort
            if($user->role_id === 2 && $completed==1){
                //Get Escort
                $url=(new UrlApiService())->getUrl();

                try{

                    //dd(Session::get('tokenUser', null));
                    $response = Http::withToken(Session::get('tokenUser', null))->get($url."/api/v1/getEscort");
                    //dd((string) $response->getBody());
                    $escort = (string) $response->getBody();
                    //dd($escort);
                }catch(\Exception $e){
                    return view('error');
                }

                return view('dashboard.escort.index', compact('user', 'escort'));
            }else if($completed==0){
                return to_route('step-one');
            }
            else{
                return to_route("homepage");
            }


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
