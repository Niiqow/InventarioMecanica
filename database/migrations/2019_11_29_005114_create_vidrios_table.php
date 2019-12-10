<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVidriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vidrios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('material');
            $table->string('especificacion');
            $table->string('lugar_almacenamiento');
            $table->string('cantidad_total');
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
        Schema::dropIfExists('material_vidrios');
    }
}
