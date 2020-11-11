-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 07:05 PM
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
-- Table structure for table `academic_link`
--

CREATE TABLE `academic_link` (
  `id` int(11) NOT NULL,
  `curriculum` varchar(255) NOT NULL,
  `Class_X_Sample_Question_Paper_&_Marking_Scheme_for_Exam` varchar(255) NOT NULL,
  `E-Pathshala` varchar(255) NOT NULL,
  `Diksha` varchar(255) NOT NULL,
  `CBSE_Sample_paper` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_link`
--

INSERT INTO `academic_link` (`id`, `curriculum`, `Class_X_Sample_Question_Paper_&_Marking_Scheme_for_Exam`, `E-Pathshala`, `Diksha`, `CBSE_Sample_paper`) VALUES
(1, 'http://cbseacademic.nic.in/curriculum.html ', 'http://cbseacademic.nic.in/SQP_CLASSX_2019_20.html', 'https://epathshala.nic.in//', 'https://diksha.gov.in/explore', 'http://cbseacademic.nic.in/SQP_CLASSXII_2019_20.html');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_link`
--
ALTER TABLE `academic_link`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_link`
--
ALTER TABLE `academic_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
