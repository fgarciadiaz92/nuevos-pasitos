<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    use HasFactory;

    protected $primaryKey="id_prueba";
    protected $table="prueba";
    protected $fillable=[

        "id_prueba",
        "nombre_prueba",
        "descripcion_prueba",
        "cantidad_preguntas",
        "duracion_prueba",
        "autor_prueba",
        "estado_prueba",
        "cantidad_alumnos",
        "created_at",
        "updated_at",
    ];
}
