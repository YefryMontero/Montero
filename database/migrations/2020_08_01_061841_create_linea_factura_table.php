<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineaFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea_factura', function (Blueprint $table) {
            $table->id();
            $table->foreignId('factura_id');
            $table->foreign('factura_id')->references('id')->on('factura');
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
            $table->double('precio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('linea_factura');
    }
}
