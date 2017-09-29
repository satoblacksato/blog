<?php

namespace App\Http\Middleware;

use Closure;

class CategoryActions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$parameters)
    {
        $days=explode("_",$parameters);
        if(in_array('LUNES',$days)){
            return $next($request);
        }
        abort(401);
        
    }
}
