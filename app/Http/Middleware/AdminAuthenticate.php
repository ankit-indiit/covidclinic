<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use RealRashid\SweetAlert\Facades\Alert;
use Closure;
use Auth;

class AdminAuthenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    // protected function redirectTo($request)
    // {
    //     if (! $request->expectsJson()) {
    //         return route('admin-login-form');
    //     }
    // }

    public function handle($request, Closure $next)
    {
        if(Auth::check())
        {
            if(Auth::user()->role == 'admin')
            {
                return $next($request);
            }
            // Alert::error('Error', 'Address not found!');
            return redirect()->route('home');
        }
        else
        {
            Alert::error('Error', 'Please Login First!');
            return redirect()->route('admin-login-form');
        }
    }
}
