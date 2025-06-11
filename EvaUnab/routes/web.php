<?php

use APP\Http\Controllers\MatriculaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/matricular-sp', [MatriculaController::class],'matricularConSP');