<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMecanicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mecanicos', function (Blueprint $table) {
            $table->id('IdMecanico');
            $table->string('NumeroDocumento');
            $table->string('TipoDocumento');
            $table->string('PrimerNombre');
            $table->string('SegundoNombre');
            $table->string('PrimerApellido');
            $table->string('SegundoApellido');
            $table->string('Direccion');
            $table->string('CorreoElectronico');
            $table->string('Estado');
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
        Schema::dropIfExists('mecanicos');
    }
}
