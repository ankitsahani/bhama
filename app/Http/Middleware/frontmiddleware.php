<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class frontmiddleware
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
        
        if(\Auth::check())
        {
            $user=\Auth::user();
            if($user->admin==1){
                $response = $next($request);
                $response->headers->set('Cache-Control','nocache, no-store, max-age=0, must-revalidate');
                $response->headers->set('Pragma','no-cache');
                $response->headers->set('Expires','Sun, 02 Jan 1990 00:00:00 GMT');
                return $response;
            }
           
        }
        else{
            return redirect('/user-login');
        }   
    }
}
