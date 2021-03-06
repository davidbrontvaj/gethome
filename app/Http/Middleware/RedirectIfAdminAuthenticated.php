<?php

namespace App\Http\Middleware;

use Closure;

//Auth Facade
use Auth;

class RedirectIfAdminAuthenticated
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

      //If request comes from logged in admin, he will
      //be redirected to admin's dashboard
      if (Auth::guard('web_admin')->check()) {
          return redirect('/admin/dashboard');
      }
      return $next($request);
    }
}
