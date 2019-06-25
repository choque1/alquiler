<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAlquileres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alquileres', function (Blueprint $table) {
            $table->Increments('id');
            $table->date('fecha_registro');
            $table->date('fecha_entrega');
            $table->string('pago');
            $table->unsignedInteger('departamento_id');
            $table->foreign('departamento_id', 'fk_alquileresdepartamentos_departamentos')
            ->references('id')->on('departamentos')->onDelete('restrict')->onUpdate('restrict');   
            $table->unsignedInteger('estado_id');
            $table->foreign('estado_id', 'fk_alquileresestadoalquiler_estadoalquiler')
            ->references('id')->on('estado_alquiler')->onDelete('restrict')->onUpdate('restrict'); 
            $table->unsignedInteger('cliente_id');
            $table->foreign('cliente_id', 'fk_alquileresclientes_clientes')
            ->references('id')->on('clientes')->onDelete('restrict')->onUpdate('restrict'); 
            
            $table->timestamps();
        });
    }

    /**$
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alquileres');
    }
}
