<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class loginAuth
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
        if(Auth::guard('admin')->check())
        {
                $response=$next($request);
                $response->headers->set('Cache-Control','nocache,no-store,must-revalidate');
                return redirect('dashboard');
        }
       
        return $next($request);
   
    }
}
