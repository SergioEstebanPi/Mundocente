<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablecimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('create table ESTABLECIMIENTOS
            (
             ID_ESTABLECIMIENTO   int not null AUTO_INCREMENT,
             ID_LUGAR             int not null,
             NOMBRE_ESTABLECIMIENTO varchar(50) not null,
             TIPO_ESTABLECIMIENTO char(2) not null,
             ACREDITACION         char(1),
             primary key (ID_ESTABLECIMIENTO)
             );');
        DB::statement('ALTER TABLE ESTABLECIMIENTOS ADD (
            CONSTRAINT EST_FK_IDLU FOREIGN KEY (ID_LUGAR) REFERENCES LUGARES (ID_LUGAR),
            CONSTRAINT EST_CK_ACR CHECK (ACREDITACION IN ("A"/*ALTA*/)),
            CONSTRAINT EST_CK_TIPE CHECK (TIPO_ESTABLECIMIENTO IN ("UN"/*UNIVERSIDAD*/,"EM"/*EMPRESA*/,"IN"/*INSTITUTOS*/,"OT"/*OTRO*/))
            );');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE ESTABLECIMIENTOS');
    }
}
