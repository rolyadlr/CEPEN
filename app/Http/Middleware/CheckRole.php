<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return $next($request);
        }

        $user = Auth::user();

        // Permite acceso sin restricciones si el usuario es admin (rol_id 1)
        if ($user->rol_id == 1) {
            return $next($request);
        }

        // Restringe acceso solo en el dashboard o rutas protegidas específicas
        if ($request->is('dashboard*') && !in_array($user->rol_id, $roles)) {
            return redirect('/')->with('error', 'No tienes permiso para acceder a esta página');
        }

        return $next($request);
    }
}

