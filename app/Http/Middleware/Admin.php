<?php

namespace App\Http\Middleware;

use App\Services\Api\CurrentUserService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $currentUser=(new CurrentUserService())->currentUser();
        $role=$currentUser->role_id ?? null;
        if($currentUser!==null && $role!==1){

               return to_route('login');

        }else if($role==1){
            return $next($request);
        }

    }
}
