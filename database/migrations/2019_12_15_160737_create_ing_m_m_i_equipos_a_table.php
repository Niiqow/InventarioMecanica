<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngMMIEquiposATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_m_i_equipos_a_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('year');
            $table->string('equipo');
            $table->string('especificacion_tecnica');
            $table->integer('cantidad');
            $table->string('valor_unitario');
            $table->string('valor_total');
            $table->string('valor_proyectado');
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
        Schema::dropIfExists('m_m_i_equipos_a_s');
    }
}
