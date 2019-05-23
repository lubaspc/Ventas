<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleGenerarInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_generar_insumos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('categoria', 100);
            $table->float('precio_costo', 10, 2);    
            $table->integer('estatus_dtin');                 
            $table->unsignedbigInteger('id_generarproductos');
            $table->unsignedbigInteger('id_insumos');
            $table->timestamps();
            $table->foreign('id_generarproductos')->references('id')->on('generar_productos');
            $table->foreign('id_insumos')->references('id')->on('insumos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_generar_insumos');
    }
}
