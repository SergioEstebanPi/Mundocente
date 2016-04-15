create table DOCENTES
(
   ID_DOCENTE           int not null,
   NOMBRE_DOCENTE       varchar(50) not null,
   APELLIDO_DOCENTE     varchar(50) not null,
   FECHA_NACIMIENTO     date not null,
   GENERO               char(1) not null,
   DESCRIPCION_PROFESION varchar(500) not null,
   primary key (ID_DOCENTE)
);