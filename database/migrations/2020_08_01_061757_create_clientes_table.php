<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->string('apellido')->nullable();
            $table->string('rut')->nullable();
            $table->string('email')->nullable();
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable(); 
            $table->integer('plazo_factura')->nullable();
            $table->boolean('sucursales')->default(0);
            $table->index(['email', 'rut']);
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
