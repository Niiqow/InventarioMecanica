<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngMVSRelacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ing_m_v_s_relacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo');
            $table->integer('semestre');
            $table->string('asignatura');
            $table->string('nombre');
            $table->string('especificacion_tecnica');
            $table->integer('cantidad');
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
        Schema::dropIfExists('ing_m_v_s_relacions');
    }
}
