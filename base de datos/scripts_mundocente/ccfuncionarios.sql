-- Creación de las condiciones de la tabla FUNCIONARIOS
-- Creado por: Deybi Jordan Pulido Robles 
-- Fecha de creación: 08/04/2016
-- Modificado por:
-- Fecha de modificación:
-- Observaciones:

ALTER TABLE FUNCIONARIOS ADD (
	CONSTRAINT FUN_FK_IDLU FOREIGN KEY (ID_LUGAR) REFERENCES LUGARES (ID_LUGAR),
	CONSTRAINT FUN_FK_IDES FOREIGN KEY (ID_ESTABLECIMIENTO) REFERENCES ESTABLECIMIENTOS (ID_ESTABLECIMIENTO)
);

	
	