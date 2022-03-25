<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;

class DetailCheck
{
    
    public function handle(Request $request, Closure $next)
    {
        
        if(!Session()->has('loginId')){
            return redirect('login')->with('fail','login check');
        }
        return $next($request);

    }
}
