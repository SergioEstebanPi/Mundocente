-- Creación de las estructura de la tabla ASUNTOS
-- Creado por: Deybi Jordan Pulido Robles 
-- Fecha de creación: 08/04/2016
-- Modificado por:
-- Fecha de modificación:
-- Observaciones:
create table ASUNTOS
(
   ID_LUGAR             int not null,
   ID_ESTABLECIMIENTO         int not null,
   ID_ASUNTO        int not null AUTO_INCREMENT,
   NOMBRE_ASUNTO        varchar(100) not null,
   TIPO_ASUNTO          char(2) not null,
   FECHA_INICIO_ASUNTO        date not null,
   FECHA_CIERRE         date,
   TELEFONO_ASUNTO        numeric(15,0),
   URL_ASUNTO        varchar(200),
   CATEGORIA_EVENTO         char(2),
   DIRECCION_EVENTO        varchar(50),
   DESCRIPCION_EVENTO        varchar(300),
   CONTACTO_EVENTO        varchar(100),
   DIRECCION_REVISTA    varchar(50),
   TELEFONO_REVISTA     numeric(15,0),
   CORREO_REVISTA         varchar(50),
   SALARIO_EMPLEO         float,
   REQUISITOS_EMPLEO         varchar(300),
   TIPO_CONTRATO_EMPLEO         char(2),
   primary key (ID_ASUNTO)
);