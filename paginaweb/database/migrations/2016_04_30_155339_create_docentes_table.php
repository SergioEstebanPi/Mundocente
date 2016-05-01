<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('create table DOCENTES
            (
             ID_DOCENTE           int not null AUTO_INCREMENT,
             NOMBRE_DOCENTE       varchar(50) ,
             APELLIDO_DOCENTE     varchar(50) ,
             FECHA_NACIMIENTO     date ,
             GENERO               char(1) ,
             DESCRIPCION_PROFESION varchar(500),
             primary key (ID_DOCENTE)
             );');
        DB::statement('ALTER TABLE DOCENTES ADD (
            CONSTRAINT DOC_CK_GEN CHECK (GENERO IN ("M"/*MASCULINO*/,"F"/*FEMENINO*/))
            );');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE DOCENTES');
    }
}
