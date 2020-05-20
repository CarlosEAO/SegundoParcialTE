-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 20, 2020 at 02:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ExamenParcial2`
--
CREATE DATABASE IF NOT EXISTS `ExamenParcial2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ExamenParcial2`;

-- --------------------------------------------------------

--
-- Table structure for table `ejercicio1`
--

CREATE TABLE `ejercicio1` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `edad` int(11) NOT NULL,
  `numCuenta` varchar(20) NOT NULL,
  `domicilio` varchar(50) NOT NULL,
  `delegacion` varchar(30) NOT NULL,
  `metros2` double NOT NULL,
  `tipoPredio` varchar(10) NOT NULL,
  `impuestoTotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ejercicio1`
--

INSERT INTO `ejercicio1` (`id`, `nombre`, `apellidos`, `edad`, `numCuenta`, `domicilio`, `delegacion`, `metros2`, `tipoPredio`, `impuestoTotal`) VALUES
(1, 'Carlos Emmanuel', 'Aranda Ochoa', 70, '12345678', 'Jose Calvillo', 'Alvaro Obregon', 2, 'urbano', 85),
(2, 'Carlos Emmanuel', 'Aranda Ochoa', 3, 'sdasds', 'fdsfdaf', 'Alvaro Obregon', 90, 'urbano', 1441.4895),
(3, 'Carlos Emmanuel', 'Aranda Ochoa', 3, 'sdasds', 'fdsfdaf', 'Alvaro Obregon', 90, 'urbano', 1441.4895),
(4, 'Carlos Emmanuel', 'Aranda Ochoa', 3, 'sdasds', 'fdsfdaf', 'Alvaro Obregon', 90, 'urbano', 1441.4895),
(5, 'Carlos ', 'Aranda', 21, '2123123', 'La barranca', 'Milpa Alta', 13, 'rural', 146.6556),
(6, 'Carlos ', 'Aranda', 21, '2123123', 'La barranca', 'Milpa Alta', 13, 'rural', 146.6556);

-- --------------------------------------------------------

--
-- Table structure for table `ejercicio2`
--

CREATE TABLE `ejercicio2` (
  `id` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `apps` varchar(60) NOT NULL,
  `grado` varchar(15) NOT NULL,
  `grupo` varchar(5) NOT NULL,
  `cal_1` double NOT NULL,
  `cal_2` double NOT NULL,
  `cal_3` double NOT NULL,
  `cal_4` double NOT NULL,
  `cal_5` double NOT NULL,
  `prom_fin` int(11) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ejercicio2`
--

INSERT INTO `ejercicio2` (`id`, `nom`, `apps`, `grado`, `grupo`, `cal_1`, `cal_2`, `cal_3`, `cal_4`, `cal_5`, `prom_fin`, `status`) VALUES
(1, 'Carlos Emmanuel', 'Aranda Ochoa', '1212', '1', 9.97, 1, 1, 1, 1, 3, 'status'),
(2, 'Carlos Emmanuel', 'Aranda Ochoa', '1212', '1', 9.97, 1, 1, 1, 1, 3, 'Reprobado'),
(3, 'Carlos Emmanuel', 'Aranda Ochoa', '1212', '1', 9.97, 1, 1, 1, 1, 3, 'Reprobado');

-- --------------------------------------------------------

--
-- Table structure for table `ejercicio3`
--

CREATE TABLE `ejercicio3` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `edad` int(11) NOT NULL,
  `numeroContrato` varchar(15) NOT NULL,
  `domicilio` varchar(60) NOT NULL,
  `zona` varchar(5) NOT NULL,
  `metros3` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ejercicio3`
--

INSERT INTO `ejercicio3` (`id`, `nombre`, `apellidos`, `edad`, `numeroContrato`, `domicilio`, `zona`, `metros3`, `total`) VALUES
(1, 'Carlos', 'Aranda', 80, '12132323', 'La barranca', 'C', 130, 143),
(2, 'Carlos', 'Aranda', 80, '12132323', 'La barranca', 'C', 130, 1287);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ejercicio1`
--
ALTER TABLE `ejercicio1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ejercicio2`
--
ALTER TABLE `ejercicio2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ejercicio3`
--
ALTER TABLE `ejercicio3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ejercicio1`
--
ALTER TABLE `ejercicio1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ejercicio2`
--
ALTER TABLE `ejercicio2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ejercicio3`
--
ALTER TABLE `ejercicio3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
