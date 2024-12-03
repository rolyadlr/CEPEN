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
            'descripcion' => 'En este curso de AutoCAD, desarrollarás un proyecto práctico que te permitirá diseñar tus propios planos 
            profesionales mientras aprendes a dominar las principales herramientas del software. Para ello, hemos definido 
        una pieza específica con la cual trabajarás en cada unidad, brindándote un acercamiento real al diseño mecánico en 2D.',
            'duracion' => 2,
        ]);

        Programa::create([
            'nombre' => 'Excel Empresarial',
            'descripcion' => 'La capacidad de Microsoft Excel 365 para manejar datos de manera estructurada y segura, utilizando el nuevo 
            concepto de matrices de datos, la ha posicionado como la herramienta más completa actualmente. Es utilizada en 
            todos los niveles de una organización, permitiendo gestionar diversos tipos de datos, estructurar tablas y 
            automatizar cálculos. Estas herramientas ofrecen nuevas competencias tanto a estudiantes como a profesionales, lo 
            que incrementa directamente la productividad de las organizaciones, una habilidad muy valorada por las empresas en sus ejecutivos hoy en día.',
            'duracion' => 2,
        ]);

        Programa::create([
            'nombre' => 'Redacción Ejecutiva',
            'descripcion' => 'Este curso enseña habilidades avanzadas para redactar documentos ejecutivos, esenciales para una comunicación 
            empresarial efectiva. Los participantes aprenderán a crear informes, correos electrónicos, propuestas y 
            presentaciones con claridad y profesionalismo, utilizando técnicas para estructurar ideas lógicamente y adaptar el 
            tono al público objetivo. Es ideal para profesionales que buscan mejorar su comunicación escrita.',
            'duracion' => 2,
        ]);
    }
}