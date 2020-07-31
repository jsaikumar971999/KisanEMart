<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Closure;

class FormerMiddleware
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
        if(Auth::user()->usertype=='former')
        {
             return $next($request);

        }
        else if( Auth::user()->usertype=='trader')
        {
              return $next($request);
          
        }
         else if( Auth::user()->usertype=='admin')
        {
              return $next($request);
          
        }
       
        else
        {
              return redirect('/welcome');
        }
        
    }
}
