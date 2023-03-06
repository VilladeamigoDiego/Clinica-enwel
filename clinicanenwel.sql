-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2023 a las 01:15:42
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinicanenwel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `idTurno` int(11) NOT NULL,
  `nombreTurno` varchar(50) NOT NULL,
  `apellidoTurno` varchar(50) NOT NULL,
  `DNI` varchar(8) NOT NULL,
  `domicilio` text NOT NULL,
  `ciudad` varchar(40) NOT NULL,
  `provincia` varchar(20) NOT NULL,
  `codPostal` varchar(4) NOT NULL,
  `especialidad` varchar(25) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`idTurno`, `nombreTurno`, `apellidoTurno`, `DNI`, `domicilio`, `ciudad`, `provincia`, `codPostal`, `especialidad`, `fecha`) VALUES
(1, '', '', '', '', '', 'Selecciona una provi', '', 'Elige una especialidad', '0000-00-00'),
(2, '', '', '', '', '', 'Selecciona una provi', '', 'Elige una especialidad', '0000-00-00'),
(3, 'Hector', 'Gomes', '35712432', '', 'mendoza', 'Mendoza', '5487', 'clinica', '2023-03-17'),
(4, 'Hector', 'Gomes', '35712432', '', 'mendoza', 'Mendoza', '5487', 'clinica', '2023-03-17'),
(5, 'Hector', 'Gomes', '35712432', '', 'mendoza', 'Mendoza', '5487', 'clinica', '2023-03-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` text NOT NULL,
  `avatar` text NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `email`, `pass`, `avatar`, `activo`) VALUES
(1, 'Administrador', 'neunluisito@correo.com', '$2y$10$pRrX.qDjliuguYTP4dOxTuVbFd.Kixcny.DxESvq3nhRpfwAC/T56', '', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`idTurno`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `idTurno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
