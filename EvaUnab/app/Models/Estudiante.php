<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Estudiante extends Model
{
    protected $fillable = ['nombre_completo', 'carnet', 'fecha_nacimiento'];

    public function materias()
    {
        return $this->belongsToMany(Materias::class, 'matricula', 'id_materia', 'id_estudiante')
            ->withPivot('fecha');
    }
}
