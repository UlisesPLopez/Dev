<?php
namespace APP\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MatriculaController extends Controller{
    public function matricularConSP(Request $request){
    $request->validate([
        'carnet' => 'required|string',
        'codigo_materia' => 'required|string',
    ]);

    $resultado = DB::select(
        'CALL sp_matricular_estudiante(?, ?)',
        [$request->carnet, $request->codigo_materia]
    );

    return response()->json([
        'mensaje' => $resultado[0]->resultado,
    ]);
}
}