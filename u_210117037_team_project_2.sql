-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 24, 2023 at 03:41 PM
-- Server version: 8.0.32-0ubuntu0.20.04.2
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u_210117037_team project_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` smallint UNSIGNED NOT NULL,
  `model` varchar(48) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `username` varchar(16) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `review` longtext COLLATE utf8mb4_unicode_520_ci,
  `rating` int NOT NULL,
  `seconds_since_epoch` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `model`, `username`, `review`, `rating`, `seconds_since_epoch`) VALUES
(1, 'c16daa9e-b38f-11ed-845c-005056b707be', 'genghis', 'Excellent.', 5, 1667130294);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `tid` smallint UNSIGNED NOT NULL,
  `uid` smallint UNSIGNED NOT NULL,
  `pid` smallint UNSIGNED NOT NULL,
  `status` varchar(32) COLLATE utf8mb4_unicode_520_ci DEFAULT 'processing',
  `date_time` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`tid`, `uid`, `pid`, `status`, `date_time`) VALUES
(1, 2, 2, 'delivered', '2022-09-04 06:30:53'),
(2, 3, 3, 'refunded', '2022-09-08 14:23:21'),
(3, 4, 3, 'delivered', '2022-09-12 11:53:21'),
(4, 5, 4, 'delivered', '2022-09-16 22:05:01');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` smallint UNSIGNED NOT NULL,
  `model` varchar(48) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `category` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `price` double NOT NULL,
  `stock` int DEFAULT '0',
  `views` int DEFAULT '0',
  `bought_all_time` bigint DEFAULT '0',
  `avg_rating` double DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_520_ci,
  `date_time` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `model`, `name`, `category`, `price`, `stock`, `views`, `bought_all_time`, `avg_rating`, `description`, `date_time`) VALUES
(1, 'c1676dba-b38f-11ed-845c-005056b707be', 'NULL', 'NULL', 0, 0, 0, 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL),
(2, 'c169e993-b38f-11ed-845c-005056b707be', 'SILVER_BRACELET', 'silver', 80, 14, 8, 1, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2022-09-01 05:30:01'),
(3, 'c16bd563-b38f-11ed-845c-005056b707be', 'GOLD_BRACELET', 'gold', 120, 13, 16, 2, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2022-09-01 05:30:01'),
(4, 'c16daa9e-b38f-11ed-845c-005056b707be', 'PEARL_NECKLACE', 'pearl', 280, 19, 24, 1, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2022-09-01 05:30:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` smallint UNSIGNED NOT NULL,
  `forename` varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `surname` varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `username` varchar(16) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` tinytext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `privileges` tinyint(1) DEFAULT '0',
  `timeout_stamp` int DEFAULT NULL,
  `timeout_duration` int DEFAULT NULL,
  `verified` tinyint(1) DEFAULT '0',
  `verification_token` tinytext COLLATE utf8mb4_unicode_520_ci,
  `remember_me` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `forename`, `surname`, `username`, `email`, `password`, `privileges`, `timeout_stamp`, `timeout_duration`, `verified`, `verification_token`, `remember_me`) VALUES
(1, NULL, NULL, 'admin', 'admin@domain.ac.uk', '$2y$10$zyWUmQmdYxZOStAgctHRw.u7vgnMeunS2DxUEATvh6y/CLIhULzje', 1, NULL, NULL, 1, NULL, 0),
(2, NULL, NULL, 'julius', 'julius@domain.com', '$2y$10$vAiVC77oQJn3ylwqiXZH7OihcgxJJjVHLRcWtyhQRkNMpoDlqNbQG', 0, NULL, NULL, 1, NULL, 0),
(3, NULL, NULL, 'genghis', 'carlos@domain.com', '$2y$10$s.74gjCCcMBwWZ2eGQTA.udrVAK9a3a8EpmBQl1IAiSGwnXDmFnMG', 0, NULL, NULL, 1, NULL, 0),
(4, NULL, NULL, 'elon', 'elon@domain.com', '$2y$10$Yuk2IQ7TlPhI7NruJTZiH.hF/v/Hd337BOaEJG11IU8pd3k1HpDbe', 0, NULL, NULL, 1, NULL, 0),
(5, NULL, NULL, 'napoleon', 'napoleon@domain.com', '$2y$10$YHVXlAvuSmveONz3Bo5r2./QVpnZCW/4W3wvIeWE.QNvUCAe48Sru', 0, NULL, NULL, 1, NULL, 0),
(6, NULL, NULL, 'michael', 'michael@domain.com', '$2y$10$F.5h5dY/fYnmoRq.slhM4.67dpei0BU/7J4sLBErsZGNkLOZIIm.W', 0, NULL, NULL, 1, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` smallint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `tid` smallint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` smallint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` smallint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
