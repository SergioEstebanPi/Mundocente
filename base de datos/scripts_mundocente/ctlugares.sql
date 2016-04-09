-- Creación de las estructura de la tabla LUGARES
-- Creado por: Deybi Jordan Pulido Robles 
-- Fecha de creación: 08/04/2016
-- Modificado por:
-- Fecha de modificación:
-- Observaciones:
create table LUGARES
(
   ID_LUGAR             int not null AUTO_INCREMENT,
   ID_UBICACION         int,
   NOMBRE_LUGAR         varchar(40) not null,
   TIPO_LUGAR           char(1) not null,
   primary key (ID_LUGAR)
);
