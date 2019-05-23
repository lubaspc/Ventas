<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtaBancariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cta_bancarias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo_cuenta', 60);
            $table->string('numero_cuenta', 60);
            $table->date('fecha_vencimiento');      
            $table->integer('estatus_ctab');             
            $table->unsignedbigInteger('id_clientes');            
            $table->unsignedbigInteger('id_bancos');
            $table->timestamps();
            $table->foreign('id_clientes')->references('id')->on('clientes');
            $table->foreign('id_bancos')->references('id')->on('bancos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cta_bancarias');
    }
}
