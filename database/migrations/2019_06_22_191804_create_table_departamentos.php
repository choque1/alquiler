<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDepartamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('preciopormes');
            $table->string('direccion', 50);
            $table->boolean('estado')->default(true);
            $table->unsignedInteger('tipo_id');
            $table->foreign('tipo_id', 'fk_departamentostipo_tipo')->references('id')->on('tipo')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('condicion_id');
            $table->foreign('condicion_id', 'fk_departamentoscondicion_condicion')->references('id')->on('condicion')->onDelete('restrict')->onUpdate('restrict');
            $table->string('descripcion',300);
            $table->String('foto', 200);
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departamentos');
    }
}
