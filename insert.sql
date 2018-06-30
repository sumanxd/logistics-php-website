-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2018 at 08:14 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insert`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `m1` varchar(255) NOT NULL,
  `m2` varchar(255) NOT NULL,
  `m3` varchar(255) NOT NULL,
  `m4` varchar(255) NOT NULL,
  `m5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `m1`, `m2`, `m3`, `m4`, `m5`) VALUES
(1, 'ef', '12', 'ew', 'm4', 'm5');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `material` varchar(255) NOT NULL,
  `bags` varchar(255) NOT NULL,
  `vehicle` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `gross` varchar(255) NOT NULL,
  `tare` varchar(255) NOT NULL,
  `bagw` varchar(255) NOT NULL,
  `net` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `supplier`, `date`, `material`, `bags`, `vehicle`, `rate`, `payment`, `gross`, `tare`, `bagw`, `net`, `remark`) VALUES
(1, '0', '2018-03-28 04:56:04', 'week2', '32', '32', '3423', '32', '32', '32', '32', '32', 'rfeg'),
(2, '0', '2018-03-28 04:56:51', 'week3', '1', '1', '10', '1212', '21', '3213', '3113', '123131', 'efwfww'),
(5, 'fd', '2018-03-28 05:25:42', 'week2', '212', '21', '21', '21', '21', '21', '12', '12', 'eewfew'),
(6, 'tgg', '2018-03-28 06:12:36', 'week3', '12', '12', '12', '12', '12', '12', '12', '12', 'okk');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bill` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `date`, `bill`, `name`, `payment`, `amount`) VALUES
(1, '2018-03-28 05:49:22', '232', 'frrf', 'refgref', '12'),
(2, '2018-03-28 05:54:29', '323', 'rgregre', 'rge', '323');

-- --------------------------------------------------------

--
-- Table structure for table `production`
--

CREATE TABLE `production` (
  `id` int(11) NOT NULL,
  `block` varchar(255) NOT NULL,
  `week` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `production` varchar(255) NOT NULL,
  `damage` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `sales` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `machinery` varchar(255) NOT NULL,
  `rmaterial` varchar(255) NOT NULL,
  `labour` varchar(255) NOT NULL,
  `productivity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `production`
--

INSERT INTO `production` (`id`, `block`, `week`, `date`, `production`, `damage`, `total`, `sales`, `rate`, `machinery`, `rmaterial`, `labour`, `productivity`) VALUES
(1, 'block2', 'week2', '2018-03-28 05:32:02', '121', '21', '21', '21', '21', '21', '21', '21', '32'),
(2, 'block2', 'week2', '2018-03-28 05:32:30', '21', '21', '22', '22', '22', '22', '22', '22', '22');

-- --------------------------------------------------------

--
-- Table structure for table `rpayment`
--

CREATE TABLE `rpayment` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rname` varchar(255) NOT NULL,
  `ramount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rpayment`
--

INSERT INTO `rpayment` (`id`, `date`, `rname`, `ramount`) VALUES
(6, '2018-03-28 05:59:40', 'fdr', '12'),
(7, '2018-03-28 06:00:11', 'suman', '50');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sale` varchar(255) NOT NULL,
  `nstock` varchar(255) NOT NULL,
  `cstock` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `date`, `sale`, `nstock`, `cstock`) VALUES
(1, '2018-03-28 05:42:07', '12', '22', '34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `production`
--
ALTER TABLE `production`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rpayment`
--
ALTER TABLE `rpayment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `production`
--
ALTER TABLE `production`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rpayment`
--
ALTER TABLE `rpayment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
