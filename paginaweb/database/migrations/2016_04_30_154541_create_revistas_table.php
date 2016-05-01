<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('create table REVISTAS
            (
             ID_REVISTA           int not null AUTO_INCREMENT,
             TEMA_REVISTA         varchar(100) not null,
             FECHA_CIERRE_REVISTA date not null,
             CONTACTO_REVISTA     varchar(200) not null,
             URL_REVISTA          varchar(100),
             primary key (ID_REVISTA)
             );
        ');
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE REVISTAS');
    }
}
