<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @param  string|null  $guard
   * @return mixed
   */
  public function handle($request, Closure $next, ...$guards)
  {
    if (Auth::guard('super_admin')->check()) {
      return redirect()->route('superadmin.dashboard');
    }
    return $next($request);
  }
}
