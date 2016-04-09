-- Creación de las condiciones de la tabla GRUPOS
-- Creado por: Deybi Jordan Pulido Robles 
-- Fecha de creación: 08/04/2016
-- Modificado por:
-- Fecha de modificación:
-- Observaciones:

ALTER TABLE GRUPOS ADD (
	CONSTRAINT GRU_FK_IDARE FOREIGN KEY (ID_AREA) REFERENCES AREAS (ID_AREA),
	CONSTRAINT GRU_FK_IDASU FOREIGN KEY (ID_ASUNTO) REFERENCES ASUNTOS (ID_ASUNTO)
);
