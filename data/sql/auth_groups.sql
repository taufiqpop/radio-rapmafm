-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 06:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rapmafm`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'Admin', 'Administrator'),
(2, 'Crew', 'Crew Rapma FM'),
(3, 'Produksi', 'Produksi Audio & Video'),
(4, 'Jurnalistik', 'Jurnalistik'),
(5, 'Music Director', 'MD'),
(6, 'Admisi On Air', 'Admisi On Air'),
(7, 'Admisi Off Air', 'Admisi Off Air'),
(8, 'Teknisi', 'Teknisi On & Off Air'),
(9, 'HRD', 'HRD'),
(10, 'Advokat', 'Advokat'),
(11, 'Marketing On Air', 'Marketing On Air'),
(12, 'Marketing Off Air', 'Marketing Off Air'),
(13, 'Personal Assistant', 'Sekretaris & Bendahara'),
(14, 'General Manager', 'GM'),
(15, 'Manager Marketing', 'Manager Marketing'),
(16, 'Manager Personalia', 'Manager Personalia'),
(17, 'Manager Umum', 'Manager Umum'),
(18, 'Manager Kepenyiaran', 'Manager Kepenyiaran'),
(19, 'Demisioner', 'Demisioner Rapma FM'),
(20, 'Alumni', 'Alumni Rapma FM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
