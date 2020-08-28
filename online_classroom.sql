-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2020 at 09:04 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_classroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`id`, `name`, `mobile`, `email`, `message`) VALUES
(2, 'Billal Hossain', '01798292139', 'billal@gmail.com', 'Hi I am Billal Hossain'),
(3, 'Programmer nazmul', '20134349', 'nazmul@gamail.com', 'Check the application'),
(5, 'Pro Billal', '02309482309', 'billal@gmail.com', 'I am interested to work with you'),
(6, 'Nazmul Huda', '01746243302', 'marketernazmulbd@gmail.com', 'welcome');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'Pro Nazmul', 'developer@gmail.com', 'admin', 'admin');

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
(1, '2020_06_12_040924_visitor_migration', 1),
(2, '2020_06_12_175845_services', 2),
(3, '2020_06_17_182010_course_table', 3),
(4, '2020_06_19_070418_project_table', 4),
(5, '2020_06_19_144245_contract_table', 5),
(6, '2020_06_20_033450_review_table', 6),
(7, '2020_06_21_084927_login_table', 7),
(8, '2020_08_27_094354_create_user_resistrations_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_resistration`
--

CREATE TABLE `user_resistration` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bkashno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bkashtrxid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approval` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_resistration`
--

INSERT INTO `user_resistration` (`id`, `name`, `email`, `mobile`, `pass`, `bkashno`, `bkashtrxid`, `status`, `approval`) VALUES
(1, 'Pro Nazmul', 'nazmul@gmail.com', '1234', '1234', '0492380492802340', '83049238409', 'offline', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `ip_address`, `time`) VALUES
(1, '127.0.0.1', 'Thu:Aug:2020, 08:09:45 pm'),
(2, '127.0.0.1', 'Thu:Aug:2020, 08:46:23 pm'),
(3, '127.0.0.1', 'Thu:Aug:2020, 10:24:07 pm'),
(4, '127.0.0.1', 'Fri:Aug:2020, 09:11:23 am'),
(5, '127.0.0.1', 'Fri:Aug:2020, 09:12:40 am'),
(6, '127.0.0.1', 'Fri:Aug:2020, 11:45:27 am'),
(7, '127.0.0.1', 'Fri:Aug:2020, 11:54:09 am'),
(8, '127.0.0.1', 'Fri:Aug:2020, 11:58:26 am'),
(9, '127.0.0.1', 'Fri:Aug:2020, 11:58:50 am'),
(10, '127.0.0.1', 'Fri:Aug:2020, 11:59:50 am'),
(11, '127.0.0.1', 'Fri:Aug:2020, 12:02:11 pm'),
(12, '127.0.0.1', 'Fri:Aug:2020, 12:02:25 pm'),
(13, '127.0.0.1', 'Fri:Aug:2020, 12:18:21 pm'),
(14, '127.0.0.1', 'Fri:Aug:2020, 12:29:02 pm'),
(15, '127.0.0.1', 'Fri:Aug:2020, 12:32:25 pm'),
(16, '127.0.0.1', 'Fri:Aug:2020, 12:35:34 pm'),
(17, '127.0.0.1', 'Fri:Aug:2020, 12:40:29 pm'),
(18, '127.0.0.1', 'Fri:Aug:2020, 12:40:45 pm'),
(19, '127.0.0.1', 'Fri:Aug:2020, 12:40:49 pm'),
(20, '127.0.0.1', 'Fri:Aug:2020, 01:03:13 pm'),
(21, '127.0.0.1', 'Fri:Aug:2020, 01:03:45 pm'),
(22, '127.0.0.1', 'Fri:Aug:2020, 01:03:52 pm'),
(23, '127.0.0.1', 'Fri:Aug:2020, 01:03:57 pm'),
(24, '127.0.0.1', 'Fri:Aug:2020, 01:04:06 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_resistration`
--
ALTER TABLE `user_resistration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contract`
--
ALTER TABLE `contract`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_resistration`
--
ALTER TABLE `user_resistration`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
