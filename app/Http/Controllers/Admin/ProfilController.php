<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Api\Location\TownService;

class ProfilController extends Controller
{
    public function profile(){
        $towns = (new TownService())->getTowns();
        return view('backend.profile.update',compact('towns'));
    }
}
