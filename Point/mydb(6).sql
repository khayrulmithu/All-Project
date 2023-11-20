-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2023 at 03:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `capa`
--

CREATE TABLE `capa` (
  `id` int(11) NOT NULL,
  `bin1` int(11) NOT NULL,
  `bin2` int(11) NOT NULL,
  `bin3` int(11) NOT NULL,
  `bin4` int(11) NOT NULL,
  `bin5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `capa`
--

INSERT INTO `capa` (`id`, `bin1`, `bin2`, `bin3`, `bin4`, `bin5`) VALUES
(1, 30, 50, 20, 80, 65),
(2, 40, 30, 70, 50, 35),
(3, 60, 20, 40, 70, 80),
(4, 40, 55, 65, 70, 10),
(5, 90, 70, 50, 10, 20);

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `points` int(100) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `dat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`id`, `name`, `points`, `cat`, `dat`) VALUES
(23, 'khayrul', -100, '', '05-06-23'),
(24, 'khayrul', -100, '', '05-06-23'),
(25, 'khayrul', -200, '', '05-06-23'),
(26, 'khayrul', -300, '', '05-06-23'),
(27, 'khayrul', -100, 'Mobile Recharge', '20-06-23'),
(28, 'khayrul', 22, '', '20-06-23'),
(29, 'khayrul', 2, 'Admin', '20-06-23'),
(30, 'name', 0, 'auto', 'dat'),
(31, 'khayrul', 50, 'auto', 'dat'),
(32, 'khayrul', 50, 'auto', '21-06-23'),
(33, '', 10, 'Admin', '25-06-23'),
(34, '', -10, 'Admin', '25-06-23'),
(35, 'khayrul', 10, 'Admin', '25-06-23'),
(36, 'khayrul', 5, 'Admin', '25-06-23'),
(37, 'khayrul', -20, 'Admin', '25-06-23'),
(38, 'khayrul', 5, 'Admin', '25-06-23'),
(39, 'khayrul', 5, 'Admin', '25-06-23'),
(40, 'khayrul', 5, 'Admin', '25-06-23'),
(41, 'khayrul', 5, 'Admin', '25-06-23'),
(42, 'khayrul', 5, 'Admin', '25-06-23'),
(43, 'khayrul', 5, 'Admin', '25-06-23'),
(44, 'khayrul', 5, 'Admin', '25-06-23'),
(45, 'khayrul', 5, 'Admin', '25-06-23'),
(46, 'khayrul', -100, 'Mobile Recharge', '25-06-23'),
(47, 'khayrul', -111, 'Mobile Recharge', '25-06-23'),
(48, 'khayrul', -111, 'Mobile Recharge', '25-06-23'),
(50, 'khayrul', -111, 'Mobile Recharge', '26-06-23'),
(51, 'khayrul', 10, 'Admin', '26-06-23'),
(52, 'khayrul', -5, 'Admin', '26-06-23'),
(53, 'khayrul', -100, 'Mobile Recharge', '26-06-23'),
(54, 'khayrul', -100, 'Promo Code', '26-06-23'),
(55, 'ee', 500, 'Admin', '26-06-23'),
(56, 'ee', 100, 'Admin', '26-06-23'),
(57, 'ee', 50, 'Admin', '26-06-23'),
(58, 'khayrul', -100, 'Mobile Recharge', '27-06-23'),
(59, 'khayrul', -100, 'Promo Code', '27-06-23'),
(60, 'aa', 10, 'Admin', '27-06-23'),
(61, 'aa', 5, 'Admin', '27-06-23'),
(62, 'aa', -5, 'Admin', '27-06-23'),
(63, 'aa', -5, 'Admin', '27-06-23'),
(64, 'qq', 10, 'Admin', '28-06-23'),
(65, 'qq', -10, 'Admin', '28-06-23'),
(66, 'qq', 10, 'Admin', '28-06-23'),
(67, 'qq', 5, 'Admin', '28-06-23'),
(68, 'qq', 5, 'Admin', '28-06-23'),
(69, 'qq', -20, 'Admin', '28-06-23'),
(70, 'qq', 0, 'Admin', '28-06-23'),
(71, 'qq', 0, 'Admin', '28-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `promo` int(11) NOT NULL,
  `amnt` int(11) NOT NULL,
  `shop` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id`, `name`, `promo`, `amnt`, `shop`) VALUES
(10, 'khayrul', 89901, 10, 'Daraz'),
(11, 'khayrul', 61955, 30, 'Food Panda'),
(12, 'khayrul', 49073, 10, 'Amazon'),
(13, 'khayrul', 63904, 10, 'Daraz');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `num` varchar(50) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `points` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `num`, `nid`, `password`, `points`) VALUES
(1, 'khayrul', '01234', '5678', '1234', 19307),
(37, 'sss', '123', '123', '123', 0),
(38, 'www', '222', '2212', '12', 0),
(39, 'aa', '33', '33', '33', 5),
(40, 'ee', '44', '44', '44', 650),
(41, 'dd', '1', '1', '1', 0),
(42, 'qq', '01786963617', '1111', '11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wt`
--

CREATE TABLE `wt` (
  `id` int(11) NOT NULL,
  `bin1` int(11) NOT NULL,
  `bin2` int(11) NOT NULL,
  `bin3` int(11) NOT NULL,
  `bin4` int(11) NOT NULL,
  `bin5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wt`
--

INSERT INTO `wt` (`id`, `bin1`, `bin2`, `bin3`, `bin4`, `bin5`) VALUES
(1, 200, 300, 400, 500, 600),
(2, 500, 100, 300, 200, 100),
(3, 600, 800, 400, 300, 100),
(4, 600, 400, 700, 600, 300),
(5, 400, 700, 600, 200, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capa`
--
ALTER TABLE `capa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`num`,`nid`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `num` (`num`),
  ADD UNIQUE KEY `nid` (`nid`);

--
-- Indexes for table `wt`
--
ALTER TABLE `wt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
