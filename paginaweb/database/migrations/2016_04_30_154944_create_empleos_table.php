<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('create table EMPLEOS
            (
             ID_EMPLEO            int not null AUTO_INCREMENT,
             NOMBRE_EMPLEO        varchar(100) not null,
             FECHA_CIERRE_EMPLEO  date not null,
             CONTACTO_EMPLEO      varchar(200) not null,
             TIPO_CONTRATO        char(2) not null,
             SALARIO_EMPLEO       float,
             primary key (ID_EMPLEO)
             );');
        DB::statement('ALTER TABLE EMPLEOS ADD (
            CONSTRAINT EMP_CK_TIPCON CHECK (TIPO_CONTRATO IN ("TF"/*TERMINO_FIJO*/,"TI"/*TERMINO_INDEFINIDO*/,"CO"/*CONTRATO_OCACIONAL*/))
            );');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE EMPLEOS');
    }
}
