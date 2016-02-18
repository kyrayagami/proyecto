<?php

namespace App\Http\Middleware;

use Closure;
use Route;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$llave_token)
    {
        //dd('este servira para validar el token---'.$request);
        //$llave_token = Route::input('token');
        if( $llave_token == 'A7R6I2Z5O9N7A1'){
            return $next($request);
        }
        return redirect('/error');

        //return $next($request);
    }
}
