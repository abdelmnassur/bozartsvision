<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Middleware\Admin as Middleware;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //return $next($request);
        
        $user = Auth()->user()->id;

        $admin = Admin::where('user_id', $user)->first('id');

        if (Auth::user() &&  isset($admin)) 
        {
            return $next($request);
        }
        else
        {
            return redirect('/')->with('error','Vous n\'êtes pas un admin');
        }
    }
}
