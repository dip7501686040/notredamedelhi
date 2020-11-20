-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 08:37 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notredamedelhi`
--

-- --------------------------------------------------------

--
-- Table structure for table `school_info2`
--

CREATE TABLE `school_info2` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_info2`
--

INSERT INTO `school_info2` (`id`, `heading`, `info`, `date`) VALUES
(1, 'asasa', 'as', '0000-00-00'),
(2, 'asas', 'asas', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_co`
--

CREATE TABLE `sub_co` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `co_ordinator` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_co`
--

INSERT INTO `sub_co` (`id`, `subject`, `co_ordinator`) VALUES
(1, 'computer network', 'shubham'),
(2, 'compiler design', 'neelakshi');

-- --------------------------------------------------------

--
-- Table structure for table `winners`
--

CREATE TABLE `winners` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `date` varchar(25) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `winners`
--

INSERT INTO `winners` (`id`, `name`, `class`, `date`, `img`) VALUES
(1, 'SHUBHAM SHARMA', 'IX', '2020-21', 'Logo.png'),
(2, 'neela', 'XXI', '2020-21', 'crop.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school_info2`
--
ALTER TABLE `school_info2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_co`
--
ALTER TABLE `sub_co`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winners`
--
ALTER TABLE `winners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `school_info2`
--
ALTER TABLE `school_info2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_co`
--
ALTER TABLE `sub_co`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `winners`
--
ALTER TABLE `winners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
