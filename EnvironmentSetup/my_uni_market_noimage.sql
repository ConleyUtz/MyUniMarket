-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 04:58 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_uni_market`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemId` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `location` text NOT NULL,
  `category` int(11) NOT NULL,
  `quality` int(11) NOT NULL,
  `description` text NOT NULL,
  `userId` int(11) NOT NULL,
  `isSold` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemId`, `name`, `price`, `location`, `category`, `quality`, `description`, `userId`, `isSold`) VALUES
(1, '1', '1.00', '1', 1, 1, '1', 1, 0),
(2, 'Item2', '99.12', 'PMU', 3, 1, 'This is the description text.', 2, 0),
(4, '5', '5.00', '5', 4, 3, '5', 12, 1),
(5, 'test', '777.00', 'LWSN', 1, 0, 'testing', 12, 0),
(6, 'Other category item', '123.00', 'LWSN', 2, 0, 'test', 12, 0),
(7, '123', '123.00', '123', 5, 3, '4321', 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(10) UNSIGNED NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `isConfirmed` tinyint(1) NOT NULL DEFAULT '0',
  `bookmarks` varchar(500) NOT NULL,
  `ratingTotal` int(11) NOT NULL,
  `ratingAmount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `email`, `username`, `password`, `isConfirmed`, `bookmarks`, `ratingTotal`, `ratingAmount`) VALUES
(1, 'user1@purdue.edu', 'user1', '$2y$10$6YDgveHu1FjX5Xek81h6Ue4b1GMGQFTrbHdZCUNAGKBAusJ45x2sq', 1, '7,2', 0, 0),
(2, 'user2@purdue.edu', 'user2', '$2y$10$zwXYhSqEZQqbyfO/3dqFR.KcDoSxdNRMMsV3OP4zWfG.RPLXxROBi', 0, '', 0, 0),
(12, 'user3@purdue.edu', 'gkhmalad', '$2y$10$wcvrUhXD1.sATj0HeN7cEep7k.p0w8tiP/k4.CD2.QY2.bXc9YGh2', 1, '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
