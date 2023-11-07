<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\Api\CurrentUserService;
use Symfony\Component\HttpFoundation\Response;

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

        if($currentUser!==null){
            if($currentUser['role_id'] !==2){
                abort(403);
            }


            return $next($request);
        }

    }
}
