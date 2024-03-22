-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 06:39 AM
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
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) UNSIGNED NOT NULL,
  `owner` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `nama_mtalent` varchar(255) NOT NULL,
  `no_mtalent` varchar(255) NOT NULL,
  `nama_medpart` varchar(255) NOT NULL,
  `no_medpart` varchar(255) NOT NULL,
  `ymail` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `spotify` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `blogger` varchar(255) NOT NULL,
  `line` varchar(255) NOT NULL,
  `tiktok` varchar(255) NOT NULL,
  `streaming` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `owner`, `slogan`, `nama_mtalent`, `no_mtalent`, `nama_medpart`, `no_medpart`, `ymail`, `gmail`, `alamat`, `twitter`, `facebook`, `instagram`, `youtube`, `spotify`, `whatsapp`, `blogger`, `line`, `tiktok`, `streaming`, `created_at`, `updated_at`) VALUES
(1, 'Rapma FM', 'The First Edutainment Channel In Solo', 'Dzaky', '85155332202', 'Mela', '88228923126', 'radio.rapmafm@yahoo.co.id', 'umsrapmafm@gmail.com', 'Sayap Kanan Perpustakaan Lantai Dasar, Kampus II Universitas Muhammadiyah Surakarta, Jalan Ahmad Yani Tromol Pos I Pabelan, Kartasura, Sukoharjo, Jawa Tengah, Indonesia, 57162.', 'https://x.com/rapmafmums', 'https://www.facebook.com/umsrapmafm', 'https://www.instagram.com/rapmafm', 'https://www.youtube.com/channel/UCDsAfuUjcWxydKzUF4QI0yg', 'https://open.spotify.com/show/3Gy8RYWni0Tsr0eF6zxfUB', 'https://wa.me/+6285640316175', 'http://rapmafm.ukm.ums.ac.id', 'https://liff.line.me/1645278921-kWRPP32q?accountId=vxw1531h&openerPlatform=webview&openerKey=webview%3AunifiedSearch', 'https://vt.tiktok.com/ZSJrHdqTV', 'https://c2.siar.us/radio/8270/stream', '2024-03-12 06:33:41', '2024-03-12 06:33:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
