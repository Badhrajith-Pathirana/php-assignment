-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2019 at 07:31 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gtf`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `articleId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `locID` int(10) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `description` varchar(250) NOT NULL,
  `imagePath` varchar(255) NOT NULL,
  `loc_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`locID`, `lat`, `lng`, `description`, `imagePath`, `loc_status`) VALUES
(1, 6.939710, 79.877419, 'fsdds', 'ffff', NULL),
(2, 6.945504, 79.897507, 'xakx', 'ffff', 0),
(3, 6.935620, 79.892357, 'fuhfufh', 'ffff', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(2, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(3, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(4, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(5, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(7, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(9, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(10, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(11, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(12, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(13, 'ewfjhwejf', 'chinthani96@gmal.com', '202cb962ac59075b964b07152d234b70'),
(14, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(15, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(16, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(17, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(18, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(19, 'Badhrajith', 'badhrajith.pathirana@gmail.com', 'f925916e2754e5e03f75dd58a5733251');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`articleId`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`locID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `articleId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `locID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
