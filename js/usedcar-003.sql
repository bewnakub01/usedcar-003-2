-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 19, 2019 at 01:57 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usedcar-003`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `carType` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(80) NOT NULL,
  `color` varchar(20) NOT NULL,
  `license` varchar(20) NOT NULL,
  `province` varchar(30) NOT NULL,
  `modelYear` varchar(4) NOT NULL,
  `price` int(11) NOT NULL,
  `postedBy` int(11) NOT NULL,
  `postedDate` datetime NOT NULL,
  `carpic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `carType`, `brand`, `model`, `color`, `license`, `province`, `modelYear`, `price`, `postedBy`, `postedDate`, `carpic`) VALUES
(2, 1, 'NISAN', 'NISAN0052', 'คำ', 'นห-9158', 'นครปฐม', '2017', 1500000, 1, '2019-12-05 00:00:00', '1 (1).jpg'),
(3, 1, 'BMW', 'BMW25', 'ขาว', 'ยห-2851', 'ราชบุรี', '2019', 2980000, 1, '2019-12-03 00:00:00', '1 (2).jpg'),
(4, 1, 'NISAN', 'NISAN01', 'ฟ้า', 'กท-2846', 'ราชบุรี', '2018', 1150000, 10, '2019-12-14 00:00:00', '1 (3).jpg'),
(5, 2, 'VIGO', 'VIGOZ4', 'ขาว', 'กท-103', 'ราชบุรี', '2018', 1580000, 1, '2019-12-05 00:00:00', '2 (1).jpg'),
(6, 3, 'TOYOTA', '2017', 'ขาว', 'กท-845', 'นครปฐม', '2018', 1110000, 10, '2019-12-05 00:00:00', '3 (2).jpg'),
(7, 2, 'VIGO', 'VIGOGG', 'เทา', 'กท-2846', 'ราชบุรี', '2018', 580000, 10, '2019-12-05 00:00:00', '2 (2).jpg'),
(8, 2, 'VIGO', 'VIGORG', 'ดำ', 'กท-845', 'ราชบุรี', '2018', 280000, 10, '2019-12-05 00:00:00', '2 (3).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `active`) VALUES
(3, 'napath', '25d55ad283aa400af464c76d713c07ad', 'napath', 'manpasa', 'napathbew@gmail.com', 0),
(4, 'root', '25d55ad283aa400af464c76d713c07ad', 'root', 'mapana', 'npathbew@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
