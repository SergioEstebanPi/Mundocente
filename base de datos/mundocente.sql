-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-04-2016 a las 07:12:52
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mundocente`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `ID_AREA` int(11) NOT NULL,
  `NOMBRE_AREA` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asuntos`
--

CREATE TABLE `asuntos` (
  `ID_LUGAR` int(11) NOT NULL,
  `ID_ESTABLECIMIENTO` int(11) NOT NULL,
  `ID_ASUNTO` int(11) NOT NULL,
  `NOMBRE_ASUNTO` varchar(100) NOT NULL,
  `TIPO_ASUNTO` char(2) NOT NULL,
  `FECHA_INICIO_ASUNTO` date NOT NULL,
  `FECHA_CIERRE` date DEFAULT NULL,
  `TELEFONO_ASUNTO` decimal(15,0) DEFAULT NULL,
  `URL_ASUNTO` varchar(200) DEFAULT NULL,
  `CATEGORIA_EVENTO` char(2) DEFAULT NULL,
  `DIRECCION_EVENTO` varchar(50) DEFAULT NULL,
  `DESCRIPCION_EVENTO` varchar(300) DEFAULT NULL,
  `CONTACTO_EVENTO` varchar(100) DEFAULT NULL,
  `DIRECCION_REVISTA` varchar(50) DEFAULT NULL,
  `TELEFONO_REVISTA` decimal(15,0) DEFAULT NULL,
  `CORREO_REVISTA` varchar(50) DEFAULT NULL,
  `SALARIO_EMPLEO` float DEFAULT NULL,
  `REQUISITOS_EMPLEO` varchar(300) DEFAULT NULL,
  `TIPO_CONTRATO_EMPLEO` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `ID_DOCENTE` int(11) NOT NULL,
  `ID_LUGAR` int(11) NOT NULL,
  `NOMBRE_DOCENTE` varchar(50) NOT NULL,
  `APELLIDO_DOCENTE` varchar(50) NOT NULL,
  `FECHA_NACIMIENTO` date NOT NULL,
  `GENERO` char(1) NOT NULL,
  `DESCRIPCION_PROFESION` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `establecimientos`
--

CREATE TABLE `establecimientos` (
  `ID_ESTABLECIMIENTO` int(11) NOT NULL,
  `NOMBRE_ESTABLECIMIENTO` varchar(50) NOT NULL,
  `TIPO_ESTABLECIMIENTO` char(2) NOT NULL,
  `ACREDITACION` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionarios`
--

CREATE TABLE `funcionarios` (
  `ID_FUNCIONARIO` int(11) NOT NULL,
  `ID_LUGAR` int(11) NOT NULL,
  `ID_ESTABLECIMIENTO` int(11) NOT NULL,
  `NOMBRE_FUNCIONARIO` varchar(50) NOT NULL,
  `APELLIDO_FUNCIONARIO` varchar(50) NOT NULL,
  `CARGO_FUNCIONARIO` varchar(30) NOT NULL,
  `CORREO_FUNCIONARIO` varchar(100) NOT NULL,
  `TELEFONO_FUNCIONARIO` decimal(15,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `ID_ASUNTO` int(11) NOT NULL,
  `ID_AREA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intereses`
--

CREATE TABLE `intereses` (
  `ID_AREA` int(11) NOT NULL,
  `ID_DOCENTE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE `lugares` (
  `ID_LUGAR` int(11) NOT NULL,
  `ID_UBICACION` int(11) DEFAULT NULL,
  `NOMBRE_LUGAR` varchar(40) NOT NULL,
  `TIPO_LUGAR` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `ID_ASUNTO` int(11) NOT NULL,
  `ID_FUNCIONARIO` int(11) NOT NULL,
  `FECHA_PUBLICACION` date NOT NULL,
  `OBSERVACION_PUBLICACION` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`ID_AREA`);

--
-- Indices de la tabla `asuntos`
--
ALTER TABLE `asuntos`
  ADD PRIMARY KEY (`ID_ASUNTO`),
  ADD KEY `ASU_FK_IDLU` (`ID_LUGAR`),
  ADD KEY `ASU_FK_IDES` (`ID_ESTABLECIMIENTO`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`ID_DOCENTE`),
  ADD KEY `DOC_FK_IDLU` (`ID_LUGAR`);

--
-- Indices de la tabla `establecimientos`
--
ALTER TABLE `establecimientos`
  ADD PRIMARY KEY (`ID_ESTABLECIMIENTO`);

--
-- Indices de la tabla `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`ID_FUNCIONARIO`),
  ADD KEY `FUN_FK_IDLU` (`ID_LUGAR`),
  ADD KEY `FUN_FK_IDES` (`ID_ESTABLECIMIENTO`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`ID_AREA`,`ID_ASUNTO`),
  ADD KEY `GRU_FK_IDASU` (`ID_ASUNTO`);

--
-- Indices de la tabla `intereses`
--
ALTER TABLE `intereses`
  ADD PRIMARY KEY (`ID_AREA`,`ID_DOCENTE`),
  ADD KEY `GRU_FK_IDDOC` (`ID_DOCENTE`);

--
-- Indices de la tabla `lugares`
--
ALTER TABLE `lugares`
  ADD PRIMARY KEY (`ID_LUGAR`),
  ADD KEY `LUG_FK_IDU` (`ID_UBICACION`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`ID_ASUNTO`,`ID_FUNCIONARIO`),
  ADD KEY `PUB_FK_IDFUN` (`ID_FUNCIONARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `ID_AREA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `asuntos`
--
ALTER TABLE `asuntos`
  MODIFY `ID_ASUNTO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `establecimientos`
--
ALTER TABLE `establecimientos`
  MODIFY `ID_ESTABLECIMIENTO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
  MODIFY `ID_LUGAR` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asuntos`
--
ALTER TABLE `asuntos`
  ADD CONSTRAINT `ASU_FK_IDES` FOREIGN KEY (`ID_ESTABLECIMIENTO`) REFERENCES `establecimientos` (`ID_ESTABLECIMIENTO`),
  ADD CONSTRAINT `ASU_FK_IDLU` FOREIGN KEY (`ID_LUGAR`) REFERENCES `lugares` (`ID_LUGAR`);

--
-- Filtros para la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD CONSTRAINT `DOC_FK_IDLU` FOREIGN KEY (`ID_LUGAR`) REFERENCES `lugares` (`ID_LUGAR`);

--
-- Filtros para la tabla `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `FUN_FK_IDES` FOREIGN KEY (`ID_ESTABLECIMIENTO`) REFERENCES `establecimientos` (`ID_ESTABLECIMIENTO`),
  ADD CONSTRAINT `FUN_FK_IDLU` FOREIGN KEY (`ID_LUGAR`) REFERENCES `lugares` (`ID_LUGAR`);

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `GRU_FK_IDAR` FOREIGN KEY (`ID_AREA`) REFERENCES `areas` (`ID_AREA`),
  ADD CONSTRAINT `GRU_FK_IDASU` FOREIGN KEY (`ID_ASUNTO`) REFERENCES `asuntos` (`ID_ASUNTO`);

--
-- Filtros para la tabla `intereses`
--
ALTER TABLE `intereses`
  ADD CONSTRAINT `GRU_FK_IDARE` FOREIGN KEY (`ID_AREA`) REFERENCES `areas` (`ID_AREA`),
  ADD CONSTRAINT `GRU_FK_IDDOC` FOREIGN KEY (`ID_DOCENTE`) REFERENCES `docentes` (`ID_DOCENTE`);

--
-- Filtros para la tabla `lugares`
--
ALTER TABLE `lugares`
  ADD CONSTRAINT `LUG_FK_IDU` FOREIGN KEY (`ID_UBICACION`) REFERENCES `lugares` (`ID_LUGAR`);

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `PUB_FK_IDASU` FOREIGN KEY (`ID_ASUNTO`) REFERENCES `asuntos` (`ID_ASUNTO`),
  ADD CONSTRAINT `PUB_FK_IDFUN` FOREIGN KEY (`ID_FUNCIONARIO`) REFERENCES `funcionarios` (`ID_FUNCIONARIO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
