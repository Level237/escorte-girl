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
            $response = Http::accept('application/json')->post($url."/api/login", [
                'phone_number' => $request->phone_number,
                'password' => $request->password,
            ]);
            return $response;

        }catch(\Exception $e){
            dd($e->getMessage());
        }
    }
}
