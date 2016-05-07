<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablecimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_lugar')->unsigned();    
            $table->foreign('id_lugar')->references('id')->on('lugares')->onDelete('cascade');
            $table->string('nombre');
            $table->enum('type',['universidad','instituto','otro']);
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
        Schema::drop('establecimientos');
    }
}
