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
        DB::statement('create table LUGARES
            (
               ID_LUGAR             int not null AUTO_INCREMENT,
               ID_UBICACION         int,
               NOMBRE_LUGAR         varchar(40) not null,
               TIPO_LUGAR           char(1) not null,
               primary key (ID_LUGAR)
               );');
        DB::statement('ALTER TABLE LUGARES ADD (
            CONSTRAINT LUG_FK_IDU FOREIGN KEY (ID_UBICACION) REFERENCES LUGARES (ID_LUGAR),
            CONSTRAINT LUG_CK_TIPOL CHECK (TIPO_LUGAR IN ("D"/*DEPARTAMENTO*/,"M"/*MUNICIPIO*/,"O"/*OTRO*/))
            );');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE LUGARES');
    }
}
