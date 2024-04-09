<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\View;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {    //dd(auth()->user()->is_admin);
        if(auth()->user() && auth()->user()->is_admin){
        return $next($request);
        }
        return Redirect::back()->withErrors(['msg' => 'Você não é admin sua tentativa foi reportada e seu endereço de IP anexado']);

    }
}
