-- Creación de las condiciones de la tabla ESTABLECIMIENTOS
-- Creado por: Deybi Jordan Pulido Robles 
-- Fecha de creación: 08/04/2016
-- Modificado por:
-- Fecha de modificación: 
-- Observaciones:
ALTER TABLE ESTABLECIMIENTOS ADD (
	CONSTRAINT EST_CK_TIPE CHECK (TIPO_ESTABLECIMIENTO IN ('UN'/*UNIVERSIDAD*/,'EM'/*EMPRESA*/,'IN'/*INSTITUTOS*/,'OT'/*OTRO*/))
);

	
	
	
	