<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ProtectedCustomer
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
        if(!session()->has('LoggedUser') && ($request->path() != 'customer.buynow' && $request->path() != 'customer.payment')){
            return redirect('login')->with('fail','You must be logged in');
        }
        if(session()->has('LoggedUser') && ($request->path() == 'customer.buynow' || $request->path() == 'customer.payment')){
            return back();
        }
        return $next($request)->header('Cache-Control','no-cache , no-store ,max-age=0,must-revalidate')
                              ->header('Pragma','no-cache')
                              ->header('Expires','Sat 01 Jan 1990 00:00:00 GMT');
    }
}
