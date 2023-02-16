-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 16-02-2023 a las 07:58:39
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pagina_curriculum`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudios`
--

DROP TABLE IF EXISTS `estudios`;
CREATE TABLE IF NOT EXISTS `estudios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(75) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `calificacion` decimal(4,2) DEFAULT NULL,
  `nombre_centro_estudios` varchar(55) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `poblacion_centro_estudios` varchar(65) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `provincia_centro_estudios` varchar(55) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `fecha_comienzo_estudios` date NOT NULL COMMENT 'Fecha Inicio de estudios',
  `fecha_fin_estudios` date DEFAULT NULL COMMENT 'Fecha fin de estudios',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `estudios`
--

INSERT INTO `estudios` (`id`, `nombre`, `calificacion`, `nombre_centro_estudios`, `poblacion_centro_estudios`, `provincia_centro_estudios`, `fecha_comienzo_estudios`, `fecha_fin_estudios`) VALUES
(1, 'CFGS - Desarrollo de Aplicaciones Multiplataforma', '8.00', 'INS Montilivi', 'Girona', 'Girona', '2016-09-12', '2019-05-22'),
(2, 'Prueba de Acceso a Grado Superior', '8.00', 'GENCAT', 'Cataluña', 'Cataluña', '2016-05-22', NULL),
(3, 'CFGM - Sistemas Microinformáticos y Redes', '7.50', 'INS Rafael Campalans', 'Anglés', 'Girona', '2013-09-12', '2015-05-22'),
(4, 'Prueba de Acceso a Grado Medio', '6.50', 'GENCAT', 'Cataluña', 'Cataluña', '2013-05-22', NULL),
(5, '98-366 MTA Networking Fundamentals', '84.00', 'CERTIPORT/MICROSOFT', 'Online', 'Online', '2019-04-23', NULL),
(6, '98-365 MTA Windows® Server Administration Fundamentals', '70.00', 'CERTIPORT/MICROSOFT', 'Online', 'Online', '2019-04-19', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habilidades`
--

DROP TABLE IF EXISTS `habilidades`;
CREATE TABLE IF NOT EXISTS `habilidades` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb3_spanish_ci NOT NULL,
  `porcentaje` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `habilidades`
--

INSERT INTO `habilidades` (`id`, `nombre`, `porcentaje`) VALUES
(1, 'CSS', 50),
(2, 'HTML | PHP | Bootstrap', 100),
(3, 'Windows | Linux | MacOS', 100),
(4, 'Pentesting', 70),
(5, 'Java', 95),
(6, 'c++', 70),
(7, 'C#', 90),
(8, 'Angular-4 | Ionic-3', 40),
(9, 'MYSQL', 90);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
