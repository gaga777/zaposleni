-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 15, 2017 at 09:36 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `bivse_firme`
--

CREATE TABLE `bivse_firme` (
  `id` int(10) UNSIGNED NOT NULL,
  `ime_firme` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zaposleni_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bivse_firme`
--

INSERT INTO `bivse_firme` (`id`, `ime_firme`, `zaposleni_id`) VALUES
(43, NULL, 42),
(101, 'Microsoft', 41),
(102, 'Energodata', 41),
(103, 'Maxi', 43),
(104, 'Idea DOO', 43),
(105, 'Font Inzenjering', 44),
(106, 'Stadion DOO', 45);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_03_14_140015_create_zaposleni_table', 1),
(2, '2017_03_14_140736_create_bivse_firme_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zaposleni`
--

CREATE TABLE `zaposleni` (
  `id` int(10) UNSIGNED NOT NULL,
  `ime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prezime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zanimanje` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zaposleni`
--

INSERT INTO `zaposleni` (`id`, `ime`, `prezime`, `zanimanje`) VALUES
(41, 'Zora', 'Zoric', 'Programer'),
(42, 'Mitar', 'Mitrovic', 'Programer'),
(43, 'Jovan', 'Jovic', 'Radnik'),
(44, 'Zika', 'Zikic', 'Administrator'),
(45, 'Pera', 'Peric', 'Kuvar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bivse_firme`
--
ALTER TABLE `bivse_firme`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bivse_firme_zaposleni_id_foreign` (`zaposleni_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zaposleni`
--
ALTER TABLE `zaposleni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bivse_firme`
--
ALTER TABLE `bivse_firme`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `zaposleni`
--
ALTER TABLE `zaposleni`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bivse_firme`
--
ALTER TABLE `bivse_firme`
  ADD CONSTRAINT `bivse_firme_zaposleni_id_foreign` FOREIGN KEY (`zaposleni_id`) REFERENCES `zaposleni` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
