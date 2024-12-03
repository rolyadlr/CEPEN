<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Notificacion;
use App\Models\Curso;
use App\Models\Programa;
use App\Models\Carrera;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsuarios = User::count();
        $totalAdministradores = User::where('rol_id', 1)->count();
        $totalDocentes = User::where('rol_id', 2)->count();
        $totalEstudiantes = User::where('rol_id', 3)->count();

        $totalCursos = Curso::count();
        $totalProgramas = Programa::count();
        $totalCarreras = Carrera::count();

        $notificaciones = Notificacion::latest()->take(5)->get();

        return view('dashboard', compact(
            'totalUsuarios', 'totalAdministradores', 'totalDocentes', 'totalEstudiantes',
            'totalCursos', 'totalProgramas', 'totalCarreras', 'notificaciones'
        ));
    }
}

