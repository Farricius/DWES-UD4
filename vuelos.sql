-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 22-10-2021 a las 14:28:30
-- Versión del servidor: 8.0.26-0ubuntu0.20.04.2
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenciaviajes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelos`
--

CREATE TABLE `vuelos` (
  `id` int NOT NULL,
  `Origen` text COLLATE utf8mb4_general_ci NOT NULL,
  `Destino` text COLLATE utf8mb4_general_ci NOT NULL,
  `Fecha` datetime NOT NULL,
  `Companya` text COLLATE utf8mb4_general_ci NOT NULL,
  `ModeloAvion` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vuelos`
--

INSERT INTO `vuelos` (`id`, `Origen`, `Destino`, `Fecha`, `Companya`, `ModeloAvion`) VALUES
(1, 'Sevilla', 'MAdrid', '2021-10-22 13:44:53', 'Ryanair', 'A320'),
(2, 'Sevilla', 'Berlín', '2021-11-01 14:02:35', 'Ryanair', 'A500'),
(3, 'Sevilla', 'New York', '2021-11-04 14:03:44', 'EasyJet', 'Boeing737'),
(4, 'Madrid', 'Los Ángeles', '2021-11-17 14:04:41', 'Sky Line', 'AK-47'),
(5, 'Castellón', 'Buenos Aires', '2021-10-30 14:05:45', 'Iberia', 'TAWAPO-390'),
(6, 'Madrid', 'Tokyo', '2021-11-30 14:05:45', 'Iberia Inter', 'CR7'),
(7, 'Málaga', 'París', '2021-12-22 13:44:53', 'Ryanair FR', 'A320'),
(8, 'Málaga', 'México DF', '2021-11-22 13:44:53', 'Ryanair MX', 'AYP420'),
(9, 'Barcelona', 'La Paz', '2021-10-22 13:44:53', 'EasyJet', 'ABC999'),
(10, 'Castellón', 'Sidney', '2022-01-06 13:44:53', 'Kangaroo', 'Koala-900');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `vuelos`
--
ALTER TABLE `vuelos`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `vuelos`
--
ALTER TABLE `vuelos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
