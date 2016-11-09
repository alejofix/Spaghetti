-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2016 a las 09:48:42
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_ccaa_sec_nagra_cuentas`
--
ALTER TABLE `tbl_ccaa_sec_nagra_cuentas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_ccaa_sec_nagra_cuentas`
--
ALTER TABLE `tbl_ccaa_sec_nagra_cuentas`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID cuenta', AUTO_INCREMENT=75;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
