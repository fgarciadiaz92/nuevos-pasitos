<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTipoCalificacionToTipoCalificaciomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prueba', function (Blueprint $table) {
            $table->unsignedBigInteger('tipo_calificacion_id')->nullable();

            $table->foreign('tipo_calificacion_id')->references('id_tipo_calificacion')
                ->on('tipo_calificacions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prueba', function (Blueprint $table) {
            $table->dropConstrainedForeignId('tipo_calificacion_id');
        });
    }
}
