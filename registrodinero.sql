-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2023 a las 05:37:41
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `planchon_rojo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrodinero`
--

CREATE TABLE `registrodinero` (
  `mes` varchar(30) NOT NULL,
  `dia` int(2) NOT NULL,
  `semana` varchar(30) NOT NULL,
  `plata` double NOT NULL,
  `num` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registrodinero`
--

INSERT INTO `registrodinero` (`mes`, `dia`, `semana`, `plata`, `num`) VALUES
('marzo', 21, 'martes', 110000, 1),
('marzo', 22, 'miércoles', 264000, 2),
('marzo', 23, 'jueves', 146000, 7),
('marzo', 24, 'viernes', 16000, 8),
('marzo', 25, 'sábado', 269000, 9),
('marzo', 26, 'domingo', 500000, 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registrodinero`
--
ALTER TABLE `registrodinero`
  ADD PRIMARY KEY (`num`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registrodinero`
--
ALTER TABLE `registrodinero`
  MODIFY `num` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
