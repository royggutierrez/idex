-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2020 a las 16:10:38
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `academica`
--
CREATE DATABASE IF NOT EXISTS `academica` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `academica`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `programa` varchar(50) NOT NULL,
  `n1` decimal(10,0) NOT NULL,
  `n2` decimal(10,0) NOT NULL,
  `n3` decimal(10,0) NOT NULL,
  `prome` decimal(10,0) NOT NULL,
  `unidades` varchar(30) NOT NULL,
  `semestre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pru`
--

CREATE TABLE `pru` (
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `programa` varchar(50) NOT NULL,
  `n1` decimal(10,0) NOT NULL,
  `n2` decimal(10,0) NOT NULL,
  `n3` decimal(10,0) NOT NULL,
  `promedio` decimal(10,0) NOT NULL,
  `unidades` varchar(50) NOT NULL,
  `semestre` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pru`
--

INSERT INTO `pru` (`nombres`, `apellidos`, `programa`, `n1`, `n2`, `n3`, `promedio`, `unidades`, `semestre`) VALUES
('Diego', 'GOMEZ', 'Electricidad Indústrial', '1', '1', '1', '1', 'Arquitectura de Hardware', 'I');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
