-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 08:47 PM
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
-- Table structure for table `current_principle`
--

CREATE TABLE `current_principle` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(10) NOT NULL,
  `message` text NOT NULL,
  `message2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `current_principle`
--

INSERT INTO `current_principle` (`id`, `img`, `name`, `start`, `end`, `message`, `message2`) VALUES
(8, 'img1.jpg', 'SR. MARY RANJITA', '1990', '', '', ''),
(9, 'img2.jpg', 'SR. MARY BEENA', '2000', '', '', ''),
(10, 'img3.jpg', 'SR. MARY HEMA', '2008', '', '', ''),
(11, 'main.jpeg', 'Sr. Mary Alice', '2012', '', 'Notre Dame School, Badarpur, Delhi, since its inception and foundation has always set up high benchmarks of value based holistic education for its students. The school has been imparting knowledge and skills that have cont ributed towards the growth and vision in building global citizens and a conscientious humanity.\r\n', 'I am proud to be a part of this Education system and I am hopeful that I will carry forward the Notre Dame legacy in the years to come with innovation, in keeping with its creative ways.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `current_principle`
--
ALTER TABLE `current_principle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `current_principle`
--
ALTER TABLE `current_principle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
