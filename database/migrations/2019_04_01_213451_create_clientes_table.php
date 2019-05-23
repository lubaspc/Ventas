<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('nombre_cliente', 40);
            $table->string('ap_paterno', 30);
            $table->string('ap_materno', 30);
            $table->string('email', 50);
            $table->string('telefono', 13);
            $table->integer('codigo_postal');
            $table->string('calle', 50);
            $table->string('colonia', 50);
            $table->integer('no_interior');
            $table->integer('no_exterior');
            $table->integer('estatus_cliente');
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
