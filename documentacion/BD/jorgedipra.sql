-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2018 a las 15:47:59
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jorgedipra`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrusel`
--

CREATE TABLE `carrusel` (
  `Id` int(11) NOT NULL,
  `Url` varchar(50) NOT NULL COMMENT 'url de la imagen',
  `Title` varchar(30) NOT NULL COMMENT 'h5',
  `subTitle` varchar(30) NOT NULL COMMENT 'p de carousel-caption',
  `Id_User` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carrusel`
--

INSERT INTO `carrusel` (`Id`, `Url`, `Title`, `subTitle`, `Id_User`) VALUES
(1, '/storage/web/landing/img1.svg', 'Portafolio', 'Arquitectura & Orden', 0),
(2, '/storage/web/landing/img2.svg', 'Savelink', 'Estructura & detalle', 0),
(3, '/storage/web/landing/img3.svg', 'Contactame', 'Organización & visión', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `Id` int(11) NOT NULL,
  `Title_card` varchar(20) NOT NULL COMMENT 'titulo de la pagina en la card',
  `Nombre` varchar(30) NOT NULL COMMENT 'nombre de la persona',
  `Cargo` varchar(30) NOT NULL COMMENT 'cargo desempeñado',
  `Empresa` varchar(30) NOT NULL COMMENT 'empresa actual',
  `Titulo_frase` varchar(20) NOT NULL COMMENT 'titulo de la frase',
  `Frase` varchar(200) NOT NULL COMMENT 'fase y autor ',
  `Img` varchar(100) NOT NULL COMMENT 'imagen de perfil'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`Id`, `Title_card`, `Nombre`, `Cargo`, `Empresa`, `Titulo_frase`, `Frase`, `Img`) VALUES
(1, 'Jorgedipra', 'Jorge Edwin Diaz Prado', 'Desarrollador web', 'Crucerum.com', 'Steve Jobs', '\"La mayoría de la gente piensa que el diseño es una chapa, es una simple decoración. Para mí, nada es más importante en el futuro que el diseño. El diseño es el alma de todo lo creado por el hombre\" ', '/storage/web/landing/facebook_no_image.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes_sociales`
--

CREATE TABLE `redes_sociales` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL COMMENT 'nombre de la red social',
  `Logo` varchar(50) NOT NULL COMMENT 'class de icono( fontawesome 5)',
  `Url` varchar(50) NOT NULL COMMENT 'Url de la red social',
  `Id_Pefil` int(11) NOT NULL COMMENT 'perfil'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `redes_sociales`
--

INSERT INTO `redes_sociales` (`Id`, `Nombre`, `Logo`, `Url`, `Id_Pefil`) VALUES
(1, 'Github', 'fab fa-github fab-2x', 'https://github.com/jorgedipra', 0),
(2, 'Linkedin', 'fab fa-linkedin fab-2x', 'https://www.linkedin.com/in/jorgedipra', 0),
(3, 'Skype', 'fab fa-skype fab-2x', 'skype:jorgedipra?chat', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `User` varchar(20) NOT NULL COMMENT 'usuario',
  `Pass` varchar(50) NOT NULL COMMENT 'contraseña'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`Id`, `User`, `Pass`) VALUES
(1, 'jorgedipra', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `h1` (`Title_card`);
ALTER TABLE `perfil` ADD FULLTEXT KEY `frase_contenido` (`Frase`);

--
-- Indices de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Logo` (`Logo`);
ALTER TABLE `redes_sociales` ADD FULLTEXT KEY `ulr_red` (`Url`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `User_Unico` (`User`) USING BTREE,
  ADD KEY `pass_` (`Pass`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
