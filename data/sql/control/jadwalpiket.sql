-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 07:18 AM
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
-- Table structure for table `jadwalpiket`
--

CREATE TABLE `jadwalpiket` (
  `id` int(11) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `jadwalpiket`
--

INSERT INTO `jadwalpiket` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2021-01-01', '{\"tglmulai\":\"2021-01-01\",\"tglselesai\":\"2021-12-31\",\"anggota1\":\"Pop\",\"anggota2\":\"Pram\",\"anggota3\":\"Reza\",\"anggota4\":\"Safina\",\"anggota5\":\"Aqsal\",\"anggota6\":\"Salma\",\"anggota7\":\"Sidam\",\"anggota8\":\"Thifal\",\"anggota9\":\"Vania\",\"anggota10\":\"Wikan\",\"anggota11\":\"Dimas\",\"anggota12\":\"Dinda\",\"anggota13\":\"Falah\",\"anggota14\":\"Giri\",\"anggota15\":\"Ira\",\"anggota16\":\"Lala\",\"anggota17\":\"Uli\",\"anggota18\":\"Maudy\",\"anggota19\":\"Hanif\",\"anggota20\":\"Alex\",\"anggota21\":\"Yoga\",\"anggota22\":\"Agnes\",\"anggota23\":\"Ainunafi\",\"anggota24\":\"Aini\",\"anggota25\":\"Shenya\",\"anggota26\":\"Zahra\",\"anggota27\":\"Budi\",\"anggota28\":\"Brilly\",\"anggota29\":\"Dazuf\",\"anggota30\":\"Izha\",\"anggota31\":\"-\",\"anggota32\":\"-\",\"anggota33\":\"-\",\"anggota34\":\"-\",\"anggota35\":\"-\",\"anggota36\":\"-\",\"anggota37\":\"-\",\"anggota38\":\"-\",\"anggota39\":\"-\",\"anggota40\":\"-\",\"anggota41\":\"-\",\"anggota42\":\"-\",\"anggota43\":\"-\",\"anggota44\":\"-\",\"anggota45\":\"-\",\"anggota46\":\"-\",\"anggota47\":\"-\",\"anggota48\":\"-\",\"anggota49\":\"-\",\"anggota50\":\"-\",\"anggota51\":\"-\",\"anggota52\":\"-\",\"anggota53\":\"-\",\"anggota54\":\"-\",\"anggota55\":\"-\",\"anggota56\":\"-\",\"anggota57\":\"-\",\"anggota58\":\"-\",\"anggota59\":\"-\",\"anggota60\":\"-\"}', '2024-03-21 05:30:07', '2024-03-21 04:46:24', '2024-03-21 05:30:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwalpiket`
--
ALTER TABLE `jadwalpiket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwalpiket`
--
ALTER TABLE `jadwalpiket`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
