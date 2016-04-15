create table PUBLICACIONES
(
   ID_PUBLICACION       int not null,
   ID_FUNCIONARIO       int not null,
   ID_REVISTA           int,
   ID_EVENTO            int,
   ID_EMPLEO            int,
   ID_LUGAR             int not null,
   TIPO_PUBLICACION          char(2) not null,
   FECHA_PUBLICACION    date not null,
   DATOS_PUBLICACION    varchar(300) not null,
   primary key (ID_PUBLICACION)
);