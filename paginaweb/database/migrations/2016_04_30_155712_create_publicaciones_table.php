<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('create table PUBLICACIONES
            (
             ID_PUBLICACION       int not null AUTO_INCREMENT,
             ID_FUNCIONARIO       int not null,
             ID_REVISTA           int,
             ID_EVENTO            int,
             ID_EMPLEO            int,
             ID_LUGAR             int not null,
             TIPO_PUBLICACION          char(2) not null,
             FECHA_PUBLICACION    date not null,
             DATOS_PUBLICACION    varchar(300) not null,
             primary key (ID_PUBLICACION)
             );');
        DB::statement('ALTER TABLE PUBLICACIONES ADD (  
            CONSTRAINT PUB_FK_IDFUN FOREIGN KEY (ID_FUNCIONARIO) REFERENCES FUNCIONARIOS (ID_FUNCIONARIO),
            CONSTRAINT PUB_FK_IDEM FOREIGN KEY (ID_EMPLEO) REFERENCES EMPLEOS (ID_EMPLEO),
            CONSTRAINT PUB_FK_IDEV FOREIGN KEY (ID_EVENTO) REFERENCES EVENTOS (ID_EVENTO),
            CONSTRAINT PUB_FK_IDRE FOREIGN KEY (ID_REVISTA) REFERENCES REVISTAS (ID_REVISTA),
            CONSTRAINT PUB_FK_IDLU FOREIGN KEY (ID_LUGAR) REFERENCES LUGARES (ID_LUGAR),
            CONSTRAINT PUB_CK_TIPOP CHECK (TIPO_PUBLICACION IN ("RE"/*REVISTA*/,"EM"/*EMPLEO*/,"EV"/*EVENTO*/))

            );');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE PUBLICACIONES');
    }
}
