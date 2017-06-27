-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2017 a las 17:42:26
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
  `id` int(11) NOT NULL,
  `usuarioEntrega` int(11) NOT NULL,
  `idMascota` int(11) NOT NULL,
  `usuarioAdoptante` int(11) DEFAULT NULL,
  `fechaAdopcion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id` int(11) NOT NULL,
  `idMascota` int(11) NOT NULL,
  `mascotaCitada` int(11) NOT NULL,
  `moviliza` tinyint(4) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `post` int(11) DEFAULT NULL,
  `comentario` varchar(250) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id`, `usuario`, `post`, `comentario`, `fecha`) VALUES
(2, 5, 5, 'lorem ipsum', '2000-03-03 00:01:00'),
(3, 6, 4, 'lorem ipsum', '2000-03-03 00:02:00'),
(4, 4, 6, 'lorem ipsum', '2000-03-03 00:03:00'),
(5, 7, 8, 'lorem ipsum', '2000-03-03 00:04:00'),
(6, 8, 9, 'lorem impsum sit amet', '2000-03-03 00:05:00'),
(7, 10, 7, 'lorem ipsum', '2000-03-03 00:06:00'),
(8, 11, 8, 'lorem ipsum', '2000-03-03 00:07:00'),
(9, 15, 20, 'lorem impsum sit amet', '2000-03-03 00:08:00'),
(10, 16, 21, 'lorem impsum sit amet', '2000-03-03 00:09:00'),
(11, 15, 18, 'lorem ipsum', '2000-03-03 00:10:00'),
(12, 19, 19, 'lorem impsum sit amet', '2000-03-03 00:11:00'),
(13, 18, 21, 'lorem ipsum', '2000-03-03 00:12:00'),
(14, 15, 16, 'lorem impsum sit amet', '2000-03-03 00:13:00'),
(15, 5, 19, 'lorem ipsum', '2000-03-03 00:14:00');

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
(5, 'ofrecido'),
(6, 'sin estado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `id` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
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

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`id`, `usuario`, `nombre`, `tipo`, `tamano`, `raza`, `sexo`, `estado`, `visita`, `foto`, `caracteristicas`) VALUES
(9, 2, 'Toby', 1, 2, 5, 1, 6, NULL, '../recursos/img/fotosMascota/freestocks-org-119823.jpg', 'pendiente'),
(10, 3, 'Tomy', 1, 1, 8, 1, 6, NULL, '../recursos/img/fotosMascota/delaney-dawson-130928.jpg', 'pendiente'),
(11, 4, 'Fido', 1, 1, 7, 1, 1, NULL, '../recursos/img/fotosMascota/jairo-45522.jpg', 'pendiente'),
(12, 15, 'Coco', 1, 1, 2, 1, 6, NULL, '../recursos/img/fotosMascota/justin-veenema-156592.jpg', 'pendiente'),
(13, 5, 'Lingo', 1, 1, 10, 1, 6, NULL, '../recursos/img/fotosMascota/perro_ojosclaros.jpg', 'pendiente'),
(14, 6, 'Skip', 1, 3, 4, 1, 6, NULL, '../recursos/img/fotosMascota/perropitbull.jpg', 'pendiente'),
(15, 14, 'Mia', 1, 1, 7, 2, 6, NULL, '../recursos/img/fotosMascota/perromestizo2.jpg', 'pendiente'),
(16, 7, 'Franchesca', 1, 2, 5, 2, 6, NULL, '../recursos/img/fotosMascota/perromestizo.jpg', 'pendiente'),
(17, 19, 'Fifi', 1, 1, 6, 2, 6, NULL, '../recursos/img/fotosMascota/perro4.jpg', 'pendiente'),
(18, 3, 'Reina', 1, 3, 4, 2, 6, NULL, '../recursos/img/fotosMascota/perromirando2.jpg', 'pendiente'),
(19, 2, 'Orion', 2, 1, 15, 1, 1, NULL, '../recursos/img/fotosMascota/600x350gato_ocicat.jpg', 'pendiente'),
(20, 8, 'Bigotes', 2, 2, 11, 1, 1, NULL, '../recursos/img/fotosMascota/gato_ocicat2.jpg', 'pendiente'),
(21, 4, 'Felix', 2, 1, 13, 1, 6, NULL, '../recursos/img/fotosMascota/600x350gato_ocicat.jpg', 'pendiente'),
(22, 15, 'Tom', 2, 2, 16, 1, 6, NULL, '../recursos/img/fotosMascota/600x350gatobirmania.jpg', 'pendiente'),
(23, 18, 'Luna', 2, 2, 15, 2, 6, NULL, '../recursos/img/fotosMascota/gatocaminando.jpg', 'pendiente'),
(24, 10, 'Pelusa', 2, 1, 20, 2, 6, NULL, '../recursos/img/fotosMascota/gatobritish.jpg', 'pendiente'),
(25, 16, 'Lulu', 2, 3, 21, 2, 6, NULL, '../recursos/img/fotosMascota/gatomirando.jpg', 'pendiente'),
(26, 9, 'Daisy', 2, 1, 17, 2, 6, NULL, '../recursos/img/fotosMascota/gato3.jpg', 'pendiente'),
(27, 19, 'Kiwi', 3, 1, 22, 1, 6, NULL, '../recursos/img/fotosMascota/periquito.jpg', 'pendiente'),
(28, 5, 'Polly', 3, 2, 23, 2, 6, NULL, '../recursos/img/fotosMascota/loro3.jpg', 'pendiente'),
(29, 14, 'Callo', 3, 1, 24, 1, 6, NULL, '../recursos/img/fotosMascota/loro.jpg', 'pendiente'),
(30, 10, 'Kine', 4, 1, 28, 1, 6, NULL, '../recursos/img/fotosMascota/pez.jpg', 'pendiente'),
(31, 16, 'Polo', 4, 1, 26, 2, 6, NULL, '../recursos/img/fotosMascota/pez1.jpg', 'pendiente'),
(32, 16, 'Peso', 4, 1, 27, 1, 6, NULL, '../recursos/img/fotosMascota/pez2.jpg', 'pendiente');

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

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id`, `mascota`, `contenido`, `adjunto`, `tipoadjunto`, `fechahora`) VALUES
(2, 9, 'guauguauguauguauguauguau', NULL, NULL, '2000-01-01 00:00:00'),
(3, 12, 'guauguauguauguauguauguau', NULL, NULL, '2000-01-01 00:01:00'),
(4, 13, 'guauguauguauguauguauguauguauguauguau', NULL, NULL, '2000-01-01 00:02:00'),
(5, 15, 'guau', NULL, NULL, '2000-01-01 00:03:00'),
(6, 19, 'miaumiaumiaumiau', NULL, NULL, '2000-01-01 00:04:00'),
(7, 16, 'guauguau', NULL, NULL, '2000-01-01 00:05:00'),
(8, 20, 'miau', NULL, NULL, '2000-01-01 00:06:00'),
(9, 28, 'twitwitwitwi', NULL, NULL, '2000-01-01 00:07:00'),
(10, 22, 'miaumiau', NULL, NULL, '2000-01-01 00:08:00'),
(11, 26, 'miaumiaumiaumiaumiau', NULL, NULL, '2000-01-01 00:09:00'),
(12, 21, 'miaumiau', NULL, NULL, '2000-01-01 00:10:00'),
(13, 31, 'blublublublublub', NULL, NULL, '2000-01-01 00:11:00'),
(14, 19, 'miaumiau', NULL, NULL, '2000-01-01 00:12:00'),
(15, 18, 'guau', NULL, NULL, '2000-01-01 00:13:00'),
(16, 17, 'guauguau', NULL, NULL, '2000-01-01 00:14:00'),
(17, 23, 'miaumiaumiaumiaumiaumiau', NULL, NULL, '2000-01-01 00:15:00'),
(18, 20, 'miaumiaumiaumiaumiaumiaumiaumiaumiau', NULL, NULL, '2000-01-01 00:16:00'),
(19, 16, 'guauguauguauguauguauguauguauguauguauguau', NULL, NULL, '2000-01-01 00:17:00'),
(20, 15, 'guauguauguau', NULL, NULL, '2000-01-01 00:18:00'),
(21, 30, 'blublublublub', NULL, NULL, '2000-01-01 00:19:00'),
(22, 15, 'guauguauguauguauguauguauguauguauguauguauguauguauguauguauguauguauguau', NULL, NULL, '2000-01-01 00:20:00'),
(23, 11, 'guauguauguau', NULL, NULL, '2000-01-01 00:21:00'),
(24, 13, 'guauguauguauguauguau', NULL, NULL, '2000-01-01 00:22:00'),
(25, 16, 'guauguauguauguauguauguauguauguau', NULL, NULL, '2000-01-01 00:23:00');

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
(1, 'mestizo', 1),
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
(26, 'ninfa', 3),
(27, 'pez payaso', 4),
(28, 'pez gato', 4),
(30, 'pez dorado', 4),
(123, 'pez dorado', 4),
(124, 'pez payaso', 4),
(156, 'pez gato', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recientes`
--

CREATE TABLE `recientes` (
  `id` int(11) NOT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  `fechahora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `recientes`
--

INSERT INTO `recientes` (`id`, `comentario`, `fechahora`) VALUES
(1, 'usuario1 siguio a usuario2', '2017-05-05 00:00:00'),
(2, 'mascota se hizo amigo de mascota2', '2017-05-05 01:00:00'),
(3, 'mascota3 salio con mascota4', '2017-05-05 02:00:00'),
(4, 'usuario2 ofrece cachorros', '2017-05-05 03:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento`
--

CREATE TABLE `seguimiento` (
  `id` int(11) NOT NULL,
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
(4, 'pez'),
(5, 'otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `locale`, `picture`, `link`, `created`, `modified`) VALUES
(0, 'google', '114679672676161881985', 'Lucas', 'Miharu', 'lucasmiharu@gmail.com', 'male', 'es-419', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg', 'https://plus.google.com/114679672676161881985', '2017-06-27 00:05:49', '2017-06-27 00:45:49');

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
(1, 'LAURA', 'Laura', 'Mental', 'laumental@lala.com', 'femenino', 12341234, '1978-06-05', NULL, '../recursos/img/fotosPerfilUsuario/cara4.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'LUIS', 'Luis', 'Mental', 'luisito@lala.com', 'masculino', 43214321, '1978-06-07', NULL, '../recursos/img/fotosPerfilUsuario/cara2.jpg', '88b4c9a7b1ae303830808680c9aa95ba'),
(3, 'LucasMiharu', 'Lucas', 'Miharu', 'lucasmiharu@gmail.co', 'masculino', 0, '0000-00-00', NULL, '../recursos/img/fotosPerfilUsuario/persona8.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'Pedro', 'Pedro', 'Martinez', 'pedro@animalmail.com', 'masculino', 44441111, '1111-11-11', NULL, '../recursos/img/fotosPerfilUsuario/persona11.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'Esteban', 'Esteban', 'Martinez', 'esteban@animalmail.c', 'masculino', 44441112, '1111-11-12', NULL, '../recursos/img/fotosPerfilUsuario/persona14.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'Andres', 'Andres', 'Gimenez', 'andres@animalmail.co', 'masculino', 44441113, '1111-11-16', NULL, '../recursos/img/fotosPerfilUsuario/persona15.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'Emanuel', 'Emanuel', 'Gonzalez', '@animalmail.com', 'masculino', 44441111, '1111-11-11', NULL, '../recursos/img/fotosPerfilUsuario/persona21.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'Juan', 'Juan', 'Duarte', 'Juan@animalmail.com', 'masculino', 44441111, '1111-11-11', NULL, '../recursos/img/fotosPerfilUsuario/persona6.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(9, 'Mariano', 'Mariano', 'Ferro', 'mariano@animalmail.c', 'masculino', 44441111, '1111-11-11', NULL, '../recursos/img/fotosPerfilUsuario/persona10.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'Oscar', 'Oscar', 'Perez', 'Oscar@animalmail.com', 'masculino', 44441111, '1111-11-11', NULL, '../recursos/img/fotosPerfilUsuario/persona1.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(11, 'Lautaro', 'Lautaro', 'Angel', 'Lautaro@animalmail.c', 'masculino', 44441111, '1111-11-11', NULL, '../recursos/img/fotosPerfilUsuario/persona12.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(12, 'Fabian', 'Fabian', 'Mendez', 'Fabian@animalmail.co', 'masculino', 44441111, '1111-11-11', NULL, '../recursos/img/fotosPerfilUsuario/persona9.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(13, 'Eduardo', 'Eduardo', 'Pepino', 'Eduardo@animalmail.c', 'masculino', 44441111, '1111-11-11', NULL, '../recursos/img/fotosPerfilUsuario/persona4.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(14, 'Lara', 'Lara', 'Angel', 'Lara@animalmail.com', 'femenino', 44441111, '1111-11-11', NULL, '../recursos/img/fotosPerfilUsuario/cara3.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(15, 'Natalia', 'Natalia', 'Gray', 'Natalia@animalmail.c', 'femenino', 44441111, '1111-11-11', NULL, '../recursos/img/fotosPerfilUsuario/persona2.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(16, 'Lucia', 'Lucia', 'Sanchez', 'Lucia@animalmail.com', 'femenino', 44441111, '1111-11-11', NULL, '../recursos/img/fotosPerfilUsuario/persona30.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(17, 'Estela', 'Estela', 'Rizzo', 'Estela@animalmail.co', 'femenino', 44441111, '1111-11-11', NULL, '../recursos/img/fotosPerfilUsuario/persona33.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(18, 'Melina', 'Melina', 'Sanches', 'Melina@animalmail.co', 'femenino', 44441111, '1111-11-11', NULL, '../recursos/img/fotosPerfilUsuario/persona26.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(19, 'Eva', 'Eva', 'Pardo', 'Eva@animalmail.com', 'femenino', 44441111, '1111-11-11', NULL, '../recursos/img/fotosPerfilUsuario/persona19.jpg', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `id` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `post` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `valoracion`
--

INSERT INTO `valoracion` (`id`, `usuario`, `post`, `fecha`) VALUES
(5, 7, 2, '2000-02-02 00:02:00'),
(6, 9, 2, '2000-02-02 00:03:00'),
(7, 10, 3, '2000-02-02 00:04:00'),
(8, 2, 3, '2000-02-02 00:05:00'),
(9, 3, 10, '2000-02-02 00:06:00'),
(10, 7, 12, '2000-02-02 00:07:00'),
(11, 9, 4, '2000-02-02 00:08:00'),
(12, 8, 4, '2000-02-02 00:09:00'),
(13, 18, 5, '2000-02-02 00:10:00'),
(14, 17, 6, '2000-02-02 00:11:00'),
(15, 15, 7, '2000-02-02 00:12:00'),
(16, 1, 13, '2000-02-02 00:13:00'),
(17, 3, 15, '2000-02-02 00:14:00'),
(18, 6, 16, '2000-02-02 00:15:00'),
(19, 7, 18, '2000-02-02 00:16:00'),
(20, 9, 19, '2000-02-02 00:17:00'),
(21, 8, 20, '2000-02-02 00:18:00'),
(22, 16, 21, '2000-02-02 00:19:00'),
(23, 14, 22, '2000-02-02 00:20:00'),
(24, 12, 13, '2000-02-02 00:21:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adopcion`
--
ALTER TABLE `adopcion`
  ADD PRIMARY KEY (`id`,`usuarioEntrega`,`idMascota`),
  ADD KEY `usuario` (`usuarioEntrega`),
  ADD KEY `mascota` (`idMascota`),
  ADD KEY `adopcion_ibfk_3` (`usuarioAdoptante`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id`,`idMascota`),
  ADD KEY `mascota` (`idMascota`),
  ADD KEY `cita_ibfk_2` (`mascotaCitada`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comentario_ibfk_1` (`post`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`id`,`usuario`),
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
-- Indices de la tabla `recientes`
--
ALTER TABLE `recientes`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`email`),
  ADD KEY `email` (`email`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post` (`post`),
  ADD KEY `valoracion_ibfk_1` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adopcion`
--
ALTER TABLE `adopcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `raza`
--
ALTER TABLE `raza`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234;
--
-- AUTO_INCREMENT de la tabla `recientes`
--
ALTER TABLE `recientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tamano`
--
ALTER TABLE `tamano`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adopcion`
--
ALTER TABLE `adopcion`
  ADD CONSTRAINT `adopcion_ibfk_1` FOREIGN KEY (`usuarioEntrega`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `adopcion_ibfk_2` FOREIGN KEY (`idMascota`) REFERENCES `mascota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `adopcion_ibfk_3` FOREIGN KEY (`usuarioAdoptante`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`idMascota`) REFERENCES `mascota` (`id`),
  ADD CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`mascotaCitada`) REFERENCES `mascota` (`id`);

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`post`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `mascota_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mascota_ibfk_3` FOREIGN KEY (`tamano`) REFERENCES `tamano` (`id`),
  ADD CONSTRAINT `mascota_ibfk_4` FOREIGN KEY (`raza`) REFERENCES `raza` (`id`),
  ADD CONSTRAINT `mascota_ibfk_5` FOREIGN KEY (`sexo`) REFERENCES `sexo` (`id`),
  ADD CONSTRAINT `mascota_ibfk_6` FOREIGN KEY (`estado`) REFERENCES `estado` (`id`),
  ADD CONSTRAINT `mascota_ibfk_7` FOREIGN KEY (`tipo`) REFERENCES `tipo` (`id`);

--
-- Filtros para la tabla `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`mascota`) REFERENCES `mascota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  ADD CONSTRAINT `seguimiento_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `valoracion_ibfk_3` FOREIGN KEY (`post`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
