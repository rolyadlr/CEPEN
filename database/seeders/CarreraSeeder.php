<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Carrera;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carrera::create([
            'nombre' => 'Administración Bancaria',
            'descripcion' => 'Descripción de la carrera de Administración Bancaria',
            'duracion' => 6, 
        ]);

        Carrera::create([
            'nombre' => 'Cajero Bancario y Comercial',
            'descripcion' => 'Descripción de la carrera de Cajero Bancario y Comercial',
            'duracion' => 6,
        ]);

        Carrera::create([
            'nombre' => 'Gestión de Negocios',
            'descripcion' => 'Descripción de la carrera de Gestión de Negocios',
            'duracion' => 6,
        ]);
    }
}