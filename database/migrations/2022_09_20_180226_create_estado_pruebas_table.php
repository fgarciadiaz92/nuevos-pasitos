<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoPruebasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_pruebas', function (Blueprint $table) {
            $table->bigIncrements("id_estado");
            $table->string('detalle_estado');
            $table->unsignedBigInteger('prueba_id');
            $table->timestamps();

            $table->foreign('prueba_id')->references('id_prueba')
                ->on('prueba');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estado_pruebas');
    }
}
