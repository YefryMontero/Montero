<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('serie');
            $table->string('numero_factura');
            $table->foreignId('tipo_id');
            $table->foreign('tipo_id')->references('id')->on('tipos_factura');
            $table->string('estado')->default('Sin cancelar');
            $table->date('fecha_vencimiento');
            $table->double('total');
            $table->foreignId('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura');
    }
}
