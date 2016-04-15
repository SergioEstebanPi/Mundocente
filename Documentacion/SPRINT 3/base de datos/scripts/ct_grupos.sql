create table GRUPOS
(
   ID_PUBLICACION       int not null,
   ID_AREA              int not null,
   primary key (ID_PUBLICACION, ID_AREA)
);