<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Programa;
use App\Models\Carrera;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::with('programa', 'carrera')->get(); 
        return view('cursos.index', compact('cursos'));
    }
    public function show($slug)
{
    $programa = Programa::where('slug', $slug)->first();
    $carrera = Carrera::where('slug', $slug)->first();

    if ($programa) {
        return view('cursos.programas.show', compact('programa'));
    } elseif ($carrera) {
        return view('cursos.carreras.show', compact('carrera'));
    }

    abort(404);
}
    public function create()
    {
        $programas = Programa::all();
        $carreras = Carrera::all();
        return view('cursos.create', compact('programas', 'carreras'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:100',
            'descripcion' => 'nullable|string',
            'duracion' => 'required|integer',
            'promedio_aprobacion' => 'required|integer|max:100',
            'horario' => 'nullable|file|mimes:pdf',
            'anuncios' => 'nullable|string',
            'programa_id' => 'nullable|exists:programas,id',
            'carrera_id' => 'nullable|exists:carreras,id'
        ]);
    
        // Manejar la subida de archivo de horario
        if ($request->hasFile('horario')) {
            $horarioPath = $request->file('horario')->store('horarios', 'public');
            $validatedData['documento'] = $horarioPath;
        }
    
        Curso::create($validatedData);
    
        return redirect()->route('cursos.index')
            ->with('success', 'Curso creado exitosamente.');
    }
    
    // Añadir el método edit
    public function edit($id)
    {
        $curso = Curso::find($id);
        $programas = Programa::all();
        $carreras = Carrera::all();

        if (!$curso) {
            return redirect()->route('cursos.index')->with('error', 'Curso no encontrado');
        }

        return view('cursos.edit', compact('curso', 'programas', 'carreras'));
    }

    // Similar cambio en el método update()
    public function update(Request $request, Curso $curso)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:100',
            'descripcion' => 'nullable|string',
            'duracion' => 'required|integer',
            'promedio_aprobacion' => 'required|integer|max:100',
            'horario' => 'nullable|file|mimes:pdf',
            'anuncios' => 'nullable|string',
            'programa_id' => 'nullable|exists:programas,id',
            'carrera_id' => 'nullable|exists:carreras,id'
        ]);
    
        // Manejar la subida de archivo de horario
        if ($request->hasFile('horario')) {
            $horarioPath = $request->file('horario')->store('horarios', 'public');
            $validatedData['documento'] = $horarioPath;
        }
    
        $curso->update($validatedData);
    
        return redirect()->route('cursos.index')
            ->with('success', 'Curso actualizado exitosamente.');
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('cursos.index')
            ->with('success', 'Curso eliminado exitosamente.');
    }


    public function administracionBancaria()
{
    // Buscar la carrera con sus cursos relacionados
    $carrera = Carrera::where('nombre', 'Administración Bancaria')->with('cursos.programa')->first();
    
    if (!$carrera) {
        return redirect()->route('cursos.index')->with('error', 'Carrera no encontrada');
    }

    // Pasar la carrera y los cursos relacionados a la vista
    return view('cursos.carrerasprofesionales.administracion-bancaria', [
        'carrera' => $carrera,
        'cursos' => $carrera->cursos
    ]);
}


    public function cajeroBancario()
    {
        // Buscar la carrera con sus cursos relacionados
        $carrera = Carrera::where('nombre', 'Cajero Bancario y Comercial')->with('cursos.programa')->first();
        
        if (!$carrera) {
            return redirect()->route('cursos.index')->with('error', 'Carrera no encontrada');
        }

        // Pasar la carrera y los cursos relacionados a la vista
        return view('cursos.carrerasprofesionales.cajero-bancario-y-comercial', [
            'carrera' => $carrera,
            'cursos' => $carrera->cursos
        ]);
    }

    public function GestiondeNegocios()
    {
        // Buscar la carrera con sus cursos relacionados
        $carrera = Carrera::where('nombre', 'Gestión de Negocios')->with('cursos.programa')->first();
        
        if (!$carrera) {
            return redirect()->route('cursos.index')->with('error', 'Carrera no encontrada');
        }

        // Pasar la carrera y los cursos relacionados a la vista
        return view('cursos.carrerasprofesionales.gestion-de-negocios', [
            'carrera' => $carrera,
            'cursos' => $carrera->cursos
        ]);
    }

    public function autoCad()
    {
        // Buscar el programa con sus cursos relacionados
        $programa = Programa::where('nombre', 'AutoCAD')->with('cursos.programa')->first();
        
        if (!$programa) {
            return redirect()->route('programa.index')->with('error', 'Programa no encontrado');
        }

        // Pasar el programa y los cursos relacionados a la vista
        return view('cursos.programas.autocad', [
            'programa' => $programa,
            'cursos' => $programa->cursos
        ]);
    }
    
    public function ExelEmpresarial()
    {
        // Buscar el programa con sus cursos relacionados
        $programa = Programa::where('nombre', 'Excel Empresarial')->with('cursos.programa')->first();
        
        if (!$programa) {
            return redirect()->route('programa.index')->with('error', 'Programa no encontrado');
        }

        // Pasar el programa y los cursos relacionados a la vista
        return view('cursos.programas.excel-empresarial', [
            'programa' => $programa,
            'cursos' => $programa->cursos
        ]);
    }

    public function RedaccionEjecutiva()
    {
        // Buscar el programa con sus cursos relacionados
        $programa = Programa::where('nombre', 'Redacción Ejecutiva')->with('cursos.programa')->first();
        
        if (!$programa) {
            return redirect()->route('programa.index')->with('error', 'Programa no encontrado');
        }

        // Pasar el programa y los cursos relacionados a la vista
        return view('cursos.programas.redaccion-ejecutiva', [
            'programa' => $programa,
            'cursos' => $programa->cursos
        ]);
    }
    public function showCarrera($slug)
    {
        $carrera = Carrera::where('slug', $slug)->firstOrFail();
        $cursos = $carrera->cursos; // Aquí asumo que la relación de "cursos" está definida en el modelo Carrera
    
        return view('cursos/carrerasprofesionales/' . $slug, compact('carrera', 'cursos'));
    }
    

public function showPrograma($slug)
{
    // Buscar el programa por el slug
    $programa = Programa::where('slug', $slug)->firstOrFail();
    $cursos = $programa->cursos; // Aquí asumo que la relación de "cursos" está definida en el modelo Carrera

    // Retornar la vista, asegurando que el nombre de la vista es correcto
    return view('cursos/programas/' . $slug, compact('programa', 'cursos'));
}

    
    
    

}
