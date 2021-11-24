<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Exception;

class EnsureTokenIsValid
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
        if(!empty($request->bearerToken())){
          if(!Auth::guard('api')->check()){
                return response()->json(['message' => 'Invalid token.','status' => 0,'response_code' => 300],200); 
            }
        }
        else{
            return response()->json(['message' => 'Token not provided.','status' => 0,'response_code' => 300],200); 
        }
        
    return $next($request);
  }

}
