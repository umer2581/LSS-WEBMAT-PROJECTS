-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 06:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbus`
--

-- --------------------------------------------------------

--
-- Table structure for table `about3`
--

CREATE TABLE `about3` (
  `id` int(2) NOT NULL,
  `list` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aboutus1`
--

CREATE TABLE `aboutus1` (
  `id` int(2) NOT NULL,
  `title` varchar(30) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus1`
--

INSERT INTO `aboutus1` (`id`, `title`, `text`) VALUES
(11, 'sdsd', 'asaaa'),
(13, 'sdasds', 'dsadad');

-- --------------------------------------------------------

--
-- Table structure for table `aboutus2`
--

CREATE TABLE `aboutus2` (
  `id` int(1) NOT NULL,
  `about` text NOT NULL,
  `lihead` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus2`
--

INSERT INTO `aboutus2` (`id`, `about`, `lihead`) VALUES
(1, '<p class=\"black\">\r\n                            MBUS COURIER is one of the largest Indian company in the Express industry. MBUS\r\n                            COURIER takes the credit of pioneering the franchisee concept for the courier industry in\r\n                            India, and today has the largest franchisee network.\r\n                        </p>\r\n                        <p class=\"black\">\r\n                            MBUS COURIER also gives lot of importance to \'Women Empowerment\'. Mr.Sunil Poojary,\r\n                            Managing Director, believes \"Women are emerging from the confines of their homes to take\r\n                            their rightful place as equals in society. They are equally, if not more talented, capable\r\n                            and efficient as men as can be seen from more and more traditionally male-dominated bastions\r\n                            being stormed by women. However, men should not feel threatened but view this phenomenon as\r\n                            a progression towards more rapid development. Women too should strive to achieve greater\r\n                            heights and never feel intimidated regardless of circumstances, but by their example and\r\n                            gentleness, try to change what is not right around them.\"</p>\r\n                        </p>\r\n                        <p class=\"black\">MBUS COURIER, we does not limit our duties to the mere, \"you pay me, I work\"\r\n                            policy. Our concern for the customer takes us beyond the traditional ways of handling our\r\n                            business. Over the years, we have incorporated many special services to give maximum\r\n                            satisfaction to our customers. Some of them are:</p>\r\n\r\n                        <p class=\"black\"> Diplomatic Service: When deliveries for certain far off places are undertaken,\r\n                            to avoid a possible delay, the franchisee of the particular area will undertake the\r\n                            responsibility of delivering the goods. This way, we lessen the chances of a possible delay\r\n                            in delivery</p>\r\n\r\n                        <p class=\"black\"> Customer Support and Customer Services: Since we are in a service industry,\r\n                            lot of care has to be given to this area. Our policy towards the customer care is \"what\r\n                            problems do customers have and what resources do we have to solve them?\" At Airways, we have\r\n                            adopted certain standards regarding customer care to give a better service.</p>\r\n\r\n', 'We have taken into account following thi');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(2) NOT NULL,
  `title` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `title`, `address`, `phone`, `email`) VALUES
(5, 'salam', 'fghfkjhgfkg', '7670860978706', 'ryurotyurohu'),
(6, 'umer', 'dhghggdf', '9351690017', 'ihfhfff'),
(7, 'dadsda', 'fddssdf', 'fsdfd', 'dfds'),
(8, 'dsdads', 'adsad', 'dsada', 'dsada'),
(9, 'tertret', 'teer', 'trrdtr', 'trdte');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(10) NOT NULL,
  `station` varchar(30) NOT NULL,
  `transit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `station`, `transit`) VALUES
(1, 'JODHPUR', 1),
(3, 'DELHI', 12),
(29, 'DELHI(NCR)', 15),
(30, 'BANGLORE', 48),
(31, 'KOCHI', 12),
(55, 'CHENNAI', 48),
(57, 'AGRA', 20);

-- --------------------------------------------------------

--
-- Table structure for table `gimages`
--

CREATE TABLE `gimages` (
  `id` int(4) NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(4) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'salam chhipa', 'Salam@7062');

-- --------------------------------------------------------

--
-- Table structure for table `network`
--

CREATE TABLE `network` (
  `id` int(4) NOT NULL,
  `nethead` varchar(20) NOT NULL,
  `netpara` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `network`
--

INSERT INTO `network` (`id`, `nethead`, `netpara`) VALUES
(1, 'OUR NETWORK', '  An internationally spread business calls for an international network for smooth and speedy operations. At\r\n          Airways, we always strive to improve our network by seeking out for newer partnerships in the international\r\n          arena. Recently, we tied up with Gulf Express, for international business, which has rich experience in\r\n          international business. This enables us to add more speed and punctuality to the already excelling service.\r\n          <br><br>\r\n          Also, to be able to reach the top, the internal management of the company has to be par excellence. Our\r\n          company is blessed with two directors who are apt, resourceful and tactical in their field (One of them is the\r\n          Managing Director of the company). Under them is the dedicated staff of 2161 who are always in search of\r\n          higher standards and newer challenges. Our staff is equipped with cellular phones and pagers for better\r\n          communication with each other.');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(2) NOT NULL,
  `nheading` varchar(40) NOT NULL,
  `text` text NOT NULL,
  `visible` int(1) NOT NULL,
  `new` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ser1`
--

CREATE TABLE `ser1` (
  `id` int(1) NOT NULL,
  `serhead` varchar(50) NOT NULL,
  `serpara` text NOT NULL,
  `lihead` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ser1`
--

INSERT INTO `ser1` (`id`, `serhead`, `serpara`, `lihead`) VALUES
(1, 'heading', 'fddfdfaaaaa', 'wwqwaa');

-- --------------------------------------------------------

--
-- Table structure for table `ser2`
--

CREATE TABLE `ser2` (
  `id` int(4) NOT NULL,
  `lists` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `simages`
--

CREATE TABLE `simages` (
  `id` int(4) NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about3`
--
ALTER TABLE `about3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutus1`
--
ALTER TABLE `aboutus1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutus2`
--
ALTER TABLE `aboutus2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gimages`
--
ALTER TABLE `gimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `network`
--
ALTER TABLE `network`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ser1`
--
ALTER TABLE `ser1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ser2`
--
ALTER TABLE `ser2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `simages`
--
ALTER TABLE `simages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about3`
--
ALTER TABLE `about3`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `aboutus1`
--
ALTER TABLE `aboutus1`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `aboutus2`
--
ALTER TABLE `aboutus2`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `gimages`
--
ALTER TABLE `gimages`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `network`
--
ALTER TABLE `network`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ser1`
--
ALTER TABLE `ser1`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ser2`
--
ALTER TABLE `ser2`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `simages`
--
ALTER TABLE `simages`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
