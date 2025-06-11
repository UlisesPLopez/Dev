<?php

use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/matricular-sp', [MatriculaController::class],'matricularConSP');


Route::get('/estudiantes', [EstudianteController::class, 'index']);

