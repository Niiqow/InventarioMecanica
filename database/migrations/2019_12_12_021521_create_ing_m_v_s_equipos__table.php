<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngMVSEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ing_m_v_s_equipos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('equipo');
            $table->string('especificacion_tecnica');
            $table->integer('cantidad');
            $table->string('valor_unitario');
            $table->string('valor_total');
            $table->string('cod');
            $table->string('observacion');
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
        Schema::dropIfExists('ing_m_v_s_equipos');
    }
}
