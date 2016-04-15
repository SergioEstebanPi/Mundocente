create table EMPLEOS
(
   ID_EMPLEO            int not null,
   NOMBRE_EMPLEO        varchar(100) not null,
   FECHA_CIERRE_EMPLEO  date not null,
   CONTACTO_EMPLEO      varchar(200) not null,
   TIPO_CONTRATO        char(2) not null,
   SALARIO_EMPLEO       float,
   primary key (ID_EMPLEO)
);