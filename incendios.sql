-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2021 a las 19:34:03
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `incendios`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `obtenerPuntoGeo` (IN `punto_geodesico` INT(6))  BEGIN
    SELECT * 
    FROM protege
    WHERE punto_geo = punto_geodesico;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuerpo_bomberos`
--

CREATE TABLE `cuerpo_bomberos` (
  `id_cuerpo` int(10) NOT NULL,
  `tel_emer1` int(15) NOT NULL,
  `tel_emer2` int(15) NOT NULL,
  `no_hombres` int(20) NOT NULL,
  `no_camiones` int(20) NOT NULL,
  `no_cisternas` int(20) NOT NULL,
  `no_helicoptero` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuerpo_bomberos`
--

INSERT INTO `cuerpo_bomberos` (`id_cuerpo`, `tel_emer1`, `tel_emer2`, `no_hombres`, `no_camiones`, `no_cisternas`, `no_helicoptero`) VALUES
(101, 554779942, 557892134, 20, 6, 3, 1),
(102, 55648902, 56321467, 80, 10, 5, 1),
(103, 1800648, 1800577, 100, 12, 8, 1),
(104, 554128935, 2147483647, 50, 10, 3, 1),
(106, 1522684, 1800879, 60, 8, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frecuencias`
--

CREATE TABLE `frecuencias` (
  `id_frecuencia` int(10) NOT NULL,
  `frecuencia_zona` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `frecuencias`
--

INSERT INTO `frecuencias` (`id_frecuencia`, `frecuencia_zona`) VALUES
(4, '120'),
(5, '156');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guardas`
--

CREATE TABLE `guardas` (
  `id_guarda` int(10) NOT NULL,
  `dni_guarda` varchar(20) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `telefono` int(15) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `antiguedad_anios` int(15) NOT NULL,
  `rol` varchar(25) NOT NULL,
  `contraseña` varchar(15) NOT NULL,
  `punto_geo` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `guardas`
--

INSERT INTO `guardas` (`id_guarda`, `dni_guarda`, `nombre`, `telefono`, `direccion`, `antiguedad_anios`, `rol`, `contraseña`, `punto_geo`) VALUES
(2, 'FGS525285NN', 'Fernanda Guzmán ', 2147483647, 'Los Heroes Izcalli', 4, 'admin', '123456', 15426),
(3, 'FMA15100PP', 'Fernando Maldonado', 2147483647, 'Huehuetoca centro #25', 9, 'guardia general', '123456', 542618),
(4, 'OOGJ980701NP', 'Janet Ochoa Gonzalez', 556174578, 'Francisco Marquez mza5 ', 5, 'guardia general', '123456', 87946),
(5, '', 'Emmanuel Varela', 0, '', 0, 'guarda forestal', 'meny123', 0),
(6, '', 'José Luis López', 0, '', 0, 'admin', 'luis1234', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `protege`
--

CREATE TABLE `protege` (
  `punto_geo` int(6) NOT NULL,
  `id_cuerpo` int(10) NOT NULL,
  `prioridad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `protege`
--

INSERT INTO `protege` (`punto_geo`, `id_cuerpo`, `prioridad`) VALUES
(102485, 102, '10'),
(102568, 103, '5'),
(123468, 101, '8'),
(145878, 106, '7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos_control`
--

CREATE TABLE `puestos_control` (
  `id_puesto` int(10) NOT NULL,
  `nombre_puesto` varchar(45) NOT NULL,
  `punto_geo` int(6) NOT NULL,
  `frecuencia_zona` int(10) NOT NULL,
  `dni_guarda` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puestos_control`
--

INSERT INTO `puestos_control` (`id_puesto`, `nombre_puesto`, `punto_geo`, `frecuencia_zona`, `dni_guarda`) VALUES
(1, 'guardia principal', 55525, 150, 'OOGJ980701NN'),
(3, 'guardián entrada', 123789, 120, 'JOP2568WSA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE `zonas` (
  `punto_geo` int(6) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `frecuencia_zona` int(10) NOT NULL,
  `latitud` double NOT NULL,
  `longitud` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `zonas`
--

INSERT INTO `zonas` (`punto_geo`, `nombre`, `frecuencia_zona`, `latitud`, `longitud`) VALUES
(102485, 'Zona oriente', 120, 105522, 15288),
(102568, 'Zona sur', 1500, 125555, 554148),
(123468, 'Zona poniente', 69, 41552, 181232),
(124567, 'Zona centro', 62, 2126464, 252585),
(145878, 'Zona sur', 48, 2214548, 9734515),
(316484, 'Zona central', 152, 1514581, 61262644),
(345789, 'Zona norte', 78, 2215444, 201642),
(879452, 'Zona poniente', 100, 15522485, 15554);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuerpo_bomberos`
--
ALTER TABLE `cuerpo_bomberos`
  ADD PRIMARY KEY (`id_cuerpo`);

--
-- Indices de la tabla `frecuencias`
--
ALTER TABLE `frecuencias`
  ADD PRIMARY KEY (`id_frecuencia`);

--
-- Indices de la tabla `guardas`
--
ALTER TABLE `guardas`
  ADD PRIMARY KEY (`id_guarda`);

--
-- Indices de la tabla `protege`
--
ALTER TABLE `protege`
  ADD PRIMARY KEY (`punto_geo`);

--
-- Indices de la tabla `puestos_control`
--
ALTER TABLE `puestos_control`
  ADD PRIMARY KEY (`id_puesto`);

--
-- Indices de la tabla `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`punto_geo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuerpo_bomberos`
--
ALTER TABLE `cuerpo_bomberos`
  MODIFY `id_cuerpo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT de la tabla `frecuencias`
--
ALTER TABLE `frecuencias`
  MODIFY `id_frecuencia` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `guardas`
--
ALTER TABLE `guardas`
  MODIFY `id_guarda` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `protege`
--
ALTER TABLE `protege`
  MODIFY `punto_geo` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154633;

--
-- AUTO_INCREMENT de la tabla `puestos_control`
--
ALTER TABLE `puestos_control`
  MODIFY `id_puesto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `zonas`
--
ALTER TABLE `zonas`
  MODIFY `punto_geo` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=879453;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
