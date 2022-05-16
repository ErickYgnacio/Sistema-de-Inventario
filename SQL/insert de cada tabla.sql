
-- INSERT USUARIO
INSERT INTO USUARIO(Us_Username, Us_Contrasenia) VALUES('otic','adminerick');

-- INSERT TIPO
INSERT INTO TIPO(Tipo_Nombre) VALUES('HARDWARE');
INSERT INTO TIPO(Tipo_PadreId, Tipo_Nombre) VALUES(1,'CPU');
INSERT INTO TIPO(Tipo_PadreId, Tipo_Nombre) VALUES(1,'MONITOR');
INSERT INTO TIPO(Tipo_PadreId, Tipo_Nombre) VALUES(1,'MOUSE');
INSERT INTO TIPO(Tipo_PadreId, Tipo_Nombre) VALUES(1,'TECLADO');
INSERT INTO TIPO(Tipo_PadreId, Tipo_Nombre) VALUES(1,'ESTABILIZADOR');

-- INSERT ELEMENTO_CONFI

INSERT INTO ELEMENTO_CONFI(ElementoConfi_TipoId, ElementoConfi_Descripcion, ElementoConfi_CodigoPatrimonial) VALUES(2,'CPU DE ESCRITORIO','7001005');

-- INSERT TIPO_CONFI

	--CPU--
INSERT INTO TIPO_CONFI (TipoConfi_TipoId, TipoConfi_Atributo) values ('2', 'MARCA');
INSERT INTO TIPO_CONFI (TipoConfi_TipoId, TipoConfi_Atributo) values ('2', 'MODELO');
INSERT INTO TIPO_CONFI (TipoConfi_TipoId, TipoConfi_Atributo) values ('2', 'SERIE');
INSERT INTO TIPO_CONFI (TipoConfi_TipoId, TipoConfi_Atributo) values ('2', 'TIPO');
INSERT INTO TIPO_CONFI (TipoConfi_TipoId, TipoConfi_Atributo) values ('2', 'ESTADO')

	--MONITOR--
INSERT INTO TIPO_CONFI (TipoConfi_TipoId, TipoConfi_Atributo) values ('3', 'MARCA')
INSERT INTO TIPO_CONFI (TipoConfi_TipoId, TipoConfi_Atributo) values ('3', 'MODELO')
INSERT INTO TIPO_CONFI (TipoConfi_TipoId, TipoConfi_Atributo) values ('3', 'SERIE')
INSERT INTO TIPO_CONFI (TipoConfi_TipoId, TipoConfi_Atributo) values ('3', 'TIPO')
INSERT INTO TIPO_CONFI (TipoConfi_TipoId, TipoConfi_Atributo) values ('3', 'COLOR')
INSERT INTO TIPO_CONFI (TipoConfi_TipoId, TipoConfi_Atributo) values ('3', 'ESTADO')
INSERT INTO TIPO_CONFI (TipoConfi_TipoId, TipoConfi_Atributo) values ('3', 'ATRIBUTOX')

	--MOUSE--
INSERT INTO TIPO_CONFI (TipoConfi_TipoId, TipoConfi_Atributo) values ('4', 'MARCA')
INSERT INTO TIPO_CONFI (TipoConfi_TipoId, TipoConfi_Atributo) values ('4', 'MODELO')
INSERT INTO TIPO_CONFI (TipoConfi_TipoId, TipoConfi_Atributo) values ('4', 'SERIE')
INSERT INTO TIPO_CONFI (TipoConfi_TipoId, TipoConfi_Atributo) values ('4', 'TIPO')
INSERT INTO TIPO_CONFI (TipoConfi_TipoId, TipoConfi_Atributo) values ('4', 'COLOR')
INSERT INTO TIPO_CONFI (TipoConfi_TipoId, TipoConfi_Atributo) values ('4', 'ESTADO')
INSERT INTO TIPO_CONFI (TipoConfi_TipoId, TipoConfi_Atributo) values ('4', 'ATRIBUTOY')
INSERT INTO TIPO_CONFI (TipoConfi_TipoId, TipoConfi_Atributo) values ('4', 'ATRIBUTOZ')
INSERT INTO TIPO_CONFI (TipoConfi_TipoId, TipoConfi_Atributo) values ('4', 'ATRIBUTOX')




