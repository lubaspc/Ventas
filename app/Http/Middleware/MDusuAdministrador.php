<?php

namespace App\Http\Middleware;

use Closure;

class MDusuAdministrador
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
        $usuario_actual = \Auth::user();
        if (isset($usuario_actual)) {
            if ($usuario_actual->tipoUsuario!=1) {
                return redirect('sin_acceso');
            }            
        }
        else
            return redirect('login');
        return $next($request);
    }
}
