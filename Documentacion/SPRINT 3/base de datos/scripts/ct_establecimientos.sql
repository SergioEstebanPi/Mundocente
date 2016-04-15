create table ESTABLECIMIENTOS
(
   ID_ESTABLECIMIENTO   int not null,
   ID_LUGAR             int not null,
   NOMBRE_ESTABLECIMIENTO varchar(50) not null,
   TIPO_ESTABLECIMIENTO char(2) not null,
   ACREDITACION         char(1),
   primary key (ID_ESTABLECIMIENTO)
);