-- Creación de las condiciones de la tabla LUGARES
-- Creado por: Deybi Jordan Pulido Robles 
-- Fecha de creación: 08/04/2016
-- Modificado por:
-- Fecha de modificación: 
-- Observaciones:
ALTER TABLE LUGARES ADD (
	CONSTRAINT LUG_FK_IDU FOREIGN KEY (ID_UBICACION) REFERENCES LUGARES (ID_LUGAR),
	CONSTRAINT LUG_CK_TIPL CHECK (TIPO_LUGAR IN ('D'/*DEPARTAMENTO*/,'M'/*MUNICIPIO*/,'O'/*OTRO*/))
);
