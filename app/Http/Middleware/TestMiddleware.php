<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;

class TestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {


       if ($request->input('age')<200) {
    echo 111;
    echo "<br/>";
        // return redirect('/');
    }
        return $next($request);
    }
}
