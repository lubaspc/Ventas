<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cantidad'); 
            $table->float('precio_costo', 10, 2); 
            $table->float('precio_venta', 10, 2);      
            $table->integer('estatus_dtven');             
            $table->unsignedbigInteger('id_ventas');            
            $table->unsignedbigInteger('id_productos');
            $table->timestamps();
            $table->foreign('id_ventas')->references('id')->on('ventas');
            $table->foreign('id_productos')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_ventas');
    }
}
