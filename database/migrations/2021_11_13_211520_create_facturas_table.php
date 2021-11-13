<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id('IdFactura');
            $table->foreignId('clientes_id')->constrained('clientes');
            $table->foreignId('mecanicos_id')->constrained('mecanicos');
            $table->foreignId('mantenimientos_id')->constrained('mantenimientos');
            $table->string('PagoTotal');
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
        Schema::dropIfExists('facturas');
    }
}
