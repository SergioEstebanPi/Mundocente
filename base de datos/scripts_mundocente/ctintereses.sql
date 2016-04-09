-- Creación de las estructura de la tabla INTERESES
-- Creado por: Deybi Jordan Pulido Robles 
-- Fecha de creación: 08/04/2016
-- Modificado por:
-- Fecha de modificación:
-- Observaciones:
create table INTERESES
(
   ID_AREA         int not null,
   ID_DOCENTE           int not null,
   primary key (ID_AREA, ID_DOCENTE)
);