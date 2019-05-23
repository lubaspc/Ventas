<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_producto', 100); 
            $table->string('tamaño_producto', 20); 
            $table->integer('cantidad'); 
            $table->float('precio_costo', 10, 2); 
            $table->float('precio_venta', 10, 2); 
            $table->string('enlace_imagen', 200); 
            $table->integer('stock_inv'); 
            $table->integer('estatus_pedi');             
            $table->unsignedbigInteger('id_categorias');
            $table->timestamps();
            $table->foreign('id_categorias')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
