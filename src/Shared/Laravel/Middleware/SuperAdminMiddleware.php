<?php

namespace Baezeta\Admin\Shared\Laravel\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminUsuarios\SuperAdminUsuariosModel;

class SuperAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $isEmpty = SuperAdminUsuariosModel::all()->count();

        if (!config('package.activado')) {
            abort(403, 'Super Admin no está activado');
        }
        if ($isEmpty === 0) {
            abort(403, 'Necesitas al menos un Usuario Super Admin para acceder a esta sección ');
        }
        return $next($request);
    }
}
