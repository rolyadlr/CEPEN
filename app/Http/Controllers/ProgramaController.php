<?php

namespace App\Http\Controllers;

use App\Models\Programa; 
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    public function index(Request $request)
    {
        $query = Programa::query();

        // Búsqueda
        if ($request->has('search')) {
            $query->where('nombre', 'like', '%' . $request->search . '%');
        }

        // Ordenamiento
        if ($request->has('sort') && $request->has('order')) {
            $query->orderBy($request->sort, $request->order);
        }

       // Obtener las carreras
       $programas = $query->withCount('cursos')->get();
    
       // Agregar rutas dinámicas a cada carrera
       foreach ($programas as $programa) {
           if ($programa->nombre === 'AutoCAD') {
               $programa->ruta = route('AutoCad');
           } elseif ($programa->nombre === 'Excel Empresarial') {
               $programa->ruta = route('ExelEmpresarial');
           } elseif ($programa->nombre === 'Redacción Ejecutiva') {
               $programa->ruta = route('RedaccionEjecutiva');
           } else {
               $programa->ruta = route('carreras.index'); // Ruta por defecto para casos no contemplados
           }
       }
        return view('programas.index', compact('programas'));

    }
    public function edit(Programa $programa)
    {
        return view('programas.edit', compact('programa'));
    }
    public function update(Request $request, Programa $programa)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'duracion' => 'required|integer',
        ]);

        $programa->update($request->all());

        return redirect()->route('programas.index')->with('success', 'Programa actualizado exitosamente');
    }

    public function showPrograma($slug)
    {
        $programa = Programa::where('slug', $slug)->firstOrFail();
        return view('programas.show', compact('programa'));
    }
}
