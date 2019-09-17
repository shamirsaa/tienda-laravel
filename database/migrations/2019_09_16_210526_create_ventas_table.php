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
            $table->unsignedBigInteger('clienteId');
            $table->unsignedBigInteger('vendedorId');
            $table->unsignedBigInteger('productoId');
            $table->integer('cantidad');
            $table->integer('total');
            $table->timestamps();
            // $table->foreign('clienteId')->references('id')->on('clientes');
            // $table->foreign('vendedorId')->references('id')->on('vendedores');
            // $table->foreign('productoId')->references('id')->on('productos');
            
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
