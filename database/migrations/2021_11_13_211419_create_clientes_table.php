<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id('IdCliente');
            $table->string('NumeroDocumento');
            $table->string('TipoDocumento');
            $table->string('PrimerNombre');
            $table->string('SegundoNombre');
            $table->string('PrimerApellido');
            $table->string('SegundoApellido');
            $table->string('Direccion');
            $table->string('CorreoElectronico');
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
