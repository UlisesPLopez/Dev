<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Estudiantes extends Model
{
    protected $fillable = ['nombre_completo', 'carnet', 'fecha_nacimiento'];

    public function materias()
    {
        return $this->belongsToMany(Materias::class, 'matriculas', 'id_materia', 'id_estudiante')
            ->withPivot('fecha');
    }
}
