-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-03-2024 a las 23:46:14
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paginaescuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asist` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_curso2` int(11) NOT NULL,
  `asiste` varchar(30) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asocioac`
--

CREATE TABLE `asocioac` (
  `id` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_cursoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociocp`
--

CREATE TABLE `asociocp` (
  `id` int(11) NOT NULL,
  `id_cursop` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asocioph`
--

CREATE TABLE `asocioph` (
  `id` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL,
  `id_hijo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `nombre_curso` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id_nota` int(11) NOT NULL,
  `id_estudiante2` int(11) NOT NULL,
  `id_curso3` int(11) NOT NULL,
  `puntaje` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id_perfil` int(11) NOT NULL,
  `perfil` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfil`, `perfil`) VALUES
(1, 'Administrador'),
(2, 'Profesor'),
(3, 'Padre'),
(4, 'Hijo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_proyecto`
--

CREATE TABLE `usuarios_proyecto` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(75) NOT NULL,
  `apell1` varchar(75) NOT NULL,
  `apell2` varchar(75) NOT NULL,
  `usuario` varchar(75) NOT NULL,
  `password` varchar(30) NOT NULL,
  `correo` varchar(75) NOT NULL,
  `perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios_proyecto`
--

INSERT INTO `usuarios_proyecto` (`id_usuario`, `nombre`, `apell1`, `apell2`, `usuario`, `password`, `correo`, `perfil`) VALUES
(1, 'admin', 'ad', 'min', 'admin123', '123', 'admin@gmail.com', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asist`),
  ADD KEY `id_estudiante` (`id_estudiante`),
  ADD KEY `id_curso2` (`id_curso2`);

--
-- Indices de la tabla `asocioac`
--
ALTER TABLE `asocioac`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_alumno` (`id_alumno`),
  ADD KEY `id_cursoa` (`id_cursoa`);

--
-- Indices de la tabla `asociocp`
--
ALTER TABLE `asociocp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cursop` (`id_cursop`),
  ADD KEY `id_profesor` (`id_profesor`);

--
-- Indices de la tabla `asocioph`
--
ALTER TABLE `asocioph`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_padre` (`id_padre`),
  ADD KEY `id_hijo` (`id_hijo`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `nombre_curso` (`nombre_curso`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `id_estudiante2` (`id_estudiante2`),
  ADD KEY `id_curso3` (`id_curso3`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `usuarios_proyecto`
--
ALTER TABLE `usuarios_proyecto`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `perfil` (`perfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asist` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `asocioac`
--
ALTER TABLE `asocioac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `asociocp`
--
ALTER TABLE `asociocp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `asocioph`
--
ALTER TABLE `asocioph`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios_proyecto`
--
ALTER TABLE `usuarios_proyecto`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `usuarios_proyecto` (`id_usuario`),
  ADD CONSTRAINT `asistencia_ibfk_2` FOREIGN KEY (`id_curso2`) REFERENCES `cursos` (`id_curso`);

--
-- Filtros para la tabla `asocioac`
--
ALTER TABLE `asocioac`
  ADD CONSTRAINT `asocioac_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `usuarios_proyecto` (`id_usuario`),
  ADD CONSTRAINT `asocioac_ibfk_2` FOREIGN KEY (`id_cursoa`) REFERENCES `cursos` (`id_curso`);

--
-- Filtros para la tabla `asociocp`
--
ALTER TABLE `asociocp`
  ADD CONSTRAINT `asociocp_ibfk_1` FOREIGN KEY (`id_profesor`) REFERENCES `usuarios_proyecto` (`id_usuario`),
  ADD CONSTRAINT `asociocp_ibfk_2` FOREIGN KEY (`id_cursop`) REFERENCES `cursos` (`id_curso`);

--
-- Filtros para la tabla `asocioph`
--
ALTER TABLE `asocioph`
  ADD CONSTRAINT `asocioph_ibfk_1` FOREIGN KEY (`id_padre`) REFERENCES `usuarios_proyecto` (`id_usuario`),
  ADD CONSTRAINT `asocioph_ibfk_2` FOREIGN KEY (`id_hijo`) REFERENCES `usuarios_proyecto` (`id_usuario`);

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `notas_ibfk_1` FOREIGN KEY (`id_estudiante2`) REFERENCES `usuarios_proyecto` (`id_usuario`),
  ADD CONSTRAINT `notas_ibfk_2` FOREIGN KEY (`id_curso3`) REFERENCES `cursos` (`id_curso`);

--
-- Filtros para la tabla `usuarios_proyecto`
--
ALTER TABLE `usuarios_proyecto`
  ADD CONSTRAINT `usuarios_proyecto_ibfk_1` FOREIGN KEY (`perfil`) REFERENCES `perfiles` (`id_perfil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
