<?php

namespace App\Http\Controllers;

use App\Models\Subcurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class SubcursoController extends Controller
{
    public function index()
    {
        $subcursos = Subcurso::all();
        return view('subcursos.index', compact('subcursos'));
    }

    public function create()
    {
        $cursos = Curso::all(); // Obtener todos los cursos para seleccionar
        return view('subcursos.create', compact('cursos'));
    }

    public function store(Request $request)
    {
        $subcurso = Subcurso::create($request->all());
        return redirect()->route('subcursos.index');
    }

    public function show(Subcurso $subcurso)
    {
        return view('subcursos.show', compact('subcurso'));
    }

    public function edit(Subcurso $subcurso)
    {
        $cursos = Curso::all(); // Obtener todos los cursos para seleccionar
        return view('subcursos.edit', compact('subcurso', 'cursos'));
    }

    public function update(Request $request, Subcurso $subcurso)
    {
        $subcurso->update($request->all());
        return redirect()->route('subcursos.index');
    }

    public function destroy(Subcurso $subcurso)
    {
        $subcurso->delete();
        return redirect()->route('subcursos.index');
    }
}
