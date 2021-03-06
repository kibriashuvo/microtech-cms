<?php

namespace App\Http\Middleware;
use App\User;
use Closure;

class IfNoAccountExists
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

        if(count(User::all())<=0){

            return redirect('/register');
        }
        return $next($request);
    }
}
