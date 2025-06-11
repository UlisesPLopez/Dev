<?php

use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\EstudianteController;
use App\Http\Livewire\MatriculaComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/matricular-sp', [MatriculaController::class],'matricularConSP');
Route::get('/estudiantes', [EstudianteController::class, 'index']);
Route::get('/matriculas', MatriculaComponent::class)->name('matriculas');
Route::get('/estudiantes', [EstudianteController::class, 'index'])->name('estudiantes.index');
Route::get('/estudiantes/crear', [EstudianteController::class, 'create'])->name('estudiantes.create');
Route::post('/estudiantes', [EstudianteController::class, 'store'])->name('estudiantes.store');
Route::delete('/estudiantes/{id}', [EstudianteController::class, 'destroy'])->name('estudiantes.destroy');

Route::get('/materias', [MateriaController::class, 'index'])->name('materias.index');
Route::get('/materias/crear', [MateriaController::class, 'create'])->name('materias.create');
Route::post('/materias', [MateriaController::class, 'store'])->name('materias.store');
Route::delete('/materias/{id}', [MateriaController::class, 'destroy'])->name('materias.destroy');
