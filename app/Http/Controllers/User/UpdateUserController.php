<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\User\UpdateUserService;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class UpdateUserController extends Controller
{
    public function update(UpdateUserRequest $request){
        
        $request->validated();
        $user['username'] = $request->username;
        $user['town'] = $request->town;
        $user['phone'] = $request->phone;
        $user = (new UpdateUserService)->update($user);
        //dd(json_decode($user));
        if(Session::has('currentUser')){
            Session::forget('currentUser');
        }
        Session::put('currentUser', json_decode($user));
        Session::save();
       return back();
    }
}
