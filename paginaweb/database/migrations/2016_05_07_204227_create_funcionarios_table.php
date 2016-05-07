<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_estableimiento')->nullable()->unsigned();
            $table->foreign('id_estableimiento')->references('id')->on('establecimientos')->onDelete('cascade');
            $table->string('nombre');
            $table->string('apellido')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('type',['funcionario']);
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
        Schema::drop('funcionarios');
    }
}
