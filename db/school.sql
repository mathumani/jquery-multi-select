-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: app-db
-- Generation Time: Dec 13, 2023 at 09:34 AM
-- Server version: 11.1.2-MariaDB-1:11.1.2+maria~ubu2204
-- PHP Version: 8.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL COMMENT 'primaryKey',
  `level` varchar(30) NOT NULL COMMENT 'LevelOfClass',
  `name` varchar(30) NOT NULL COMMENT 'NameOfClass'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `level`, `name`) VALUES
(3, 'PRIMARY', 'STANDARD I'),
(4, 'PRIMARY', 'STANDARD II'),
(5, 'PRIMARY', 'STANDARD III'),
(6, 'PRIMARY', 'STANDARD IV'),
(7, 'PRIMARY', 'STANDARD V'),
(8, 'PRIMARY', 'STANDARD VI'),
(9, 'PRIMARY', 'STANDARD VII'),
(10, 'SECONDARY', 'FORM I'),
(11, 'SECONDARY', 'FORM II'),
(12, 'SECONDARY', 'FORM III'),
(13, 'SECONDARY', 'FORM IV'),
(14, 'ADVANCE', 'FORM V'),
(15, 'ADVANCE', 'FORM VI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nameIndx` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primaryKey', AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
