<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Si el usuario no está autenticado, redirigir al login
        if (!Auth::check()) {
            return redirect('login');
        }

        $user = Auth::user();
        
        // Convertir los roles pasados como strings a IDs
        $roleIds = [
            'admin' => 1,
            'docente' => 2,
            'estudiante' => 3
        ];

        $allowedRoleIds = array_map(function($role) use ($roleIds) {
            return $roleIds[$role] ?? null;
        }, $roles);

        // Verificar si el usuario tiene uno de los roles permitidos
        if (in_array($user->rol_id, $allowedRoleIds) || $user->rol_id == 1) {
            return $next($request);
        }

        // Si no tiene los permisos necesarios, redirigir con mensaje
        return redirect()->back()->with('error', 'No tienes permiso para acceder a esta sección');
    }
}
