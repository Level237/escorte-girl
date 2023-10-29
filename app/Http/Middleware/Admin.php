<?php

namespace App\Http\Middleware;

use App\services\Api\CurrentUserService;
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
        $role_id=$currentUser['role_id'];
        if($role_id !=1){
            abort(403);
        }
        return $next($request);
    }
}
