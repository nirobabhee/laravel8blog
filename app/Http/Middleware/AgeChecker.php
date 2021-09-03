<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AgeChecker
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
        // if($request->age<18 ){}

        if($request->age && $request->age<18 ){ //global, group-middleware  use the ageChecker conditions...
            return redirect('no');
        }
        return $next($request);
    }
}
