<?php

namespace Database\Factories;

use App\Models\Tipo_calificacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class TipoCalificacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Tipo_calificacion::class;

    public function definition()
    {
        return [
            "nombre_calificacion"=>$this->faker->randomElement(['Verdadero / Falso','Porcentaje','Aprobado / Reprobado']),
            "detalle_calificacion"=>$this->faker->paragraph,
        ];

    }
}
