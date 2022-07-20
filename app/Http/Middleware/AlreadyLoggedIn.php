<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AlreadyLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Session()->has('loginId') && (url('login')==$request->url() || 
        url('register')==$request->url() ||
        url('contact')==$request->url() ||
        url('services')==$request->url() ||
        url('about')==$request->url() ||
        url('/home')==$request->url())){
            return back();
        }
        return $next($request);
    }
}
