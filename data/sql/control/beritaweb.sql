-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 09:24 AM
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
-- Table structure for table `beritaweb`
--

CREATE TABLE `beritaweb` (
  `id` int(11) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `beritaweb`
--

INSERT INTO `beritaweb` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'GOR Kampus 2 UMS Jadi Moshpit Area Karna mereka???', '{\"judul\":\"GOR Kampus 2 UMS Jadi Moshpit Area Karna mereka???\",\"link\":\"-\",\"hari\":\"Minggu\",\"tanggal\":\"2024-03-06\",\"deskripsi\":\"107.5 Rapma FM! The First Edutainment Channel in Solo. CampusBrainers, dalam rangka meramaikan ulang tahun Rapma FM yang ke-26, agenda tahunan kita yaitu Rapmafest kali ini hadir\",\"images\":\"1711094363_2a1e8db3cb70d9a4bd00.png\"}', '2024-03-22 07:59:23', '2024-03-22 08:02:16', '0000-00-00 00:00:00'),
(2, 'KESERUAN FINAL LOMBA RAPMAFEST #10', '{\"judul\":\"KESERUAN FINAL LOMBA RAPMAFEST #10\",\"link\":\"-\",\"hari\":\"Minggu\",\"tanggal\":\"2024-03-21\",\"deskripsi\":\"107.5 Rapma FM! The First Edutainment Channel in Solo. Halloo CampusBrainers, wahh terpantau udah memasuki bulan Oktober\",\"images\":\"1711094558_dbf229d3b87f98892d76.png\"}', '2024-03-22 08:02:38', '2024-03-22 08:02:38', '0000-00-00 00:00:00'),
(3, 'ONLINE CLASS MERAMAIKAN ACARA RAPMAFEST #10', '{\"judul\":\"ONLINE CLASS MERAMAIKAN ACARA RAPMAFEST #10\",\"link\":\"-\",\"hari\":\"Minggu\",\"tanggal\":\"2024-03-14\",\"deskripsi\":\"107.5 Rapma FM! The First Edutainment Channel in Solo Siapa disini yang ikut Online Class RAPMAFEST #10 angkat tangan!!! Gimana nih menurut kamu tentang rangkaian acara\",\"images\":\"1711094579_46476244171a81e032b6.png\"}', '2024-03-22 08:02:59', '2024-03-22 08:02:59', '0000-00-00 00:00:00'),
(4, 'GOR Kampus 2 UMS Jadi Moshpit Area Karna mereka???', '{\"judul\":\"GOR Kampus 2 UMS Jadi Moshpit Area Karna mereka???\",\"link\":\"-\",\"hari\":\"Minggu\",\"tanggal\":\"2024-03-20\",\"deskripsi\":\"107.5 Rapma FM! The First Edutainment Channel in Solo. CampusBrainers, dalam rangka meramaikan ulang tahun Rapma FM yang ke-26, agenda tahunan kita yaitu Rapmafest kali ini hadir\",\"images\":\"1711095204_d03a6fec10ee19091390.png\"}', '2024-03-22 08:13:24', '2024-03-22 08:14:26', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritaweb`
--
ALTER TABLE `beritaweb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritaweb`
--
ALTER TABLE `beritaweb`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
