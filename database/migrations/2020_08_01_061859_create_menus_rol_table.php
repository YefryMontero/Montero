<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus_rol_table', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('rol_id');
            $table->foreign('rol_id')->references('id')->on('roles');
            $table->foreignId('menu_id');
            $table->foreign('menu_id')->references('id')->on('menus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus_rol_table');
    }
}
