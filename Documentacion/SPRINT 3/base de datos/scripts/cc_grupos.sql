ALTER TABLE GRUPOS ADD (
	CONSTRAINT GRU_FK_IDARE FOREIGN KEY (ID_AREA) REFERENCES AREAS (ID_AREA),
	CONSTRAINT GRU_FK_IDPU FOREIGN KEY (ID_PUBLICACION) REFERENCES PUBLICACIONES (ID_PUBLICACION)
);