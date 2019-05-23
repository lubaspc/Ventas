<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->float('subtotal', 10, 2); 
            $table->float('iva', 10, 2); 
            $table->float('total', 10, 2); 
            $table->string('referencia', 200); 
            $table->integer('estatus_pedi');             
            $table->unsignedbigInteger('id_proveedores');
            $table->timestamps();
            $table->foreign('id_proveedores')->references('id')->on('proveedores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
