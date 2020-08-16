<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario', function (Blueprint $table) {
            $table->id();
            //Referencia tabla producto
            $table->foreignId('producto_id');
            $table->foreign('producto_id')->references('id')->on('productos');
            //Referencia tabla categoria
            $table->foreignId('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');

            $table->foreignId('pesos_id');
            $table->foreign('pesos_id')->references('id')->on('pesos');

            $table->foreignId('unidades_medida_id');
            $table->foreign('unidades_medida_id')->references('id')->on('unidades_medida');

            $table->double('cantidad');
            $table->string('descripcion',150);
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
        Schema::dropIfExists('inventario');
    }
}
