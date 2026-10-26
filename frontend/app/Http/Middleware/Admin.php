<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    public function handle(Request $request, Closure $next): Response
    {
        $currentUser = $request->session()->get('currentUser');

        if (empty($currentUser)) {
            return to_route('login');
        }

        if ((int) ($currentUser->role_id ?? 0) !== 1) {
            return to_route('homepage');
        }

        return $next($request);
    }
}
