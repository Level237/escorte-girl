<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\Api\CurrentUserService;
use Symfony\Component\HttpFoundation\Response;

class User
{
    public function handle(Request $request, Closure $next): Response
    {
        $currentUser = (new CurrentUserService())->currentUser();
        $roleId = (int) ($currentUser->role_id ?? 0);

        if (! in_array($roleId, [1, 2, 3], true)) {
            return to_route('login');
        }

        if (! $request->session()->has('currentUser')) {
            $request->session()->put('currentUser', $currentUser);
        }

        return $next($request);
    }
}
