create table EVENTOS
(
   ID_EVENTO            int not null,
   NOMBRE_EVENTO        varchar(100) not null,
   FECHA_CIERRE_EVENTO  date not null,
   CONTACTO_EVENTO      varchar(200) not null,
   CATEGORIA_EVENTO     char(2) not null,
   DIRECCION_EVENTO     varchar(50),
   primary key (ID_EVENTO)
);
