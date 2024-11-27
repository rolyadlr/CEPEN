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
    
        // Paginación
        $carreras = $query->withCount('cursos')->paginate(10);
    
        return view('carreras.index', compact('carreras'));
    }
    public function edit(Carrera $carrera)
    {
        return view('carreras.edit', compact('carrera'));
    }
    public function update(Request $request, Carrera $carrera)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'duracion' => 'required|integer',
        ]);

        $carrera->update($request->all());

        return redirect()->route('carreras.index')->with('success', 'Carrera actualizada exitosamente');
    }
    
}
