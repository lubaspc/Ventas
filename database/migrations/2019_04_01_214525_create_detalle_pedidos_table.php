<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cantidad'); 
            $table->float('precio', 10, 2);    
            $table->integer('estatus_dtpe');             
            $table->unsignedbigInteger('id_insumos');            
            $table->unsignedbigInteger('id_pedidos');
            $table->timestamps();
            $table->foreign('id_insumos')->references('id')->on('insumos');
            $table->foreign('id_pedidos')->references('id')->on('pedidos');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_pedidos');
    }
}
