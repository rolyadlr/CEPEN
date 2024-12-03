<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;
use App\Models\Carrera;
use App\Models\Programa;

class CursoSeeder extends Seeder
{
    public function run()
    {
        // Obtener las carreras y programas existentes
        $carreraAdminBancaria = Carrera::where('nombre', 'Administración Bancaria')->first();
        $carreraCajero = Carrera::where('nombre', 'Cajero Bancario y Comercial')->first();
        $carreraGestionNegocios = Carrera::where('nombre', 'Gestión de Negocios')->first();

        $programaAutoCAD = Programa::where('nombre', 'AutoCAD')->first();
        $programaExcel = Programa::where('nombre', 'Excel Empresarial')->first();
        $programaRedaccion = Programa::where('nombre', 'Redacción Ejecutiva')->first();

        // Cursos para Administración Bancaria
        $cursosAdminBancaria = [
            [
                'nombre' => 'Introducción a la Banca',
                'descripcion' => 'Fundamentos básicos del sistema bancario',
                'duracion' => 40,
                'programa_id' => $programaExcel->id,
                'promedio_aprobacion' => 70,
                'documento' => 'introduccion_banca.pdf',
                'anuncios' => 'Curso introductorio obligatorio'
            ],
            [
                'nombre' => 'Gestión Financiera',
                'descripcion' => 'Estrategias avanzadas de gestión financiera',
                'duracion' => 60,
                'programa_id' => $programaAutoCAD->id,
                'promedio_aprobacion' => 75,
                'documento' => 'gestion_financiera.pdf',
                'anuncios' => 'Curso de especialización'
            ],
            [
                'nombre' => 'Análisis de Riesgos Bancarios',
                'descripcion' => 'Identificación y gestión de riesgos en instituciones financieras',
                'duracion' => 50,
                'programa_id' => $programaRedaccion->id,
                'promedio_aprobacion' => 80,
                'documento' => 'riesgos_bancarios.pdf',
                'anuncios' => 'Curso crítico para administradores'
            ],
            [
                'nombre' => 'Contabilidad Bancaria',
                'descripcion' => 'Principios contables aplicados al sector bancario',
                'duracion' => 55,
                'programa_id' => $programaExcel->id,
                'promedio_aprobacion' => 65,
                'documento' => 'contabilidad_bancaria.pdf',
                'anuncios' => 'Manejo de registros financieros'
            ],
            [
                'nombre' => 'Productos y Servicios Financieros',
                'descripcion' => 'Estudio de productos bancarios modernos',
                'duracion' => 45,
                'programa_id' => $programaAutoCAD->id,
                'promedio_aprobacion' => 72,
                'documento' => 'productos_financieros.pdf',
                'anuncios' => 'Actualización de servicios bancarios'
            ],
            [
                'nombre' => 'Ética Bancaria',
                'descripcion' => 'Principios éticos en el sector financiero',
                'duracion' => 35,
                'programa_id' => $programaRedaccion->id,
                'promedio_aprobacion' => 85,
                'documento' => 'etica_bancaria.pdf',
                'anuncios' => 'Curso fundamental de comportamiento profesional'
            ],
            [
                'nombre' => 'Legislación Bancaria',
                'descripcion' => 'Marco legal del sistema bancario',
                'duracion' => 50,
                'programa_id' => $programaExcel->id,
                'promedio_aprobacion' => 75,
                'documento' => 'legislacion_bancaria.pdf',
                'anuncios' => 'Comprensión del marco regulatorio'
            ]
        ];

        // Cursos para Cajero Bancario y Comercial
        $cursosCajero = [
            [
                'nombre' => 'Operaciones Bancarias Básicas',
                'descripcion' => 'Técnicas fundamentales de operaciones bancarias',
                'duracion' => 50,
                'programa_id' => $programaRedaccion->id,
                'promedio_aprobacion' => 65,
                'documento' => 'operaciones_bancarias.pdf',
                'anuncios' => 'Curso práctico con simulaciones'
            ],
            [
                'nombre' => 'Atención al Cliente Bancario',
                'descripcion' => 'Habilidades de servicio y comunicación',
                'duracion' => 40,
                'programa_id' => $programaExcel->id,
                'promedio_aprobacion' => 80,
                'documento' => 'atencion_cliente.pdf',
                'anuncios' => 'Desarrollo de habilidades interpersonales'
            ],
            [
                'nombre' => 'Manejo de Efectivo',
                'descripcion' => 'Procedimientos de gestión y control de efectivo',
                'duracion' => 45,
                'programa_id' => $programaAutoCAD->id,
                'promedio_aprobacion' => 70,
                'documento' => 'manejo_efectivo.pdf',
                'anuncios' => 'Curso de precisión y control'
            ],
            [
                'nombre' => 'Sistemas de Pago Electrónico',
                'descripcion' => 'Tecnologías modernas de transacciones financieras',
                'duracion' => 55,
                'programa_id' => $programaRedaccion->id,
                'promedio_aprobacion' => 75,
                'documento' => 'pagos_electronicos.pdf',
                'anuncios' => 'Actualización tecnológica bancaria'
            ],
            [
                'nombre' => 'Documentación Bancaria',
                'descripcion' => 'Gestión y procesamiento de documentos financieros',
                'duracion' => 40,
                'programa_id' => $programaExcel->id,
                'promedio_aprobacion' => 68,
                'documento' => 'documentacion_bancaria.pdf',
                'anuncios' => 'Precisión en el manejo documental'
            ],
            [
                'nombre' => 'Prevención de Fraudes',
                'descripcion' => 'Identificación y prevención de actividades fraudulentas',
                'duracion' => 50,
                'programa_id' => $programaAutoCAD->id,
                'promedio_aprobacion' => 85,
                'documento' => 'prevencion_fraudes.pdf',
                'anuncios' => 'Curso de seguridad bancaria'
            ]
        ];

        // Cursos para Gestión de Negocios
        $cursosGestionNegocios = [
            [
                'nombre' => 'Planificación Estratégica',
                'descripcion' => 'Desarrollo de estrategias empresariales',
                'duracion' => 45,
                'programa_id' => $programaExcel->id,
                'promedio_aprobacion' => 80,
                'documento' => 'planificacion_estrategica.pdf',
                'anuncios' => 'Curso de alta especialización'
            ],
            [
                'nombre' => 'Gestión de Proyectos',
                'descripcion' => 'Metodologías modernas de gestión de proyectos',
                'duracion' => 55,
                'programa_id' => $programaAutoCAD->id,
                'promedio_aprobacion' => 75,
                'documento' => 'gestion_proyectos.pdf',
                'anuncios' => 'Herramientas de gestión contemporáneas'
            ],
            [
                'nombre' => 'Liderazgo y Comunicación',
                'descripcion' => 'Desarrollo de habilidades de liderazgo empresarial',
                'duracion' => 40,
                'programa_id' => $programaRedaccion->id,
                'promedio_aprobacion' => 85,
                'documento' => 'liderazgo_comunicacion.pdf',
                'anuncios' => 'Formación de líderes empresariales'
            ],
            [
                'nombre' => 'Marketing Empresarial',
                'descripcion' => 'Estrategias de marketing y posicionamiento',
                'duracion' => 50,
                'programa_id' => $programaExcel->id,
                'promedio_aprobacion' => 70,
                'documento' => 'marketing_empresarial.pdf',
                'anuncios' => 'Técnicas de marketing modernas'
            ],
            [
                'nombre' => 'Innovación y Emprendimiento',
                'descripcion' => 'Desarrollo de capacidades emprendedoras',
                'duracion' => 45,
                'programa_id' => $programaAutoCAD->id,
                'promedio_aprobacion' => 78,
                'documento' => 'innovacion_emprendimiento.pdf',
                'anuncios' => 'Curso de desarrollo empresarial'
            ]
        ];

        // Crear cursos
        foreach ($cursosAdminBancaria as $curso) {
            Curso::create(array_merge($curso, ['carrera_id' => $carreraAdminBancaria->id]));
        }

        foreach ($cursosCajero as $curso) {
            Curso::create(array_merge($curso, ['carrera_id' => $carreraCajero->id]));
        }

        foreach ($cursosGestionNegocios as $curso) {
            Curso::create(array_merge($curso, ['carrera_id' => $carreraGestionNegocios->id]));
        }
    }
}