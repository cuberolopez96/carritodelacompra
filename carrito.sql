-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2016 at 09:41 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrito`
--

-- --------------------------------------------------------

--
-- Table structure for table `detpedidos`
--

CREATE TABLE `detpedidos` (
  `id` bigint(20) NOT NULL,
  `idpedido` bigint(20) NOT NULL,
  `idproducto` bigint(20) NOT NULL,
  `unidades` bigint(20) NOT NULL,
  `importe` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detpedidos`
--

INSERT INTO `detpedidos` (`id`, `idpedido`, `idproducto`, `unidades`, `importe`) VALUES
(1, 1, 1, 0, '0.00'),
(2, 6, 1, 6, '660.00'),
(3, 7, 1, 6, '660.00'),
(4, 8, 1, 4, '440.00'),
(5, 9, 2, 9, '1026.00');

-- --------------------------------------------------------

--
-- Table structure for table `estados`
--

CREATE TABLE `estados` (
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estados`
--

INSERT INTO `estados` (`estado`) VALUES
('Pendiente'),
('Servido');

-- --------------------------------------------------------

--
-- Table structure for table `familias`
--

CREATE TABLE `familias` (
  `familia` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `familias`
--

INSERT INTO `familias` (`familia`) VALUES
('M?vil'),
('Smartphone');

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE `pedidos` (
  `id` bigint(20) NOT NULL,
  `fecha` datetime NOT NULL,
  `idusuario` bigint(20) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pedidos`
--

INSERT INTO `pedidos` (`id`, `fecha`, `idusuario`, `estado`) VALUES
(1, '2016-06-12 23:49:35', 1, 'Pendiente'),
(2, '2016-06-12 23:50:24', 1, 'Pendiente'),
(3, '2016-06-12 23:52:21', 1, 'Pendiente'),
(4, '2016-06-12 23:52:48', 1, 'Pendiente'),
(5, '2016-06-12 23:54:47', 1, 'Pendiente'),
(6, '2016-06-12 23:55:12', 1, 'Pendiente'),
(7, '2016-06-12 23:56:30', 1, 'Pendiente'),
(8, '2016-06-13 08:43:36', 1, 'Pendiente'),
(9, '2016-06-13 08:49:57', 2, 'Pendiente');

-- --------------------------------------------------------

--
-- Table structure for table `perfiles`
--

CREATE TABLE `perfiles` (
  `perfil` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perfiles`
--

INSERT INTO `perfiles` (`perfil`) VALUES
('Admin'),
('Cliente');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) NOT NULL,
  `descripcion` varchar(255) CHARACTER SET latin1 NOT NULL,
  `familia` varchar(10) CHARACTER SET latin1 NOT NULL,
  `pvp` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `descripcion`, `familia`, `pvp`) VALUES
(1, 'nokia', 'smartphone', '110'),
(2, 'mg', 'smartphone', '114');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `perfil` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`) VALUES
(1, 'juanantom2015', 'cuberolopez96', 'hola3', 'admin'),
(2, 'cubero', 'jccubero96', 'chispa34', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detpedidos`
--
ALTER TABLE `detpedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detpedidos_FK_1` (`idpedido`),
  ADD KEY `detpedidos_FK_2` (`idproducto`);

--
-- Indexes for table `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`estado`);

--
-- Indexes for table `familias`
--
ALTER TABLE `familias`
  ADD PRIMARY KEY (`familia`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fecha` (`fecha`),
  ADD KEY `pedidos_FK_1` (`idusuario`),
  ADD KEY `pedidos_FK_3` (`estado`);

--
-- Indexes for table `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`perfil`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `descripcion` (`descripcion`),
  ADD KEY `productos_FK_1` (`familia`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `usuarios_FK_1` (`perfil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detpedidos`
--
ALTER TABLE `detpedidos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detpedidos`
--
ALTER TABLE `detpedidos`
  ADD CONSTRAINT `detpedidos_FK_1` FOREIGN KEY (`idpedido`) REFERENCES `pedidos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detpedidos_FK_2` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_FK_1` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedidos_FK_3` FOREIGN KEY (`estado`) REFERENCES `estados` (`estado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_FK_1` FOREIGN KEY (`familia`) REFERENCES `familias` (`familia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_FK_1` FOREIGN KEY (`perfil`) REFERENCES `perfiles` (`perfil`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
