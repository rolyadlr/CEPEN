<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class carreraprofesional extends Controller
{
    public function CajeroBancario()
    {
        return view('/cursos/cursosprofesionales/CajeroBancario');
    }

    public function AdministracionBancaria()
    {
        return view('/cursos/cursosprofesionales/AdministracionBancaria');
    }

    public function GestiondeNegocios()
    {
        return view('/cursos/cursosprofesionales/GestiondeNegocios');
    }
}