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
    public function handle($request, Closure $next, $guard = null)
    {
      /*
      * är du inloggad som admin och fösöker nå admins dashboard så kommer dne redirecta dig dit.
      */
      switch ($guard) {
    //for admins
    case 'admin':
      if (Auth::guard($guard)->check()) {
        return redirect()->route('admin.dashboard');
      }
      break;
    default:
    //for users
    /*
    * Annars så kommer den dirigera dig till home.
    */
    if (Auth::guard($guard)->check()) {
             return redirect('/home');
        }
      break;
  }

      return $next($request);
  }
    
}
