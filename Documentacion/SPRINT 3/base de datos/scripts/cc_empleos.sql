ALTER TABLE EMPLEOS ADD (
	CONSTRAINT EMP_CK_TIPCON CHECK (TIPO_CONTRATO IN ('TF'/*TERMINO_FIJO*/,'TI'/*TERMINO_INDEFINIDO*/,'CO'/*CONTRATO_OCACIONAL*/))
);