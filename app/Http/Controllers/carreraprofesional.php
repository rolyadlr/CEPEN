<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class carreraprofesional extends Controller
{
    public function CajeroBancario()
    {
        return view('/cursos/carrerasprofesionales/CajeroBancario');
    }

    public function AdministracionBancaria()
    {
        return view('/cursos/carrerasprofesionales/AdministracionBancaria');
    }

    public function GestiondeNegocios()
    {
        return view('/cursos/carrerasprofesionales/GestiondeNegocios');
    }
}
