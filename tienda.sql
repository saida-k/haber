-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2020 a las 00:16:13
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldetalleventa`
--

CREATE TABLE `tbldetalleventa` (
  `ID` int(11) NOT NULL,
  `IDVENTA` int(11) NOT NULL,
  `IDPRODUCTO` int(11) NOT NULL,
  `PRECIOUNITARIO` decimal(20,2) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `DESCARGADO` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbldetalleventa`
--

INSERT INTO `tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGADO`) VALUES
(1, 11, 1, '139.00', 1, 0),
(2, 11, 2, '99.00', 1, 0),
(3, 12, 1, '139.00', 1, 0),
(4, 12, 2, '99.00', 1, 0),
(5, 13, 1, '139.00', 1, 0),
(6, 13, 2, '99.00', 1, 0),
(7, 14, 1, '139.00', 1, 0),
(8, 14, 2, '99.00', 1, 0),
(9, 15, 1, '139.00', 1, 0),
(10, 15, 2, '99.00', 1, 0),
(11, 16, 1, '139.00', 1, 0),
(12, 16, 2, '99.00', 1, 0),
(13, 17, 1, '139.00', 1, 0),
(14, 17, 2, '99.00', 1, 0),
(15, 18, 1, '139.00', 1, 0),
(16, 18, 2, '99.00', 1, 0),
(37, 29, 1, '139.00', 1, 0),
(38, 29, 2, '99.00', 1, 0),
(39, 30, 1, '139.00', 1, 0),
(40, 30, 2, '99.00', 1, 0),
(41, 31, 1, '139.00', 1, 0),
(42, 31, 2, '99.00', 1, 0),
(43, 32, 1, '139.00', 1, 0),
(44, 32, 2, '99.00', 1, 0),
(45, 33, 1, '139.00', 1, 0),
(46, 33, 2, '99.00', 1, 0),
(47, 34, 1, '139.00', 1, 0),
(48, 34, 2, '99.00', 1, 0),
(49, 35, 1, '139.00', 1, 0),
(50, 35, 2, '99.00', 1, 0),
(51, 36, 1, '139.00', 1, 0),
(52, 36, 2, '99.00', 1, 0),
(53, 37, 1, '139.00', 1, 0),
(54, 37, 2, '99.00', 1, 0),
(55, 38, 1, '139.00', 1, 0),
(56, 38, 2, '99.00', 1, 0),
(57, 39, 1, '139.00', 1, 0),
(58, 39, 2, '99.00', 1, 0),
(59, 40, 1, '139.00', 1, 0),
(60, 40, 2, '99.00', 1, 0),
(61, 41, 1, '139.00', 1, 0),
(62, 41, 2, '99.00', 1, 0),
(63, 42, 1, '139.00', 1, 0),
(64, 42, 2, '99.00', 1, 0),
(65, 43, 1, '139.00', 1, 0),
(66, 43, 2, '99.00', 1, 0),
(67, 44, 1, '139.00', 1, 0),
(68, 45, 2, '99.00', 1, 0),
(69, 46, 2, '99.00', 1, 0),
(70, 47, 3, '69.00', 1, 0),
(71, 48, 3, '69.00', 1, 0),
(72, 49, 3, '69.00', 1, 0),
(73, 49, 2, '99.00', 1, 0),
(74, 50, 3, '69.00', 1, 0),
(75, 50, 2, '99.00', 1, 0),
(76, 51, 1, '139.00', 1, 0),
(77, 52, 1, '139.00', 1, 0),
(78, 53, 1, '139.00', 1, 0),
(79, 54, 1, '139.00', 1, 0),
(80, 55, 4, '79.00', 1, 0),
(81, 56, 4, '79.00', 1, 0),
(82, 57, 4, '79.00', 1, 0),
(83, 58, 4, '79.00', 1, 0),
(84, 59, 4, '79.00', 1, 0),
(85, 60, 4, '79.00', 1, 0),
(86, 61, 4, '79.00', 1, 0),
(87, 62, 37, '99.00', 1, 0),
(88, 63, 37, '99.00', 1, 0),
(89, 64, 37, '99.00', 1, 0),
(90, 65, 37, '99.00', 1, 0),
(91, 66, 37, '99.00', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproductos`
--

CREATE TABLE `tblproductos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(255) NOT NULL,
  `subcategoria` int(11) NOT NULL,
  `tipo` text NOT NULL,
  `forma` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblproductos`
--

INSERT INTO `tblproductos` (`ID`, `Nombre`, `Precio`, `Descripcion`, `Imagen`, `subcategoria`, `tipo`, `forma`) VALUES
(1, 'Arete de tagua', '139.00', '9x3cm \r\ncolor fiusha', 'img/ros.jpg', 1, '30g\r\n', 'Gota'),
(2, 'Pulsera de pet', '99.00', '8.5x2.0cm\r\ncolores | arcoiris', 'img/p4.jpg', 1, '95g', 'Circulos'),
(3, 'Anillo de peyote', '69.00', '20mm \r\ncolor rosa metalico', 'img/rs.jpg', 1, '35g', 'Aros'),
(4, 'Anillo de peyote\r\n', '79.00', '\r\n20mm\r\ncolor azul cielo y dorado', 'img/azu.jpg', 1, '36g', 'Tiangulo'),
(5, 'Arete de botones', '49.00', '5.6x3.2cm color verde', 'img/bots.jpg', 1, '60g', 'Circular'),
(6, 'Pulsera de pet', '79.00', '20.0cm color verde agua\r\n', 'img/p2.jpg', 1, '45g', 'Circulos'),
(7, 'Colgante de pet\r\n', '129.00', '9.2x2cm colores\r\n', 'img/bo.jpg', 2, '65g', 'Aros'),
(8, 'Arete de cartas\r\n', '59.00', '6.0x6.0cm estilo reina\r\n', 'img/tap.jpg', 2, '25g', 'Circular'),
(9, 'Arete de corcholata', '59.00', '9x3cm color verde\r\n', 'img/4.jpg', 2, '75g', 'Colgante'),
(10, 'Arete de tagua', '169.00', '8.5x2.0cm color amarillo\r\n', 'img/art.jpg', 2, '70g', 'Colgante'),
(11, 'Colgante de pet', '79.00', '7.0x3.2cm colores | foco', 'img/dr.jpg', 2, '60g', 'Aros'),
(12, 'Arete de tagua', '139.00', '9x3cm \r\ncolor fiusha', 'img/ros.jpg', 2, '30g', 'Gota'),
(13, 'Arete de botones', '49.00', '5.6x3.2cm color verde\r\n', 'img/bots.jpg', 3, '60g', 'Circular'),
(14, 'Arete de lapices', '69.00', '3.0x2.0cm rojo\r\n', 'img/lapr.jpg', 3, '65g', 'Rombo'),
(15, 'Arete de corcholata', '129.00', '10.0x6.0cm color naranja\r\n', 'img/nar.jpg', 3, '75g', 'Colgante'),
(16, 'Arete de lapices', '79.00', '4.0x3.0cm color morado\r\n', 'img/lap.jpg', 3, '80g', 'Flor'),
(17, 'Arete de targeta', '59.00', '3.0x3.0cm color verde\r\n', 'img/cp.jpg', 3, '25g', 'Rombo'),
(18, 'Arete de corcholata', '159.00', '4.0x3.0cm color azul cielo\r\n', 'img/lin.jpg', 3, '30g', 'Colgante'),
(19, 'Anillo de alambre de cobre', '59.00', '20mm color dorado | corazón\r\n', 'img/10.jpg', 4, '35g', 'Circular'),
(20, 'Anillo de peyote', '69.00', '20mm color rosa metalico | espiral\r\n', 'img/rs.jpg', 4, '35g', 'Aros'),
(21, 'Anillo de pet', '79.00', '20mm colores | hojas\r\n', 'img/19.jpg', 4, '25g', 'Circular'),
(22, 'Anillo de peyote', '79.00', '20mm color morado | corona\r\n', 'img/14.jpg', 4, '28g', 'Aro'),
(23, 'Anillo de alambre de cobre', '69.00', '20mm color dorado | mariposa\r\n', 'img/11.jpg', 4, '35g', 'Monarca'),
(24, 'Anillo de peyote\r\n', '79.00', '20mm color negro y dorado | diagonal\r\n', 'img/ng.jpg', 4, '28g', 'Rombo'),
(25, 'Anillo de peyote\r\n', '89.00', '20mm color amarillo y naranja | triangulos\r\n', 'img/na.jpg', 5, '26g', 'triangular'),
(26, 'Anillo alambre de cobre\r\n', '79.00', '20mm dorado | trebol\r\n', 'img/12.jpg', 5, '35g', 'Dige'),
(27, 'Anillo de peyote\r\n', '89.00', '20mm color verde y negro\r\n', 'img/vd.jpg', 5, '30g', 'Rombo'),
(28, 'Anillo de aluminio\r\n', '49.00', '22mm color plata\r\n', 'img/af.jpg', 5, '24g', 'Dige infinito'),
(29, 'Anillo de pet\r\n', '79.00', '20mm color rojo | flor\r\n', 'img/18.jpg', 5, '15g', 'Circular'),
(30, 'Anillo de peyote', '79.00', '20mm color azul cielo y dorado\r\n', 'img/azu.jpg', 5, '28g', 'Triangulo'),
(31, 'Pulsera de anillas de lata', '79.00', '20.0mcm color azul\r\n', 'img/pf.jpg', 6, '', ''),
(32, 'Pulsera de pet', '99.00', '20.0cm color azul cielo\r\n', 'img/p3.jpg', 6, '', ''),
(33, 'Pulsera de anillas de lata', '179.00', '20.0cm color verde\r\n', 'img/pb.jpg', 6, '', ''),
(34, 'Pulsera de corcholata', '89.00', '20.0cm color verde\r\n', 'img/chh.jpg', 6, '', ''),
(35, 'Pulsera de pet', '89.00', '20cm color azul\r\n', 'img/p1.jpg', 6, '', ''),
(36, 'Pulsera de corcholata', '89.00', '20.0cm color verde\r\n', 'img/cr.jpg', 6, '', ''),
(37, 'Pulsera de botones', '99.00', '20.0cm colores | bolitas\r\n', 'img/p6.jpg', 7, '', ''),
(38, 'Pulsera de pet', '79.00', '20.0cm color verde agua\r\n', 'img/p2.jpg', 7, '', ''),
(39, 'Pulsera de botones', '49.00', '20.0cm colores | varios tamaños\r\n', 'img/p7.jpg', 7, '', ''),
(40, 'Pulsera de semilla de frijol', '119.00', '20.0cm color rojo | zig-zag\r\n', 'img/ps.jpg', 7, '', ''),
(41, 'Pulsera de pet', '59.00', '8.5x2.0cm colores | arcoiris\r\n', 'img/p4.jpg', 7, '', ''),
(42, 'Pulsera de lazo', '49.00', '20.0cm color azul | flores\r\n', 'img/p1.jpg', 7, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblventas`
--

CREATE TABLE `tblventas` (
  `ClaveTransaccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tventas`
--

CREATE TABLE `tventas` (
  `ID` int(11) NOT NULL,
  `ClaveTransaccion` varchar(250) NOT NULL,
  `PaypalDatos` text NOT NULL,
  `Fecha` datetime NOT NULL,
  `Correo` varchar(5000) NOT NULL,
  `Total` decimal(60,2) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tventas`
--

INSERT INTO `tventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`) VALUES
(4, '709pqbmqmkeshjsegg5qaqdsk2', '', '2020-05-11 22:30:11', 'dasjjm.210208@gmail.com', '247.00', 'pendiente'),
(5, '709pqbmqmkeshjsegg5qaqdsk2', '', '2020-05-11 22:34:53', 'liliana@gmail.com', '79.00', 'pendiente'),
(7, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 15:58:39', 'PEREZ@gmail.com', '139.00', 'pendiente'),
(8, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 16:01:27', 'liliana@gmail.com', '208.00', 'pendiente'),
(9, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 16:05:28', 'liliana@gmail.com', '208.00', 'pendiente'),
(10, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 16:06:05', 'dasjjm.210208@gmail.com', '238.00', 'pendiente'),
(11, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 16:08:17', 'dasjjm.210208@gmail.com', '238.00', 'pendiente'),
(12, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 16:18:34', 'dasjjm.210208@gmail.com', '238.00', 'pendiente'),
(13, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 16:19:38', 'dasjjm.210208@gmail.com', '238.00', 'pendiente'),
(14, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 16:21:03', 'dasjjm.210208@gmail.com', '238.00', 'pendiente'),
(15, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 16:21:54', 'dasjjm.210208@gmail.com', '238.00', 'pendiente'),
(16, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 16:22:44', 'dasjjm.210208@gmail.com', '238.00', 'pendiente'),
(17, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 16:42:45', 'dasjjm.210208@gmail.com', '238.00', 'pendiente'),
(18, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 17:05:28', 'dasjjm.210208@gmail.com', '238.00', 'pendiente'),
(29, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 17:37:52', 'dasjjm.210208@gmail.com', '238.00', 'pendiente'),
(30, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 17:38:13', 'dasjjm.210208@gmail.com', '238.00', 'pendiente'),
(31, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 17:40:27', 'dasjjm.210208@gmail.com', '238.00', 'pendiente'),
(32, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 17:43:31', 'dasjjm.210208@gmail.com', '238.00', 'pendiente'),
(33, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 17:44:08', 'dasjjm.210208@gmail.com', '238.00', 'pendiente'),
(34, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 17:44:48', 'dasjjm.210208@gmail.com', '238.00', 'pendiente'),
(35, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 17:45:06', 'dasjjm.210208@gmail.com', '238.00', 'pendiente'),
(36, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 17:45:22', 'dasjjm.210208@gmail.com', '238.00', 'pendiente'),
(37, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 17:46:32', 'dasjjm.210208@gmail.com', '238.00', 'pendiente'),
(38, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 17:46:53', 'dasjjm.210208@gmail.com', '238.00', 'pendiente'),
(39, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 17:47:04', 'dasjjm.210208@gmail.com', '238.00', 'pendiente'),
(40, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 17:49:08', 'dasjjm.210208@gmail.com', '238.00', 'pendiente'),
(41, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 17:51:35', 'dasjjm.210208@gmail.com', '238.00', 'pendiente'),
(42, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 17:52:48', 'dasjjm.210208@gmail.com', '238.00', 'pendiente'),
(43, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 18:36:32', 'dasjjm.210208@gmail.com', '238.00', 'pendiente'),
(44, 'kg4pl3eb9fqitt5bjensoqhq95', '', '2020-05-12 19:02:33', 'dasjjm.210208@gmail.com', '139.00', 'pendiente'),
(45, '9ob9mad837j4782p73n3vnsqqk', '', '2020-05-15 13:31:09', 'dasjjm.210208@gmail.com', '99.00', 'pendiente'),
(46, '9ob9mad837j4782p73n3vnsqqk', '', '2020-05-15 13:34:27', 'dasjjm.210208@gmail.com', '99.00', 'pendiente'),
(47, '9ob9mad837j4782p73n3vnsqqk', '', '2020-05-15 14:53:52', 'dasjjm.210208@gmail.com', '69.00', 'pendiente'),
(48, '9ob9mad837j4782p73n3vnsqqk', '', '2020-05-15 15:02:46', 'dasjjm.210208@gmail.com', '69.00', 'pendiente'),
(49, '9ob9mad837j4782p73n3vnsqqk', '', '2020-05-15 15:10:21', 'PEREZ@gmail.com', '168.00', 'pendiente'),
(50, '9ob9mad837j4782p73n3vnsqqk', '', '2020-05-15 15:11:04', 'PEREZ@gmail.com', '168.00', 'pendiente'),
(51, 'f9r8lk4vdkqohv1bmr0l2ne22h', '', '2020-05-21 13:55:52', 'dasjjm.210208@gmail.com', '139.00', 'pendiente'),
(52, 'f9r8lk4vdkqohv1bmr0l2ne22h', '', '2020-05-21 16:42:06', 'dasjjm.210208@gmail.com', '139.00', 'pendiente'),
(53, 'f9r8lk4vdkqohv1bmr0l2ne22h', '', '2020-05-21 16:47:14', 'dasjjm.210208@gmail.com', '139.00', 'pendiente'),
(54, 'f9r8lk4vdkqohv1bmr0l2ne22h', '', '2020-05-21 16:49:02', 'dasjjm.210208@gmail.com', '139.00', 'pendiente'),
(55, 'itl67nefoqrcm8fsauerlcb7fe', '', '2020-05-22 15:48:28', 'dasjjm.210208@gmail.com', '79.00', 'pendiente'),
(56, 'itl67nefoqrcm8fsauerlcb7fe', '', '2020-05-22 15:49:37', 'dasjjm.210208@gmail.com', '79.00', 'pendiente'),
(57, 'itl67nefoqrcm8fsauerlcb7fe', '', '2020-05-22 16:18:05', 'dasjjm.210208@gmail.com', '79.00', 'pendiente'),
(58, 'itl67nefoqrcm8fsauerlcb7fe', '', '2020-05-22 16:19:28', 'dasjjm.210208@gmail.com', '79.00', 'pendiente'),
(59, 'itl67nefoqrcm8fsauerlcb7fe', '', '2020-05-22 16:20:06', 'dasjjm.210208@gmail.com', '79.00', 'pendiente'),
(60, 'itl67nefoqrcm8fsauerlcb7fe', '', '2020-05-22 16:38:51', 'dasjjm.210208@gmail.com', '79.00', 'pendiente'),
(61, 'itl67nefoqrcm8fsauerlcb7fe', '', '2020-05-22 16:50:37', 'dasjjm.210208@gmail.com', '79.00', 'pendiente'),
(62, 'iisap1ps0q7ha0c6i887p3go0l', '', '2020-05-27 13:30:15', 'dasjjm.210208@gmail.com', '99.00', 'pendiente'),
(63, 'iisap1ps0q7ha0c6i887p3go0l', '', '2020-05-27 13:32:15', 'dasjjm.210208@gmail.com', '99.00', 'pendiente'),
(64, 'iisap1ps0q7ha0c6i887p3go0l', '', '2020-05-27 13:34:31', 'dasjjm.210208@gmail.com', '99.00', 'pendiente'),
(65, 'iisap1ps0q7ha0c6i887p3go0l', '', '2020-05-27 13:37:11', 'dasjjm.210208@gmail.com', '99.00', 'pendiente'),
(66, 'iisap1ps0q7ha0c6i887p3go0l', '', '2020-05-27 14:44:29', 'dasjjm.210208@gmail.com', '99.00', 'pendiente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDVENTA` (`IDVENTA`),
  ADD KEY `IDPRODUCTO` (`IDPRODUCTO`);

--
-- Indices de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tventas`
--
ALTER TABLE `tventas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `tventas`
--
ALTER TABLE `tventas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  ADD CONSTRAINT `tbldetalleventa_ibfk_1` FOREIGN KEY (`IDVENTA`) REFERENCES `tventas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbldetalleventa_ibfk_2` FOREIGN KEY (`IDPRODUCTO`) REFERENCES `tblproductos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
