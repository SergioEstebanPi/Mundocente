-- Creación de las condiciones de la tabla DOCENTES
-- Creado por: Deybi Jordan Pulido Robles 
-- Fecha de creación: 08/04/2016
-- Modificado por:
-- Fecha de modificación:
-- Observaciones:

ALTER TABLE DOCENTES ADD (
	CONSTRAINT DOC_FK_IDLU FOREIGN KEY (ID_LUGAR) REFERENCES LUGARES (ID_LUGAR),
	CONSTRAINT DOC_CK_GEN CHECK (GENERO IN ('M'/*MASCULINO*/,'F'/*FEMENINO*/))
);

	
	