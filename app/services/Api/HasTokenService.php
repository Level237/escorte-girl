<?php
namespace App\services\Api;


use Illuminate\Support\Facades\Session;

class HasTokenService{

public function getToken(){
    $token=Session::get('tokenUser');

    return $token;
}
}