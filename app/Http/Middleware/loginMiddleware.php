<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class loginMiddleware
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
      $ip = $request->path();
      $user = Session::get('user');
      //if(($ip =='employer' || $ip =='jobs' ) && (Session::get('user')))
      if($ip == 'dashboard' && (Session::get('user')))
      return redirect ('/');
        else
        return $next($request);
        
    }
}
