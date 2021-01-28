<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, int $role)
    {
        $user_role = auth()->user()->role;
        
        if ($role != $user_role) {
            abort(404);
        }else{
        return $next($request);
        }
    }
}
