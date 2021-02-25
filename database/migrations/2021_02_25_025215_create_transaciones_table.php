<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaciones', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->index();
            $table->string('transaccion')->unique()->index();
            $table->date('fecha_transaccion')->nullable();
            $table->integer('producto_id')->index();
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
        Schema::dropIfExists('transaciones');
    }
}
