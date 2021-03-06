CREATE TABLE ELEMENTO_CONFI(
    ElementoConfi_id INT IDENTITY(1,1) PRIMARY KEY,
    ElementoConfi_TipoId INT,
    ElementoConfi_Descripcion VARCHAR(150),
    ElementoConfi_CodigoPatrimonial CHAR(15),

    CONSTRAINT FK_ElementoConfi_TipoId FOREIGN KEY(ElementoConfi_TipoId)
    REFERENCES TIPO
);
-- TABLA RECURSIVA
CREATE TABLE TIPO(
    Tipo_Id INT IDENTITY(1,1) PRIMARY KEY,
    Tipo_PadreId INT,
    Tipo_Nombre VARCHAR(50),

    CONSTRAINT FK_Recursiva_TipoPadreId FOREIGN KEY(Tipo_PadreId)
    REFERENCES TIPO
);

CREATE TABLE TIPO_CONFI(
    TipoConfi_Id INT IDENTITY(1,1) PRIMARY KEY,
    TipoConfi_TipoId INT,
    TipoConfi_Atributo VARCHAR(30),

    CONSTRAINT FK_TipoConfi_TipoId FOREIGN KEY(TipoConfi_TipoId)
    REFERENCES TIPO,

    CONSTRAINT UNIQUE_TipoId_Atributo UNIQUE(TipoConfi_TipoId, TipoConfi_Atributo)
);

CREATE TABLE USUARIO(
    Us_IdUsuario INT IDENTITY(1,1) PRIMARY KEY,
    Us_Username VARCHAR(20) UNIQUE NOT NULL, 
    Us_Contrasenia VARCHAR(25) NOT NULL,
);

CREATE TABLE ATRIBUTO(
    Atributo_Id INT IDENTITY(1,1) PRIMARY KEY,
    Atributo_ElementoConfId INT NOT NULL UNIQUE,
    MARCA VARCHAR(50),
    MODELO VARCHAR(50),
    TIPO VARCHAR(50),
    CAPACIDAD VARCHAR(50),
    SERIE VARCHAR(50),
    ESTADO VARCHAR(50),
    COLOR VARCHAR(50),
    ATRIBUTOX VARCHAR(50),
    ATRIBUTOY VARCHAR(50),
    ATRIBUTOZ VARCHAR(50),
    ATRIBUTOA VARCHAR(50),
    ATRIBUTOB VARCHAR(50),
    ATRIBUTOC VARCHAR(50),
    ATRIBUTOD VARCHAR(50),
    ATRIBUTOE VARCHAR(50),

    CONSTRAINT FK_Atributo_ElementoConfId FOREIGN KEY(Atributo_ElementoConfId)
    REFERENCES ELEMENTO_CONFI
)

--TABLA AREA --
CREATE  TABLE AREA(
    Ar_IdArea INT IDENTITY(1,1) PRIMARY KEY,
    Ar_Nombre VARCHAR(100) NOT NULL UNIQUE,
	Ar_Siglas CHAR(12) UNIQUE,
    Ar_Estado CHAR(1) DEFAULT '1',

    Ar_Flag CHAR(1) DEFAULT '0',
);