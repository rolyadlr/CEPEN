<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\cursoprofesional;
use App\Http\Controllers\cursocorto;
use App\Http\Controllers\SubcursoController;
use Illuminate\Support\Facades\Route;

// Ruta pública para la página principal
Route::get('/', [HomeController::class, 'index'])->name('paginaprincipal');

// Rutas públicas para los cursos
Route::get('/curso/CajeroBancario', [cursoprofesional::class, 'CajeroBancario'])->name('CajeroBancario');
Route::get('/curso/AdministracionBancaria', [cursoprofesional::class, 'AdministracionBancaria'])->name('AdministracionBancaria');
Route::get('/curso/GestiondeNegocios', [cursoprofesional::class, 'GestiondeNegocios'])->name('GestiondeNegocios');

Route::get('/curso/AutoCad', [cursocorto::class, 'AutoCad'])->name('AutoCad');
Route::get('/curso/ExelEmpresarial', [cursocorto::class, 'ExelEmpresarial'])->name('ExelEmpresarial');
Route::get('/curso/RedaccionEjecutiva', [cursocorto::class, 'RedaccionEjecutiva'])->name('RedaccionEjecutiva');

// Rutas protegidas para subcursos y funcionalidades específicas
Route::middleware(['auth', 'role:admin|docente'])->group(function () {
    Route::resource('subcursos', SubcursoController::class);
});

Route::middleware(['auth', 'role:estudiante'])->group(function () {
    Route::get('subcursos', [SubcursoController::class, 'index'])->name('subcursos.index');
    Route::get('subcursos/{id}', [SubcursoController::class, 'show'])->name('subcursos.show');
});

// Rutas protegidas para el dashboard
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Rutas protegidas para el perfil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

