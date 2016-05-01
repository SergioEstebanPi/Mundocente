<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('create table AREAS
            (
             ID_AREA              int not null AUTO_INCREMENT,
             NOMBRE_AREA          varchar(30) not null,
             primary key (ID_AREA)
             );');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         DB::statement('DROP TABLE AREAS');
    }
}
