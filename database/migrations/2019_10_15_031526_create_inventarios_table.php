<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo_inventario');
            $table->string('codigo_blanco');
            $table->string('equipo');
            $table->string('especificacion_detallada');
            $table->string('nombre_carrera');
            $table->string('asignatura');
            $table->string('lugar_almacenamiento');
            $table->string('cantidad_sede');
            $table->integer('valor_unitario');
            $table->integer('valor_total');
            $table->string('observaciones');
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
        Schema::dropIfExists('inventarios');
    }
}
