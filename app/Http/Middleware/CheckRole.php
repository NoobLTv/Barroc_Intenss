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

    public function finance($request, Closure $next)
    {
        $tooshame = '/';

    if (Auth::check()){
        $role_id = Auth::user()->role_id;
        if ($role_id != 4){
            return redirect($tooshame);
        }
    }
    else{
        return redirect($tooshame);
    }

    return $next($request);

    }

    public function customer($request, Closure $next)
{
    $tooshame = '/';

    if (Auth::check()){
        $role_id = Auth::user()->role_id;
        if ($role_id != 5){
            return redirect($tooshame);
        }
    }
    else{
        return redirect($tooshame);
    }

    return $next($request);

}

    public function supplies($request, Closure $next)
    {
        $tooshame = '/';

        if (Auth::check()){
            $role_id = Auth::user()->role_id;
            if ($role_id != 1){
                return redirect($tooshame);
            }
        }
        else{
            return redirect($tooshame);
        }

        return $next($request);

    }

    public function ceo($request, Closure $next)
    {
        $tooshame = '/';

        if (Auth::check()){
            $role_id = Auth::user()->role_id;
            if ($role_id != 6){
                return redirect($tooshame);
            }
        }
        else{
            return redirect($tooshame);
        }

        return $next($request);

    }

    public function maintenance($request, Closure $next)
    {
        $tooshame = '/';

        if (Auth::check()){
            $role_id = Auth::user()->role_id;
            if ($role_id != 3){
                return redirect($tooshame);
            }
        }
        else{
            return redirect($tooshame);
        }

        return $next($request);

    }



}
