<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        // Trae todos los estudiantes con sus materias relacionadas
        $estudiante = Estudiante::with('materias')->get();
        
        return view('estudiante.index', compact('estudiante'));
    }
}
