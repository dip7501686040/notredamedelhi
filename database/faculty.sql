-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2020 at 08:27 AM
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
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `dop` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `Designation`, `dop`) VALUES
(3, 'SR. MARY ALICE,SND', 'PRINCIPAL', '2020-10-17'),
(4, 'SR.TANYA,SND', 'HEAD MISTRESS', '2020-10-17'),
(5, '	MRS. RAMAA SHANKAR', 'P.G.T (Accountancy )', '2020-10-17'),
(6, 'MRS. SADHANA SAINGER', 'P.G.T(Maths)', '2020-10-17'),
(7, 'MRS. BEENA SUSAN KURIAKOSE', 'P.G.T( Chemistry )', '2020-10-17'),
(8, 'MR. RAMAKAR JHA', 'P.G.T (Physics)', '2020-10-17'),
(9, 'MRS. SANGEETA SHARMA	', 'P.G.T  (English)', '2020-10-17'),
(10, 'MR. VIVEK BHARDWAJ	', 'P.G.T ( Phy. Education)', '2020-10-17'),
(11, 'MR. ALOK KUMAR MISHRA	', 'P.G.T (Geo.)', '2020-10-17'),
(12, 'MRS. POONAM CHOPRA	', 'P.G.T(Maths)', '2020-10-17'),
(13, 'MR. JOSE K.S.	', 'P.G.T (English)', '2020-10-17'),
(14, 'MRS. MANJU FRANCIS	', 'P.G.T (Com. Sciences)', '2020-10-17'),
(15, 'Mr. RAKESH MISHRA	', 'P.G.T (Eco.)', '2020-10-17'),
(16, 'MRS. G.S. MEENA	', 'P.G.T (Bio)', '2020-10-17'),
(17, 'MRS. ASHA JAIN	', 'T.G.T (Hindi)', '2020-10-17'),
(18, 'MRS. SEEMA GUPTA	', 'T.G.T (Hindi)', '2020-10-17'),
(19, 'MR. DEVASIA T. K.	', 'T.G.T (So.Science)', '2020-10-17'),
(20, 'MRS. REKHA BANSAL	', 'T.G.T (Hindi)', '2020-10-17'),
(21, 'MRS. NIRUPAMA SINGH	', 'T.G.T .( English)', '2020-10-17'),
(22, 'MR. JUSTINE VARGHESE	', 'T.G.T (Computer)', '2020-10-17'),
(23, 'MRS. LIZY KUMAR	', 'T.G.T (Soc. Science)', '2020-10-17'),
(24, 'MR. FRANCIS V.K.	', 'T.G.T(Soc. Science)', '2020-10-17'),
(25, 'MRS.SANCHITA GHOSH CHOWDHURY	', 'T.G.T (Maths)', '2020-10-17'),
(26, 'MRS. MEENAKSHI GUPTA	', 'T.G.T(Science)', '2020-10-17'),
(27, 'MRS. SUJATA MUKHERJEE	', 'T.G.T(Science)', '2020-10-17'),
(28, 'MRS. SHALINI DANIELS	', 'T.G.T( English)', '2020-10-17'),
(29, 'MR. A. STANLEY SAM	', 'T.G.T( English)', '2020-10-17'),
(30, 'MR. WINSTON ALEX FERNANDES	', 'T.G.T (MUSIC)', '2020-10-17'),
(31, 'MRs. TESSY THOMAS	', 'TGT(Science)', '2020-10-17'),
(32, 'MRS.VIILITHA NAYAR	', 'TGT (Maths)', '2020-10-17'),
(33, 'MRS. SHILA CHAKRABORTY	', 'TGT (Maths)', '2020-10-17'),
(34, 'MRS. TANU GOYAL	', 'Asst. Teacher', '2020-10-17'),
(35, 'Mr. VIJAY PRAKASH	', 'T.G.T (Sanskrit)', '2020-10-17'),
(36, 'MRS. SHUBA VERMA	', 'P.R.T', '2020-10-17'),
(37, 'MRS. PINKY GLORIA GEORGE	', 'P.R.T', '2020-10-17'),
(38, 'MRS. USHA JAMES	', 'P.R.T', '2020-10-17'),
(39, 'MRS. MADHU AHUJA	', 'P.R.T', '2020-10-17'),
(40, 'MRS. BANIE GUPTA	', 'P.R.T', '2020-10-17'),
(41, 'MRS. CATHERINE JOSEPH	', 'P.R.T', '2020-10-17'),
(42, 'MRS. PAULINA KUMAR	', 'P.R.T', '2020-10-17'),
(43, 'MRS. FLORENCE KISKU	', 'P.R.T', '2020-10-17'),
(44, 'MRS. SHIKHA JOSHI	', 'P.R.T', '2020-10-17'),
(45, 'MRS. SANYUKTA CHAUHAN	', 'P.R.T', '2020-10-17'),
(46, 'MRS. SABRINA KASHYAP	', 'P.R.T', '2020-10-17'),
(47, 'MRS. DEEPTY SAPNA	', 'P.R.T', '2020-10-17'),
(48, 'MRS. NEERA N FRANCIS	', 'P.R.T', '2020-10-17'),
(49, 'MRS.SHEWTA D’SOUZA	', 'P.R.T', '2020-10-17'),
(50, 'MRS. KUMUND AJIT OSTA	', 'P.R.T', '2020-10-17'),
(52, 'MRS. RAI KAR	', 'P.R T Dance', '2020-10-17'),
(53, 'MS. JENEFAR ANTHONY	', 'P.R.T', '2020-10-17'),
(54, 'MS. MADHURI KERKETTA	', 'Asst. Teacher', '2020-10-17'),
(55, 'MS.FELSY ROZARIO	', 'Asst. Teacher', '2020-10-17'),
(56, 'MRS. SHIKHA AUSTIN SIMON	', 'Asst. Teacher', '2020-10-17'),
(57, 'MS .DEEPTI MISHRA	', 'Asst. Teacher', '2020-10-17'),
(59, 'SR. MERCY THOMAS	', 'Remedial class In charge', '2020-10-17'),
(60, 'SR. MARY SHAIJA PULIKKIYIL,SND	', 'Counsellor/Manager', '2020-10-17'),
(61, 'MR. SOYA JOHN	', 'PET', '2020-10-17'),
(62, 'MRS. SHWETA ACHARYA	', 'Special Educator', '2020-10-17'),
(63, 'MR. MANOJ DHIRIA	', 'Librarian(Sr.)', '2020-10-17'),
(64, 'MRS. NAGHMA SHIRIN	', 'Librarian(Jr.)', '2020-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(11) NOT NULL,
  `Fee_name` varchar(255) NOT NULL,
  `Amount` varchar(50) NOT NULL,
  `dop` date NOT NULL,
  `NTPC` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `Fee_name`, `Amount`, `dop`, `NTPC`) VALUES
(2, 'I-V', 'Rs.2965/month', '2020-10-17', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `uploaded_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `file_name`, `category`, `type`, `uploaded_on`) VALUES
(2, 'img1.jpg', 'junior', 'photo', '2020-10-16'),
(3, 'img3.jpg', 'Senior', 'photo', '2020-10-16'),
(4, 'slider4.jpg', 'Senior', 'photo', '2020-10-16'),
(5, 'img3.jpg', 'Senior', 'Photo', '2020-10-16'),
(6, 'img2.jpg', 'Senior', 'Photo', '2020-10-16'),
(7, 'IMG_20200802_175533.jpg', 'Junior', 'Photo', '2020-10-16'),
(8, 'Snapchat-1357600288.mp4', 'Senior', 'Video', '2020-10-16'),
(9, 'Snapchat-1282645818.mp4', 'Junior', 'Video', '2020-10-16');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `notice` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `file` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
