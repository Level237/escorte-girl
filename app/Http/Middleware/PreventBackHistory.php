<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\services\Api\CurrentUserService;
use App\services\Api\HasTokenService;
use Symfony\Component\HttpFoundation\Response;

class PreventBackHistory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $hasToken=(new HasTokenService())->getToken();

        if(isset($hasToken)){
            return back();
        }else{
            return $next($request);
        }
        
    }
}
