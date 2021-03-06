<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonedasAUXTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monedasAUX', function (Blueprint $table) {
            $table->increments('idMoneda');
            $table->string('breve')->nullable();
            $table->string('descripcion')->nullable();
            $table->integer('predeterminado')->unsigned();
            $table->integer('estado')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monedasAUX');
    }
}
