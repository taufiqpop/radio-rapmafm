-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 06:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
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
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'taufiqpop999@gmail.com', 'taufiqpop99', 'Taufiq Pop', '1709822597_7ad0a5bb9051ca19ee04.png', '$2y$10$0PU2PnhC.c0nzWosmdVwQefb7MePnm.wDDgkVM.MdKBeyGGiDla4u', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 14:40:37', '2024-03-07 14:43:17', NULL),
(2, 'rezalutfian@gmail.com', 'rezalutfian', 'Reza Lutfian Ardi', '1709828805_ebd50fe49347008fd17d.png', '$2y$10$mmwAu9jS0iHUV5TDPZtxo.uK5inPf5JIB8MIQHfiKr8wlNnPVEaHy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 14:57:27', '2024-03-07 16:26:45', NULL),
(3, 'lalapo19@gmail.com', 'lalapo19', 'Lala Dwi Alfiyah', '1709827289_aec3fd5976c26f3fc81d.jpg', '$2y$10$gLqC08NIquYMVJDE7a9X5O6ep1.WcNGgqymU46TlzbIheeo4v3J8q', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 14:57:54', '2024-03-07 16:01:29', NULL),
(4, 'agnesdyva@gmail.com', 'agnesdyva', 'Agnes Dyva Z.A.', '1709828593_28188f2e4b4271235291.jpg', '$2y$10$W/zOzeJvZh/WsKIYa/VBcuIUm5QWX/7kIvUalD38upQG13HK0/L2W', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:02:58', '2024-03-07 16:23:13', NULL),
(5, 'mhanip@gmail.com', 'mhanip', 'M. Hanif A.H.', '1709828817_dc4ccff8ed76354e3be5.png', '$2y$10$dW6M1VSqmjo8nLnPohuVzuS9StU7gISx/uX8lJRTuSDgvx/u0OOoq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:03:57', '2024-03-07 16:26:57', NULL),
(6, 'maulidiakartika@gmail.com', 'maudy', 'Maulidia Kartika P.', '1709828831_17738945e0a2f83543ec.png', '$2y$10$oDsqokuaIVwWx4mNODMys.aKdtn90uDHXfwAd54DrkLQOhxwoigUm', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:04:26', '2024-03-07 16:27:11', NULL),
(7, 'satyaaqsal@gmail.com', 'aqsal', 'Satya Aqsal Z.', '1709828863_7f83c4e4b4858205cf61.png', '$2y$10$6TiVzn9iGV9GnRS70MPHpeYnLrfkDS0P9Ei/OSY.Gnc4J5tTwqUaq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:04:47', '2024-03-07 16:27:43', NULL),
(8, 'fajrulfalah@gmail.com', 'falah', 'Fajrul Falah S.', '1709828845_d4e5e3912c0b8d7fcfac.png', '$2y$10$l7xI/850C7ZV68AHDDNZCOru/xcl00x747cEwRA0Fa8sohrM816pi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:05:07', '2024-03-07 16:27:25', NULL),
(9, 'vanianuradhani@gmail.com', 'vaniaa', 'Vania Nuradhani W.', '1709828785_e7f04971d1eda55a16c2.png', '$2y$10$/Gq7MulPKcYzaJjOwTNTWuxITqceKbkmxhsMm6zJtsdM/1h8Rklf2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:05:19', '2024-03-07 16:26:25', NULL),
(10, 'brilliantadhi@gmail.com', 'brilly', 'Brilliant Adhi P.', '1709828624_67c925d9d62b2b608ee7.png', '$2y$10$5pMbeZglu2B4tdQ4r7BjWOeUX/kD5r2QAM/wBUpCX8o4Me0YI/t.O', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:07:55', '2024-03-07 16:23:44', NULL),
(11, 'dazuf@gmail.com', 'dazuf', 'Daffa Zufar F.', '1709828169_b88c9aa8c1ea2152c08f.jpg', '$2y$10$noWeIvkg6qoIQG5Tgu.ogOD.KWkSvhKdEwhPwbLYiA5gHqxzp8ERq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:08:24', '2024-03-07 16:16:09', NULL),
(12, 'alexandria@gmail.com', 'alex', 'M. Alexandria H.A.', '1709828136_f5b4c8bb4991ce4137d2.jpg', '$2y$10$dOA8nistmJwclzrJTF.ULuK3kpCfg6OLs7P5mqlXhoKPQEsLbDLT2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:08:35', '2024-03-07 16:15:36', NULL),
(13, 'ainunafi@gmail.com', 'ainunafi', 'Ainun Nafi N.F.', '1709828127_cee22f2b183b07f6a47f.jpg', '$2y$10$/Yc90lB07hzy6FLia6cLBuhYpbDpp7yR7XZSC3iOlx7pGIFXMhfgq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:08:48', '2024-03-07 16:15:27', NULL),
(14, 'safinaff@gmail.com', 'safinaff', 'Safina Fatmawati', '1709828145_f5dec7675750babe92ba.jpg', '$2y$10$afAZjUcSUGo6MCrl5LlPUeurw1aTPWaWJD5V82nB1kdVoM9feoQfa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:09:05', '2024-03-07 16:15:45', NULL),
(15, 'maulidyarania@gmail.com', 'uli', 'Maulidya Rania I.', '1709828576_febf0dd8e5c614747e1f.jpg', '$2y$10$7H54MKFR3W60uSQ0D9Q/YOqZAiPNNu2JjGBfuihNBE8d6VyPQ8UmW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:09:40', '2024-03-07 16:22:56', NULL),
(16, 'sidamlighfal@gmail.com', 'sidam', 'Sidam Lighfal Amien', '1709828646_408a6322bfd226a7c4e1.png', '$2y$10$F8ESjnR6ZS96PjewS6UpGuTeBjIp9cwr5crJq/t0phDrup31JaPAy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:10:40', '2024-03-07 16:24:06', NULL),
(17, 'girifahrez@gmail.com', 'giri', 'Giri Fahrezy I.', '1709828661_db89f429494353b744ea.png', '$2y$10$XvqRuQoD6akL5gzmBWR4nejBODKzot41CRfAlFtnUFK6LH/vFQH5m', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:10:53', '2024-03-07 16:24:21', NULL),
(18, 'pramudyaimam@gmail.com', 'pramudya', 'Pramudya Imam P.', '1709828770_aef45430f09fd744db44.png', '$2y$10$geTffHwY9GICrRlkuEA9J.2SHmGwYry4fHA1fvhxeuSurtaXLHC6K', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:11:15', '2024-03-07 16:26:10', NULL),
(19, 'iranf@gmail.com', 'iranf', 'Ira Nur Fajriani', '1709828693_3eff7ac1a6f94b9956ab.png', '$2y$10$DHj/lPkEqxv8HQDgHWbPOOZT9ZAe2Rnm56E5PoTQLh52O0HGEVLZq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:11:28', '2024-03-07 16:24:53', NULL),
(20, 'pratamayoga@gmail.com', 'yoga', 'Pratama Yoga', '1709829121_0f8b4c99a1655c1dacbc.png', '$2y$10$bcD12IUAKsSz7Wid6.tpdeJDMj0XfvzyO1ktpYpODdgGLSMZBRUsG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 15:12:04', '2024-03-07 16:32:01', NULL),
(21, 'wikan@gmail.com', 'wikan', 'Wikan FItrandi W.', '1709829283_b4b20d3e1d27303ef2a0.png', '$2y$10$2pUrWcrvtDDDh2ALJCJr3e6yC8qo6biNdBt4QTCSo/cAk0XlNjxR.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 16:29:05', '2024-03-07 16:34:43', NULL),
(22, 'thifalkhansa@gmail.com', 'thifal', 'Thifal Nurkhansa', '1709829305_cef4cae5332ee049e75a.jpg', '$2y$10$G6Q23s9ws.YgRFzYnyWK5OJIoV2zJz9cleOMqQy9rmgIMBQKiHYZC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 16:29:23', '2024-03-07 16:35:05', NULL),
(23, 'dimasadi@gmail.com', 'dimasadi', 'Dimas Adi S.', '1709829321_7b63df797c58712af129.png', '$2y$10$92h.d/s1AFVsqDrrKyUKpecePIZv9iYKUNGPVAb9p3IWAh/sOdaeS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 16:29:36', '2024-03-07 16:35:21', NULL),
(24, 'ainilatyfah@gmail.com', 'aini', 'Aini Latyfah', '1709829343_0bbe8f52bb62ca2a7ace.png', '$2y$10$Seqwpdmslj6/0PrhxXnScOilkQ/7BzMxyUPgNJNMqqFdGFnefsrh2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 16:30:57', '2024-03-07 16:35:43', NULL),
(25, 'azzahrah@gmail.com', 'zahra', 'Azzahrah Nur S.', '1709829365_f07ca46364ebaaf9ab66.png', '$2y$10$vR9PD5ANDhG5cb7E2Vgio.72tJ8SzBDMPpzz1VHu7nsfJ/XQb5rqq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 16:31:14', '2024-03-07 16:36:05', NULL),
(26, 'verel@gmail.com', 'verell', 'Verrell Askal', '1709972314_40231dbec19a2f3b0911.png', '$2y$10$.XJzTpwz/XWYt1QFfjuPYuJBOkhl6.MrwDy31XIj/nnUyQ5qttT/m', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 16:36:54', '2024-03-09 08:18:34', NULL),
(27, 'crewrpm@gmail.com', 'crewrapma', 'Crew Rapma FM', '1709829971_9c520705e5d5571b814a.png', '$2y$10$hGYSLkFzVFl320IuHMjny.V6ZIj1WaAUX.CyLQA23qAl22CseDs.e', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 16:43:17', '2024-03-07 16:46:11', NULL),
(28, 'demisionerpm@gmail.com', 'demisrapma', 'Demisioner Rapma FM', '1709830001_22987f712538cae5222c.png', '$2y$10$HN0AkvGsxKLtzEBy0XKrN.vrsCj4o.Ok4GGSnOvmyer2iW1E4rQxa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 16:43:44', '2024-03-07 16:46:41', NULL),
(29, 'alumnirpm@gmail.com', 'alumnirapma', 'Alumni Rapma FM', '1709830019_626741027e3b3c06637c.png', '$2y$10$5zdgMU4R5Jb509L29Bj9PON.lSWQhC5hwqlHWcL.889r09B1qRRKq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-07 16:44:00', '2024-03-07 16:46:59', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
