-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2017 a las 22:09:56
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formularios_ccaa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ccaa_pri_evidente`
--

CREATE TABLE `tbl_ccaa_pri_evidente` (
  `ID` bigint(20) NOT NULL COMMENT 'ID Evidente',
  `CUENTA` varchar(100) COLLATE utf8_bin NOT NULL COMMENT 'No Cuenta',
  `TRASLADO1` varchar(5) COLLATE utf8_bin DEFAULT NULL COMMENT 'Ultimo Traslado',
  `DIRECCION1` varchar(5) COLLATE utf8_bin DEFAULT NULL COMMENT 'Direccion Inicial',
  `FACTURA1` varchar(5) COLLATE utf8_bin DEFAULT NULL COMMENT 'Valor Ult Factura',
  `FECHA` datetime NOT NULL COMMENT 'Fecha del Evidente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ccaa_pri_nagra`
--

CREATE TABLE `tbl_ccaa_pri_nagra` (
  `ID` bigint(20) NOT NULL COMMENT 'ID Formulario Nagra',
  `TIPO` varchar(100) NOT NULL COMMENT 'Tipo del Motivo',
  `CUENTA` bigint(20) NOT NULL COMMENT 'Cuenta del Motivo',
  `RAZON` int(2) NOT NULL COMMENT 'Razón del Tipo',
  `FECHA` datetime NOT NULL COMMENT 'Fecha del Reporte',
  `REFERENCIA` varchar(100) DEFAULT NULL COMMENT 'Referencia Motivo Tipo',
  `DESCRIPCION` mediumtext COMMENT 'Descripción de la falla',
  `SINTOMARECREADO` int(2) NOT NULL COMMENT '1 SI 0 NO',
  `SINTOMA1` mediumtext COMMENT 'Sintoma #1',
  `SINTOMA2` mediumtext COMMENT 'Sintoma #2',
  `SINTOMA3` mediumtext COMMENT 'Sintoma #3',
  `SINTOMA4` mediumtext COMMENT 'Sintoma #4',
  `SINTOMA5` mediumtext COMMENT 'Sintoma #5',
  `SINTOMA6` mediumtext COMMENT 'Sintoma #6',
  `SINTOMA7` mediumtext COMMENT 'Sintoma #7',
  `ERROR` int(2) NOT NULL COMMENT 'frecuencia de la Falla',
  `FALLASOLUCIONADA` int(2) NOT NULL COMMENT '1 SI 0 NO',
  `SOLUCIONSI1` mediumtext COMMENT 'Solución SI #1',
  `SOLUCIONSI2` mediumtext COMMENT 'Solución SI #2',
  `SOLUCIONSI3` mediumtext COMMENT 'Solución SI #3',
  `SOLUCIONSI4` mediumtext COMMENT 'Solución SI #4',
  `SOLUCIONSI5` mediumtext COMMENT 'Solución SI #5',
  `SOLUCIONSI6` mediumtext COMMENT 'Solución SI #6',
  `SOLUCIONSI7` mediumtext COMMENT 'Solución SI #7',
  `SOLUCIONNO1` mediumtext COMMENT 'Solución NO #1',
  `SOLUCIONNO2` mediumtext COMMENT 'Solución NO #2',
  `SOLUCIONNO3` mediumtext COMMENT 'Solución NO #3',
  `SOLUCIONNO4` mediumtext COMMENT 'Solución NO #4',
  `SOLUCIONNO5` mediumtext COMMENT 'Solución NO #5',
  `SOLUCIONNO6` mediumtext COMMENT 'Solución NO #6',
  `SOLUCIONNO7` mediumtext COMMENT 'Solución NO #7',
  `ESCALAMIENTO` varchar(100) DEFAULT NULL COMMENT 'No Solución Escalado a: ',
  `USUARIO` varchar(100) NOT NULL COMMENT 'Usuario CCAA Gestión ',
  `EMPRESA` varchar(100) NOT NULL COMMENT 'Empresa Usuario'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ccaa_pri_traslados_cancelaciones`
--

CREATE TABLE `tbl_ccaa_pri_traslados_cancelaciones` (
  `ID` bigint(20) NOT NULL COMMENT 'ID Traslados cancelaciones',
  `CUENTA` varchar(100) COLLATE utf8_bin NOT NULL COMMENT 'Cuenta Traslado',
  `FECHA` datetime NOT NULL COMMENT 'Fecha Reporte',
  `CIUDADACTUAL` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `DIRECCIONTRASLADO` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `CIUDADTRASLADO` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `NODOTRASLADO` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `ESTRATOTRASLADO` varchar(5) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ccaa_sec_nagra_cuentas`
--

CREATE TABLE `tbl_ccaa_sec_nagra_cuentas` (
  `ID` int(2) NOT NULL COMMENT 'ID cuenta',
  `CUENTA` varchar(100) NOT NULL COMMENT 'No Cta'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_ccaa_sec_nagra_cuentas`
--

INSERT INTO `tbl_ccaa_sec_nagra_cuentas` (`ID`, `CUENTA`) VALUES
(1, '5894514'),
(2, '648857'),
(3, '1380666'),
(4, '1575349'),
(5, '2876837'),
(6, '3927977'),
(7, '3952017'),
(8, '4602025'),
(9, '5719307'),
(10, '5986732'),
(11, '6103220'),
(12, '10142727'),
(13, '10456051'),
(14, '10574309'),
(15, '11147279'),
(16, '14057806'),
(17, '14065510'),
(18, '14151187'),
(19, '14313621'),
(20, '14313621'),
(21, '15289770'),
(22, '15387806'),
(23, '15780067'),
(24, '16408809'),
(25, '18595389'),
(26, '19535632'),
(27, '23595903'),
(28, '23942667'),
(29, '28662187'),
(30, '32819641'),
(31, '33372152'),
(32, '37196284'),
(33, '37402484'),
(34, '37552429'),
(35, '38406773'),
(36, '40264129'),
(37, '42322172'),
(38, '46648960'),
(39, '48241285'),
(40, '49798697'),
(41, '49948037'),
(42, '53004131'),
(43, '54411913'),
(44, '55170468'),
(45, '55691794'),
(46, '57056889'),
(47, '61509287'),
(48, '63311294'),
(49, '65593493'),
(50, '65990863'),
(51, '67390286'),
(52, '69698884'),
(53, '69714160'),
(54, '69775633'),
(55, '69883718'),
(56, '70085964'),
(57, '70102876'),
(58, '70398904'),
(59, '73542250'),
(60, '73927337'),
(61, '77628162'),
(62, '77744175'),
(63, '81076135'),
(64, '81527210'),
(65, '81683096'),
(66, '82130287'),
(67, '83680223'),
(68, '86166014'),
(69, '86707825'),
(70, '87364071'),
(71, '90240813'),
(72, '94964889'),
(73, '96833512'),
(74, '18324863');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ccaa_select_nagra_frecuencia`
--

CREATE TABLE `tbl_ccaa_select_nagra_frecuencia` (
  `ID` int(2) NOT NULL COMMENT 'ID frecuencia de Fallo',
  `FRECUENCIA` varchar(50) COLLATE utf8_bin NOT NULL COMMENT 'Frecuencia Fallo',
  `ESTADO` int(2) NOT NULL COMMENT 'Estado de Frecuancia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_ccaa_select_nagra_frecuencia`
--

INSERT INTO `tbl_ccaa_select_nagra_frecuencia` (`ID`, `FRECUENCIA`, `ESTADO`) VALUES
(1, 'SIEMPRE', 1),
(2, 'ALGUNAS VECES', 1),
(3, 'ES LA PRIMERA VEZ', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ccaa_select_nagra_razon`
--

CREATE TABLE `tbl_ccaa_select_nagra_razon` (
  `ID` int(2) NOT NULL COMMENT 'ID Razones Nagra',
  `RAZON` varchar(50) COLLATE utf8_bin NOT NULL COMMENT 'Nombre de la Razón',
  `ESTADO` int(2) NOT NULL COMMENT '1 Enable'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_ccaa_select_nagra_razon`
--

INSERT INTO `tbl_ccaa_select_nagra_razon` (`ID`, `RAZON`, `ESTADO`) VALUES
(1, 'FALLA EN TELEVISIÓN', 1),
(2, 'FALLA EN CLARO VIDEO', 1),
(3, 'FALLA EN TELEVISIÓN Y CLARO VIDEO', 1),
(4, 'OTRAS FALLAS', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_ccaa_pri_evidente`
--
ALTER TABLE `tbl_ccaa_pri_evidente`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbl_ccaa_pri_nagra`
--
ALTER TABLE `tbl_ccaa_pri_nagra`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_TBL_CCAA_PRI_NAGRA_TBL_CCAA_SELECT_NAGRA_RAZON_idx` (`RAZON`),
  ADD KEY `fk_TBL_CCAA_PRI_NAGRA_TBL_CCAA_SELECT_NAGRA_FRECUENCIA1_idx` (`ERROR`);

--
-- Indices de la tabla `tbl_ccaa_pri_traslados_cancelaciones`
--
ALTER TABLE `tbl_ccaa_pri_traslados_cancelaciones`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbl_ccaa_sec_nagra_cuentas`
--
ALTER TABLE `tbl_ccaa_sec_nagra_cuentas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbl_ccaa_select_nagra_frecuencia`
--
ALTER TABLE `tbl_ccaa_select_nagra_frecuencia`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbl_ccaa_select_nagra_razon`
--
ALTER TABLE `tbl_ccaa_select_nagra_razon`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_ccaa_pri_evidente`
--
ALTER TABLE `tbl_ccaa_pri_evidente`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'ID Evidente';
--
-- AUTO_INCREMENT de la tabla `tbl_ccaa_pri_nagra`
--
ALTER TABLE `tbl_ccaa_pri_nagra`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'ID Formulario Nagra';
--
-- AUTO_INCREMENT de la tabla `tbl_ccaa_pri_traslados_cancelaciones`
--
ALTER TABLE `tbl_ccaa_pri_traslados_cancelaciones`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'ID Traslados cancelaciones';
--
-- AUTO_INCREMENT de la tabla `tbl_ccaa_sec_nagra_cuentas`
--
ALTER TABLE `tbl_ccaa_sec_nagra_cuentas`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID cuenta', AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT de la tabla `tbl_ccaa_select_nagra_frecuencia`
--
ALTER TABLE `tbl_ccaa_select_nagra_frecuencia`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID frecuencia de Fallo', AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_ccaa_pri_nagra`
--
ALTER TABLE `tbl_ccaa_pri_nagra`
  ADD CONSTRAINT `fk_TBL_CCAA_PRI_NAGRA_TBL_CCAA_SELECT_NAGRA_FRECUENCIA1` FOREIGN KEY (`ERROR`) REFERENCES `tbl_ccaa_select_nagra_frecuencia` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TBL_CCAA_PRI_NAGRA_TBL_CCAA_SELECT_NAGRA_RAZON` FOREIGN KEY (`RAZON`) REFERENCES `tbl_ccaa_select_nagra_razon` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
