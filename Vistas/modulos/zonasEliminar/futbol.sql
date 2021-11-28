-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2021 a las 20:54:34
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `futbol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id_equipo` int(8) NOT NULL,
  `nombreEquipo` varchar(100) NOT NULL,
  `estadio` varchar(80) NOT NULL,
  `aforo` int(20) NOT NULL,
  `fundacion` int(4) NOT NULL,
  `ciudad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id_equipo`, `nombreEquipo`, `estadio`, `aforo`, `fundacion`, `ciudad`) VALUES
(1, 'Juventus', 'Juventus Stadium', 40892, 1980, 'Turín'),
(2, 'Chelsea', 'Stamford Bridge', 41837, 1905, 'Londres'),
(3, 'Pumas', 'Olímpico Universitario', 72000, 1952, 'Ciudad de México'),
(4, 'Cruz Azul', 'Estadio Azul', 50000, 1960, 'México'),
(5, 'Bayern Münich', 'Allianz Arena', 67000, 1905, 'Münich'),
(6, 'Paris SG', 'Parque de los príncipes', 70000, 1930, 'París'),
(7, 'América', 'Azteca', 80000, 1916, 'Ciudad de México'),
(8, 'Santos FC', 'Santos', 60000, 1956, 'Laguna'),
(10, 'Necaxa', 'Rayado', 55000, 1913, 'Aguascalientes');

--
-- Disparadores `equipo`
--
DELIMITER $$
CREATE TRIGGER `equipo_AI` AFTER INSERT ON `equipo` FOR EACH ROW INSERT INTO equipos(id_equipo,nombreEquipo,estadio,aforo,fundacion,ciudad)
VALUES(new.id_equipo,new.nombreEquipo,new.estadio,new.aforo,new.fundacion,new.ciudad)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gol`
--

CREATE TABLE `gol` (
  `id_gol` int(11) NOT NULL,
  `id_partido` int(11) NOT NULL,
  `minuto` int(2) NOT NULL,
  `descripcion` text NOT NULL,
  `id_jugador` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `contador` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gol`
--

INSERT INTO `gol` (`id_gol`, `id_partido`, `minuto`, `descripcion`, `id_jugador`, `id_equipo`, `contador`) VALUES
(1, 1, 45, 'Gol de tijera', 1, 1, 1),
(2, 1, 47, 'Gol de cabeza', 1, 1, 1),
(3, 2, 68, 'Gol de palomita', 2, 1, 1),
(4, 3, 75, 'Gol de zurda', 3, 2, 1),
(5, 1, 35, 'Gol de chilena', 5, 5, 1),
(6, 3, 33, 'Gol de penal', 4, 1, 1),
(7, 3, 22, 'Gol de tiro libre', 1, 1, 1),
(8, 4, 90, 'Gol de fuera del área', 6, 4, 1),
(9, 4, 56, 'Gol de cabeza', 7, 4, 1),
(10, 4, 35, 'Gol de rebote', 8, 3, 1),
(11, 4, 88, 'Gol de penal', 9, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `id_jugador` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha_nacimiento` varchar(10) NOT NULL,
  `posicion` varchar(20) NOT NULL,
  `id_equipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jugador`
--

INSERT INTO `jugador` (`id_jugador`, `nombre`, `fecha_nacimiento`, `posicion`, `id_equipo`) VALUES
(1, 'Del Piero', '1987', 'Delantero', 1),
(2, 'Pavel Nedved', '1984', 'Mediocampista', 1),
(3, 'Lionel Messi', '1987', 'Delantero', 6),
(4, 'Paulo Dybala', '1993', 'Delantero', 1),
(5, 'Lewandowski', '1987', 'Delantero', 5),
(6, 'Jonathan Rodríguez', '1993', 'Delantero', 4),
(7, 'Santiago Giménez', '1995', 'Mediocampista', 4),
(8, 'Arturo Ortiz', '1989', 'Delantero', 3),
(9, 'Fabio Álvarez', '1993', 'Defensa', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partido`
--

CREATE TABLE `partido` (
  `id_partido` int(11) NOT NULL,
  `fecha_partido` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `partido`
--

INSERT INTO `partido` (`id_partido`, `fecha_partido`) VALUES
(1, '2021-11-02'),
(2, '2021-11-06'),
(3, '2021-11-05'),
(4, '2021-11-06'),
(5, '2021-10-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presidente`
--

CREATE TABLE `presidente` (
  `id_presidente` int(8) NOT NULL,
  `AñoInicio` int(4) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellidos` varchar(150) NOT NULL,
  `id_equipo` int(8) NOT NULL,
  `FechaN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `presidente`
--

INSERT INTO `presidente` (`id_presidente`, `AñoInicio`, `Nombre`, `Apellidos`, `id_equipo`, `FechaN`) VALUES
(1, 2021, 'Massimiliano', 'Allegri', 1, '1967');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gol`
--
ALTER TABLE `gol`
  ADD PRIMARY KEY (`id_gol`),
  ADD KEY `id_equipo` (`id_equipo`),
  ADD KEY `id_partido` (`id_partido`),
  ADD KEY `id_jugador` (`id_jugador`);

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`id_jugador`),
  ADD KEY `id_equipo` (`id_equipo`);

--
-- Indices de la tabla `partido`
--
ALTER TABLE `partido`
  ADD PRIMARY KEY (`id_partido`);

--
-- Indices de la tabla `presidente`
--
ALTER TABLE `presidente`
  ADD PRIMARY KEY (`id_presidente`),
  ADD KEY `id_equipo` (`id_equipo`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `gol`
--
ALTER TABLE `gol`
  ADD CONSTRAINT `gol_ibfk_1` FOREIGN KEY (`id_partido`) REFERENCES `partido` (`id_partido`) ON DELETE CASCADE,
  ADD CONSTRAINT `gol_ibfk_2` FOREIGN KEY (`id_jugador`) REFERENCES `jugador` (`id_jugador`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gol_ibfk_3` FOREIGN KEY (`id_equipo`) REFERENCES `equipo` (`id_equipo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD CONSTRAINT `jugador_ibfk_1` FOREIGN KEY (`id_equipo`) REFERENCES `equipo` (`id_equipo`);

--
-- Filtros para la tabla `presidente`
--
ALTER TABLE `presidente`
  ADD CONSTRAINT `presidente_ibfk_1` FOREIGN KEY (`id_equipo`) REFERENCES `equipo` (`id_equipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
