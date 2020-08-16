<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineaPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea_pedido', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pedido_id');
            $table->foreign('pedido_id')->references('id')->on('pedidos');
            //Referencia tabla producto
            $table->foreignId('producto_id');
            $table->foreign('producto_id')->references('id')->on('productos');

            $table->foreignId('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');

            $table->foreignId('pesos_id');
            $table->foreign('pesos_id')->references('id')->on('pesos');

            $table->foreignId('unidades_medida_id');
            $table->foreign('unidades_medida_id')->references('id')->on('unidades_medida');

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
        Schema::dropIfExists('linea_pedido');
    }
}
