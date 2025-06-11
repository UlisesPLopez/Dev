<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matriculas extends Model{
    protected $fillable = ['ID_estudiante','ID_materia','fecha'];
    
}