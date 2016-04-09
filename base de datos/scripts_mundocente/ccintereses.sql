-- Creación de las condiciones de la tabla INTERESES
-- Creado por: Deybi Jordan Pulido Robles 
-- Fecha de creación: 08/04/2016
-- Modificado por:
-- Fecha de modificación:
-- Observaciones:

ALTER TABLE INTERESES ADD (
	CONSTRAINT GRU_FK_IDARE FOREIGN KEY (ID_AREA) REFERENCES AREAS (ID_AREA),
	CONSTRAINT GRU_FK_IDDOC FOREIGN KEY (ID_DOCENTE) REFERENCES DOCENTES (ID_DOCENTE)
);
