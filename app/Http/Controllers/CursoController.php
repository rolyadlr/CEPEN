<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Programa;
use App\Models\Carrera;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    // Otros métodos...
    
    public function index()
    {
        $cursos = Curso::with(['programa', 'carrera'])->get();
        return view('cursos.index', compact('cursos'));
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
}
