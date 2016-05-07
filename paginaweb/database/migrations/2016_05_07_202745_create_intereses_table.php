<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInteresesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intereses', function (Blueprint $table) {
            $table->integer('id_area')->nullable()->unsigned();
            $table->foreign('id_area')->references('id')->on('areas')->onDelete('cascade');
            $table->integer('id_docente')->nullable()->unsigned();
            $table->foreign('id_docente')->references('id')->on('docentes')->onDelete('cascade');
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
        Schema::drop('intereses');
    }
}
