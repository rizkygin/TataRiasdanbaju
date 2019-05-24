<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class lapak
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
      $role = 0;
      if($request -> role == 1){
        return redirect('lapak.profile');
      }
        return $next($request);
    }
}
