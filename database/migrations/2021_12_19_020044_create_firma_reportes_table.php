<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirmaReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firma_reportes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_reporte');
            $table->string('firma1')->default("ninguno");
            $table->string('firma2')->default("contador");
            $table->string('firma3')->default("gerente");
            $table->integer('opcion_firma_enteresado');
            $table->integer('activo_opcion')->default(0);
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
        Schema::dropIfExists('firma_reportes');
    }
}
