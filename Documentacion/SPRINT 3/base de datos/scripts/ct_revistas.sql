create table REVISTAS
(
   ID_REVISTA           int not null,
   TEMA_REVISTA         varchar(100) not null,
   FECHA_CIERRE_REVISTA date not null,
   CONTACTO_REVISTA     varchar(200) not null,
   URL_REVISTA          varchar(100),
   primary key (ID_REVISTA)
);
