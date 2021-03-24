<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;

class UserAuth
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
        if($request->path()=="login" && $request->session()->has('user'))
        {
            return redirect('/');
        }
        if($request->path()=="login" && $request->session()->has('admin'))
        {
            return redirect('/');
        }
      /*  if(!($request->session()->has('admin')) || !($request->session()->has('user')))
        {
            return redirect('/');
        }*/

       /* if (!$user->hasAdminAccess()) {
            return redirect('user/dashboard');
        }*/
        
        
        return $next($request);
    }}
           

