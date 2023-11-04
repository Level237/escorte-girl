<?php

namespace App\Http\Controllers\auth;

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
                $access_token = json_decode((string) $response->getBody(), true)['access_token'];
                Session::put('tokenUser', $access_token);
                Session::save();

                $currentUser=(new CurrentUserService())->currentUser();
                return to_route("homepage");
                //return $access_token;
            }
        }catch(\Exception $e){
            dd($e);
        }
    }
}
