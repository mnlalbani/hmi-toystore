-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2017 at 05:49 PM
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
CREATE DATABASE IF NOT EXISTS `interaccionjugueteria` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `interaccionjugueteria`;

-- --------------------------------------------------------

--
-- Table structure for table `direcciones`
--

CREATE TABLE `direcciones` (
  `usuarioid` int(11) DEFAULT NULL,
  `direccionEnvio` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `direcciones`
--

INSERT INTO `direcciones` (`usuarioid`, `direccionEnvio`, `id`) VALUES
(4, 'MRW Perimetral -Cumaná, Estado Sucre', 1),
(4, 'Zoom Cumana plaza, Cumana, Estado sucre', 2);

-- --------------------------------------------------------

--
-- Table structure for table `metodos_pago`
--

CREATE TABLE `metodos_pago` (
  `id` int(11) NOT NULL,
  `usuarioid` int(11) DEFAULT NULL,
  `metodo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `termina` int(11) DEFAULT NULL,
  `expira` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `metodos_pago`
--

INSERT INTO `metodos_pago` (`id`, `usuarioid`, `metodo`, `termina`, `expira`) VALUES
(1, 4, 'VISA', 789, '10/20');

-- --------------------------------------------------------

--
-- Table structure for table `pago`
--

CREATE TABLE `pago` (
  `id` int(11) NOT NULL,
  `metodo_pago` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion_envio` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cedula` int(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `img1` text COLLATE utf8_unicode_ci NOT NULL,
  `img2` text COLLATE utf8_unicode_ci NOT NULL,
  `img3` text COLLATE utf8_unicode_ci NOT NULL,
  `img4` text COLLATE utf8_unicode_ci NOT NULL,
  `img5` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `descripcion`, `precio`, `cantidad`, `categoria`, `marca`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES
(1, 'Nintendo Switch', 'Nueva Consola de Nintendo', 299, 10, 'videojuego', 'nintendo', '', '', '', '', ''),
(2, 'Capitan America', 'Figura de accion del capitan america', 20, 10, 'nino', 'marvel', '', '', '', '', '');

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
(1, NULL, 'admin@admin.com', '1234', 'admin'),
(2, 4, 'mnlalbani@gmail.com', '1234', 'cliente'),
(3, NULL, 'noelieth@gmail.com', '1234', 'cliente'),
(4, NULL, 'nuevo@nuevo.com', '1234', 'cliente');

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
(5, 'noelieth', NULL, NULL, NULL, 'noelieth@gmail.com', NULL),
(6, 'nuevo', NULL, NULL, NULL, 'nuevo@nuevo.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `venta`
--

CREATE TABLE `venta` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad_producto` int(10) DEFAULT NULL,
  `cedula_cliente` int(8) DEFAULT NULL,
  `precio_total` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Indexes for table `pago`
--
ALTER TABLE `pago`
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
-- AUTO_INCREMENT for table `metodos_pago`
--
ALTER TABLE `metodos_pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pago`
--
ALTER TABLE `pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sesion`
--
ALTER TABLE `sesion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
