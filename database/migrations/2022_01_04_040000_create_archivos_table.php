<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('archivonuevoblanco');
            $table->string('archivonuevoplancuentas');
            $table->string('archivoplancuentacotizacionesdolarufv');
            $table->string('reaperturagestiontieneplancuenta');
            $table->string('cotizaciones');
            $table->string('planes');
            $table->string('basecontabfb');
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
        Schema::dropIfExists('archivos');
    }
}
