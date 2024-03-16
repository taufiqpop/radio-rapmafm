-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2024 at 03:49 AM
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
-- Table structure for table `structure`
--

CREATE TABLE `structure` (
  `id` int(11) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `structure`
--

INSERT INTO `structure` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'GMPA', '{\"divisi\":\"GMPA\",\"tahun\":\"2021\",\"status\":\"active\",\"images\":\"1710307248_d2b71ff9ea4058e7c6e5.png\"}', '2024-03-13 04:18:22', '2024-03-14 03:39:58', '0000-00-00 00:00:00'),
(2, 'Divisi Umum', '{\"divisi\":\"Divisi Umum\",\"tahun\":\"2021\",\"status\":\" \",\"images\":\"1710303526_d4505a7756c75dc9d1ff.png\"}', '2024-03-13 04:18:46', '2024-03-14 03:40:15', '0000-00-00 00:00:00'),
(3, 'Divisi Kepenyiaran', '{\"divisi\":\"Divisi Kepenyiaran\",\"tahun\":\"2021\",\"status\":\" \",\"images\":\"1710304363_8d0637ccd093227f0cb7.png\"}', '2024-03-13 04:32:43', '2024-03-14 03:36:21', '0000-00-00 00:00:00'),
(4, 'Divisi Marketing', '{\"divisi\":\"Divisi Marketing\",\"tahun\":\"2021\",\"status\":\" \",\"images\":\"1710304409_4455e94f59b8b3327de8.png\"}', '2024-03-13 04:33:29', '2024-03-14 03:36:26', '0000-00-00 00:00:00'),
(5, 'Divisi Personalia', '{\"divisi\":\"Divisi Personalia\",\"tahun\":\"2021\",\"status\":\" \",\"images\":\"1710304423_4331aebb0df6c1f75044.png\"}', '2024-03-13 04:33:43', '2024-03-14 03:36:31', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `structure`
--
ALTER TABLE `structure`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `structure`
--
ALTER TABLE `structure`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
