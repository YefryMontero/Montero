<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('usuario',50)->unique();
            $table->string('password',100);
            $table->string('name',150);
            $table->string('lastName',150);
            $table->string('typeID',30)->nullable();
            $table->string('identificacion',30)->unique();
            $table->string('phone',15)->unique();
            $table->string('email',150)->unique();
            $table->rememberToken();
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
        Schema::dropIfExists('usuario');
    }
}
