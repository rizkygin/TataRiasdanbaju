<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class roleUserOnly
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
      if(Auth::user()->role_id != 0 ){
        return redirect()->to('home');
      }
        return $next($request);
    }
}
