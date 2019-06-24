<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre', 50);
            $table->string('ci',15)->unique();
            $table->string('usuario',25);
            $table->string('password',50);
            $table->boolean('estado')->default(true);
            $table->date('fechadenacimiento');
            $table->string('telefono');
            $table->unsignedInteger('tipousuario_id');
            $table->foreign('tipousuario_id', 'fk_usuariotipousuarios_tipousuarios')->references('id')->on('tipo__usuarios')->onDelete('restrict')->onUpdate('restrict');
            
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
        Schema::dropIfExists('usuario');
    }
}
