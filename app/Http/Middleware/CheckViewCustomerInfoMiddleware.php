<?php

namespace App\Http\Middleware;

use Closure;

class CheckViewCustomerInfoMiddleware
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
        if($request->has('requestInfo')){
            return $next($request);
        }
        else{
            return route('customer-info-error');
        }
    }
}
