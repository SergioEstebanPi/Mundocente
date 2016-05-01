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
        DB::statement('create table FUNCIONARIOS
            (
             ID_FUNCIONARIO       int not null AUTO_INCREMENT,
             ID_ESTABLECIMIENTO   int not null,
             NOMBRE_FUNCIONARIO   varchar(50) not null,
             APELLIDO_FUNCIONARIO varchar(50) not null,
             CARGO_FUNCIONARIO    varchar(30) not null,
             CORREO_FUNCIONARIO   varchar(100) not null,
             TELEFONO_FUNCIONARIO numeric(15) not null,
             primary key (ID_FUNCIONARIO)
             );');
        DB::statement('ALTER TABLE FUNCIONARIOS ADD (
            CONSTRAINT FUN_FK_IDES FOREIGN KEY (ID_ESTABLECIMIENTO) REFERENCES ESTABLECIMIENTOS (ID_ESTABLECIMIENTO)
            );');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE FUNCIONARIOS');
    }
}
