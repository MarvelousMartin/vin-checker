<?php

namespace App\Http\Middleware;

use Closure;

class TokenAuth
{
    public function handle($request, Closure $next)
    {
        $token = $request->get('token');
        if ($token == env('TOKEN')) {
            return $next($request);
        } else {
            return abort(401);
        }
    }
}
