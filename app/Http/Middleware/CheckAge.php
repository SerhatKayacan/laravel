<?php
//middleware is a filter for the request ( condition )
namespace App\Http\Middleware;

use Closure;

class CheckAge
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
        if($request->age<14)
        {
            echo "middleware";
        }
        return $next($request);
    }
}
