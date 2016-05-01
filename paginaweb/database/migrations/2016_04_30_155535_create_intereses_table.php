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
        DB::statement('create table INTERESES
            (
               ID_AREA              int not null,
               ID_DOCENTE           int not null,
               primary key (ID_AREA, ID_DOCENTE)
               );');
        DB::statement('ALTER TABLE INTERESES ADD (
            CONSTRAINT INT_FK_IDARE FOREIGN KEY (ID_AREA) REFERENCES AREAS (ID_AREA),
            CONSTRAINT INT_FK_IDDOC FOREIGN KEY (ID_DOCENTE) REFERENCES DOCENTES (ID_DOCENTE)
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
        DB::statement('DROP TABLE INTERESES');
    }
}
