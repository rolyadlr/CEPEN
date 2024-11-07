<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Si la ruta no requiere roles específicos, permitir el acceso
        if (empty($roles)) {
            return $next($request);
        }

        // Si el usuario está autenticado, verifica los roles
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->rol && in_array($user->rol->nombre, $roles)) {
                return $next($request);
            } else {
                // Usuario autenticado pero sin el rol adecuado
                return response('No tienes permiso para acceder a esta página', 403);
            }
        }

        // Si no está autenticado, permitir el acceso a rutas públicas
        return $next($request);
    }
}


