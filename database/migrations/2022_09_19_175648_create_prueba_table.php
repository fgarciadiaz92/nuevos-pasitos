<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePruebaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prueba', function (Blueprint $table) {
            $table->bigIncrements("id_prueba");
            $table->string("nombre_prueba",100);
            $table->string("descripcion_prueba");
            $table->string("cantidad_preguntas",100);
            $table->string("duracion_prueba");
            $table->string("autor_prueba");
            $table->string("estado_prueba");
            $table->string("cantidad_alumnos");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prueba');
    }
}
