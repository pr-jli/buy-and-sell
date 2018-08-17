-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2018 at 02:58 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `selldb`
--

CREATE TABLE `selldb` (
  `id` int(11) NOT NULL,
  `itemname` varchar(200) NOT NULL,
  `MobileNo` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selldb`
--

INSERT INTO `selldb` (`id`, `itemname`, `MobileNo`, `price`, `comment`, `image`) VALUES
(3, ' qwe', 2147483647, 1, '', 'IMG_20180704_111737.jpg'),
(4, ' qwe', 2147483647, 1, '1', 'IMG_20180704_111737.jpg'),
(5, ' qwe', 2147483647, 1, '1', 'IMG_20180704_111737.jpg'),
(6, ' qwe', 2147483647, 1, '1', 'IMG_20180704_111737.jpg'),
(7, ' qwe', 2147483647, 1, '1', 'IMG_20180704_111737.jpg'),
(8, ' qwe', 2147483647, 1, '1', 'IMG_20180704_111737.jpg'),
(9, ' qwe', 2147483647, 1, '1', 'IMG_20180704_111737.jpg'),
(10, ' qwe', 2147483647, 1, '1', 'IMG_20180704_111737.jpg'),
(11, ' qwe', 2147483647, 1, '1', 'IMG_20180704_111737.jpg'),
(12, ' qwe', 2147483647, 1, '1', 'Screenshot (13).png'),
(13, 'as', 2147483647, 12, '1', 'Screenshot (9).png'),
(14, 'as', 2147483647, 12, '1', 'Screenshot (9).png'),
(15, '12', 1234567890, 12, 'qw', 'Screenshot (36).png'),
(16, '1234', 1234567890, 12, 'qw', 'Screenshot (36).png'),
(17, ' qwerty', 1234567890, 123, 'qwertyhui', 'Screenshot (10).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `selldb`
--
ALTER TABLE `selldb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `selldb`
--
ALTER TABLE `selldb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
