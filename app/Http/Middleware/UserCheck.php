<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $params): Response
    {
        $user = 'admin';


        if ($user == $params) {
            return $next($request);
        } else {
            $route = [
                'user' => '/user',
                'admin' => '/admin'
            ];
            return redirect(url($route[$user]));
        }
    }
}
