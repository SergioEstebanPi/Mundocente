-- Creación de las estructura de la tabla ESTABLECIMIENTOS
-- Creado por: Deybi Jordan Pulido Robles 
-- Fecha de creación: 08/04/2016
-- Modificado por:
-- Fecha de modificación:
-- Observaciones:
create table ESTABLECIMIENTOS
(
   ID_ESTABLECIMIENTO           int not null AUTO_INCREMENT,
   NOMBRE_ESTABLECIMIENTO         varchar(50) not null,
   TIPO_ESTABLECIMIENTO        char(2) not null,
   ACREDITACION         varchar(50),
   primary key (ID_ESTABLECIMIENTO)
);