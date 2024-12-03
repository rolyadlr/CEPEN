<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class programas extends Controller
{
    public function AutoCad(){
        return view('/cursos/programas/AutoCad');
        }


    public function ExelEmpresarial(){
        return view('/cursos/programas/ExelEmpresarial');
        }

    
    public function RedaccionEjecutiva(){
        return view('/cursos/programas/RedaccionEjecutiva');
        }
}
