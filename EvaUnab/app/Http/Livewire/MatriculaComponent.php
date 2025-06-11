<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class MatriculaComponent extends Component
{
    public $carnet;
    public $codigo_materia;
    public $mensaje = '';
    public $error = false;
    public $matriculas = [];

    protected $rules = [
        'carnet' => 'required|string|max:50',
        'codigo_materia' => 'required|string|max:50'
    ];

    public function render()
    {
        return view('livewire.matricula-component');
    }

    public function matricular()
    {
        $this->validate();

        try {
            $resultado = DB::select(
                "CALL sp_matricular_estudiante(?, ?)",
                [$this->carnet, $this->codigo_materia]
            );

            $this->mensaje = $resultado[0]->resultado;
            $this->error = str_contains($this->mensaje, 'Error') ? true : false;

            if (!$this->error) {
                $this->buscarMatriculas();
            }
        } catch (\Exception $e) {
            $this->mensaje = 'Error al procesar la matrícula: ' . $e->getMessage();
            $this->error = true;
        }
    }

    public function buscarMatriculas()
    {
        $this->matriculas = DB::select("
            SELECT m.nombre AS materia, m.codigo, mat.fecha, mat.id
            FROM matricula mat
            JOIN materias m ON mat.id_materia = m.id
            JOIN estudiantes e ON mat.id_estudiante = e.id
            WHERE e.carnet = ?
            ORDER BY mat.fecha DESC
        ", [$this->carnet]);
    }

    public function eliminarMatricula($id)
    {
        DB::table('matricula')->where('id', $id)->delete();
        $this->mensaje = 'Matrícula eliminada correctamente';
        $this->error = false;
        $this->buscarMatriculas();
    }
}
