<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineaProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea_producto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pedido_id')->default(0);
            $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->foreignId('factura_id')->defailt(0);
            $table->foreign('factura_id')->references('id')->on('factura');
            $table->foreignId('producto_id');
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->double('cantidad');
            $table->string('descripcion',150);
            $table->double('precio');
            $table->double('total');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('linea_producto');
    }
}
