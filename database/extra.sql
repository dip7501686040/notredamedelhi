-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2020 at 07:47 PM
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
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`id`, `type`, `img`, `title`, `content`, `date`) VALUES
(1, 'Academic', '4.jpg', 't', '', '2020-11-19'),
(2, 'Sports', '4.jpg', 'test', 'test', '2020-11-19'),
(3, 'Academic', 'HilligondeElizChildToledo.jpg', 'yo', 'yo yo', '2020-11-19'),
(4, 'Sports', 'img2.jpg', 'asdfhkl;lkjdsa', '', '2020-11-19'),
(9, 'Academic', 'bbbblogo.png', 'har kuch hi', '', '2020-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `active`
--

CREATE TABLE `active` (
  `doc_name` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `active`
--

INSERT INTO `active` (`doc_name`, `status`, `id`) VALUES
('Admission_form', 'Yes', 1),
('Admission_Schedule', 'Yes', 2),
('Admission_Criteria', 'Yes', 3),
('General_Instruction', 'Yes', 4),
('Registered_Application', 'Yes', 5),
('Selected_Candidates1', 'Yes', 6),
('Selected_Candidates', 'Yes', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `active`
--
ALTER TABLE `active`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `active`
--
ALTER TABLE `active`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
