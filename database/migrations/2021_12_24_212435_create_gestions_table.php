<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestions', function (Blueprint $table) {
            $table->id(); 
             $table->string('descripcion');
            $table->date('fecha_ini');
            $table->date('fecha_fin');  
          //  $table->unsignedBigInteger('tipo_id');
        //    $table->foreign('tipo_id')->references('id')->on('tipo_gestions');
           // $table->enum('estado',['activo','inactivo']); 
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
        Schema::dropIfExists('gestions');
    }
}
