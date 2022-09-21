<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Prueba;

class PruebaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Prueba::class;

    public function definition()
    {
        return [
            "nombre_prueba"=>$this->faker->sentence,
            "descripcion_prueba"=>$this->faker->paragraph,
            "cantidad_preguntas"=>$this->faker->randomDigit,
            "duracion_prueba"=>$this->faker->randomDigit,
            "autor_prueba"=>$this->faker->name,
            "estado_prueba"=>$this->faker->randomElement(['Iniciado','Terminado','Finalizado']),
            "cantidad_alumnos"=>$this->faker->randomDigit,
        ];
    }
}
