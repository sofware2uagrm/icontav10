<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprobanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprobante', function (Blueprint $table) {
            $table->increments('idComprobante');
            $table->string('codigo')->nullable();
            $table->string('referidoa')->nullable();
            $table->string('numeroDocumento')->nullable();
            $table->string('razon_social')->nullable();
            $table->string('glosa')->nullable();
            $table->decimal('tc');
            $table->date('fecha')->default(date('Y-m-d H:i:s'));
            $table->integer('estado')->unsigned()->default(0);


           
            
            $table->integer('idMoneda')->unsigned()->nullable();
          
            $table->integer('idComprobanteTipo')->unsigned()->nullable();
           

            $table->integer('idUser')->unsigned()->nullable();

           
            $table->foreign('idMoneda')->on('monedas')->references('idMoneda')->onDelete('cascade');
            
            $table->foreign('idComprobanteTipo')->on('comprobante_tipo')->references('idComprobanteTipo')->onDelete('cascade');
           
            $table->foreign('idUser')->on('users')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comprobante');
    }
}
