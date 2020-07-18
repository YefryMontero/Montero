<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('estado')->default("No entregado");
            $table->foreignId('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('usuario');
            $table->foreignId('proveedor_id')->default(0);
            $table->foreign('proveedor_id')->references('id')->on('proveedores');
            $table->foreignId('cliente_id')->default(0);
            $table->foreign('cliente_id')->references('id')->on('clientes');
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
        Schema::dropIfExists('pedidos');
    }
}
