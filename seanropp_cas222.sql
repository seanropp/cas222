-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2018 at 07:40 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seanropp_cas222`
--

-- --------------------------------------------------------

--
-- Table structure for table `link1`
--

CREATE TABLE `link1` (
  `id` int(11) NOT NULL,
  `name` text,
  `email` text,
  `party` text,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `link1`
--

INSERT INTO `link1` (`id`, `name`, `email`, `party`, `comment`) VALUES
(1, 'asf', NULL, NULL, NULL),
(2, 'asf', NULL, NULL, NULL),
(3, 'fndsfngfg', 'ngxszgnszg', 'xsgfnsgnszg', 'znzcvnznngshawerhjmasrnjma'),
(4, 'fndsfngfg', 'ngxszgnszg', 'xsgfnsgnszg', 'znzcvnznngshawerhjmasrnjma');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `link1`
--
ALTER TABLE `link1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `link1`
--
ALTER TABLE `link1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
