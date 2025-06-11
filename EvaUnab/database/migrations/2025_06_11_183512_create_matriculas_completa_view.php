<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateMatriculasCompletaView extends Migration
{
    public function up()
    {
        DB::statement("
            CREATE OR REPLACE VIEW matriculas_completa AS
            SELECT 
                e.id AS estudiante_id,
                e.nombre AS estudiante_nombre,
                e.carnet AS estudiante_carnet,
                m.id AS materia_id,
                m.nombre AS materia_nombre,
                m.codigo AS materia_codigo,
                mat.fecha AS fecha_matricula,
                mat.created_at AS fecha_registro,
                TIMESTAMPDIFF(YEAR, e.fecha_nacimiento, CURDATE()) AS edad_estudiante
            FROM 
                matricula mat
                JOIN estudiante e ON mat.id_estudiante = e.id
                JOIN materia m ON mat.id_materia = m.id
        ");
    }

    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS matriculas_completa');
    }
}

