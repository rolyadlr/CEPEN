<?php

namespace App\Http\Controllers;

use App\Models\Carrera; 
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public function index(Request $request)
    {
        $query = Carrera::query();
    
        // Búsqueda
        if ($request->has('search')) {
            $query->where('nombre', 'like', '%' . $request->search . '%');
        }
    
        // Ordenamiento
        if ($request->has('sort') && $request->has('order')) {
            $query->orderBy($request->sort, $request->order);
        }
    
        // Obtener las carreras
        $carreras = $query->withCount('cursos')->get();
    
        // Agregar rutas dinámicas a cada carrera
        foreach ($carreras as $carrera) {
            if ($carrera->nombre === 'Administración Bancaria') {
                $carrera->ruta = route('AdministracionBancaria');
            } elseif ($carrera->nombre === 'Cajero Bancario y Comercial') {
                $carrera->ruta = route('CajeroBancario');
            } elseif ($carrera->nombre === 'Gestión de Negocios') {
                $carrera->ruta = route('GestiondeNegocios');
            } else {
                $carrera->ruta = route('carreras.index'); // Ruta por defecto para casos no contemplados
            }
        }
    
        return view('carreras.index', compact('carreras'));
    }
    public function edit(Carrera $carrera)
    {
        return view('carreras.edit', compact('carrera'));
    }
    public function update(Request $request, Carrera $carrera)
    {
        $request->validate([
            'descripcion' => 'required|string',
            'duracion' => 'required|integer',
        ]);

        $carrera->update($request->all());

        return redirect()->route('carreras.index')->with('success', 'Carrera actualizada exitosamente');
    }

    public function showCarrera($slug)
    {
        $carrera = Carrera::where('slug', $slug)->firstOrFail();
        return view('carreras.show', compact('carrera'));
    }
    
}
