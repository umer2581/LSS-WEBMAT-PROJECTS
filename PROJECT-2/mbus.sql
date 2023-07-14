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
-- Database: `mbus`
--

-- --------------------------------------------------------

--
-- Table structure for table `about3`
--

CREATE TABLE `about3` (
  `id` int(2) NOT NULL,
  `list` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about3`
--

INSERT INTO `about3` (`id`, `list`) VALUES
(6, 'we are the best'),
(7, 'we are the worst people to do business with');

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
(11, 'Name:-', 'MBUS COURIER SERVICES PVT. LTD.'),
(13, 'Address :-', 'MBUS COURIER PVT. LTD. , 27/11B , OPP. JALORI GATE POLICE CHOWKI INSIDE DEVRAJ JI KI POLE JODHPUR (RAJ.)'),
(15, 'Registered Office :-', 'MBUS COURIER PVT. LTD. , 27/11B , OPP. JALORI GATE POLICE CHOWKI INSIDE DEVRAJ JI KI POLE JODHPUR (RAJ.)'),
(16, 'Consturction :-', 'GOVT.  AFFILIATED COMPANY'),
(17, 'Incorporated Date :-', '01-07-2023 (Saturday)'),
(18, 'Directors :-', 'MR. MO UMER (ALL INDIA DIRECTOR ) MR. BHABHUT SINGH (MANAGING DIRECTOR) MR. ABDUL SALAM (FINANCIAL DIRECTOR) MS. MANSI PRAJAPATI (HIGHEST SHARE HOLDER)'),
(19, 'Business Strength :-', 'WE ARE EVOLVING EXPONENTIALLY ');

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
(1, '<p class=\"black\">\r\n                            MBUS COURIER is one of the largest Indian company in the Express industry. MBUS\r\n                            COURIER takes the credit of pioneering the franchisee concept for the courier industry in\r\n                            India, and today has the largest franchisee network.\r\n                        </p>\r\n                        <p class=\"black\">\r\n                            MBUS COURIER also gives lot of importance to \'Women Empowerment\'. Mr.Sunil Poojary,\r\n                            Managing Director, believes \"Women are emerging from the confines of their homes to take\r\n                            their rightful place as equals in society. They are equally, if not more talented, capable\r\n                            and efficient as men as can be seen from more and more traditionally male-dominated bastions\r\n                            being stormed by women. However, men should not feel threatened but view this phenomenon as\r\n                            a progression towards more rapid development. Women too should strive to achieve greater\r\n                            heights and never feel intimidated regardless of circumstances, but by their example and\r\n                            gentleness, try to change what is not right around them.\"</p>\r\n                        </p>\r\n                        <p class=\"black\">MBUS COURIER, we does not limit our duties to the mere, \"you pay me, I work\"\r\n                            policy. Our concern for the customer takes us beyond the traditional ways of handling our\r\n                            business. Over the years, we have incorporated many special services to give maximum\r\n                            satisfaction to our customers. Some of them are:</p>\r\n\r\n                        <p class=\"black\"> Diplomatic Service: When deliveries for certain far off places are undertaken,\r\n                            to avoid a possible delay, the franchisee of the particular area will undertake the\r\n                            responsibility of delivering the goods. This way, we lessen the chances of a possible delay\r\n                            in delivery</p>\r\n\r\n                        <p class=\"black\"> Customer Support and Customer Services: Since we are in a service industry,\r\n                            lot of care has to be given to this area. Our policy towards the customer care is \"what\r\n                            problems do customers have and what resources do we have to solve them?\" At Airways, we have\r\n                            adopted certain standards regarding customer care to give a better service.</p>\r\n\r\n', 'We have taken into account following things :-');

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
(10, 'UMER', 'MBUS COURIER 13/1/2A PRIYA NATH MULLICK ROAD PS BHAWANIPORE KOLKATA-700026', '0123123123', 'abc123@gmail.com'),
(11, 'SALAM', 'MUBS COURIER LTD. NO 4 GROUND FLOOR SHANTI COMPLEX OPP. HOUSUR BUS STAND HOSUR-638109\r\n', '123123123', 'abc123@gmail.com'),
(12, 'BHABHUT SINGH', 'MBUS COURIER LTD. 182/66, INDUSTRIAL AREA PHASE 1 NEAR HARYANA ROADWAYS CHANDIGARH-162002', '0123123123', 'abc123@gmail.com'),
(13, 'MANSI PRAJAPATI', 'MBUS COURIER LTD. SHOP NO. 7 GROUND FLOOOR CTS NO-3370/A +18 SOMWAR PETH PUNE-411001', '0123123123', 'abc123@gmail.com');

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
(58, 'ABOHARE', 48),
(59, 'ANKHALESWAR', 48),
(60, 'AGRA ', 48),
(61, 'AJMER', 48),
(63, 'AHMEDABAD', 48),
(64, 'ALWAR', 24),
(65, 'BANGALORE', 48),
(66, 'ATUL', 48),
(67, 'BAREILLY', 48),
(68, 'BARODA', 48),
(70, 'JAIPUR', 24),
(71, 'DELHI', 24),
(72, 'JODHPUR', 10),
(73, 'OSIAN', 15),
(74, 'CHENNAI', 48),
(75, 'KUMTA', 24),
(76, 'KISHANGARH', 12),
(78, 'MADRAS', 72);

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
-- Table structure for table `homeslider1`
--

CREATE TABLE `homeslider1` (
  `id` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `homeslider1`
--

INSERT INTO `homeslider1` (`id`, `filename`, `visible`) VALUES
(2, '../gimages/slideraj2.jpg', 0),
(3, '../gimages/slideraj3.jpg', 0),
(4, '../gimages/slideraj8.jpeg', 0),
(5, '../gimages/slideraj7.jpeg', 0),
(6, '../gimages/slideraj6.jpeg', 0),
(10, '../gimages/pslider.jpg', 0),
(12, '../gimages/fback2.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `homeslider2`
--

CREATE TABLE `homeslider2` (
  `id` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `homeslider2`
--

INSERT INTO `homeslider2` (`id`, `filename`, `visible`) VALUES
(6, '../gimages/s2aj2.webp', 0),
(9, '../gimages/s2aj4.jpeg', 0),
(10, '../gimages/clockback.jpeg', 0),
(11, '../gimages/s2aj3.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `imagegallery`
--

CREATE TABLE `imagegallery` (
  `id` int(4) NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imagegallery`
--

INSERT INTO `imagegallery` (`id`, `filename`) VALUES
(11, '../gimages/032.jpg'),
(12, '../gimages/034.jpg'),
(14, '../gimages/038.jpg'),
(15, '../gimages/002_1.jpg'),
(16, '../gimages/040.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `loginadmin`
--

CREATE TABLE `loginadmin` (
  `id` int(4) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loginadmin`
--

INSERT INTO `loginadmin` (`id`, `username`, `password`) VALUES
(1, 'salam chhipa', 'Salam@7062'),
(2, 'bhabhut', '123456');

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
(1, 'OUR NETWORKS :-', 'An internationally spread business calls for an international network for smooth and speedy operations. At Airways, we always strive to improve our network by seeking out for newer partnerships in the international arena. Recently, we tied up with Gulf Express, for international business, which has rich experience in international business. This enables us to add more speed and punctuality to the already excelling service.\r\n\r\nAlso, to be able to reach the top, the internal management of the company has to be par excellence. Our company is blessed with two directors who are apt, resourceful and tactical in their field (One of them is the Managing Director of the company). Under them is the dedicated staff of 2161 who are always in search of higher standards and newer challenges. Our staff is equipped with cellular phones and pagers for better communication with each other.');

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

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `nheading`, `text`, `visible`, `new`) VALUES
(8, 'Date:- 09.07.2023', 'We have opened four branches in assam ', 1, 1),
(9, 'Date :-10.07.2023', 'We have been awarded by Central government for our best services\r\n', 1, 1),
(10, 'Date:-10.07.2023', 'We are working on a New Project of courier service by air and water \r\n\r\n\r\n\r\n', 1, 1),
(11, 'Date:-10.07.2023', 'Our transport service was disturbed by the heavy rain so we will continue the transportation after the rain gone', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ser1`
--

CREATE TABLE `ser1` (
  `id` int(1) NOT NULL,
  `serhead` text NOT NULL,
  `serpara` text NOT NULL,
  `lihead` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ser1`
--

INSERT INTO `ser1` (`id`, `serhead`, `serpara`, `lihead`) VALUES
(1, 'MBUS COURIER Provide Number Of Services To Its Customers :-', ' <p class=\"black\">\r\n                        At MBUS COURIER, we does not limit our duties to the mere, \"you pay me, I work\" policy. Our\r\n                        concern for the customer takes us beyond the traditional ways of handling our business. Over the\r\n                        years, we have incorporated many special services to give maximum satisfaction to our customers.\r\n                        Some of them are:</p>\r\n                    <br>\r\n                    <p class=\"black\">\r\n                        Diplomatic Service: When deliveries for certain far off places are undertaken, to avoid a\r\n                        possible delay, the franchisee of the particular area will undertake the responsibility of\r\n                        delivering the goods. This way, we lessen the chances of a possible delay in delivery\r\n                    </p>\r\n                    <br>\r\n                    <p class=\"black\">\r\n                        Customer Support and Customer Services: Since we are in a service industry, lot of care has to\r\n                        be given to this area. Our policy towards the customer care is \"what problems do customers have\r\n                        and what resources do we have to solve them?\" At Airways\r\n                    </p>', 'We have taken into account following things in this regard:');

-- --------------------------------------------------------

--
-- Table structure for table `ser2`
--

CREATE TABLE `ser2` (
  `id` int(4) NOT NULL,
  `lists` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ser2`
--

INSERT INTO `ser2` (`id`, `lists`) VALUES
(12, 'OUR STAFF IS HARDWORKING'),
(13, 'WE PROVIDE ALL INDIA DELIVERY'),
(15, 'WE PROVIDE SEAMLESS EXPERIENCE '),
(16, 'WE ARE WORKING ON OUT OF INDIA DELIVERY');

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
-- Indexes for table `homeslider1`
--
ALTER TABLE `homeslider1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeslider2`
--
ALTER TABLE `homeslider2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagegallery`
--
ALTER TABLE `imagegallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginadmin`
--
ALTER TABLE `loginadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logindashboard`
--
ALTER TABLE `logindashboard`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about3`
--
ALTER TABLE `about3`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `aboutus1`
--
ALTER TABLE `aboutus1`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `aboutus2`
--
ALTER TABLE `aboutus2`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `gimages`
--
ALTER TABLE `gimages`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `homeslider1`
--
ALTER TABLE `homeslider1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `homeslider2`
--
ALTER TABLE `homeslider2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `imagegallery`
--
ALTER TABLE `imagegallery`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `loginadmin`
--
ALTER TABLE `loginadmin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logindashboard`
--
ALTER TABLE `logindashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `network`
--
ALTER TABLE `network`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ser1`
--
ALTER TABLE `ser1`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ser2`
--
ALTER TABLE `ser2`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
