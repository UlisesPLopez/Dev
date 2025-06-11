<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materias extends Model{
    protected $fillable = ['nombre','codigo'];

    public function Estudiantes(){
        return $this->belongsToMany(Estudiantes::class, 'matriculas', 'id_estudiante', 'id_materia')
            ->withPivot('fecha');
    }
}