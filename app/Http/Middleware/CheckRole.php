<?php

namespace App\Http\Middleware;

use Alert;
use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if (!$request->user()->hasAnyRole($roles)) {
            alert()
                ->error('Error!', 'No tienes los permisos necesarios para ingresar a esta sección.')
                ->persistent('Cerrar');
            return redirect(route('admin.index'));
        }
        return $next($request);
    }
}
