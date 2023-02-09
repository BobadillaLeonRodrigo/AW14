<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
             $table->BigIncrements("id_usuario")->primarykey(); //para hacer el campo una primary key de ingremento
            $table->string("matricula");
            $table->string("img");
            $table->string("nombre");
            $table->string("app");
            $table->string("apm");
            $table->date("fn");
            $table->string("email");
            $table->string("pass");
            $table->unsignedBigInteger("idt_usuario"); // para añadir una llave foranea de otra tabla llamada tb_tipos_usuarios
            $table->foreign("idt_usuario") -> references ("idt_usuario") -> on ("tiposusuarios"); //haciendo la referencia de la llave foranea
            $table->string("activo");
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
        Schema::dropIfExists('usuarios');
    }
};
