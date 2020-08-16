<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas_pedido', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('factura_id');
            $table->foreign('factura_id')->references('id')->on('factura');
            $table->foreignId('pedidos_id');
            $table->foreign('pedidos_id')->references('id')->on('pedidos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas_pedido');
    }
}
