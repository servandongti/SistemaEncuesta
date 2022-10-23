-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-07-2021 a las 05:31:13
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `encues`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encues`
--

CREATE TABLE `encues` (
  `codenc` int(11) NOT NULL,
  `nomen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `codpr` int(11) NOT NULL,
  `codpo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `encues`
--

INSERT INTO `encues` (`codenc`, `nomen`, `codpr`, `codpo`) VALUES
(1, 'Golencito game\r\nVegetta 777\r\nAuronPlay', 1, 1),
(2, 'Mi motivación fue mi madre', 5, 5),
(3, 'ninguno hasta el matrimonio\r\n', 4, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posibles`
--

CREATE TABLE `posibles` (
  `codpo` int(11) NOT NULL,
  `nompo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codpr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `posibles`
--

INSERT INTO `posibles` (`codpo`, `nompo`, `codpr`) VALUES
(1, '-Luisito Comunica\r\n-Yuya\r\n-Los Polinesios\r\n-Werevertumorro', 1),
(2, 'Terminar mi carrera universitaria y complir mis sueños siendo un profesional', 2),
(3, 'Después de terminar mi carrera y conseguir mi título universitario si pienso casarme', 3),
(4, 'Dependiendo la situación económica, pero máximo 3', 4),
(5, 'Mi motivación fué el esfuerzo de mis padres, abuelos, tios porque saliera adelante', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregun`
--

CREATE TABLE `pregun` (
  `codpr` int(11) NOT NULL,
  `nompr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stop` char(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pregun`
--

INSERT INTO `pregun` (`codpr`, `nompr`, `stop`) VALUES
(1, '¿Qué tipo de streamers ves?', '0'),
(2, '¿Como será tu vida dentro de 5 años?', '1'),
(3, '¿Piensas casarte y porqué?', '1'),
(4, '¿Cuantos hijos piensas tener?', '0'),
(5, '¿Cuál fué la motivación en iniciarse en esta carrera?', '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `encues`
--
ALTER TABLE `encues`
  ADD PRIMARY KEY (`codenc`),
  ADD KEY `codpr` (`codpr`),
  ADD KEY `codpo` (`codpo`);

--
-- Indices de la tabla `posibles`
--
ALTER TABLE `posibles`
  ADD PRIMARY KEY (`codpo`),
  ADD KEY `posibles_ibfk_1` (`codpr`);

--
-- Indices de la tabla `pregun`
--
ALTER TABLE `pregun`
  ADD PRIMARY KEY (`codpr`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `encues`
--
ALTER TABLE `encues`
  MODIFY `codenc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `posibles`
--
ALTER TABLE `posibles`
  MODIFY `codpo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pregun`
--
ALTER TABLE `pregun`
  MODIFY `codpr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `encues`
--
ALTER TABLE `encues`
  ADD CONSTRAINT `encues_ibfk_1` FOREIGN KEY (`codpr`) REFERENCES `pregun` (`codpr`),
  ADD CONSTRAINT `encues_ibfk_2` FOREIGN KEY (`codpo`) REFERENCES `posibles` (`codpo`);

--
-- Filtros para la tabla `posibles`
--
ALTER TABLE `posibles`
  ADD CONSTRAINT `posibles_ibfk_1` FOREIGN KEY (`codpr`) REFERENCES `pregun` (`codpr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
