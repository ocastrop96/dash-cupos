CREATE TABLE `acpsy_seguimiento`  (
  `idSeguimiento` int NOT NULL AUTO_INCREMENT,
  `nCorrelativoSeg` varchar(20) NULL,
  `fRegistrSeg` date NULL,
  `idUsuario` int NULL,
  `idAtencion` int NULL,
  `idProfesional` int NULL,
  `idTipoSeguimiento` int NULL,
  `idMotSeguimiento` int NULL,
  `idEtapSegui` int NULL,
  `idDiag1Seg` int NULL DEFAULT 0,
  `idDiag2Seg` int NULL DEFAULT 0,
  `comunFamSeg` varchar(10) NULL DEFAULT NULL,
  `idFamAtSeg` int NULL,
  `idDiag1SegFam` int NULL,
  `idDiag2SegFam` int NULL DEFAULT 0,
  `obsSeg` varchar(200) NULL,
  `idStatusSeg` int NULL,
  PRIMARY KEY (`idSeguimiento`)
);

CREATE TABLE `acpsy_tipoSeguimiento`  (
  `idTipoSeguimiento` int NOT NULL,
  `detaTipSeguimienti` varchar(50) NULL,
  PRIMARY KEY (`idTipoSeguimiento`)
);

CREATE TABLE `acpsy_tipSexo`  (
  `idTipSexo` int NOT NULL AUTO_INCREMENT,
  `detaTipSexo` varchar(50) NULL,
  PRIMARY KEY (`idTipSexo`)
);

CREATE TABLE `acpsy_usuarios`  (
  `idUsuario` int NOT NULL AUTO_INCREMENT,
  `idPerfil` int NULL,
  `idEstado` int NULL,
  `dniUsuario` varchar(20) NULL,
  `apellidosUsuario` varchar(50) NULL,
  `nombresUsuario` varchar(50) NULL,
  `cuentaUsuario` varchar(50) NULL,
  `correoUsuario` varchar(50) NULL,
  `claveUsuario` varchar(20) NULL,
  `intentosUsuario` int NULL DEFAULT 0,
  `fechaAlta` timestamp NULL ON UPDATE CURRENT_TIMESTAMP,
  `profileUsuario` text NULL,
  PRIMARY KEY (`idUsuario`)
);

