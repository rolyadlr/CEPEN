<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCursoSeeder extends Seeder
{
    public function run()
    {
        DB::table('subcursos')->insert([
            [
                'nombre' => 'Fundamentos de Administración Bancaria',
                'descripcion' => 'Subcurso sobre los principios básicos de administración bancaria.',
                'curso_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Introducción a AutoCAD',
                'descripcion' => 'Curso introductorio sobre el uso básico de AutoCAD.',
                'curso_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Técnicas de Cajero Bancario',
                'descripcion' => 'Subcurso que cubre las técnicas de cajero bancario.',
                'curso_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Excel para Negocios',
                'descripcion' => 'Subcurso que enseña las aplicaciones de Excel en el entorno empresarial.',
                'curso_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Redacción Ejecutiva Básica',
                'descripcion' => 'Subcurso para aprender los fundamentos de la redacción ejecutiva.',
                'curso_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Gestión Básica de Negocios',
                'descripcion' => 'Subcurso sobre las primeras bases de la gestión empresarial.',
                'curso_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
