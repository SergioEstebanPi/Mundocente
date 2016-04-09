-- Creación de las condiciones de la tabla PUBLICACIONES
-- Creado por: Deybi Jordan Pulido Robles 
-- Fecha de creación: 08/04/2016
-- Modificado por:
-- Fecha de modificación:
-- Observaciones:

ALTER TABLE PUBLICACIONES ADD (
	CONSTRAINT PUB_FK_IDASU FOREIGN KEY (ID_ASUNTO) REFERENCES ASUNTOS (ID_ASUNTO),
	CONSTRAINT PUB_FK_IDFUN FOREIGN KEY (ID_FUNCIONARIO) REFERENCES FUNCIONARIOS (ID_FUNCIONARIO)
);
