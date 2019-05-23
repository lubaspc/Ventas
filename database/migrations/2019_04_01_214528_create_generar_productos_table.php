<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenerarProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generar_productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_prod', 100);
            $table->integer('cantidad'); 
            $table->float('precio_costo', 10, 2);    
            $table->integer('estatus_grp');            
            $table->unsignedbigInteger('id_productos');
            $table->timestamps();        
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
        Schema::dropIfExists('generar_productos');
    }
}
