-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2024 at 03:54 AM
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
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(11) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `key`, `value`, `tahun`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Juara 1 Lomba Siar UNYFEST#7', '{\"judul\":\"Juara 1 Lomba Siar UNYFEST#7\",\"link\":\"https:\\/\\/www.instagram.com\\/p\\/BwyOA9ehluQ\",\"images\":\"1710309742_d5a3ffdefd5dca79e1e8.jpg\"}', '2019', '2024-03-13 06:02:22', '2024-03-16 02:54:38', '0000-00-00 00:00:00'),
(2, 'Juara 2 & 3 Lomba Siar DISTAFEST', '{\"judul\":\"Juara 2 & 3 Lomba Siar DISTAFEST\",\"link\":\"https:\\/\\/www.instagram.com\\/p\\/B2N2MLPBCce\\/?utm_source=ig_web_copy_link\",\"images\":\"1710309763_a8bbaae088c9d4867e46.jpg\"}', '2020', '2024-03-13 06:02:43', '2024-03-16 02:54:33', '0000-00-00 00:00:00'),
(3, 'Juara 3 Lomba Metta Got Talent', '{\"judul\":\"Juara 3 Lomba Metta Got Talent\",\"link\":\"https:\\/\\/www.instagram.com\\/p\\/COFoXvQpqWi\\/?utm_source=ig_web_copy_link\",\"images\":\"1710309780_336567ec5655a10d20a4.jpg\"}', '2021', '2024-03-13 06:03:00', '2024-03-16 02:54:18', '0000-00-00 00:00:00'),
(4, 'Juara 2 Lomba Siar Galaksiar', '{\"judul\":\"Juara 2 Lomba Siar Galaksiar\",\"link\":\"https:\\/\\/www.instagram.com\\/p\\/CPNZVp_pxEZ\\/?utm_source=ig_web_copy_link\",\"images\":\"1710309902_ea97644282a2249aa6e0.jpg\"}', '2021', '2024-03-13 06:05:02', '2024-03-16 02:54:22', '0000-00-00 00:00:00'),
(5, 'Juara Harapan Lomba Siar Galaksiar ', '{\"judul\":\"Juara Harapan Lomba Siar Galaksiar \",\"link\":\"https:\\/\\/www.instagram.com\\/p\\/CPNZVp_pxEZ\",\"images\":\"1710309985_dfb7c925628f73fd188c.jpg\"}', '2021', '2024-03-13 06:06:25', '2024-03-16 02:54:28', '0000-00-00 00:00:00'),
(6, 'Juara 2 Lomba Siar Galaksiar', '{\"judul\":\"Juara 2 Lomba Siar Galaksiar\",\"link\":\"https:\\/\\/www.instagram.com\\/p\\/Cdkz3SwJS2Q\\/\",\"images\":\"1710311484_7084dd66d28f34f7b822.png\"}', '2022', '2024-03-13 06:31:24', '2024-03-16 02:54:08', '0000-00-00 00:00:00'),
(7, 'Juara 3 Lomba Voice Over Galaksiar', '{\"judul\":\"Juara 3 Lomba Voice Over Galaksiar\",\"link\":\"https:\\/\\/www.instagram.com\\/p\\/Cdkz3SwJS2Q\\/\",\"images\":\"1710311522_f7a3fe0c593db3bbc9ff.png\"}', '2022', '2024-03-13 06:32:02', '2024-03-16 02:54:12', '0000-00-00 00:00:00'),
(8, 'Juara 3 Lomba Siar MAC #9', '{\"judul\":\"Juara 3 Lomba Siar MAC #9\",\"link\":\"https:\\/\\/www.instagram.com\\/p\\/CshyZDsJcMQ\\/\",\"images\":\"1710311556_1ab91a7db412b89cbb18.jpg\"}', '2023', '2024-03-13 06:32:36', '2024-03-16 02:53:47', '0000-00-00 00:00:00'),
(9, 'Juara 1 Lomba Siar UBC Fest', '{\"judul\":\"Juara 1 Lomba Siar UBC Fest\",\"link\":\"https:\\/\\/www.instagram.com\\/p\\/Cxk02o0pAMC\\/\",\"images\":\"1710311638_d0f4126ebb61f292c579.jpg\"}', '2023', '2024-03-13 06:33:58', '2024-03-16 02:53:50', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tahun` (`tahun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
