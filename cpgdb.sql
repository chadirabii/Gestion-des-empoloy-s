-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 26, 2022 at 12:39 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpgdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `cin` int(8) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `prenom` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `adresse` longtext,
  `email` varchar(30) DEFAULT NULL,
  `num_tlf` int(8) DEFAULT NULL,
  `score` int(8) DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `service` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`cin`, `nom`, `prenom`, `age`, `adresse`, `email`, `num_tlf`, `score`, `gender`, `service`) VALUES
(14705153, 'Chadi', 'Rabii', 20, 'Rue l aeroport gafsa', 'chadirabii@gmail.com', 21331387, 20, 'Male', 'Informatic Service'),
(12345678, 'Iheb ', 'Mabrouki', 20, 'gafsa', 'chadirabii@gmail.comlk', 12444444, 21312, 'Male', 'Medical Service'),
(14705152, 'Chadi', 'Rabiiii', 20, 'Rue l aeroport gafsa', 'chadirabii@gmail.comaze', 21331381, 21311, 'Male', 'Medical Service');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`email`),
  KEY `id` (`id`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(52, 'chadi', 'chadirabii@gmail.com', '2c569a7ed68ebb2d237162205bf8b2f7'),
(56, 'fares', 'fares2business@gmail.com', 'f81ca0b764e3a6a2d3ecf0d5a4a949bc'),
(55, 'Fares', 'faresrabii@gmail.com', '56d28ab646485f66cca07c8930595b44'),
(57, 'test', 'test@test.com', '25d55ad283aa400af464c76d713c07ad');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
