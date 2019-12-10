<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('numero');
            $table->string('email')->unique();  //Verifica si el email ya se encuentra registrado.
            $table->string('password');
            $table->boolean('admin')->default(false);
            $table->rememberToken(); // Se utiliza para ayudar contra el Remember Me (secuestro de cookies). El valor se actualiza al iniciar y cerrar sesión. Si una persona malintencionada secuestra una cookie, cerrar sesión hace que la cookie secuestrada sea inútil ya que ya no coincide.
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
        Schema::dropIfExists('users');
    }
}
