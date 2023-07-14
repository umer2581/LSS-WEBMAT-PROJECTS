-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 09:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbus-dash`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(5) NOT NULL,
  `branch(from)` varchar(50) NOT NULL,
  `branch(dest)` varchar(50) NOT NULL,
  `waybillno` bigint(15) NOT NULL,
  `refno` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` time NOT NULL,
  `actwt` varchar(50) NOT NULL,
  `volwt` varchar(50) NOT NULL,
  `chgwt` varchar(50) NOT NULL,
  `topay` int(10) NOT NULL,
  `riskby` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL,
  `pcs` int(10) NOT NULL,
  `volsize` int(10) NOT NULL,
  `cod` int(10) NOT NULL,
  `othchg` int(10) NOT NULL,
  `chgamount` int(10) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookingconsignee`
--

CREATE TABLE `bookingconsignee` (
  `id` int(10) NOT NULL,
  `consignee` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `pin` int(6) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookingconsignee`
--

INSERT INTO `bookingconsignee` (`id`, `consignee`, `address`, `city`, `pin`, `mail`, `mobile`) VALUES
(1, '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bookingcust`
--

CREATE TABLE `bookingcust` (
  `id` int(10) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `pin` int(6) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookingcust`
--

INSERT INTO `bookingcust` (`id`, `customer`, `address`, `city`, `pin`, `mail`, `mobile`) VALUES
(1, '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hubinscan`
--

CREATE TABLE `hubinscan` (
  `id` int(10) NOT NULL,
  `branch(from)` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `mfno` int(10) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` time NOT NULL,
  `orihub` varchar(30) NOT NULL,
  `oricity` varchar(30) NOT NULL,
  `waybillno` bigint(15) NOT NULL,
  `branch(to)` varchar(50) NOT NULL,
  `volwt` int(20) NOT NULL,
  `topay` int(20) NOT NULL,
  `cod` int(20) NOT NULL,
  `mode` varchar(10) NOT NULL,
  `doc` varchar(10) NOT NULL,
  `pcs` int(10) NOT NULL,
  `weight` int(10) NOT NULL,
  `inv` int(10) NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hubinscan`
--

INSERT INTO `hubinscan` (`id`, `branch(from)`, `pincode`, `mail`, `mobile`, `mfno`, `date`, `time`, `orihub`, `oricity`, `waybillno`, `branch(to)`, `volwt`, `topay`, `cod`, `mode`, `doc`, `pcs`, `weight`, `inv`, `remarks`) VALUES
(1, 'salam', 342001, 'q@gmail.com', '3445454', 1234, 'Wed Jul 12 2023 21:17:03 GMT+0', '09:19:01', '6766', '7676', 6767, 'cvcx', 1, 2, 1, 'a', 'a', 0, 1, 1, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `logindashboard`
--

CREATE TABLE `logindashboard` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logindashboard`
--

INSERT INTO `logindashboard` (`id`, `username`, `password`) VALUES
(1, 'bhabhut', '12345'),
(2, 'umer', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `loopcount`
--

CREATE TABLE `loopcount` (
  `id` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manifest`
--

CREATE TABLE `manifest` (
  `id` int(10) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `sealno` int(10) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` time NOT NULL,
  `mode` varchar(10) NOT NULL,
  `doc` varchar(10) NOT NULL,
  `pincode` int(6) NOT NULL,
  `coloader` varchar(50) NOT NULL,
  `codoc` varchar(10) NOT NULL,
  `waybillno` bigint(15) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `pcs` int(10) NOT NULL,
  `weight` int(10) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manifest`
--

INSERT INTO `manifest` (`id`, `branch`, `sealno`, `date`, `time`, `mode`, `doc`, `pincode`, `coloader`, `codoc`, `waybillno`, `destination`, `pcs`, `weight`, `remarks`) VALUES
(1, 'jjaipur', 0, 'Wed Jul 12 2023 21:40:02 GMT+0', '09:40:54', '', 'docx', 342001, '', 'doc', 2147483647, '', 0, 0, ''),
(2, 'jjaipur', 0, 'Wed Jul 12 2023 21:40:02 GMT+0', '09:40:54', '', 'docx', 342001, '', 'doc', 95000222154, '', 0, 0, ''),
(3, 'jjaipur', 0, 'Wed Jul 12 2023 21:40:02 GMT+0', '09:43:51', '', 'docx', 342001, '', 'doc', 95000222154, '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `outdel`
--

CREATE TABLE `outdel` (
  `id` int(100) NOT NULL,
  `hubname` varchar(50) NOT NULL,
  `area` text NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` time NOT NULL,
  `waybillno` bigint(15) NOT NULL,
  `pcs` int(10) NOT NULL,
  `consig` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `outdel`
--

INSERT INTO `outdel` (`id`, `hubname`, `area`, `date`, `time`, `waybillno`, `pcs`, `consig`, `address`, `remarks`) VALUES
(1, 'patel', 'jodhpur', 'Wed Jul 12 2023 22:00:18 GMT+0', '10:01:01', 88000001255, 1, '', 'jalori gate', 'mobile'),
(2, '', '', 'Wed Jul 12 2023 22:01:02 GMT+0', '10:01:39', 12121212, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `parcel`
--

CREATE TABLE `parcel` (
  `id` int(100) NOT NULL,
  `packtype` int(50) NOT NULL,
  `wtpps` int(30) NOT NULL,
  `length` int(10) NOT NULL,
  `height` int(10) NOT NULL,
  `width` int(10) NOT NULL,
  `tpv` int(10) NOT NULL,
  `tpw` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `podimages`
--

CREATE TABLE `podimages` (
  `id` int(100) NOT NULL,
  `waybillno` bigint(15) NOT NULL,
  `image` text NOT NULL,
  `date` text NOT NULL,
  `time` time NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `podimages`
--

INSERT INTO `podimages` (`id`, `waybillno`, `image`, `date`, `time`, `remarks`) VALUES
(1, 9500022266, 'WIN_20230414_06_16_21_Pro.jpg', 'Wed Jul 12 2023 22:25:45 GMT+0530 (India Standard Time)', '10:30:14', 'signature');

-- --------------------------------------------------------

--
-- Table structure for table `shipfrom`
--

CREATE TABLE `shipfrom` (
  `id` int(100) NOT NULL,
  `state` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `addl1` text NOT NULL,
  `addl2` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `pincode` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipto`
--

CREATE TABLE `shipto` (
  `id` int(100) NOT NULL,
  `state` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `addl1` text NOT NULL,
  `addl2` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `pincode` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookingconsignee`
--
ALTER TABLE `bookingconsignee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookingcust`
--
ALTER TABLE `bookingcust`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hubinscan`
--
ALTER TABLE `hubinscan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logindashboard`
--
ALTER TABLE `logindashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loopcount`
--
ALTER TABLE `loopcount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manifest`
--
ALTER TABLE `manifest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outdel`
--
ALTER TABLE `outdel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcel`
--
ALTER TABLE `parcel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `podimages`
--
ALTER TABLE `podimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipfrom`
--
ALTER TABLE `shipfrom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipto`
--
ALTER TABLE `shipto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookingconsignee`
--
ALTER TABLE `bookingconsignee`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookingcust`
--
ALTER TABLE `bookingcust`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hubinscan`
--
ALTER TABLE `hubinscan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logindashboard`
--
ALTER TABLE `logindashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loopcount`
--
ALTER TABLE `loopcount`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manifest`
--
ALTER TABLE `manifest`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `outdel`
--
ALTER TABLE `outdel`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `parcel`
--
ALTER TABLE `parcel`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `podimages`
--
ALTER TABLE `podimages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipfrom`
--
ALTER TABLE `shipfrom`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shipto`
--
ALTER TABLE `shipto`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
