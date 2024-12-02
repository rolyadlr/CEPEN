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
            'descripcion' => 'Como técnico en Administración de Negocios Bancarios y Financieros, estarás preparado para gestionar y 
            administrar instituciones financieras y bancarias. Durante la carrera, adquirirás las habilidades y conocimientos 
            necesarios para desempeñarte eficazmente en el sector financiero. Aprenderás a gestionar diversas operaciones y 
            procesos financieros, además de cumplir con las normativas y regulaciones del sector.',
            'duracion' => 6, 
        ]);

        Carrera::create([
            'nombre' => 'Cajero Bancario y Comercial',
            'descripcion' => 'En este curso, adquirimos los conocimientos esenciales sobre el Sistema Financiero Peruano, 
            incluyendo los <br> organismos reguladores, las entidades de protección al cliente, los productos financieros 
            y la gestión de una caja <br> comercial, todo ello fundamentado en un enfoque teórico-práctico.',
            'duracion' => 6,
        ]);

        Carrera::create([
            'nombre' => 'Gestión de Negocios',
            'descripcion' => 'Estarás preparado para gestionar organizaciones con una visión global, utilizando la tecnología para una gestión 
            óptima. Dominarás la planificación estratégica, la organización y la operatividad de negocios de manera eficiente.',
            'duracion' => 6,
        ]);
    }
}