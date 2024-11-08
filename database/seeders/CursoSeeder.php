<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    public function run()
    {
        Curso::insert([
            [
                'nombre' => 'Administración Bancaria',
                'descripcion' => 'Fundamentos de administración y gestión bancaria.',
                'duracion_mes' => '1',
            ],
            [
                'nombre' => 'AutoCAD',
                'descripcion' => 'Introducción al diseño asistido por computadora con AutoCAD.',
                'duracion_mes' => '3',
            ],
            [
                'nombre' => 'Cajero Bancario',
                'descripcion' => 'Principios y técnicas de cajero.',
                'duracion_mes' => '4',
            ],
            [
                'nombre' => 'Excel Empresarial',
                'descripcion' => 'Fundamentos de Excel empresarial.',
                'duracion_mes' => '3',
            ],
            [
                'nombre' => 'Redacción Ejecutiva',
                'descripcion' => 'Introducción a la Redacción Ejecutiva.',
                'duracion_mes' => '2',
            ],
            [
                'nombre' => 'Gestión de Negocios',
                'descripcion' => 'Principios y técnicas de Gestión de Negocios.',
                'duracion_mes' => '4',
            ],
        ]);
    }
}
