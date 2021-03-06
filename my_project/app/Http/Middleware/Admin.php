<?php

namespace App\Http\Middleware;

use Closure;


class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if( \Auth::guest()){
           //ou Auth::guest() 
            return true;
        }
        if(! \Auth::user()->isAdmin){
            
            return false;
        }
        return $next($request);
    }
}
