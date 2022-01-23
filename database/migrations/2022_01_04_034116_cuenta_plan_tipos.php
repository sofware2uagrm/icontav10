<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CuentaPlanTipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //ya tabla creada con ese nombre modificar porq esta siendo utilizada
        Schema::create('cuenta_plan_tipoAUX', function (Blueprint $table) {
            $table->increments('idCuentaPlanTipo');
            $table->string('descripcion');
            $table->integer('estado')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
