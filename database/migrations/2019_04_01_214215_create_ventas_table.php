<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('folio_venta', 20);
            $table->date('fecha_venta');
            $table->float('subtotal', 10, 2);
            $table->float('iva', 10, 2);
            $table->float('total', 10, 2);
            $table->integer('estatus_venta');             
            $table->unsignedbigInteger('id_clientes');            
            $table->unsignedbigInteger('id_pagos');
            $table->timestamps();
            $table->foreign('id_clientes')->references('id')->on('clientes');
            $table->foreign('id_pagos')->references('id')->on('tipo_pagos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
