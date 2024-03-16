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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) UNSIGNED NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '{\"deskripsi\":\"<p style=\\\"text-align: justify;\\\">&nbsp; &nbsp; &nbsp; &nbsp; RAPMA FM sebagai Radio komunitas kampus dan satu-satunya media elektronik yang dimiliki oleh Universitas Muhammadiyah Surakarta mempunyai peranan sebagai media informasi, hiburan, dan dakwah dengan istilah yang dipakai untuk aplikasi siar yaitu smart, fun, and pure dengan slogan &ldquo;The First Edutainment Channel In Solo&rdquo;. RAPMA FM sendiri sebagai salah satu UKM memberikan kontribusi untuk Universitas Muhammadiyah Surakarta dan telah diberikan kepercayaan untuk mempublikasikan dan menginformasikan tentang segala hal mengenai seputaran dunia kampus dan hasil-hasil kampus Universitas Muhammadiyah Surakarta kepada mahasiswa, masyarakat luar ataupun khalayak ramai.<\\/p>\",\"link\":\"http:\\/\\/rapmafm.ukm.ums.ac.id\\/p\\/about-us.html\"}', '2024-03-13 02:58:55', '2024-03-15 03:10:13', '2024-03-13 02:58:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
