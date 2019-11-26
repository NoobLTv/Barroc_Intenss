<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
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
        $tooshame = '/';

        if (Auth::check()){
            $role_id = Auth::user()->role_id;
            if ($role_id != 2){
                return redirect($tooshame);
            }
        }
        else{
            return redirect($tooshame);
        }

        return $next($request);

    }
}
