-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 02:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `jadwalsiar`
--

CREATE TABLE `jadwalsiar` (
  `id` int(11) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `jadwalsiar`
--

INSERT INTO `jadwalsiar` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2024-03-11', '{\"tglmulai\":\"2024-03-11\",\"tglselesai\":\"2024-03-16\",\"penyiar1\":\"Sidam\",\"penyiar2\":\"Dimas\",\"penyiar3\":\"Wikan\",\"penyiar4\":\"Pram\",\"penyiar5\":\"Dimas\",\"penyiar6\":\"Pram\",\"penyiar7\":\"Thifal\",\"penyiar8\":\"Uli\",\"penyiar9\":\"Yoga\",\"penyiar10\":\"Maudy\",\"penyiar11\":\"Aini\",\"penyiar12\":\"Agnes\",\"penyiar13\":\"Yoga\",\"penyiar14\":\"Aqsal\",\"penyiar15\":\"Dimas\",\"penyiar16\":\"Sidam\",\"penyiar17\":\"-\",\"penyiar18\":\"Falah\",\"penyiar19\":\"Salma\",\"penyiar20\":\"Aini\",\"penyiar21\":\"Giri\",\"penyiar22\":\"Ira\",\"penyiar23\":\"-\",\"penyiar24\":\"Safina\",\"penyiar25\":\"Reza\",\"penyiar26\":\"Yoga\",\"penyiar27\":\"Pram\",\"penyiar28\":\"Reza\",\"penyiar29\":\"Aqsal\",\"penyiar30\":\"Zahra\",\"penyiar31\":\"Ira\",\"penyiar32\":\"Thifal\",\"penyiar33\":\"Hanif\",\"penyiar34\":\"Lala\",\"penyiar35\":\"Ira\",\"penyiar36\":\"-\",\"penyiar37\":\"Giri\",\"penyiar38\":\"Pop\",\"penyiar39\":\"Uli\",\"penyiar40\":\"Aqsal\",\"penyiar41\":\"Pop\",\"penyiar42\":\"Vania\",\"penyiar43\":\"Lala\",\"penyiar44\":\"Lala\",\"penyiar45\":\"Agnes\",\"penyiar46\":\"Dinda\",\"penyiar47\":\"Lala\",\"penyiar48\":\"-\",\"penyiar49\":\"Agnes\",\"penyiar50\":\"Zahra\",\"penyiar51\":\"Sidam\",\"penyiar52\":\"Thifal\",\"penyiar53\":\"Hanif\",\"penyiar54\":\"Reza\",\"penyiar55\":\"Ainun\",\"penyiar56\":\"Salma\",\"penyiar57\":\"-\",\"penyiar58\":\"Vania\",\"penyiar59\":\"Falah\",\"penyiar60\":\"Safina\",\"penyiar61\":\"Dazuf\",\"penyiar62\":\"Alex\",\"penyiar63\":\"Aini\",\"penyiar64\":\"Dazuf\",\"penyiar65\":\"Wikan\",\"penyiar66\":\"Sidam\",\"penyiar67\":\"Vania\",\"penyiar68\":\"Dinda\",\"penyiar69\":\"Agnes\",\"penyiar70\":\"Zahra\",\"penyiar71\":\"Wikan\",\"penyiar72\":\"Sidam\",\"penyiar73\":\"Wikan\",\"penyiar74\":\"Dazuf\",\"penyiar75\":\"Reza\",\"penyiar76\":\"Brilly\",\"penyiar77\":\"Uli\",\"penyiar78\":\"Alex\",\"penyiar79\":\"-\",\"penyiar80\":\"Maudy\",\"penyiar81\":\"-\",\"penyiar82\":\"-\",\"penyiar83\":\"-\",\"penyiar84\":\"-\",\"penyiar85\":\"Giri\",\"penyiar86\":\"Dimas\",\"penyiar87\":\"Aqsal\",\"penyiar88\":\"Hanif\",\"penyiar89\":\"Yoga\",\"penyiar90\":\"Wikan\",\"penyiar91\":\"Ira\",\"penyiar92\":\"Lala\",\"penyiar93\":\"Agnes\",\"penyiar94\":\"Safina\",\"penyiar95\":\"Safina\",\"penyiar96\":\"Aini\"}', '2024-03-19 01:43:05', '2024-03-19 01:39:03', '2024-03-19 01:43:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwalsiar`
--
ALTER TABLE `jadwalsiar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwalsiar`
--
ALTER TABLE `jadwalsiar`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
