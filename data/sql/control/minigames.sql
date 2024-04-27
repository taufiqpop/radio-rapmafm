-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2024 at 07:53 AM
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
-- Table structure for table `minigames`
--

CREATE TABLE `minigames` (
  `id` int(11) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `minigames`
--

INSERT INTO `minigames` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Tic Tac Toe', '{\"nama\":\"Tic Tac Toe\",\"link\":\"tictactoe\",\"images\":\"1713505211_2950e29d62dd9769e526.jpeg\"}', '2024-04-19 05:40:11', '2024-04-19 05:40:11', '0000-00-00 00:00:00'),
(2, 'Memory Cards', '{\"nama\":\"Memory Cards\",\"link\":\"memorycards\",\"images\":\"1714192139_8c51eccad115fd09da17.png\"}', '2024-04-27 04:28:59', '2024-04-27 04:29:32', '0000-00-00 00:00:00'),
(3, 'Quiz', '{\"nama\":\"Quiz\",\"link\":\"quiz\",\"images\":\"1714193776_c643e7df72b1998fc1b9.jpg\"}', '2024-04-27 04:56:16', '2024-04-27 04:56:16', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `minigames`
--
ALTER TABLE `minigames`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `minigames`
--
ALTER TABLE `minigames`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
