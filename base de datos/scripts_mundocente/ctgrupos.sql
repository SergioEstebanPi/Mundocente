-- Creación de las estructura de la tabla GRUPOS
-- Creado por: Deybi Jordan Pulido Robles 
-- Fecha de creación: 08/04/2016
-- Modificado por:
-- Fecha de modificación:
-- Observaciones:
create table GRUPOS
(
   ID_ASUNTO        int not null,
   ID_AREA         int not null,
   primary key (ID_AREA, ID_ASUNTO)
);