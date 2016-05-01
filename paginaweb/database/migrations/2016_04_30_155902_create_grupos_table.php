<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('create table GRUPOS
            (
             ID_PUBLICACION       int not null,
             ID_AREA              int not null,
             primary key (ID_PUBLICACION, ID_AREA)
             );');
        DB::statement('ALTER TABLE GRUPOS ADD (
            CONSTRAINT GRU_FK_IDARE FOREIGN KEY (ID_AREA) REFERENCES AREAS (ID_AREA),
            CONSTRAINT GRU_FK_IDPU FOREIGN KEY (ID_PUBLICACION) REFERENCES PUBLICACIONES (ID_PUBLICACION)
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
        DB::statement('DROP TABLE GRUPOS');
    }
}
