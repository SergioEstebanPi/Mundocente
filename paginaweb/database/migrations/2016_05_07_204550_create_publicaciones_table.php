<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_funcionario')->nullable()->unsigned();
            $table->foreign('id_funcionario')->references('id')->on('funcionarios')->onDelete('cascade');
            $table->integer('id_lugar')->unsigned();    
            $table->foreign('id_lugar')->references('id')->on('lugares')->onDelete('cascade');
            $table->string('nombre');
            $table->enum('type',['revista','evento','empleo']);
            $table->date('fecha_publicacion');
            $table->date('fecha_cierre');
            $table->string('requisitos',500);
            $table->string('contacto');
            $table->string('url')->nullable();
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
        Schema::drop('publicaciones');
    }
}
