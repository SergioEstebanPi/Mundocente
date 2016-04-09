-- Creación de las estructura de la tabla DOCENTES
-- Creado por: Deybi Jordan Pulido Robles 
-- Fecha de creación: 08/04/2016
-- Modificado por:
-- Fecha de modificación:
-- Observaciones:
create table DOCENTES
(
   ID_DOCENTE           int not null,
   ID_LUGAR             int not null,
   NOMBRE_DOCENTE       varchar(50) not null,
   APELLIDO_DOCENTE     varchar(50) not null,
   FECHA_NACIMIENTO     date not null,
   GENERO               char(1) not null,
   DESCRIPCION_PROFESION varchar(500) not null,
   primary key (ID_DOCENTE)
);