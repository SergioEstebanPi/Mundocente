<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('create table EVENTOS
            (
             ID_EVENTO            int not null AUTO_INCREMENT,
             NOMBRE_EVENTO        varchar(100) not null,
             FECHA_CIERRE_EVENTO  date not null,
             CONTACTO_EVENTO      varchar(200) not null,
             CATEGORIA_EVENTO     char(2) not null,
             DIRECCION_EVENTO     varchar(50),
             primary key (ID_EVENTO)
             );
        ');
        DB::statement('ALTER TABLE EVENTOS ADD (
            CONSTRAINT EVE_CK_CAT CHECK (CATEGORIA_EVENTO IN ("SE"/*SEMINARIO*/,"AS"/*ASAMBLEA*/,"CO"/*CONVENCIONE*/,"JO"/*JORNADA*/,"CG"/*CONGRESO*/,"RE"/*REUNIONE*/,"CF"/*CONFERENCIA*,"SI"/*SIMPOSIO*/,"TA"/*TALLER*/,"FO"/*FORO*/,"CU"/*CURSO*/))
            );');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE EVENTOS');
    }
}
