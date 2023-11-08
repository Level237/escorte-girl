<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Services\Api\UrlApiService;
use App\Http\Controllers\Controller;
use App\Services\Api\CurrentUserService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request){
        $url=(new UrlApiService())->getUrl();
        $u=$url."/api/login";

        try{
            $response = Http::asForm()->post($u, [
                'phone_number' => $request->phone_number,
                'password' => $request->password,
            ]);


            if(isset($response['error'])){
                return back()->with('error',"Numero de telephone ou mot de passe invalide");
            }else{
                if($request->session()->has('tokenUser')){
                    $request->session()->forget('tokenUser');
                }
                if(Session::has('currentUser')){
                    Session::forget('currentUser');
                }
                $access_token = json_decode((string) $response->getBody(), true)['access_token'];
                Session::put('tokenUser', $access_token);
                Session::save();

                $currentUser=(new CurrentUserService())->currentUser();
                Session::put('currentUser', $currentUser);
                Session::save();
                return to_route("db.escort.index");
                //return $access_token;
            }
        }catch(\Exception $e){
            dd($e);
        }
    }
}