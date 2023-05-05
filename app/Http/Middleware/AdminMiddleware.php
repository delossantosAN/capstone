<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {  
        if(Auth::check()){
            if(Auth::user()->role_as == '1'){ //1 as admin. 0 as client
                return $next($request);
            }
            else{
                return redirect('/home')->with('status','Access Denied! You are not the Admin');
            }
        }
        
       else{
        return redirect('/home');
       }
    }
}
