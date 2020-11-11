-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 08:53 AM
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
-- Table structure for table `eventsindex`
--

CREATE TABLE `eventsindex` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventsindex`
--

INSERT INTO `eventsindex` (`id`, `title`, `img`, `date`, `content`) VALUES
(1, 'test', '919829984428_status_dc8c1984300c4475ab6ddc7dae264fd5.jpg', '2020-11-11', '        dsfgdcv'),
(2, 'test', '919829984428_status_dc8c1984300c4475ab6ddc7dae264fd5.jpg', '2020-11-11', '        dsadadadsadsadsad'),
(3, 'wddasdsaa', '919829984428_status_dc8c1984300c4475ab6ddc7dae264fd5.jpg', '2020-11-05', '        asdasdsadsadasdasds'),
(4, 'test', '117435717_595305904690662_8623100774586614867_n.jpg', '2020-11-12', '        zxsaqwsazxawqax');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventsindex`
--
ALTER TABLE `eventsindex`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventsindex`
--
ALTER TABLE `eventsindex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
