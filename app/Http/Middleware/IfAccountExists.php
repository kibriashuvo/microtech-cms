<?php

namespace App\Http\Middleware;
use App\User;
use Closure;

class IfAccountExists
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


        if(count(User::all())>0){
            abort('404');
        }

        return $next($request);
    }
}
