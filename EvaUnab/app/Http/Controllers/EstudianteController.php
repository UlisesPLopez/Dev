<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    // Mostrar todos los estudiantes
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    // Mostrar el formulario para agregar un nuevo estudiante
    public function create()
    {
        return view('estudiantes.create');
    }

    // Almacenar un nuevo estudiante
    public function store(Request $request)
    {
        $request->validate([
            'carnet' => 'required|unique:estudiantes',
            'nombre_completo' => 'required|string|max:100',
            'fecha_nacimiento' => 'required|date',
        ]);

        Estudiante::create($request->all());
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante agregado exitosamente.');
    }

    // Eliminar un estudiante
    public function destroy($id)
    {
        Estudiante::findOrFail($id)->delete();
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante eliminado exitosamente.');
    }
}
