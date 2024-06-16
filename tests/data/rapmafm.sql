-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 16, 2024 at 12:53 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

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
  `id` int UNSIGNED NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '{\"deskripsi\":\"RAPMA FM sebagai Radio komunitas kampus dan satu-satunya media elektronik yang dimiliki oleh Universitas Muhammadiyah Surakarta mempunyai peranan sebagai media informasi, hiburan, dan dakwah dengan istilah yang dipakai untuk aplikasi siar yaitu smart, fun, and pure dengan slogan \\u201cThe First Edutainment Channel In Solo\\u201d. RAPMA FM sendiri sebagai salah satu UKM memberikan kontribusi untuk Universitas Muhammadiyah Surakarta dan telah diberikan kepercayaan untuk mempublikasikan dan menginformasikan tentang segala hal mengenai seputaran dunia kampus dan hasil-hasil kampus Universitas Muhammadiyah Surakarta kepada mahasiswa, masyarakat luar ataupun khalayak ramai\",\"link\":\"http:\\/\\/rapmafm.ukm.ums.ac.id\\/p\\/about-us.html\"}', '2024-03-13 02:58:55', '2024-03-27 01:52:25', '2024-03-13 02:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
(8, 'Juara 3 Lomba Siar MAC #9', '{\"judul\":\"Juara 3 Lomba Siar MAC #9\",\"link\":\"https:\\/\\/www.instagram.com\\/p\\/CshyZDsJcMQ\\/\",\"images\":\"1710311556_1ab91a7db412b89cbb18.jpg\"}', '2023', '2024-03-13 06:32:36', '2024-03-20 04:46:36', '0000-00-00 00:00:00'),
(9, 'Juara 1 Lomba Siar UBC Fest', '{\"judul\":\"Juara 1 Lomba Siar UBC Fest\",\"link\":\"https:\\/\\/www.instagram.com\\/p\\/Cxk02o0pAMC\\/\",\"images\":\"1710311638_d0f4126ebb61f292c579.jpg\"}', '2023', '2024-03-13 06:33:58', '2024-03-16 02:53:50', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `aruskas`
--

CREATE TABLE `aruskas` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `audios`
--

CREATE TABLE `audios` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'Admin', 'Administrator'),
(2, 'Crew', 'Crew'),
(3, 'Produksi', 'Produksi'),
(4, 'Jurnalistik', 'Jurnalistik'),
(5, 'MD', 'Music Director'),
(6, 'AOn', 'Admisi On Air'),
(7, 'AOff', 'Admisi Off Air'),
(8, 'Teknisi', 'Teknisi'),
(9, 'HRD', 'HRD'),
(10, 'Advokat', 'Advokat'),
(11, 'MOn', 'Marketing On Air'),
(12, 'MOff', 'Marketing Off Air'),
(13, 'PA', 'Personal Assistant'),
(14, 'GM', 'General Manager'),
(15, 'MM', 'Manager Marketing'),
(16, 'MP', 'Manager Personalia'),
(17, 'MU', 'Manager Umum'),
(18, 'MK', 'Manager Kepenyiaran'),
(19, 'Demis', 'Demisioner'),
(20, 'Alumni', 'Alumni');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(2, 27),
(3, 11),
(3, 12),
(4, 13),
(4, 14),
(5, 15),
(6, 18),
(6, 19),
(7, 20),
(8, 17),
(9, 21),
(9, 22),
(9, 23),
(9, 26),
(10, 24),
(11, 6),
(11, 7),
(12, 8),
(12, 9),
(13, 3),
(13, 4),
(14, 2),
(15, 5),
(16, 25),
(17, 16),
(18, 10),
(19, 28),
(20, 29);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `beritaweb`
--

CREATE TABLE `beritaweb` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `capeng`
--

CREATE TABLE `capeng` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `crew`
--

CREATE TABLE `crew` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `dendadlibs`
--

CREATE TABLE `dendadlibs` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `key`, `value`, `tahun`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'RAPMADAY #7', '{\"nama\":\"RAPMADAY #7\",\"jenis\":\"RAPMADAY\",\"tahun\":\"2021\",\"link\":\"https:\\/\\/youtu.be\\/tG9CjgjVY0k\",\"images\":\"1710311715_add3ca2b885fce9fe237.png\"}', '', '2024-03-13 06:35:15', '2024-03-13 06:35:15', '0000-00-00 00:00:00'),
(2, 'RAPMAFEST #8', '{\"nama\":\"RAPMAFEST #8\",\"jenis\":\"RAPMAFEST\",\"tahun\":\"2021\",\"link\":\"rapmafest8\",\"images\":\"1710311733_499d8a839347f1ae6fef.png\"}', '', '2024-03-13 06:35:33', '2024-03-22 06:10:28', '0000-00-00 00:00:00'),
(3, 'RAPMADAY #8', '{\"nama\":\"RAPMADAY #8\",\"jenis\":\"RAPMADAY\",\"tahun\":\"2022\",\"link\":\"rapmaday8\",\"images\":\"1710311756_46703cd167a29bb1e23b.png\"}', '', '2024-03-13 06:35:56', '2024-03-22 06:09:56', '0000-00-00 00:00:00'),
(4, 'RAPMAFEST #9', '{\"nama\":\"RAPMAFEST #9\",\"jenis\":\"RAPMAFEST\",\"tahun\":\"2022\",\"link\":\"rapmafest9\",\"images\":\"1710311781_c6212142abe50b84bef9.png\"}', '', '2024-03-13 06:36:21', '2024-03-22 06:10:22', '0000-00-00 00:00:00'),
(5, 'RAPMADAY #9', '{\"nama\":\"RAPMADAY #9\",\"jenis\":\"RAPMADAY\",\"tahun\":\"2023\",\"link\":\"https:\\/\\/youtu.be\\/wx-mFQCOW7I\",\"images\":\"1710311805_67cdf95c3d07c2f51f37.png\"}', '', '2024-03-13 06:36:45', '2024-03-22 06:07:23', '0000-00-00 00:00:00'),
(6, 'RAPMAFEST #10', '{\"nama\":\"RAPMAFEST #10\",\"jenis\":\"RAPMAFEST\",\"tahun\":\"2023\",\"link\":\"rapmafest10\",\"images\":\"1710311825_ce70a5d847f061be8766.png\"}', '', '2024-03-13 06:37:05', '2024-03-25 05:40:32', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gmpa`
--

CREATE TABLE `gmpa` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `iklan`
--

CREATE TABLE `iklan` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `infografis`
--

CREATE TABLE `infografis` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `kode` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `jadwalpiket`
--

CREATE TABLE `jadwalpiket` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `jadwalpiket`
--

INSERT INTO `jadwalpiket` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2021-01-01', '{\"tglmulai\":\"2021-01-01\",\"tglselesai\":\"2021-12-31\",\"anggota1\":\"Pop\",\"anggota2\":\"Pram\",\"anggota3\":\"Reza\",\"anggota4\":\"Safina\",\"anggota5\":\"Aqsal\",\"anggota6\":\"Salma\",\"anggota7\":\"Sidam\",\"anggota8\":\"Thifal\",\"anggota9\":\"Vania\",\"anggota10\":\"Wikan\",\"anggota11\":\"Dimas\",\"anggota12\":\"Dinda\",\"anggota13\":\"Falah\",\"anggota14\":\"Giri\",\"anggota15\":\"Ira\",\"anggota16\":\"Lala\",\"anggota17\":\"Uli\",\"anggota18\":\"Maudy\",\"anggota19\":\"Hanif\",\"anggota20\":\"Alex\",\"anggota21\":\"Yoga\",\"anggota22\":\"Agnes\",\"anggota23\":\"Ainunafi\",\"anggota24\":\"Aini\",\"anggota25\":\"Shenya\",\"anggota26\":\"Zahra\",\"anggota27\":\"Budi\",\"anggota28\":\"Brilly\",\"anggota29\":\"Dazuf\",\"anggota30\":\"Izha\",\"anggota31\":\"-\",\"anggota32\":\"-\",\"anggota33\":\"-\",\"anggota34\":\"-\",\"anggota35\":\"-\",\"anggota36\":\"-\",\"anggota37\":\"-\",\"anggota38\":\"-\",\"anggota39\":\"-\",\"anggota40\":\"-\",\"anggota41\":\"-\",\"anggota42\":\"-\",\"anggota43\":\"-\",\"anggota44\":\"-\",\"anggota45\":\"-\",\"anggota46\":\"-\",\"anggota47\":\"-\",\"anggota48\":\"-\",\"anggota49\":\"-\",\"anggota50\":\"-\",\"anggota51\":\"-\",\"anggota52\":\"-\",\"anggota53\":\"-\",\"anggota54\":\"-\",\"anggota55\":\"-\",\"anggota56\":\"-\",\"anggota57\":\"-\",\"anggota58\":\"-\",\"anggota59\":\"-\",\"anggota60\":\"-\"}', '2024-03-21 05:30:07', '2024-03-21 04:46:24', '2024-03-21 05:30:07');

-- --------------------------------------------------------

--
-- Table structure for table `jadwalsiar`
--

CREATE TABLE `jadwalsiar` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `jadwalsiar`
--

INSERT INTO `jadwalsiar` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2024-03-11', '{\"tglmulai\":\"2024-03-11\",\"tglselesai\":\"2024-03-16\",\"penyiar1\":\"Sidam\",\"penyiar2\":\"Dimas\",\"penyiar3\":\"Wikan\",\"penyiar4\":\"Pram\",\"penyiar5\":\"Dimas\",\"penyiar6\":\"Pram\",\"penyiar7\":\"Thifal\",\"penyiar8\":\"Uli\",\"penyiar9\":\"Yoga\",\"penyiar10\":\"Maudy\",\"penyiar11\":\"Aini\",\"penyiar12\":\"Agnes\",\"penyiar13\":\"Yoga\",\"penyiar14\":\"Aqsal\",\"penyiar15\":\"Dimas\",\"penyiar16\":\"Sidam\",\"penyiar17\":\"-\",\"penyiar18\":\"Falah\",\"penyiar19\":\"Salma\",\"penyiar20\":\"Aini\",\"penyiar21\":\"Giri\",\"penyiar22\":\"Ira\",\"penyiar23\":\"-\",\"penyiar24\":\"Safina\",\"penyiar25\":\"Reza\",\"penyiar26\":\"Yoga\",\"penyiar27\":\"Pram\",\"penyiar28\":\"Reza\",\"penyiar29\":\"Aqsal\",\"penyiar30\":\"Zahra\",\"penyiar31\":\"Ira\",\"penyiar32\":\"Thifal\",\"penyiar33\":\"Hanif\",\"penyiar34\":\"Lala\",\"penyiar35\":\"Ira\",\"penyiar36\":\"-\",\"penyiar37\":\"Giri\",\"penyiar38\":\"Pop\",\"penyiar39\":\"Uli\",\"penyiar40\":\"Aqsal\",\"penyiar41\":\"Pop\",\"penyiar42\":\"Vania\",\"penyiar43\":\"Lala\",\"penyiar44\":\"Lala\",\"penyiar45\":\"Agnes\",\"penyiar46\":\"Dinda\",\"penyiar47\":\"Lala\",\"penyiar48\":\"-\",\"penyiar49\":\"Agnes\",\"penyiar50\":\"Zahra\",\"penyiar51\":\"Sidam\",\"penyiar52\":\"Thifal\",\"penyiar53\":\"Hanif\",\"penyiar54\":\"Reza\",\"penyiar55\":\"Ainun\",\"penyiar56\":\"Salma\",\"penyiar57\":\"-\",\"penyiar58\":\"Vania\",\"penyiar59\":\"Falah\",\"penyiar60\":\"Safina\",\"penyiar61\":\"Dazuf\",\"penyiar62\":\"Alex\",\"penyiar63\":\"Aini\",\"penyiar64\":\"Dazuf\",\"penyiar65\":\"Wikan\",\"penyiar66\":\"Sidam\",\"penyiar67\":\"Vania\",\"penyiar68\":\"Dinda\",\"penyiar69\":\"Agnes\",\"penyiar70\":\"Zahra\",\"penyiar71\":\"Wikan\",\"penyiar72\":\"Sidam\",\"penyiar73\":\"Wikan\",\"penyiar74\":\"Dazuf\",\"penyiar75\":\"Reza\",\"penyiar76\":\"Brilly\",\"penyiar77\":\"Uli\",\"penyiar78\":\"Alex\",\"penyiar79\":\"-\",\"penyiar80\":\"Maudy\",\"penyiar81\":\"-\",\"penyiar82\":\"-\",\"penyiar83\":\"-\",\"penyiar84\":\"-\",\"penyiar85\":\"Giri\",\"penyiar86\":\"Dimas\",\"penyiar87\":\"Aqsal\",\"penyiar88\":\"Hanif\",\"penyiar89\":\"Yoga\",\"penyiar90\":\"Wikan\",\"penyiar91\":\"Ira\",\"penyiar92\":\"Lala\",\"penyiar93\":\"Agnes\",\"penyiar94\":\"Safina\",\"penyiar95\":\"Safina\",\"penyiar96\":\"Aini\"}', '2024-03-19 01:43:05', '2024-03-20 04:20:38', '2024-03-19 01:43:05');

-- --------------------------------------------------------

--
-- Table structure for table `kepenyiaran`
--

CREATE TABLE `kepenyiaran` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `kerjabakti`
--

CREATE TABLE `kerjabakti` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `labelrekaman`
--

CREATE TABLE `labelrekaman` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `lagu`
--

CREATE TABLE `lagu` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `livereport`
--

CREATE TABLE `livereport` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `maganginternal`
--

CREATE TABLE `maganginternal` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `marketing`
--

CREATE TABLE `marketing` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `medpart`
--

CREATE TABLE `medpart` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Crew', '{\"divisi\":\"Crew\",\"tahun\":\"2021\",\"images\":\"1710387359_093bceeceb273dde81b2.png\"}', '2024-03-14 04:58:20', '2024-03-20 04:54:20', '2024-03-14 04:58:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1710902988, 1),
(2, '2024-03-07-141457', 'App\\Database\\Migrations\\Pesan', 'default', 'App', 1710902988, 1),
(3, '2024-03-07-141513', 'App\\Database\\Migrations\\Settings', 'default', 'App', 1710902988, 1),
(4, '2024-03-07-141528', 'App\\Database\\Migrations\\Achievements', 'default', 'App', 1710902988, 1),
(5, '2024-03-13-014625', 'App\\Database\\Migrations\\About', 'default', 'App', 1710902988, 1),
(6, '2024-03-13-014642', 'App\\Database\\Migrations\\Structure', 'default', 'App', 1710902988, 1),
(7, '2024-03-13-014651', 'App\\Database\\Migrations\\Topchart', 'default', 'App', 1710902988, 1),
(8, '2024-03-13-014658', 'App\\Database\\Migrations\\Program', 'default', 'App', 1710902988, 1),
(9, '2024-03-13-014705', 'App\\Database\\Migrations\\Events', 'default', 'App', 1710902988, 1),
(10, '2024-03-13-050254', 'App\\Database\\Migrations\\Member', 'default', 'App', 1710902988, 1),
(11, '2024-03-14-031706', 'App\\Database\\Migrations\\Crew', 'default', 'App', 1710902988, 1),
(12, '2024-03-14-031710', 'App\\Database\\Migrations\\Pengurus', 'default', 'App', 1710902988, 1),
(13, '2024-03-14-031715', 'App\\Database\\Migrations\\Alumni', 'default', 'App', 1710902988, 1),
(14, '2024-03-14-053924', 'App\\Database\\Migrations\\Inventaris', 'default', 'App', 1710902988, 1),
(15, '2024-03-14-053943', 'App\\Database\\Migrations\\Pemancar', 'default', 'App', 1710902988, 1),
(16, '2024-03-14-054011', 'App\\Database\\Migrations\\Jadwalsiar', 'default', 'App', 1710902988, 1),
(17, '2024-03-14-054037', 'App\\Database\\Migrations\\Podcast', 'default', 'App', 1710902988, 1),
(18, '2024-03-14-054043', 'App\\Database\\Migrations\\Audios', 'default', 'App', 1710902988, 1),
(19, '2024-03-14-054104', 'App\\Database\\Migrations\\Lagu', 'default', 'App', 1710902988, 1),
(20, '2024-03-14-054111', 'App\\Database\\Migrations\\Videos', 'default', 'App', 1710902988, 1),
(21, '2024-03-14-054129', 'App\\Database\\Migrations\\Medpart', 'default', 'App', 1710902988, 1),
(22, '2024-03-14-054133', 'App\\Database\\Migrations\\Iklan', 'default', 'App', 1710902988, 1),
(23, '2024-03-14-054142', 'App\\Database\\Migrations\\Mtalent', 'default', 'App', 1710902988, 1),
(24, '2024-03-14-054227', 'App\\Database\\Migrations\\Surat', 'default', 'App', 1710902988, 1),
(25, '2024-03-16-080403', 'App\\Database\\Migrations\\Dendadlibs', 'default', 'App', 1710902988, 1),
(26, '2024-03-16-090836', 'App\\Database\\Migrations\\Workshopbroadcast', 'default', 'App', 1710902988, 1),
(27, '2024-03-16-091005', 'App\\Database\\Migrations\\Maganginternal', 'default', 'App', 1710902988, 1),
(28, '2024-03-16-102822', 'App\\Database\\Migrations\\Suratmasuk', 'default', 'App', 1710902988, 1),
(29, '2024-03-16-102826', 'App\\Database\\Migrations\\SuratKeluar', 'default', 'App', 1710902988, 1),
(30, '2024-03-16-121340', 'App\\Database\\Migrations\\Peminjaman', 'default', 'App', 1710902988, 1),
(31, '2024-03-16-125727', 'App\\Database\\Migrations\\Pemutaranserentak', 'default', 'App', 1710902988, 1),
(32, '2024-03-16-125745', 'App\\Database\\Migrations\\Labelrekaman', 'default', 'App', 1710902988, 1),
(33, '2024-03-16-145728', 'App\\Database\\Migrations\\Umum', 'default', 'App', 1710902988, 1),
(34, '2024-03-18-023054', 'App\\Database\\Migrations\\Gmpa', 'default', 'App', 1710902988, 1),
(35, '2024-03-18-023058', 'App\\Database\\Migrations\\Kepenyiaran', 'default', 'App', 1710902988, 1),
(36, '2024-03-18-023103', 'App\\Database\\Migrations\\Marketing', 'default', 'App', 1710902988, 1),
(37, '2024-03-18-023108', 'App\\Database\\Migrations\\Personalia', 'default', 'App', 1710902988, 1),
(38, '2024-03-19-024205', 'App\\Database\\Migrations\\Penyiar', 'default', 'App', 1710902988, 1),
(39, '2024-03-19-053251', 'App\\Database\\Migrations\\News', 'default', 'App', 1710902988, 1),
(40, '2024-03-21-020901', 'App\\Database\\Migrations\\Livereport', 'default', 'App', 1710986994, 2),
(41, '2024-03-21-022313', 'App\\Database\\Migrations\\Suratsp', 'default', 'App', 1710988077, 3),
(42, '2024-03-21-022542', 'App\\Database\\Migrations\\Capeng', 'default', 'App', 1710988077, 3),
(43, '2024-03-21-034759', 'App\\Database\\Migrations\\Kerjabakti', 'default', 'App', 1710992996, 4),
(44, '2024-03-21-034816', 'App\\Database\\Migrations\\Jadwalpiket', 'default', 'App', 1710992996, 4),
(45, '2024-03-21-045650', 'App\\Database\\Migrations\\Konten', 'default', 'App', 1710997047, 5),
(46, '2024-03-21-061926', 'App\\Database\\Migrations\\Newsflash', 'default', 'App', 1711002037, 6),
(47, '2024-03-21-065317', 'App\\Database\\Migrations\\Infografis', 'default', 'App', 1711004036, 7),
(48, '2024-03-21-065326', 'App\\Database\\Migrations\\Blog', 'default', 'App', 1711004036, 7),
(49, '2024-03-22-073832', 'App\\Database\\Migrations\\Beritaweb', 'default', 'App', 1711093136, 8),
(50, '2024-03-23-142606', 'App\\Database\\Migrations\\Aruskas', 'default', 'App', 1711330631, 9),
(51, '2024-04-19-034930', 'App\\Database\\Migrations\\Minigames', 'default', 'App', 1713499586, 10);

-- --------------------------------------------------------

--
-- Table structure for table `minigames`
--

CREATE TABLE `minigames` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `minigames`
--

INSERT INTO `minigames` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Tic Tac Toe', '{\"nama\":\"Tic Tac Toe\",\"link\":\"tictactoe\",\"images\":\"1713505211_2950e29d62dd9769e526.jpeg\"}', '2024-04-19 05:40:11', '2024-04-19 05:40:11', '0000-00-00 00:00:00'),
(2, 'Memory Cards', '{\"nama\":\"Memory Cards\",\"link\":\"memorycards\",\"images\":\"1714192139_8c51eccad115fd09da17.png\"}', '2024-04-27 04:28:59', '2024-04-27 04:29:32', '0000-00-00 00:00:00'),
(3, 'Quiz', '{\"nama\":\"Quiz\",\"link\":\"quiz\",\"images\":\"1714193776_c643e7df72b1998fc1b9.jpg\"}', '2024-04-27 04:56:16', '2024-04-27 04:56:16', '0000-00-00 00:00:00'),
(4, 'Typing Test', '{\"nama\":\"Typing Test\",\"link\":\"typing\",\"images\":\"1714203982_5626b7f809aedd5c1699.png\"}', '2024-04-27 07:46:22', '2024-04-27 07:46:22', '0000-00-00 00:00:00'),
(5, 'Snake', '{\"nama\":\"Snake\",\"link\":\"snake\",\"images\":\"1714203995_192e497d1c78f3367680.png\"}', '2024-04-27 07:46:35', '2024-04-27 07:46:35', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mtalent`
--

CREATE TABLE `mtalent` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `newsflash`
--

CREATE TABLE `newsflash` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `pemancar`
--

CREATE TABLE `pemancar` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `pemutaranserentak`
--

CREATE TABLE `pemutaranserentak` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `penyiar`
--

CREATE TABLE `penyiar` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `penyiar`
--

INSERT INTO `penyiar` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'TOP 15', '{\"program\":\"TOP 15\",\"penyiar1\":\"Zahra\",\"penyiar2\":\"-\"}', '2024-03-19 03:52:45', '2024-03-27 01:07:26', '2024-03-19 03:52:45');

-- --------------------------------------------------------

--
-- Table structure for table `personalia`
--

CREATE TABLE `personalia` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `podcast`
--

CREATE TABLE `podcast` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `embed` text NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int UNSIGNED NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `owner`, `slogan`, `nama_mtalent`, `no_mtalent`, `nama_medpart`, `no_medpart`, `ymail`, `gmail`, `alamat`, `twitter`, `facebook`, `instagram`, `youtube`, `spotify`, `whatsapp`, `blogger`, `line`, `tiktok`, `streaming`, `created_at`, `updated_at`) VALUES
(1, 'Rapma FM', 'The First Edutainment Channel In Solo', 'Dzaky', '85155332202', 'Mela', '88228923126', 'radio.rapmafm@yahoo.co.id', 'umsrapmafm@gmail.com', 'Sayap Kanan Perpustakaan Lantai Dasar, Kampus II Universitas Muhammadiyah Surakarta, Jalan Ahmad Yani Tromol Pos I Pabelan, Kartasura, Sukoharjo, Jawa Tengah, Indonesia, 57162.', 'https://x.com/rapmafmums', 'https://www.facebook.com/umsrapmafm', 'https://www.instagram.com/rapmafm', 'https://youtube.com/@RapmafmUMS', 'https://open.spotify.com/show/3Gy8RYWni0Tsr0eF6zxfUB', 'https://wa.me/+6285640316175', 'http://rapmafm.ukm.ums.ac.id', 'https://liff.line.me/1645278921-kWRPP32q?accountId=vxw1531h&openerPlatform=webview&openerKey=webview%3AunifiedSearch', 'https://vt.tiktok.com/ZSJrHdqTV', 'https://c2.siar.us/radio/8270/stream', '2024-03-12 06:33:41', '2024-03-27 02:08:17');

-- --------------------------------------------------------

--
-- Table structure for table `structure`
--

CREATE TABLE `structure` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `structure`
--

INSERT INTO `structure` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'GMPA', '{\"divisi\":\"GMPA\",\"tahun\":\"2021\",\"status\":\"active\",\"images\":\"1710307248_d2b71ff9ea4058e7c6e5.png\"}', '2024-03-13 04:18:22', '2024-03-20 04:53:36', '0000-00-00 00:00:00'),
(2, 'Divisi Umum', '{\"divisi\":\"Divisi Umum\",\"tahun\":\"2021\",\"status\":\" \",\"images\":\"1710303526_d4505a7756c75dc9d1ff.png\"}', '2024-03-13 04:18:46', '2024-03-20 04:52:42', '0000-00-00 00:00:00'),
(3, 'Divisi Kepenyiaran', '{\"divisi\":\"Divisi Kepenyiaran\",\"tahun\":\"2021\",\"status\":\" \",\"images\":\"1710304363_8d0637ccd093227f0cb7.png\"}', '2024-03-13 04:32:43', '2024-03-14 03:36:21', '0000-00-00 00:00:00'),
(4, 'Divisi Marketing', '{\"divisi\":\"Divisi Marketing\",\"tahun\":\"2021\",\"status\":\" \",\"images\":\"1710304409_4455e94f59b8b3327de8.png\"}', '2024-03-13 04:33:29', '2024-03-14 03:36:26', '0000-00-00 00:00:00'),
(5, 'Divisi Personalia', '{\"divisi\":\"Divisi Personalia\",\"tahun\":\"2021\",\"status\":\" \",\"images\":\"1710304423_4331aebb0df6c1f75044.png\"}', '2024-03-13 04:33:43', '2024-03-14 03:36:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `suratkeluar`
--

CREATE TABLE `suratkeluar` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `suratkeluar`
--

INSERT INTO `suratkeluar` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2024-03-15', '{\"tanggal\":\"2024-03-15\",\"hari\":\"Senin\",\"nosurat\":\"001\\/D\\/GM\\/RAPMAFM \\/I\\/2020 \",\"penerima\":\"Sutarto\",\"perihal\":\"Undangan\"}', '2024-03-20 03:18:58', '2024-03-25 05:35:48', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `suratmasuk`
--

CREATE TABLE `suratmasuk` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `suratmasuk`
--

INSERT INTO `suratmasuk` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2024-03-22', '{\"tanggal\":\"2024-03-22\",\"hari\":\"Kamis\",\"nosurat\":\"001\\/D\\/GM\\/RAPMAFM\\/I\\/2020\",\"instansi\":\"Kopma\",\"perihal\":\"Surat Keterangan Berita Kehilangan STNK\"}', '2024-03-20 03:16:51', '2024-03-25 06:16:56', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `suratsp`
--

CREATE TABLE `suratsp` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `suratsp`
--

INSERT INTO `suratsp` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pop', '{\"nama\":\"Pop\",\"sp\":\"SP 1\",\"hari\":\"Senin\",\"tanggal\":\"2024-03-19\",\"alasan\":\"Karena\",\"prodi\":\"IT\",\"angkatan\":\"2019\",\"nohp\":\"081328024137\",\"keterangan\":\"-\"}', '2024-03-21 03:07:41', '2024-03-21 03:09:44', '0000-00-00 00:00:00'),
(2, 'Pop', '{\"nama\":\"Pop\",\"sp\":\"SP 2\",\"hari\":\"Selasa\",\"tanggal\":\"2024-03-26\",\"alasan\":\"Karena\",\"prodi\":\"IT\",\"angkatan\":\"2019\",\"nohp\":\"081328024137\",\"keterangan\":\"-\"}', '2024-03-21 03:10:10', '2024-03-25 06:30:33', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `topchart`
--

CREATE TABLE `topchart` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `topchart`
--

INSERT INTO `topchart` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Indonesia', '{\"versi\":\"Indonesia\",\"link\":\"https:\\/\\/open.spotify.com\\/embed\\/playlist\\/0rj1HLftduTk5t2OC6t0XD?si=GgqgR4zfSZGfZj3mnjEd3g\"}', '2024-03-13 03:28:52', '2024-03-20 04:26:53', '0000-00-00 00:00:00'),
(2, 'Manca', '{\"versi\":\"Manca\",\"link\":\"https:\\/\\/open.spotify.com\\/embed\\/playlist\\/48GHvGhwDZFBL6X88c20Zd?si=IX3o5iOWTiOxA3xqw8lYGg\"}', '2024-03-13 03:34:15', '2024-03-20 04:26:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `umum`
--

CREATE TABLE `umum` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `umum`
--

INSERT INTO `umum` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '2024-03-24', '{\"daritgl\":\"2024-03-24\",\"sampaitgl\":\"2024-03-29\",\"darihari\":\"Senin\",\"sampaihari\":\"Minggu\",\"subdivisi\":\"Admisi On Air\",\"proker\":\"Pindah Studio\",\"mulaitgl\":\"2024-03-20\",\"selesaitgl\":\"2024-03-13\",\"mulaihari\":\"Minggu\",\"selesaihari\":\"Sabtu\",\"kendala\":\"-\",\"status\":\"Sudah Terlaksana\"}', '2024-03-25 05:28:54', '2024-03-25 06:18:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'taufiqpop999@gmail.com', 'taufiqpop99', 'Taufiq Pop', '1709822597_7ad0a5bb9051ca19ee04.png', '$2y$10$0PU2PnhC.c0nzWosmdVwQefb7MePnm.wDDgkVM.MdKBeyGGiDla4u', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 14:40:37', '2024-03-07 14:43:17', '0000-00-00 00:00:00'),
(2, 'rezalutfian@gmail.com', 'rezalutfian', 'Reza Lutfian Ardi', '1709828805_ebd50fe49347008fd17d.png', '$2y$10$mmwAu9jS0iHUV5TDPZtxo.uK5inPf5JIB8MIQHfiKr8wlNnPVEaHy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 14:57:27', '2024-03-07 16:26:45', '0000-00-00 00:00:00'),
(3, 'lalapo19@gmail.com', 'lalapo19', 'Lala Dwi Alfiyah', '1709827289_aec3fd5976c26f3fc81d.jpg', '$2y$10$gLqC08NIquYMVJDE7a9X5O6ep1.WcNGgqymU46TlzbIheeo4v3J8q', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 14:57:54', '2024-03-07 16:01:29', '0000-00-00 00:00:00'),
(4, 'agnesdyva@gmail.com', 'agnesdyva', 'Agnes Dyva Z.A.', '1709828593_28188f2e4b4271235291.jpg', '$2y$10$W/zOzeJvZh/WsKIYa/VBcuIUm5QWX/7kIvUalD38upQG13HK0/L2W', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:02:58', '2024-03-07 16:23:13', '0000-00-00 00:00:00'),
(5, 'mhanip@gmail.com', 'mhanip', 'M. Hanif A.H.', '1709828817_dc4ccff8ed76354e3be5.png', '$2y$10$dW6M1VSqmjo8nLnPohuVzuS9StU7gISx/uX8lJRTuSDgvx/u0OOoq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:03:57', '2024-03-07 16:26:57', '0000-00-00 00:00:00'),
(6, 'maulidiakartika@gmail.com', 'maudy', 'Maulidia Kartika P.', '1709828831_17738945e0a2f83543ec.png', '$2y$10$oDsqokuaIVwWx4mNODMys.aKdtn90uDHXfwAd54DrkLQOhxwoigUm', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:04:26', '2024-03-07 16:27:11', '0000-00-00 00:00:00'),
(7, 'satyaaqsal@gmail.com', 'aqsal', 'Satya Aqsal Z.', '1709828863_7f83c4e4b4858205cf61.png', '$2y$10$6TiVzn9iGV9GnRS70MPHpeYnLrfkDS0P9Ei/OSY.Gnc4J5tTwqUaq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:04:47', '2024-03-07 16:27:43', '0000-00-00 00:00:00'),
(8, 'fajrulfalah@gmail.com', 'falah', 'Fajrul Falah S.', '1709828845_d4e5e3912c0b8d7fcfac.png', '$2y$10$l7xI/850C7ZV68AHDDNZCOru/xcl00x747cEwRA0Fa8sohrM816pi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:05:07', '2024-03-07 16:27:25', '0000-00-00 00:00:00'),
(9, 'vanianuradhani@gmail.com', 'vaniaa', 'Vania Nuradhani W.', '1709828785_e7f04971d1eda55a16c2.png', '$2y$10$/Gq7MulPKcYzaJjOwTNTWuxITqceKbkmxhsMm6zJtsdM/1h8Rklf2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:05:19', '2024-03-07 16:26:25', '0000-00-00 00:00:00'),
(10, 'brilliantadhi@gmail.com', 'brilly', 'Brilliant Adhi P.', '1709828624_67c925d9d62b2b608ee7.png', '$2y$10$5pMbeZglu2B4tdQ4r7BjWOeUX/kD5r2QAM/wBUpCX8o4Me0YI/t.O', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:07:55', '2024-03-07 16:23:44', '0000-00-00 00:00:00'),
(11, 'dazuf@gmail.com', 'dazuf', 'Daffa Zufar F.', '1709828169_b88c9aa8c1ea2152c08f.jpg', '$2y$10$noWeIvkg6qoIQG5Tgu.ogOD.KWkSvhKdEwhPwbLYiA5gHqxzp8ERq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:08:24', '2024-03-07 16:16:09', '0000-00-00 00:00:00'),
(12, 'alexandria@gmail.com', 'alex', 'M. Alexandria H.A.', '1709828136_f5b4c8bb4991ce4137d2.jpg', '$2y$10$dOA8nistmJwclzrJTF.ULuK3kpCfg6OLs7P5mqlXhoKPQEsLbDLT2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:08:35', '2024-03-07 16:15:36', '0000-00-00 00:00:00'),
(13, 'ainunafi@gmail.com', 'ainunafi', 'Ainun Nafi N.F.', '1709828127_cee22f2b183b07f6a47f.jpg', '$2y$10$/Yc90lB07hzy6FLia6cLBuhYpbDpp7yR7XZSC3iOlx7pGIFXMhfgq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:08:48', '2024-03-07 16:15:27', '0000-00-00 00:00:00'),
(14, 'safinaff@gmail.com', 'safinaff', 'Safina Fatmawati', '1709828145_f5dec7675750babe92ba.jpg', '$2y$10$afAZjUcSUGo6MCrl5LlPUeurw1aTPWaWJD5V82nB1kdVoM9feoQfa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:09:05', '2024-03-07 16:15:45', '0000-00-00 00:00:00'),
(15, 'maulidyarania@gmail.com', 'uli', 'Maulidya Rania I.', '1709828576_febf0dd8e5c614747e1f.jpg', '$2y$10$7H54MKFR3W60uSQ0D9Q/YOqZAiPNNu2JjGBfuihNBE8d6VyPQ8UmW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:09:40', '2024-03-07 16:22:56', '0000-00-00 00:00:00'),
(16, 'sidamlighfal@gmail.com', 'sidam', 'Sidam Lighfal Amien', '1709828646_408a6322bfd226a7c4e1.png', '$2y$10$F8ESjnR6ZS96PjewS6UpGuTeBjIp9cwr5crJq/t0phDrup31JaPAy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:10:40', '2024-03-07 16:24:06', '0000-00-00 00:00:00'),
(17, 'girifahrez@gmail.com', 'giri', 'Giri Fahrezy I.', '1709828661_db89f429494353b744ea.png', '$2y$10$XvqRuQoD6akL5gzmBWR4nejBODKzot41CRfAlFtnUFK6LH/vFQH5m', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:10:53', '2024-03-07 16:24:21', '0000-00-00 00:00:00'),
(18, 'pramudyaimam@gmail.com', 'pramudya', 'Pramudya Imam P.', '1709828770_aef45430f09fd744db44.png', '$2y$10$geTffHwY9GICrRlkuEA9J.2SHmGwYry4fHA1fvhxeuSurtaXLHC6K', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:11:15', '2024-03-07 16:26:10', '0000-00-00 00:00:00'),
(19, 'iranf@gmail.com', 'iranf', 'Ira Nur Fajriani', '1709828693_3eff7ac1a6f94b9956ab.png', '$2y$10$DHj/lPkEqxv8HQDgHWbPOOZT9ZAe2Rnm56E5PoTQLh52O0HGEVLZq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:11:28', '2024-03-07 16:24:53', '0000-00-00 00:00:00'),
(20, 'pratamayoga@gmail.com', 'yoga', 'Pratama Yoga', '1709829121_0f8b4c99a1655c1dacbc.png', '$2y$10$bcD12IUAKsSz7Wid6.tpdeJDMj0XfvzyO1ktpYpODdgGLSMZBRUsG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:12:04', '2024-03-07 16:32:01', '0000-00-00 00:00:00'),
(21, 'wikan@gmail.com', 'wikan', 'Wikan FItrandi W.', '1709829283_b4b20d3e1d27303ef2a0.png', '$2y$10$2pUrWcrvtDDDh2ALJCJr3e6yC8qo6biNdBt4QTCSo/cAk0XlNjxR.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 16:29:05', '2024-03-07 16:34:43', '0000-00-00 00:00:00'),
(22, 'thifalkhansa@gmail.com', 'thifal', 'Thifal Nurkhansa', '1711164345_1dd451bc50c16ea8e7ab.jpg', '$2y$10$ESaDr3IU6Coasx5IX8otp.m4zPfSrczQhMsenFBXuRPDWccrmxCx.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 16:29:23', '2024-03-23 03:25:45', '0000-00-00 00:00:00'),
(23, 'dimasadi@gmail.com', 'dimasadi', 'Dimas Adi S.', '1709829321_7b63df797c58712af129.png', '$2y$10$92h.d/s1AFVsqDrrKyUKpecePIZv9iYKUNGPVAb9p3IWAh/sOdaeS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 16:29:36', '2024-03-07 16:35:21', '0000-00-00 00:00:00'),
(24, 'ainilatyfah@gmail.com', 'aini', 'Aini Latyfah', '1709829343_0bbe8f52bb62ca2a7ace.png', '$2y$10$Seqwpdmslj6/0PrhxXnScOilkQ/7BzMxyUPgNJNMqqFdGFnefsrh2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 16:30:57', '2024-03-07 16:35:43', '0000-00-00 00:00:00'),
(25, 'azzahrah@gmail.com', 'zahra', 'Azzahrah Nur S.', '1709829365_f07ca46364ebaaf9ab66.png', '$2y$10$vR9PD5ANDhG5cb7E2Vgio.72tJ8SzBDMPpzz1VHu7nsfJ/XQb5rqq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 16:31:14', '2024-03-07 16:36:05', '0000-00-00 00:00:00'),
(26, 'salmawidyaa@gmail.com', 'salma', 'Salma Widya A.', '1711164436_c7ea4f0bf49170041fdd.jpg', '$2y$10$.XJzTpwz/XWYt1QFfjuPYuJBOkhl6.MrwDy31XIj/nnUyQ5qttT/m', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 16:36:54', '2024-03-23 03:27:16', '0000-00-00 00:00:00'),
(27, 'crewrpm@gmail.com', 'crewrapma', 'Crew Rapma FM', '1709829971_9c520705e5d5571b814a.png', '$2y$10$hGYSLkFzVFl320IuHMjny.V6ZIj1WaAUX.CyLQA23qAl22CseDs.e', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 16:43:17', '2024-03-07 16:46:11', '0000-00-00 00:00:00'),
(28, 'demisionerpm@gmail.com', 'demisrapma', 'Demisioner Rapma FM', '1709830001_22987f712538cae5222c.png', '$2y$10$HN0AkvGsxKLtzEBy0XKrN.vrsCj4o.Ok4GGSnOvmyer2iW1E4rQxa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 16:43:44', '2024-03-07 16:46:41', '0000-00-00 00:00:00'),
(29, 'alumnirpm@gmail.com', 'alumnirapma', 'Alumni Rapma FM', '1709830019_626741027e3b3c06637c.png', '$2y$10$5zdgMU4R5Jb509L29Bj9PON.lSWQhC5hwqlHWcL.889r09B1qRRKq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 16:44:00', '2024-03-07 16:46:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `key`, `value`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'MashUp', '{\"title\":\"MashUp\",\"hari\":\"Kamis\",\"tanggal\":\"2024-02-27\",\"tahun\":\"2021\",\"link\":\"https:\\/\\/open.spotify.com\\/episode\\/1yxOYXK1bMWIs3tkpSUOIc?si=ca8a3dbee2454a7e\",\"platform\":\"TikTok\",\"status\":\"Sudah Terlaksana\"}', 'Mashup', '2024-03-21 06:06:50', '2024-03-25 07:01:24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `workshopbroadcast`
--

CREATE TABLE `workshopbroadcast` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `workshopbroadcast`
--

INSERT INTO `workshopbroadcast` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2024-03-20', '{\"dari\":\"2024-03-20\",\"sampai\":\"2024-03-20\",\"harimulai\":\"Senin\",\"hariselesai\":\"Jum\'at\",\"mulai\":\"09:00\",\"selesai\":\"23:00\",\"materi\":\"<ul><li>Test 1<\\/li><li>Test 2<\\/li><li>Test 3<\\/li><\\/ul>\",\"pemateri\":\"Okie Berland Maulana\",\"tempat\":\"Online via Zoom Meeting\",\"status\":\"Terlaksana\"}', '2024-03-20 05:24:43', '2024-04-02 05:03:15', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tahun` (`tahun`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tahun` (`tahun`);

--
-- Indexes for table `aruskas`
--
ALTER TABLE `aruskas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audios`
--
ALTER TABLE `audios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `beritaweb`
--
ALTER TABLE `beritaweb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `capeng`
--
ALTER TABLE `capeng`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crew`
--
ALTER TABLE `crew`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dendadlibs`
--
ALTER TABLE `dendadlibs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tahun` (`tahun`);

--
-- Indexes for table `gmpa`
--
ALTER TABLE `gmpa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infografis`
--
ALTER TABLE `infografis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode` (`kode`),
  ADD KEY `tahun` (`tahun`);

--
-- Indexes for table `jadwalpiket`
--
ALTER TABLE `jadwalpiket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwalsiar`
--
ALTER TABLE `jadwalsiar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepenyiaran`
--
ALTER TABLE `kepenyiaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kerjabakti`
--
ALTER TABLE `kerjabakti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labelrekaman`
--
ALTER TABLE `labelrekaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lagu`
--
ALTER TABLE `lagu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tahun` (`tahun`);

--
-- Indexes for table `livereport`
--
ALTER TABLE `livereport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maganginternal`
--
ALTER TABLE `maganginternal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketing`
--
ALTER TABLE `marketing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medpart`
--
ALTER TABLE `medpart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minigames`
--
ALTER TABLE `minigames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mtalent`
--
ALTER TABLE `mtalent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tahun` (`tahun`);

--
-- Indexes for table `newsflash`
--
ALTER TABLE `newsflash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemancar`
--
ALTER TABLE `pemancar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemutaranserentak`
--
ALTER TABLE `pemutaranserentak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyiar`
--
ALTER TABLE `penyiar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personalia`
--
ALTER TABLE `personalia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `podcast`
--
ALTER TABLE `podcast`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tahun` (`tahun`),
  ADD KEY `program` (`program`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `structure`
--
ALTER TABLE `structure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suratkeluar`
--
ALTER TABLE `suratkeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suratmasuk`
--
ALTER TABLE `suratmasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suratsp`
--
ALTER TABLE `suratsp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topchart`
--
ALTER TABLE `topchart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umum`
--
ALTER TABLE `umum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `workshopbroadcast`
--
ALTER TABLE `workshopbroadcast`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aruskas`
--
ALTER TABLE `aruskas`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `audios`
--
ALTER TABLE `audios`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `beritaweb`
--
ALTER TABLE `beritaweb`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `capeng`
--
ALTER TABLE `capeng`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crew`
--
ALTER TABLE `crew`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dendadlibs`
--
ALTER TABLE `dendadlibs`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gmpa`
--
ALTER TABLE `gmpa`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infografis`
--
ALTER TABLE `infografis`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwalpiket`
--
ALTER TABLE `jadwalpiket`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jadwalsiar`
--
ALTER TABLE `jadwalsiar`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kepenyiaran`
--
ALTER TABLE `kepenyiaran`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kerjabakti`
--
ALTER TABLE `kerjabakti`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `labelrekaman`
--
ALTER TABLE `labelrekaman`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lagu`
--
ALTER TABLE `lagu`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `livereport`
--
ALTER TABLE `livereport`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maganginternal`
--
ALTER TABLE `maganginternal`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marketing`
--
ALTER TABLE `marketing`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medpart`
--
ALTER TABLE `medpart`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `minigames`
--
ALTER TABLE `minigames`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mtalent`
--
ALTER TABLE `mtalent`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsflash`
--
ALTER TABLE `newsflash`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemancar`
--
ALTER TABLE `pemancar`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemutaranserentak`
--
ALTER TABLE `pemutaranserentak`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penyiar`
--
ALTER TABLE `penyiar`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personalia`
--
ALTER TABLE `personalia`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `podcast`
--
ALTER TABLE `podcast`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `structure`
--
ALTER TABLE `structure`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `suratkeluar`
--
ALTER TABLE `suratkeluar`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suratmasuk`
--
ALTER TABLE `suratmasuk`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suratsp`
--
ALTER TABLE `suratsp`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `topchart`
--
ALTER TABLE `topchart`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `umum`
--
ALTER TABLE `umum`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `workshopbroadcast`
--
ALTER TABLE `workshopbroadcast`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
