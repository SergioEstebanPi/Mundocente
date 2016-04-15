create table FUNCIONARIOS
(
   ID_FUNCIONARIO       int not null,
   ID_ESTABLECIMIENTO   int not null,
   NOMBRE_FUNCIONARIO   varchar(50) not null,
   APELLIDO_FUNCIONARIO varchar(50) not null,
   CARGO_FUNCIONARIO    varchar(30) not null,
   CORREO_FUNCIONARIO   varchar(100) not null,
   TELEFONO_FUNCIONARIO numeric(15,0) not null,
   primary key (ID_FUNCIONARIO)
);