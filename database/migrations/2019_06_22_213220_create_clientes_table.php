<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre',50);
            $table->string('apellido',30);
            $table->string('ci',10);
            $table->string('telefono',15);
            $table->string('direccion',20);
            $table->boolean('estado')->default(true);
            $table->unsignedInteger('rol_id');
            $table->foreign('rol_id', 'fk_clientesrol_rol')->references('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('clientes');
    }
}
