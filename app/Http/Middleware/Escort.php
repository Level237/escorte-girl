<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\Api\CurrentUserService;
use Symfony\Component\HttpFoundation\Response;
use App\Services\Api\Escort\ProfileIsCompletedOrNotService;

class Escort
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $currentUser=(new CurrentUserService())->currentUser();
        $profileIsCompletedOrNot=(new ProfileIsCompletedOrNotService())->isCompletedOrNot();
        $completed=$profileIsCompletedOrNot->completed ?? null;
        $role=$currentUser->role_id ?? null;
        if($role!==2){

               return back();

        }
        else if(empty($currentUser)){
            //dd($currentUser);
            return to_route("login");
        }
        return $next($request);
    }
}
