-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 08:10 PM
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
-- Table structure for table `home_links`
--

CREATE TABLE `home_links` (
  `id` int(11) NOT NULL,
  `title` varchar(2555) NOT NULL,
  `link` varchar(300) NOT NULL,
  `dop` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_links`
--

INSERT INTO `home_links` (`id`, `title`, `link`, `dop`) VALUES
(1, '10 th marksheet', 'https://www.youtube.com/watch?v=J_litafaEvU', '2020-11-10'),
(2, '10 th marksheet', 'https://www.youtube.com/watch?v=J_litafaEvU', '2020-11-10'),
(3, '10 th marksheet', 'https://www.youtube.com/watch?v=J_litafaEvU', '2020-11-10'),
(4, 'test', 'https://www.youtube.com/watch?v=J_litafaEvU', '2020-11-10'),
(5, 'test', 'https://www.youtube.com/watch?v=J_litafaEvU', '2020-11-10'),
(6, 'shubham', 'https://stackoverflow.com/questions/5191503/how-to-select-the-last-record-of-a-table-in-sql/5191525#:~:text=to%20get%20the%20last%20row,Last%20Line%20of%20your%20db!', '2020-11-11'),
(7, 'neelu', 'https://www.instagram.com/?hl=en', '2020-11-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_links`
--
ALTER TABLE `home_links`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_links`
--
ALTER TABLE `home_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
