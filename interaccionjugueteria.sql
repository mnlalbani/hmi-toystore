-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2017 at 10:47 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interaccionjugueteria`
--

-- --------------------------------------------------------

--
-- Table structure for table `direcciones`
--

CREATE TABLE `direcciones` (
  `usuarioid` int(11) DEFAULT NULL,
  `direccionEnvio` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `direcciones`
--

INSERT INTO `direcciones` (`usuarioid`, `direccionEnvio`, `id`) VALUES
(4, 'MRW Perimetral -Cumaná, Estado Sucre', 1),
(4, 'Zoom Cumana plaza, Cumana, Estado sucre', 2),
(1, 'direccion nueva', 3);

-- --------------------------------------------------------

--
-- Table structure for table `metodos_pago`
--

CREATE TABLE `metodos_pago` (
  `id` int(11) NOT NULL,
  `usuarioid` int(11) DEFAULT NULL,
  `metodo` varchar(50) COLLATE utf8_unicode_ci DEFAULT 'VISA',
  `termina` int(11) DEFAULT NULL,
  `expira` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `metodos_pago`
--

INSERT INTO `metodos_pago` (`id`, `usuarioid`, `metodo`, `termina`, `expira`) VALUES
(1, 4, 'VISA', 789, '10/20'),
(11, 1, 'VISA', 123, 'March, 2017');

-- --------------------------------------------------------

--
-- Table structure for table `orden`
--

CREATE TABLE `orden` (
  `id` int(11) NOT NULL,
  `usuarioid` int(11) DEFAULT NULL,
  `articuloid` int(11) DEFAULT NULL,
  `articulocantidad` int(11) DEFAULT NULL,
  `fechaOrden` date DEFAULT NULL,
  `ventaid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orden`
--

INSERT INTO `orden` (`id`, `usuarioid`, `articuloid`, `articulocantidad`, `fechaOrden`, `ventaid`) VALUES
(11, 1, 2, 1, NULL, 18),
(12, 1, 1, 1, NULL, 19),
(13, 1, 1, 1, NULL, 20),
(14, 1, 1, 1, NULL, 21),
(15, 1, 16, 1, NULL, 22),
(16, 1, 2, 1, NULL, 23),
(17, 1, 1, 1, NULL, 23);

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `precio` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `categoria` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `marca` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `img1` text COLLATE utf8_unicode_ci,
  `img2` text COLLATE utf8_unicode_ci,
  `img3` text COLLATE utf8_unicode_ci,
  `img4` text COLLATE utf8_unicode_ci,
  `img5` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `descripcion`, `precio`, `cantidad`, `categoria`, `marca`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES
(1, 'Nintendo Switch', 'Nueva Consola de Nintendo.', 299, 10, 'videojuego', 'nintendo', 'images/producto/switch1.jpg', 'images/producto/switch2.jpg', 'images/producto/switch3.jpg', 'images/producto/switch4.jpg', 'images/producto/switch5.jpg'),
(2, 'Capitan Americano', 'Figura de accion del Capitan America CIVIL WAR.', 20, 10, 'nino', 'marvel', 'images/producto/ca3.jpg', 'images/producto/ca2.jpg', 'images/producto/ca1.jpg', 'images/producto/ca4.jpg', ''),
(3, 'Soldados de Plastico', 'Soldados de Plastico Verde', 20, 21312, 'nino', 'lego', 'images/producto/gam1.jpg', 'images/producto/gam4.jpg', 'images/producto/gam5.png', 'images/producto/gam5.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sesion`
--

CREATE TABLE `sesion` (
  `id` int(11) NOT NULL,
  `usuarioid` int(11) DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(10) COLLATE utf8_unicode_ci DEFAULT 'cliente'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sesion`
--

INSERT INTO `sesion` (`id`, `usuarioid`, `email`, `password`, `tipo`) VALUES
(1, 1, 'admin@admin.com', '1234', 'admin'),
(2, 4, 'mnlalbani@gmail.com', '1234', 'cliente');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cedula` int(8) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `residencia` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `cedula`, `telefono`, `email`, `residencia`) VALUES
(4, 'Manuel', NULL, NULL, NULL, 'mnlalbani@gmail.com', NULL),
(1, 'Admin', NULL, NULL, NULL, 'admin@admin.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `venta`
--

CREATE TABLE `venta` (
  `id` int(11) NOT NULL,
  `preciototal` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccionEnvio` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `metodoPago` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usuarioid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `venta`
--

INSERT INTO `venta` (`id`, `preciototal`, `direccionEnvio`, `metodoPago`, `usuarioid`) VALUES
(18, '32', 'Zoom cumana etc et c', '253', 1),
(19, '338.9', 'Zoom cumana etc et c', '253', 1),
(20, '338.9', 'Zoom cumana etc et c', '253', 1),
(21, '338.9', 'Zoom cumana etc et c', '253', 1),
(22, '23463.1', 'direccion nueva', '123', 1),
(23, '360.9', 'direccion nueva', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metodos_pago`
--
ALTER TABLE `metodos_pago`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sesion`
--
ALTER TABLE `sesion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `metodos_pago`
--
ALTER TABLE `metodos_pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `orden`
--
ALTER TABLE `orden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `sesion`
--
ALTER TABLE `sesion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
