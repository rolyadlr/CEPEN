<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\cursoprofesional;
use App\Http\Controllers\cursocorto;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('paginaprincipal');

Route::get('/curso/CajeroBancario', [cursoprofesional::class, 'CajeroBancario'])                    ->name('CajeroBancario');
Route::get('/curso/AdministracionBancaria', [cursoprofesional::class, 'AdministracionBancaria'])    ->name('AdministracionBancaria');
Route::get('/curso/GestiondeNegocios', [cursoprofesional::class, 'GestiondeNegocios'])              ->name('GestiondeNegocios');

Route::get('/curso/AutoCad', [cursocorto::class, 'AutoCad'])                                        ->name('AutoCad');
Route::get('/curso/ExelEmpresarial', [cursocorto::class, 'ExelEmpresarial'])                        ->name('ExelEmpresarial');
Route::get('/curso/RedaccionEjecutiva', [cursocorto::class, 'RedaccionEjecutiva'])                  ->name('RedaccionEjecutiva');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
