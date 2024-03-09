-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2024 at 11:10 AM
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
-- Database: `user_portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_details_tbl`
--

CREATE TABLE `account_details_tbl` (
  `id` int(11) NOT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `blk_lot` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `phase_subdivision` varchar(50) DEFAULT NULL,
  `barangay` varchar(50) DEFAULT NULL,
  `city_municipality` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `contact_no` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account_details_tbl`
--

INSERT INTO `account_details_tbl` (`id`, `lastname`, `firstname`, `email`, `password`, `blk_lot`, `street`, `phase_subdivision`, `barangay`, `city_municipality`, `province`, `country`, `contact_no`) VALUES
(1, 'asd', 'asd', 'qwerty@gmail.com', '$2y$10$N70F/nO5LNCqwfUirOe/yOgnG0aSa.RfVZrmZ1DUtL.SW8w9zH5FS', 'asd', 'asd', 'asd', 'Banbanaal', 'BANAYOYO', '0129', 'Philippines', '+639198000365');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details_db`
--

CREATE TABLE `contact_details_db` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_details_tbl`
--
ALTER TABLE `account_details_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details_db`
--
ALTER TABLE `contact_details_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_details_tbl`
--
ALTER TABLE `account_details_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_details_db`
--
ALTER TABLE `contact_details_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
