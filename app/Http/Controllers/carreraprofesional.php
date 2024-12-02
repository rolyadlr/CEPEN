<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class carreraprofesional extends Controller
{
    public function CajeroBancario()
    {
        return view('/cursos/carrerasprofesionales/cajero-bancario-y-comercial');
    }

    public function AdministracionBancaria()
    {
        return view('/cursos/carrerasprofesionales/administracion-bancaria');
    }

    public function GestiondeNegocios()
    {
        return view('/cursos/carrerasprofesionales/gestion-de-negocios');
    }
}
