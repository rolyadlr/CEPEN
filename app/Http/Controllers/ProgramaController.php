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

        // Paginación
        $programas = $query->withCount('cursos')->paginate(10);
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
}
