<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLugaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lugares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ubicacion_id')->nullable()->unsigned();
            $table->foreign('ubicacion_id')->references('id')->on('lugares')->onDelete('cascade');
            $table->string('nombre');
            $table->enum('type',['departamento','municipio','otro']);
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
        Schema::drop('lugares');
    }
}
