-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2020 at 03:07 PM
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
-- Table structure for table `objectives`
--

CREATE TABLE `objectives` (
  `id` int(11) NOT NULL,
  `heading` varchar(2200) NOT NULL,
  `content` text NOT NULL,
  `dop` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `objectives`
--

INSERT INTO `objectives` (`id`, `heading`, `content`, `dop`) VALUES
(4, 'FAITH IN GOD', '(a) A deep inter-relationship with God that permeates his/her daily life and his/her contact with others.\r\n(b) Personal and group prayer to God whom he/she considers to be his/ her loving Father.\r\n(c) Acceptance of and respect for all religions.\r\n(d) Deepening and broadening of his/her religious convictions.', '2020-11-15'),
(5, 'CONSCIENTISATION TOWARDS JUSTICE AND EQUALITY', 'Every Notre Dame student must be imbued with the fact that she/he is living in a very unjust society and that she/he must do all within her/ his power to bring about a radical change in the present structures. Therefore, she/he must develop:\r\n(a) A genuine love for the poor and the needy. She/he must programme regular sessions during the week in which she/he has some positive contact and communications with the poor, the illiterate, and the needy.\r\n(b) A loving concern for the different types of oppressions suffered by the women, the minorities, the under paid labourers, and the weaker sections.\r\n(c) Outstanding speaking and writing ability so that she/he can use her/ his talents as a platform to speak and write against any injustice and oppression suffered by others.\r\n(d) A willingness to involve himself/herself in programmes, projects, camps, workshops, etc. in which she/he will be actively involved in helping the financially poor or deprived sections.', '2020-11-15'),
(6, 'SENSE OF COMMUNITY', '(a) Realising that he/she belongs to a country that is rich in cultural heritage, she/he develops patriotism and pride for India.\r\n(b) As part of the school family, she/he especially develops awareness of the needs of others and responds to their unspoken wishes/ demands/ requests by giving generously of her/his time, talents, and service.\r\n(c) She/he inculcates in herself/himself those social virtues which are a genuine response to others: responsibility, courtesy, honesty, punctuality, loyalty, obedience, womanliness/manliness, generosity, and diligence.\r\n(d) She/he integrates herself/himself readily with others of various social, religious, cultural and national backgrounds.\r\n(e) As a citizen of the world, she/he takes keen interest in what is happening in other countries and easily discusses and empathises with the social and economic situations prevalent in them.', '2020-11-15'),
(7, 'ACADEMIC VALUES', '(a) Acquisition of knowledge and sharpening of her/his memory, speed and accuracy.\r\n(b) Acquisition of the following skills: observing, recording, quoting, illustrating, demonstrating, analysing, outlining, summarising, integrating, evaluating and criticising.\r\n(c) Power of expression through public speaking: debates, dramatics, elocution, extemporaneous speeches, dance, music and creative writing.\r\n(d) An on-going quest for knowledge that will last throughout her/his life.\r\n(e) An inner discernment which guides her/him to choose the correct values even when there is a dichotomy between the home and the school training or between society and the school.\r\n(f) Physical exercises, sports and athletic skills which help her/him develop a sound mind in a sound body.', '2020-11-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `objectives`
--
ALTER TABLE `objectives`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `objectives`
--
ALTER TABLE `objectives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
