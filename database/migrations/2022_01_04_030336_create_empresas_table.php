<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('razonsocial');
         $table->string('nit');
            $table->string('telefono');
            $table->string('ciudad');
            $table->string('actividad');
            $table->string('responsable');
            $table->string('ci_responsable');
            $table->string('sucursal'); 
           $table->enum('estado',['activo','inactivo']);
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
        Schema::dropIfExists('empresas');
    }
}
