-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2020 a las 02:56:28
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `madeufps`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `id_actividad` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `id_docente` int(11) DEFAULT NULL,
  `id_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `documento` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `correo_institucional` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargar_actividad`
--

CREATE TABLE `cargar_actividad` (
  `id_cargar` int(11) NOT NULL,
  `id_actividad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargar_microcurriculo`
--

CREATE TABLE `cargar_microcurriculo` (
  `id_carga` int(11) NOT NULL,
  `documento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `num_estudiantes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descargar_actividad`
--

CREATE TABLE `descargar_actividad` (
  `id_descarga` int(11) NOT NULL,
  `id_actividad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `documento` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `correo_institucional` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluar_actividad`
--

CREATE TABLE `evaluar_actividad` (
  `id_evaluar` int(11) NOT NULL,
  `id_actividad` int(11) DEFAULT NULL,
  `calificacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_alumno`
--

CREATE TABLE `grupo_alumno` (
  `id_grupo` int(11) NOT NULL,
  `id_docente` int(11) DEFAULT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  `id_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_actividad`
--

CREATE TABLE `tipo_actividad` (
  `id` int(11) NOT NULL,
  `id_actividad` int(11) DEFAULT NULL,
  `nombre_tipoAct` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`id_actividad`),
  ADD KEY `id_docente` (`id_docente`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`documento`);

--
-- Indices de la tabla `cargar_actividad`
--
ALTER TABLE `cargar_actividad`
  ADD PRIMARY KEY (`id_cargar`),
  ADD KEY `id_actividad` (`id_actividad`);

--
-- Indices de la tabla `cargar_microcurriculo`
--
ALTER TABLE `cargar_microcurriculo`
  ADD PRIMARY KEY (`id_carga`),
  ADD KEY `documento` (`documento`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `descargar_actividad`
--
ALTER TABLE `descargar_actividad`
  ADD PRIMARY KEY (`id_descarga`),
  ADD KEY `id_actividad` (`id_actividad`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`documento`);

--
-- Indices de la tabla `evaluar_actividad`
--
ALTER TABLE `evaluar_actividad`
  ADD PRIMARY KEY (`id_evaluar`),
  ADD KEY `id_actividad` (`id_actividad`);

--
-- Indices de la tabla `grupo_alumno`
--
ALTER TABLE `grupo_alumno`
  ADD PRIMARY KEY (`id_grupo`),
  ADD KEY `id_alumno` (`id_alumno`);

--
-- Indices de la tabla `tipo_actividad`
--
ALTER TABLE `tipo_actividad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_actividad` (`id_actividad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `id_actividad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cargar_actividad`
--
ALTER TABLE `cargar_actividad`
  MODIFY `id_cargar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cargar_microcurriculo`
--
ALTER TABLE `cargar_microcurriculo`
  MODIFY `id_carga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `descargar_actividad`
--
ALTER TABLE `descargar_actividad`
  MODIFY `id_descarga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `evaluar_actividad`
--
ALTER TABLE `evaluar_actividad`
  MODIFY `id_evaluar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grupo_alumno`
--
ALTER TABLE `grupo_alumno`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_actividad`
--
ALTER TABLE `tipo_actividad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `actividad_ibfk_1` FOREIGN KEY (`id_docente`) REFERENCES `docente` (`documento`),
  ADD CONSTRAINT `actividad_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`);

--
-- Filtros para la tabla `cargar_actividad`
--
ALTER TABLE `cargar_actividad`
  ADD CONSTRAINT `cargar_actividad_ibfk_1` FOREIGN KEY (`id_actividad`) REFERENCES `actividad` (`id_actividad`);

--
-- Filtros para la tabla `cargar_microcurriculo`
--
ALTER TABLE `cargar_microcurriculo`
  ADD CONSTRAINT `cargar_microcurriculo_ibfk_1` FOREIGN KEY (`documento`) REFERENCES `docente` (`documento`),
  ADD CONSTRAINT `cargar_microcurriculo_ibfk_2` FOREIGN KEY (`documento`) REFERENCES `alumno` (`documento`);

--
-- Filtros para la tabla `descargar_actividad`
--
ALTER TABLE `descargar_actividad`
  ADD CONSTRAINT `descargar_actividad_ibfk_1` FOREIGN KEY (`id_actividad`) REFERENCES `actividad` (`id_actividad`);

--
-- Filtros para la tabla `evaluar_actividad`
--
ALTER TABLE `evaluar_actividad`
  ADD CONSTRAINT `evaluar_actividad_ibfk_1` FOREIGN KEY (`id_actividad`) REFERENCES `actividad` (`id_actividad`);

--
-- Filtros para la tabla `grupo_alumno`
--
ALTER TABLE `grupo_alumno`
  ADD CONSTRAINT `grupo_alumno_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`documento`),
  ADD CONSTRAINT `grupo_alumno_ibfk_2` FOREIGN KEY (`id_alumno`) REFERENCES `docente` (`documento`),
  ADD CONSTRAINT `grupo_alumno_ibfk_3` FOREIGN KEY (`id_alumno`) REFERENCES `curso` (`id_curso`);

--
-- Filtros para la tabla `tipo_actividad`
--
ALTER TABLE `tipo_actividad`
  ADD CONSTRAINT `tipo_actividad_ibfk_1` FOREIGN KEY (`id_actividad`) REFERENCES `actividad` (`id_actividad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
