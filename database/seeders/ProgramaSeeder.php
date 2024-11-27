<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Programa;

class ProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Programa::create([
            'nombre' => 'AutoCAD',
            'descripcion' => 'Descripción del programa de AutoCAD',
            'duracion' => 2,
        ]);

        Programa::create([
            'nombre' => 'Excel Empresarial',
            'descripcion' => 'Descripción del programa de Excel Empresarial',
            'duracion' => 2,
        ]);

        Programa::create([
            'nombre' => 'Redacción Ejecutiva',
            'descripcion' => 'Descripción del programa de Redacción Ejecutiva',
            'duracion' => 2,
        ]);
    }
}