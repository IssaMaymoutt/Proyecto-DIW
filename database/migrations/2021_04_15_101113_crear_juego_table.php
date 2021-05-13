<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearJuegoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juegos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50)->nullable(false);
            $table->year('lanzamiento');
            $table->enum('genero', ['terror','deportes','shooter','plataforma','survival','accion']);
            $table->enum('plataformas', ['ps3','ps4','ps5','XboxOne','Xbox360']);
            $table->string('distribuidor',50);
            $table->float('precio',5,2)->default(0,00);
            $table->text('foto');
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
        Schema::dropIfExists('juegos');
    }
}
