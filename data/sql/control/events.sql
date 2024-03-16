-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2024 at 03:48 AM
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
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `key`, `value`, `tahun`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'RAPMADAY #7', '{\"nama\":\"RAPMADAY #7\",\"deskripsi\":\"<script src=\\\"\\/\\/cdn.public.flmngr.com\\/FLMNFLMN\\/widgets.js\\\"><\\/script>\",\"jenis\":\"RAPMADAY\",\"tahun\":\"2021\",\"link\":\"https:\\/\\/youtu.be\\/tG9CjgjVY0k\",\"images\":\"1710311715_add3ca2b885fce9fe237.png\"}', '', '2024-03-13 06:35:15', '2024-03-13 06:35:15', '0000-00-00 00:00:00'),
(2, 'RAPMAFEST #8', '{\"nama\":\"RAPMAFEST #8\",\"deskripsi\":\"<script src=\\\"\\/\\/cdn.public.flmngr.com\\/FLMNFLMN\\/widgets.js\\\"><\\/script>\",\"jenis\":\"RAPMAFEST\",\"tahun\":\"2021\",\"link\":\"https:\\/\\/rapmafm.com\\/tiket-rapmafest.html\",\"images\":\"1710311733_499d8a839347f1ae6fef.png\"}', '', '2024-03-13 06:35:33', '2024-03-13 06:35:33', '0000-00-00 00:00:00'),
(3, 'RAPMADAY #8', '{\"nama\":\"RAPMADAY #8\",\"deskripsi\":\"<script src=\\\"\\/\\/cdn.public.flmngr.com\\/FLMNFLMN\\/widgets.js\\\"><\\/script>\",\"jenis\":\"RAPMADAY\",\"tahun\":\"2022\",\"link\":\"https:\\/\\/rapmafm.com\\/rapmaday8.html\",\"images\":\"1710311756_46703cd167a29bb1e23b.png\"}', '', '2024-03-13 06:35:56', '2024-03-13 06:35:56', '0000-00-00 00:00:00'),
(4, 'RAPMAFEST #9', '{\"nama\":\"RAPMAFEST #9\",\"deskripsi\":\"<script src=\\\"\\/\\/cdn.public.flmngr.com\\/FLMNFLMN\\/widgets.js\\\"><\\/script>\",\"jenis\":\"RAPMAFEST\",\"tahun\":\"2022\",\"link\":\"https:\\/\\/rapmafm.com\\/tiket-rapmafest9.html\",\"images\":\"1710311781_c6212142abe50b84bef9.png\"}', '', '2024-03-13 06:36:21', '2024-03-13 06:36:21', '0000-00-00 00:00:00'),
(5, 'RAPMADAY #9', '{\"nama\":\"RAPMADAY #9\",\"deskripsi\":\"<script src=\\\"\\/\\/cdn.public.flmngr.com\\/FLMNFLMN\\/widgets.js\\\"><\\/script>\",\"jenis\":\"RAPMADAY\",\"tahun\":\"2023\",\"link\":\"https:\\/\\/youtu.be\\/wx-mFQCOW7I?si=IpvLgj0oWSKkJGQH\",\"images\":\"1710311805_67cdf95c3d07c2f51f37.png\"}', '', '2024-03-13 06:36:45', '2024-03-13 06:36:45', '0000-00-00 00:00:00'),
(6, 'RAPMAFEST #10', '{\"nama\":\"RAPMAFEST #10\",\"deskripsi\":\"<script src=\\\"\\/\\/cdn.public.flmngr.com\\/FLMNFLMN\\/widgets.js\\\"><\\/script>\",\"jenis\":\"RAPMAFEST\",\"tahun\":\"2023\",\"link\":\"https:\\/\\/rapmafm.com\\/rapmaday8.html\",\"images\":\"1710311825_ce70a5d847f061be8766.png\"}', '', '2024-03-13 06:37:05', '2024-03-13 06:37:05', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tahun` (`tahun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
