-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2020 at 04:31 PM
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
-- Table structure for table `exam_prom`
--

CREATE TABLE `exam_prom` (
  `id` int(11) NOT NULL,
  `rule` text NOT NULL,
  `dop` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_prom`
--

INSERT INTO `exam_prom` (`id`, `rule`, `dop`) VALUES
(1, 'Students are prepared for the Central Board of Secondary Education Examination, Class X and Class XII.', '2020-11-15'),
(2, 'Regular tests are a feature. Attendance for these is compulsory and final result is declared on the cumulative marks obtained throughout the year. Hence, attendance for all tests and exams is essential. The Principal’s decision with regard to promotion is final.', '2020-11-15'),
(3, 'The pass mark is 40%.A student must pass in each of the subjects including non-academic subjects.', '2020-11-15'),
(4, 'The school has the semester system of evaluation and assessment.', '2020-11-15'),
(5, 'On the days when Unit Tests are held, attendance for the full day is essential. Students will not be permitted to take the Unit Test and return home. If the child is unwell he/she should stay at home. Parents should send their ward only if he/she can stay in school for the full day.', '2020-11-15'),
(6, 'Special arrangements cannot be made for pupils who for any reason whatsoever, are absent from the main examination or any part of it. Pupils, who are absent from any exam for whatever reason, will be awarded zero marks for that particular exam. (All fees due are to be paid before the commencement of the exams.)', '2020-11-15'),
(7, 'A student who uses unfair means during a test will be given zero marks for that subject. Repetition of the same will result in stern action like suspension or dismissal.', '2020-11-15'),
(8, 'Transfer certificates issued after the final examinations will state clearly that the student was promoted or not ready for the next class according to the actual result.', '2020-11-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam_prom`
--
ALTER TABLE `exam_prom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam_prom`
--
ALTER TABLE `exam_prom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
