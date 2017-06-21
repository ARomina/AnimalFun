-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2017 a las 04:39:52
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `animalfun`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adopcion`
--

CREATE TABLE `adopcion` (
  `id` int(11) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  `mascota` int(11) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album`
--

CREATE TABLE `album` (
  `id` int(11) DEFAULT NULL,
  `mascota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `mascota` int(11) DEFAULT NULL,
  `cachorro` tinyint(4) DEFAULT NULL,
  `moviliza` tinyint(4) DEFAULT NULL,
  `amigo` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `mascota` int(11) DEFAULT NULL,
  `comentario` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id` tinyint(4) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `descripcion`) VALUES
(1, 'en adopcion'),
(2, 'adoptado'),
(3, 'buscando cita'),
(4, 'citado'),
(5, 'ofrecido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `id` int(11) NOT NULL,
  `usuario` int(11) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `tipo` tinyint(4) DEFAULT NULL,
  `tamano` tinyint(4) DEFAULT NULL,
  `raza` smallint(6) DEFAULT NULL,
  `sexo` tinyint(4) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  `visita` int(11) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `caracteristicas` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `mascota` int(11) DEFAULT NULL,
  `contenido` varchar(250) DEFAULT NULL,
  `adjunto` varchar(100) DEFAULT NULL,
  `tipoadjunto` tinyint(4) DEFAULT NULL,
  `fechahora` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raza`
--

CREATE TABLE `raza` (
  `id` smallint(6) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL,
  `tipo` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `raza`
--

INSERT INTO `raza` (`id`, `descripcion`, `tipo`) VALUES
(1, 'meztizo', 1),
(2, 'caniche', 1),
(3, 'pastor aleman', 1),
(4, 'labrador', 1),
(5, 'bulldog frances', 1),
(6, 'pequines', 1),
(7, 'galgo', 1),
(8, 'fox terrier', 1),
(9, 'chihuahua', 1),
(10, 'beagle', 1),
(11, 'doberman', 1),
(12, 'siamese', 2),
(13, 'sagrado de birmania', 3),
(14, 'british short hair', 2),
(15, 'persa', 2),
(16, 'maine coon', 2),
(17, 'bengala', 2),
(18, 'bosque de noruega', 2),
(19, 'ocicat', 2),
(20, 'snowshoe', 2),
(21, 'somali', 2),
(22, 'periquito', 3),
(23, 'diamante mandarin', 3),
(24, 'canario', 3),
(25, 'jlguero', 3),
(26, 'ninfa', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento`
--

CREATE TABLE `seguimiento` (
  `usuario` int(11) NOT NULL,
  `mascota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `id` tinyint(4) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id`, `descripcion`) VALUES
(1, 'Macho'),
(2, 'Hembra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tamano`
--

CREATE TABLE `tamano` (
  `id` tinyint(4) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tamano`
--

INSERT INTO `tamano` (`id`, `descripcion`) VALUES
(1, 'pequeno'),
(2, 'mediano'),
(3, 'grande');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id` tinyint(4) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id`, `descripcion`) VALUES
(1, 'perro'),
(2, 'gato'),
(3, 'ave'),
(4, 'pez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `correo` varchar(20) DEFAULT NULL,
  `sexo` varchar(10) NOT NULL,
  `telefono` int(50) NOT NULL,
  `fechaNac` date NOT NULL,
  `posicion` varchar(255) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `password` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `nombre`, `apellido`, `correo`, `sexo`, `telefono`, `fechaNac`, `posicion`, `foto`, `password`) VALUES
(1, 'LAURA', 'Laura', 'Mental', 'laumental@lala.com', 'femenino', 12341234, '1978-05-06', NULL, '../img/fotosPerfilUsuario/cara4.jpg', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(2, 'LUIS', 'Luis', 'Mental', 'luisito@lala.com', 'masculino', 43214321, '1978-06-07', NULL, '../img/fotosPerfilUsuario/cara2.jpg', '3cb3cd54c595bc7cb0e97deda9dfde40bf95f145'),
(3, 'KAFJHSD', 'SAFGFDSG', 'SDFGFSDG', 'SFG@SDG.BOM', '', 0, '0000-00-00', NULL, NULL, '7c4a8d09ca3762af61e59520943dc26494f8941b');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `mascota` int(11) DEFAULT NULL,
  `post` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adopcion`
--
ALTER TABLE `adopcion`
  ADD KEY `usuario` (`usuario`),
  ADD KEY `mascota` (`mascota`);

--
-- Indices de la tabla `album`
--
ALTER TABLE `album`
  ADD KEY `mascota` (`mascota`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD KEY `mascota` (`mascota`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`),
  ADD KEY `tamano` (`tamano`),
  ADD KEY `estado` (`estado`),
  ADD KEY `sexo` (`sexo`),
  ADD KEY `raza` (`raza`),
  ADD KEY `tipo` (`tipo`);

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mascota` (`mascota`);

--
-- Indices de la tabla `raza`
--
ALTER TABLE `raza`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo` (`tipo`);

--
-- Indices de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  ADD PRIMARY KEY (`usuario`,`mascota`),
  ADD KEY `mascota` (`mascota`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tamano`
--
ALTER TABLE `tamano`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD KEY `mascota` (`mascota`),
  ADD KEY `post` (`post`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adopcion`
--
ALTER TABLE `adopcion`
  ADD CONSTRAINT `adopcion_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `adopcion_ibfk_2` FOREIGN KEY (`mascota`) REFERENCES `mascota` (`id`);

--
-- Filtros para la tabla `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`mascota`) REFERENCES `mascota` (`id`);

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`mascota`) REFERENCES `mascota` (`id`);

--
-- Filtros para la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `mascota_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `mascota_ibfk_2` FOREIGN KEY (`tamano`) REFERENCES `tamano` (`id`),
  ADD CONSTRAINT `mascota_ibfk_3` FOREIGN KEY (`estado`) REFERENCES `estado` (`id`),
  ADD CONSTRAINT `mascota_ibfk_4` FOREIGN KEY (`sexo`) REFERENCES `sexo` (`id`),
  ADD CONSTRAINT `mascota_ibfk_5` FOREIGN KEY (`raza`) REFERENCES `raza` (`id`),
  ADD CONSTRAINT `mascota_ibfk_6` FOREIGN KEY (`tipo`) REFERENCES `tipo` (`id`);

--
-- Filtros para la tabla `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`mascota`) REFERENCES `mascota` (`id`);

--
-- Filtros para la tabla `raza`
--
ALTER TABLE `raza`
  ADD CONSTRAINT `raza_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipo` (`id`);

--
-- Filtros para la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  ADD CONSTRAINT `seguimiento_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `seguimiento_ibfk_2` FOREIGN KEY (`mascota`) REFERENCES `mascota` (`id`);

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`mascota`) REFERENCES `mascota` (`id`),
  ADD CONSTRAINT `valoracion_ibfk_2` FOREIGN KEY (`post`) REFERENCES `post` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
