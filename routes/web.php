<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\carreraprofesional;
use App\Http\Controllers\programas;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

// Ruta para procesar formularios de información
Route::post('/solicitar-informacion', [SolicitudController::class, 'procesarFormulario'])->name('solicitud.informacion');

// **Rutas públicas**
Route::get('/', [HomeController::class, 'index'])->name('paginaprincipal');

// carreras profesionales
Route::get('/curso/CajeroBancario', [carreraprofesional::class, 'CajeroBancario'])->name('CajeroBancario');
Route::get('/curso/AdministracionBancaria', [carreraprofesional::class, 'AdministracionBancaria'])->name('AdministracionBancaria');
Route::get('/curso/GestiondeNegocios', [carreraprofesional::class, 'GestiondeNegocios'])->name('GestiondeNegocios');

// Cursos cortos (programas)
Route::get('/curso/AutoCad', [programas::class, 'AutoCad'])->name('AutoCad');
Route::get('/curso/ExelEmpresarial', [programas::class, 'ExelEmpresarial'])->name('ExelEmpresarial');
Route::get('/curso/RedaccionEjecutiva', [programas::class, 'RedaccionEjecutiva'])->name('RedaccionEjecutiva');

// **Rutas protegidas para admin y docente**
Route::middleware(['auth', 'checkrole:admin,docente'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/* Route::middleware(['auth', 'checkrole:admin,docente'])->group(function () {
    Route::get('/carreras', [CarreraController::class, 'index'])->name('carreras.index');
    Route::get('/programas', [ProgramaController::class, 'index'])->name('programas.index');
});*/

// **Rutas para Carreras y Programas**
Route::get('/carreras', [CarreraController::class, 'index'])->name('carreras.index');
Route::get('/programas', [ProgramaController::class, 'index'])->name('programas.index');
Route::get('/carreras/{carrera}/edit', [CarreraController::class, 'edit'])->name('carreras.edit');
Route::put('/carreras/{carrera}', [CarreraController::class, 'update'])->name('carreras.update');
Route::get('/programas/{programa}/edit', [ProgramaController::class, 'edit'])->name('programas.edit');
Route::put('/programas/{programa}', [ProgramaController::class, 'update'])->name('programas.update');

Route::resource('cursos', CursoController::class);

// **Rutas de perfil**
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// **Autenticación**
require __DIR__.'/auth.php';
