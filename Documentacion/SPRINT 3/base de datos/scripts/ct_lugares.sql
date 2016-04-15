create table LUGARES
(
   ID_LUGAR             int not null,
   ID_UBICACION         int,
   NOMBRE_LUGAR         varchar(40) not null,
   TIPO_LUGAR           char(1) not null,
   primary key (ID_LUGAR)
);