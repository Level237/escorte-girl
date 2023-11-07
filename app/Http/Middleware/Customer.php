<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\Api\CurrentUserService;
use Symfony\Component\HttpFoundation\Response;

class Customer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $currentUser=(new CurrentUserService())->currentUser();
        $role=$currentUser['role_id'] ?? null;
        if($currentUser!==null && $role!==3){

               return back();

        }else if($currentUser==null){
            return to_route("login");
        }else if($role==3){
            return $next($request);
        }

    }
}
