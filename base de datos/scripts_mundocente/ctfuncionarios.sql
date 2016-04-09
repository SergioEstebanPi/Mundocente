-- Creación de las estructura de la tabla FUNCIONARIOS
-- Creado por: Deybi Jordan Pulido Robles 
-- Fecha de creación: 08/04/2016
-- Modificado por:
-- Fecha de modificación:
-- Observaciones:
create table FUNCIONARIOS
(
   ID_FUNCIONARIO         int not null,
   ID_LUGAR             int not null,
   ID_ESTABLECIMIENTO         int not null,
   NOMBRE_FUNCIONARIO         varchar(50) not null,
   APELLIDO_FUNCIONARIO        varchar(50) not null,
   CARGO_FUNCIONARIO         varchar(30) not null,
   CORREO_FUNCIONARIO         varchar(100) not null,
   TELEFONO_FUNCIONARIO         numeric(15,0) not null,
   primary key (ID_FUNCIONARIO)
);