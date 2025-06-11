<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Models\Materias;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    // Mostrar todas las materias
    public function index()
    {
        $materias = Materias::all();
        return view('materias.index', compact('materias'));
    }

    // Mostrar el formulario para agregar una nueva materia
    public function create()
    {
        return view('materias.create');
    }

    // Almacenar una nueva materia
    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|unique:materias',
            'nombre' => 'required|string|max:100',
        ]);

        Materias::create($request->all());
        return redirect()->route('materias.index')->with('success', 'Materia agregada exitosamente.');
    }

    // Eliminar una materia
    public function destroy($id)
    {
        Materias::findOrFail($id)->delete();
        return redirect()->route('materias.index')->with('success', 'Materia eliminada exitosamente.');
    }
}
