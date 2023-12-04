<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\User\ReviewService;
use Illuminate\Http\Request;

class ReviewUserController extends Controller
{
    public function review($escortId,Request $request){
        $reviewResponse=(new ReviewService())->review($escortId,$request);
        return back();
    }
}
