-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2024 at 03:42 AM
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
(1, 'ONLINE CLASS MERAMAIKAN RANGKAIAN ACARA RAPMAFEST #10', '{\"judul\":\"ONLINE CLASS MERAMAIKAN RANGKAIAN ACARA RAPMAFEST #10\",\"link\":\"http:\\/\\/rapmafm.ukm.ums.ac.id\\/2023\\/09\\/online-class-meramaikan-rangkaian-acara.html\",\"hari\":\"Senin\",\"tanggal\":\"2023-09-04\",\"deskripsi\":\"Buat yang belum tau, kemarin 2 dan 3 September 2023 kita baru aja ngadain kelas online yang bertema \\\"Basic Public Speaking & Content Creator Guidance\\\". Kegiatan ini berlangsung secara daring melalui zoom dan diramaikan oleh kurang lebih 150-an peserta. Waww rame banget yaa CampusBrainers!\",\"images\":\"1711160886_ae34e741c60db610a61d.png\"}', '2024-03-23 02:28:06', '2024-03-23 02:28:06', '0000-00-00 00:00:00'),
(2, 'KESERUAN FINAL LOMBA RAPMAFEST #10', '{\"judul\":\"KESERUAN FINAL LOMBA RAPMAFEST #10\",\"link\":\"http:\\/\\/rapmafm.ukm.ums.ac.id\\/2023\\/10\\/keseruan-final-lomba-rapmafest-10.html\",\"hari\":\"Sabtu\",\"tanggal\":\"2023-10-14\",\"deskripsi\":\"Mengusung tema \\\"Moonlight in the Heaven Voice\\\", Announcer dan Voice Over Competition Rapmafest #10 kali ini udah memasuki babak akhir yaitu \\\"Final dan Pengumuman Pemenang Lomba\\\" pada tanggal 8 Oktober 2023.\",\"images\":\"1711161000_60b38c7d239f246dfb9d.jpg\"}', '2024-03-23 02:30:00', '2024-03-23 02:30:00', '0000-00-00 00:00:00'),
(3, 'GOR Kampus 2 UMS Jadi Moshpit Area Karna mereka???', '{\"judul\":\"GOR Kampus 2 UMS Jadi Moshpit Area Karna mereka???\",\"link\":\"http:\\/\\/rapmafm.ukm.ums.ac.id\\/2023\\/11\\/gor-kampus-2-ums-jadi-moshpit-area.html\",\"hari\":\"Jum\'at\",\"tanggal\":\"2023-11-03\",\"deskripsi\":\"Rapmafest #10 hadir kembali dengan mengusung tema \\\"A Hope in the Moonlight\\\" dan di malam puncak acaranya mengusung tagline \\\"The Gorgeous of Neoma\\\", Rapma FM menghadirkan KarnaMereka di GOR Kampus 2 UMS pada Sabtu (28\\/10\\/2023).\",\"images\":\"1711161075_ccc2ca61004902340289.png\"}', '2024-03-23 02:31:15', '2024-03-23 02:31:15', '0000-00-00 00:00:00'),
(4, 'Rapma FM Jalan-Jalan ke Radio Republik Indonesia?', '{\"judul\":\"Rapma FM Jalan-Jalan ke Radio Republik Indonesia?\",\"link\":\"http:\\/\\/rapmafm.ukm.ums.ac.id\\/2023\\/11\\/107.html\",\"hari\":\"Kamis\",\"tanggal\":\"2023-11-30\",\"deskripsi\":\"Tepatnya di hari Rabu, 29 Desember, Rapma FM berkesempatan buat kunjungan di salah satu radio tertua di Indonesia, yaitu Radio Republik Indonesia atau lebih sering dikenal dengan nama RRI Kota Surakarta. Pastinya juga, kunjungan ini diikuti oleh seluruh anggota Rapma FM. Wahh ga kebayang kan se-seru apa???\",\"images\":\"1711161120_793fb4d28be82be125fc.jpg\"}', '2024-03-23 02:32:00', '2024-03-23 02:32:00', '0000-00-00 00:00:00'),
(5, 'Rapma FM Mengadakan Sarasehan Dengan Konsep Board Game', '{\"judul\":\"Rapma FM Mengadakan Sarasehan Dengan Konsep Board Game\",\"link\":\"http:\\/\\/rapmafm.ukm.ums.ac.id\\/2024\\/02\\/rapma-fm-mengadakan-sarasehan-dengan.html\",\"hari\":\"Senin\",\"tanggal\":\"2024-02-26\",\"deskripsi\":\"Sarasehan pada tahun ini mengangkat tema Board Game, tema ini dipilih karena akan membuat semua orang yang jauh menjadi dekat, dan yang dekat akan semakin dekat. Dalam tema ini ada beberapa game yang diikuti oleh keluarga besar Rapma FM, mulai dari crew baru, sampai alaumni bermain di game ini. Dua game diantaranya adalah tebak gaya dan estafet balon. Acara yang dikemas dengan sangat apik dipadupadankan dengan suasana ruangan yang juga memperkuat tema Board Game. \",\"images\":\"1711161160_691f9ab775f9e7e0ea9e.jpg\"}', '2024-03-23 02:32:40', '2024-03-23 02:32:40', '0000-00-00 00:00:00'),
(6, 'Yuk Intip Keseruan Rapma FM Menggali Ilmu dan Berkunjung ke Geronimo FM Jogja!', '{\"judul\":\"Yuk Intip Keseruan Rapma FM Menggali Ilmu dan Berkunjung ke Geronimo FM Jogja!\",\"link\":\"http:\\/\\/rapmafm.ukm.ums.ac.id\\/2024\\/03\\/yuk-intip-keseruan-rapma-fm-menggali.html\",\"hari\":\"Minggu\",\"tanggal\":\"2024-03-10\",\"deskripsi\":\"Kedatangan Rapma FM ke radio ber-tagline \\\"Love Jogja And You\\\" ini pastinya untuk membangun hubungan antara Geronimo FM dan Rapma FM, selain itu kedatangan Rapma FM ke Geronimo FM pastinya unntuk menambah pengetahuan dan wawasan bagi Rapma FM. \",\"images\":\"1711161194_7bd7ae0e282f908aeba0.jpg\"}', '2024-03-23 02:33:14', '2024-03-23 02:33:14', '0000-00-00 00:00:00');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
