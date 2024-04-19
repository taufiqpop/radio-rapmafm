-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2024 at 05:46 AM
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
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'BASOSAPI', '{\"program\":\"BASOSAPI\",\"jenis\":\"Regular Program\",\"filter\":\"filter-regular\",\"link\":\"https:\\/\\/open.spotify.com\\/episode\\/0H0UTyvK4su14jJVDcfk2X?si=0e221fd2423c4e70\",\"images\":\"1710312120_135e5ffee5029c18d101.png\"}', '2024-03-13 06:42:00', '2024-04-19 03:45:11', '0000-00-00 00:00:00'),
(2, '11N1', '{\"program\":\"11N1\",\"jenis\":\"Regular Program\",\"filter\":\"filter-regular\",\"link\":\"https:\\/\\/open.spotify.com\\/episode\\/2xZvhNVfFhs729lHLLKEbs?si=70f8296146fb44e0\",\"images\":\"1710312192_f8ce076c31673d1dcaab.png\"}', '2024-03-13 06:43:12', '2024-04-19 03:45:04', '0000-00-00 00:00:00'),
(3, 'RAPMANESIA', '{\"program\":\"RAPMANESIA\",\"jenis\":\"Regular Program\",\"filter\":\"filter-regular\",\"link\":\"https:\\/\\/open.spotify.com\\/episode\\/7rl9eIYGm9jOpvPd21PobJ?si=a2ffbdd78c874a9e\",\"images\":\"1710312366_af62087fdc064d713c10.png\"}', '2024-03-13 06:46:06', '2024-04-19 03:45:08', '0000-00-00 00:00:00'),
(4, 'THE GOOD VIBES', '{\"program\":\"THE GOOD VIBES\",\"jenis\":\"Regular Program\",\"filter\":\"filter-regular\",\"link\":\"https:\\/\\/open.spotify.com\\/episode\\/0wJCTRfCwIqT7RBrAENsux?si=d5982fb80c624fbf\",\"images\":\"1710312387_2305d43ab26b555c70b6.png\"}', '2024-03-13 06:46:27', '2024-04-19 03:44:56', '0000-00-00 00:00:00'),
(5, 'KHASANAH PETANG', '{\"program\":\"KHASANAH PETANG\",\"jenis\":\"Regular Program\",\"filter\":\"filter-regular\",\"link\":\"https:\\/\\/open.spotify.com\\/episode\\/2OpCjIc6YBl883Aw3qJ1bQ?si=zW2mHW2VToeFD_1M_5L7jg\",\"images\":\"1710312409_1dfb9144b8f8e2d3b6c5.jpg\"}', '2024-03-13 06:46:49', '2024-04-19 03:44:53', '0000-00-00 00:00:00'),
(6, 'MUSIC BOX', '{\"program\":\"MUSIC BOX\",\"jenis\":\"Regular Program\",\"filter\":\"filter-regular\",\"link\":\"https:\\/\\/open.spotify.com\\/episode\\/7DvP3sMJa5LpgLSfkAR2mm?si=3a09928028b94df3\",\"images\":\"1710312444_9d5e907723a29b30aaa5.png\"}', '2024-03-13 06:47:24', '2024-04-19 03:44:51', '0000-00-00 00:00:00'),
(7, 'AFTERDAY', '{\"program\":\"AFTERDAY\",\"jenis\":\"Regular Program\",\"filter\":\"filter-regular\",\"link\":\"https:\\/\\/open.spotify.com\\/episode\\/3ED6VNFrqqjrAJd2TdQDso?si=Oq_TJuU3SKWsPObAYSO1BQ\",\"images\":\"1710312464_78e524f183208e2c963c.png\"}', '2024-03-13 06:47:44', '2024-04-19 03:44:47', '0000-00-00 00:00:00'),
(8, 'RAPMATALKS', '{\"program\":\"RAPMATALKS\",\"jenis\":\"Podcast\",\"filter\":\"filter-podcast\",\"link\":\"https:\\/\\/open.spotify.com\\/episode\\/2a8fTWrWjcSFdzstWYGsa8?si=LZSkdRdrRPGh_-bcDMD61w\",\"images\":\"1710312506_39e7c3d0d63f7b3f20e5.png\"}', '2024-03-13 06:48:26', '2024-04-19 03:44:44', '0000-00-00 00:00:00'),
(9, 'TOP 15', '{\"program\":\"TOP 15\",\"jenis\":\"Regular Program\",\"filter\":\"filter-regular\",\"link\":\"https:\\/\\/open.spotify.com\\/episode\\/3SzzwZRfHLyEJFSdhM9gVW?si=b0ce528bac70443d\",\"images\":\"1710312545_407e7b5fcfc48c696e9b.png\"}', '2024-03-13 06:49:05', '2024-04-19 03:44:39', '0000-00-00 00:00:00'),
(10, 'MOVIE SCREEN', '{\"program\":\"MOVIE SCREEN\",\"jenis\":\"Special Program\",\"filter\":\"filter-special\",\"link\":\"https:\\/\\/open.spotify.com\\/episode\\/0c3UrX8b5sVauco3iEXYNA?si=fa275c68c3834fd9\",\"images\":\"1710312722_77a7bbc4e255e813e76f.png\"}', '2024-03-13 06:52:02', '2024-04-19 03:43:50', '0000-00-00 00:00:00'),
(11, 'KING & QUEEN', '{\"program\":\"KING & QUEEN\",\"jenis\":\"Special Program\",\"filter\":\"filter-special\",\"link\":\"https:\\/\\/open.spotify.com\\/episode\\/3UQz9EO6DUvuurHthAvlkI?si=9c9273e359c54c02\",\"images\":\"1710312761_938398504d59df3dbe86.png\"}', '2024-03-13 06:52:41', '2024-04-19 03:43:43', '0000-00-00 00:00:00'),
(12, 'INDIEZONE', '{\"program\":\"INDIEZONE\",\"jenis\":\"Special Program\",\"filter\":\"filter-special\",\"link\":\"https:\\/\\/open.spotify.com\\/episode\\/1yxOYXK1bMWIs3tkpSUOIc?si=ca8a3dbee2454a7e\",\"images\":\"1710312781_38b73694d2d2078df2cd.png\"}', '2024-03-13 06:53:01', '2024-04-19 03:43:40', '0000-00-00 00:00:00'),
(13, 'TEKSAS', '{\"program\":\"TEKSAS\",\"jenis\":\"Special Program\",\"filter\":\"filter-special\",\"link\":\"https:\\/\\/open.spotify.com\\/episode\\/6eSgHfMK6972yDe9Ch2o8F?si=800d1f78b93d4425\",\"images\":\"1710312819_e6f6f3cd6380d86da08b.png\"}', '2024-03-13 06:53:39', '2024-04-19 03:43:38', '0000-00-00 00:00:00'),
(14, 'K-ARENA', '{\"program\":\"K-ARENA\",\"jenis\":\"Special Program\",\"filter\":\"filter-special\",\"link\":\"https:\\/\\/open.spotify.com\\/episode\\/1dAcappKAmIOxcbZMjyHG9?si=fa7a3c9fab694581\",\"images\":\"1710312844_87910e2b81e6b361f7b1.png\"}', '2024-03-13 06:54:04', '2024-04-19 03:43:34', '0000-00-00 00:00:00'),
(15, 'MERINDING', '{\"program\":\"MERINDING\",\"jenis\":\"Special Program\",\"filter\":\"filter-special\",\"link\":\"https:\\/\\/open.spotify.com\\/episode\\/1T4gXy589d4nDZ820F0W2q?si=b43b7113efea4f2b\",\"images\":\"1710312866_30b3c80207ee19b8fb60.png\"}', '2024-03-13 06:54:26', '2024-04-19 03:43:19', '0000-00-00 00:00:00'),
(16, 'SPORTACULAR', '{\"program\":\"SPORTACULAR\",\"jenis\":\"Special Program\",\"filter\":\"filter-special\",\"link\":\"https:\\/\\/www.instagram.com\\/rapmafm\\/\",\"images\":\"1710312900_c15e1a7295e893b8b27b.png\"}', '2024-03-13 06:55:00', '2024-04-19 03:42:30', '0000-00-00 00:00:00'),
(17, 'SUDUT KAMPUS', '{\"program\":\"SUDUT KAMPUS\",\"jenis\":\"Special Program\",\"filter\":\"filter-special\",\"link\":\"https:\\/\\/open.spotify.com\\/episode\\/2mru4VWHqOk0g702FerJDl?si=1ab330e8de2d41f9\",\"images\":\"1710376875_16f62a5cdde66f509562.png\"}', '2024-03-13 06:55:24', '2024-04-19 03:42:25', '0000-00-00 00:00:00'),
(18, 'NOSATNIGHT', '{\"program\":\"NOSATNIGHT\",\"jenis\":\"Special Program\",\"filter\":\"filter-special\",\"link\":\"https:\\/\\/open.spotify.com\\/episode\\/5JCrqf2RRplT0WexV3UqOP?si=980ed3002a6e4946\",\"images\":\"1710376885_891d230b786d7bfc617e.png\"}', '2024-03-13 06:55:40', '2024-04-19 03:42:21', '0000-00-00 00:00:00'),
(19, 'CLASSIC NIGHT', '{\"program\":\"CLASSIC NIGHT\",\"jenis\":\"Special Program\",\"filter\":\"filter-special\",\"link\":\"https:\\/\\/open.spotify.com\\/episode\\/0H0UTyvK4su14jJVDcfk2X?si=0e221fd2423c4e70\",\"images\":\"1710376903_dc13ca4b8b0a8088415c.png\"}', '2024-03-14 00:41:43', '2024-04-19 03:41:56', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
