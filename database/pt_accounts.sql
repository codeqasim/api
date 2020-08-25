-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2020 at 04:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `v7`
--

-- --------------------------------------------------------

--
-- Table structure for table `pt_accounts`
--

CREATE TABLE `pt_accounts` (
  `accounts_id` int(11) NOT NULL,
  `ai_title` varchar(5) DEFAULT NULL,
  `ai_first_name` varchar(50) DEFAULT NULL,
  `ai_last_name` varchar(50) DEFAULT NULL,
  `accounts_email` varchar(255) NOT NULL,
  `accounts_password` varchar(50) NOT NULL,
  `ai_dob` varchar(50) DEFAULT NULL,
  `ai_country` varchar(5) DEFAULT NULL,
  `ai_state` varchar(250) DEFAULT NULL,
  `ai_city` varchar(250) DEFAULT NULL,
  `ai_address_1` text DEFAULT NULL,
  `ai_address_2` text DEFAULT NULL,
  `ai_mobile` varchar(20) DEFAULT NULL,
  `ai_fax` int(20) DEFAULT NULL,
  `ai_postal_code` varchar(50) DEFAULT NULL,
  `ai_passport` varchar(50) DEFAULT NULL,
  `ai_website` varchar(100) DEFAULT NULL,
  `ai_image` varchar(35) DEFAULT NULL,
  `accounts_type` enum('webadmin','admin','supplier','customers','guest') NOT NULL,
  `accounts_is_admin` tinyint(4) NOT NULL DEFAULT 0,
  `accounts_created_at` datetime DEFAULT NULL,
  `accounts_updated_at` datetime DEFAULT NULL,
  `accounts_status` enum('yes','no') NOT NULL DEFAULT 'yes',
  `accounts_verified` tinyint(4) DEFAULT 1,
  `accounts_last_login` bigint(20) DEFAULT NULL,
  `accounts_permissions` text DEFAULT NULL,
  `appliedfor` text DEFAULT NULL,
  `facebook_id` varchar(200) DEFAULT NULL,
  `commission` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pt_accounts`
--

INSERT INTO `pt_accounts` (`accounts_id`, `ai_title`, `ai_first_name`, `ai_last_name`, `accounts_email`, `accounts_password`, `ai_dob`, `ai_country`, `ai_state`, `ai_city`, `ai_address_1`, `ai_address_2`, `ai_mobile`, `ai_fax`, `ai_postal_code`, `ai_passport`, `ai_website`, `ai_image`, `accounts_type`, `accounts_is_admin`, `accounts_created_at`, `accounts_updated_at`, `accounts_status`, `accounts_verified`, `accounts_last_login`, `accounts_permissions`, `appliedfor`, `facebook_id`, `commission`) VALUES
(1, '', 'Super', 'Admin', 'admin@phptravels.com', '6f4504dd6d8322708f1aa68a05c7ca9cfc2ee782', '0', 'US', NULL, NULL, 'address 1', 'address 2', '123456789', 0, '0', '0', '0', '', 'webadmin', 1, '1901-02-16 11:41:04', '2019-08-08 19:15:14', 'yes', 1, 1597064551, '0', '', NULL, NULL),
(2, '0', 'Demo', 'User', 'user@phptravels.com', '39babc332b412604066644a894d9f47b8fe2ad42', NULL, 'AU', '', '', 'R2, Avenue du Maroc', '', '123456', 0, '52000', NULL, NULL, NULL, 'customers', 0, '2014-04-16 12:51:46', '2016-01-13 07:03:35', 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(16, '', 'Demo', 'Supplier', 'supplier@phptravels.com', '27e45ec6a8d54cfe37f83b4d4c8b0d2680412f2e', NULL, 'US', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '', 'supplier', 0, '2020-01-05 22:17:30', '2020-01-27 22:43:02', 'yes', 1, 1580164492, 'addHotels,addTours,addCars,addbooking,addlocations,editHotels,editTours,editCars,editbooking,editlocations', '{\"appliedfor\":\"Hotels\",\"name\":\"\"}', NULL, '25'),
(45, '', 'Qasim', 'husain', 'compoxition@gmail.com', 'ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', NULL, 'PK', NULL, NULL, 'House no 29 A Tipu Sultan Lane ST no 6', NULL, '+923311442244', NULL, NULL, NULL, NULL, NULL, 'guest', 0, '2020-08-11 14:54:04', '2020-08-11 14:54:04', '', 1, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pt_accounts`
--
ALTER TABLE `pt_accounts`
  ADD PRIMARY KEY (`accounts_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pt_accounts`
--
ALTER TABLE `pt_accounts`
  MODIFY `accounts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
