ALTER TABLE DOCENTES ADD (
	CONSTRAINT DOC_CK_GEN CHECK (GENERO IN ('M'/*MASCULINO*/,'F'/*FEMENINO*/))
);