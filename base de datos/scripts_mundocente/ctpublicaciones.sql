-- Creación de las estructura de la tabla PUBLICACIONES
-- Creado por: Deybi Jordan Pulido Robles 
-- Fecha de creación: 08/04/2016
-- Modificado por:
-- Fecha de modificación:
-- Observaciones:
create table PUBLICACIONES
(
   ID_ASUNTO        int not null,
   ID_FUNCIONARIO         int not null,
   FECHA_PUBLICACION         date not null,
   OBSERVACION_PUBLICACION         varchar(300),
   primary key (ID_ASUNTO, ID_FUNCIONARIO)
);