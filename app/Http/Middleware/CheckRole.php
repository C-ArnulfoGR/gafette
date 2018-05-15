<?php

namespace App\Http\Middleware;

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
//        dd($request->user()->hasAnyRole($roles));
        if (! $request->user()->hasAnyRole($roles)) {
            return redirect(route('admin.index'));
        }
        return $next($request);
    }
}
