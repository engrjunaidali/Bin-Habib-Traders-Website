-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2021 at 08:45 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `binhabibtraders`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblorders`
--

CREATE TABLE `tblorders` (
  `orderID` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `purchaser` varchar(255) NOT NULL,
  `deliveryAddress` varchar(255) NOT NULL,
  `contactPerson` varchar(255) NOT NULL,
  `bottleSize` varchar(255) NOT NULL,
  `bottleQuantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblorders`
--

INSERT INTO `tblorders` (`orderID`, `email`, `purchaser`, `deliveryAddress`, `contactPerson`, `bottleSize`, `bottleQuantity`) VALUES
(2, 'hasnain@gmail.com', 'Hassnain', 'Room 21', 'Hasnain', '19 liter', 1),
(7, 'engrjunaidali0@gmail.com', 'Junaid', 'BISE', 'Junaid', '19 liter', 1),
(8, 'gmsoomro100@gmail.com', 'Hassnain', 'Quarter# 08, B.I.S.E', 'Junaid Ali', '19 liter', 1),
(9, 'gmsoomro100@gmail.com', 'Hassnain', 'Quarter# 08, B.I.S.E', 'Junaid Ali', '19 liter', 1),
(10, 'gmsoomro100@gmail.com', 'Hassnain', 'Quarter# 08, B.I.S.E', 'Junaid Ali', '19 liter', 1),
(11, 'hamza@gmail.com', 'hamza', 'near NICVD', 'hamza', '19 liter', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `role`) VALUES
(1, 'Jawad Ali', 'jawad@gmail.com', '03133533027', '123', 'member'),
(2, 'Junaid Ali', 'admin@admin.com', '03133533027', '123', 'member'),
(3, 'Sajjad Ali', 'sajjad@gmail.com', '123', 'abc', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblorders`
--
ALTER TABLE `tblorders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblorders`
--
ALTER TABLE `tblorders`
  MODIFY `orderID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
