-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2016 a las 09:49:08
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

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
-- Indices de la tabla `tbl_ccaa_select_nagra_razon`
--
ALTER TABLE `tbl_ccaa_select_nagra_razon`
  ADD PRIMARY KEY (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
