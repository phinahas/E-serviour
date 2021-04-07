-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 05:19 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eserviour`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(100) NOT NULL,
  `tableId` int(100) NOT NULL,
  `tableName` varchar(10) NOT NULL,
  `foodId` int(100) NOT NULL,
  `foodName` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `totalAmount` int(100) NOT NULL,
  `status` int(100) NOT NULL,
  `payment` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`id`, `tableId`, `tableName`, `foodId`, `foodName`, `quantity`, `totalAmount`, `status`, `payment`) VALUES
(11, 3, 'table1', 1, 'Tea', 1, 10, -1, -1),
(13, 4, 'table2', 2, 'masala', 3, 30, -1, -1),
(14, 5, 'table3', 4, 'capechino', 4, 440, -1, -1),
(15, 5, 'table3', 3, 'Biriyani', 4, 440, -1, -1),
(16, 6, 'table4', 3, 'Biriyani', 4, 440, -1, -1),
(18, 6, 'table4', 4, 'capechino', 4, 440, -1, -1),
(19, 3, 'table1', 1, 'Tea', 6, 60, 1, 0),
(20, 3, 'table1', 3, 'Biriyani', 3, 330, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(100) NOT NULL,
  `itemName` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `itemName`, `amount`, `quantity`, `status`, `image`) VALUES
(1, 'Tea', 10, 20, '1', 'public/images/uploaded/5fb648b14b7238.09886244.jpg'),
(2, 'masala', 10, 10, '2', ' '),
(3, 'Biriyani', 110, 20, '4', 'public/images/uploaded/5fd190d25ca197.28148444.jpg'),
(4, 'capechino', 110, 20, '4', 'public/images/uploaded/5fb5580e1a29b2.07536398.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uId` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uId`, `username`, `password`, `role`, `status`) VALUES
(1, 'admin', 'admin', 1, 0),
(2, 'kitchen', 'kitchen', 2, 0),
(3, 'table1', '', 3, 1),
(4, 'table2 ', '', 3, 0),
(5, 'table3', '', 3, 0),
(6, 'table4', '', 3, 0),
(8, 'table5 ', '', 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
