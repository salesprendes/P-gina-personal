-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 03-10-2018 a las 10:23:43
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id7335166_pagina_curriculum`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudios`
--

CREATE TABLE `estudios` (
  `id` int(4) NOT NULL,
  `nombre_titulo` varchar(75) COLLATE utf8_spanish_ci NOT NULL,
  `calificacion_estudios` decimal(4,2) DEFAULT NULL,
  `nombre_centro_estudios` varchar(35) COLLATE utf8_spanish_ci DEFAULT NULL,
  `poblacion_centro_estudios` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `provincia_centro_estudios` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_comienzo_estudios` tinyint(2) NOT NULL,
  `fecha_fin_estudios` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estudios`
--

INSERT INTO `estudios` (`id`, `nombre_titulo`, `calificacion_estudios`, `nombre_centro_estudios`, `poblacion_centro_estudios`, `provincia_centro_estudios`, `fecha_comienzo_estudios`, `fecha_fin_estudios`) VALUES
(1, 'CFGS - Administración de sistemas en red', NULL, 'IES Montilivi', 'Girona', 'Girona', 18, NULL),
(2, 'CFGS - Desarrollo de Aplicaciones Multiplataforma', 8.70, 'IES Rafael Campalans', 'Anglés', 'Girona', 16, 18),
(3, 'Prueba de Acceso a Grado Superior', 8.00, NULL, NULL, NULL, 16, NULL),
(4, 'CFGM - Sistemas Microinformáticos y Redes', 7.50, 'IES Rafael Campalans', 'Anglés', 'Girona', 13, 15);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudios`
--
ALTER TABLE `estudios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudios`
--
ALTER TABLE `estudios`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
