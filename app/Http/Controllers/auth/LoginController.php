<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\services\Api\UrlApiService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request){
        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::asForm()->post($url."/api/login/", [
                'phone_number' => $request->phone_number,
                'password' => $request->password,
            ]);

            if(isset($response['error'])){
                return back()->with('error',"Numero de telephone ou mot de passe invalide");
            }else{
                $access_token = json_decode((string) $response->getBody(), true)['access_token'];
                Session::put('tokenUser', $access_token);
                Session::save();

                //return $access_token;
            }
        }catch(\Exception $e){
            dd($e);
        }
    }
}
