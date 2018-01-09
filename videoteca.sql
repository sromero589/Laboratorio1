-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-01-2018 a las 01:50:03
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `videoteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `series`
--

CREATE TABLE `series` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `ActorPrincipal` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `Director` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Temporadas` tinyint(7) NOT NULL DEFAULT '0',
  `FechaEstreno` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FechaRegistro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `series`
--

INSERT INTO `series` (`id`, `Nombre`, `ActorPrincipal`, `Director`, `Temporadas`, `FechaEstreno`, `FechaRegistro`) VALUES
(14, 'TBBT', 'ASS SSSS', 'EEE EEE', 4, '2018-01-04', '2018-01-07'),
(15, 'BB', 'ASS SSSS', 'RRR RRR', 4, '2018-01-02', '2018-01-07'),
(17, 'TWD', 'SSD DDD', 'AA AAA', 4, '2018-01-03', '2018-01-03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `series`
--
ALTER TABLE `series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
