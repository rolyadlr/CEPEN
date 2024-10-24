<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cursocorto extends Controller
{
    public function AutoCad(){
        return view('/cursos/cursoscortos/AutoCad');
        }


    public function ExelEmpresarial(){
        return view('/cursos/cursoscortos/ExelEmpresarial');
        }

    
    public function RedaccionEjecutiva(){
        return view('/cursos/cursoscortos/RedaccionEjecutiva');
        }
}
