<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_calificacion extends Model
{
    use HasFactory;


    protected $primaryKey="id_tipo_calificacion";
    protected $table="tipo_calificacions";
    protected $fillable=[

        "id_tipo_calificacion",
        "nombre_calificacion",
        "detalle_calificacion",
        "created_at",
        "updated_at",
    ];

    protected $hidden = ['created_at','updated_at'];


    public function prueba()
    {
        return $this->hasMany(Prueba::class , 'tipo_calificacion_id', 'id_tipo_calificacion');
    }
}
