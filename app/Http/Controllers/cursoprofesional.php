<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cursoprofesional extends Controller
{
    public function AdministracionBancaria(){
        return view('/cursos/cursosprofesionales/AdministracionBancaria');
        }


    public function CajeroBancario(){
        return view('/cursos/cursosprofesionales/CajeroBancario');
        }

    
    public function GestiondeNegocios(){
        return view('/cursos/cursosprofesionales/GestiondeNegocios');
        }
}
