-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 09:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

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
(1, 'http://cbseacademic.nic.in/curriculum.html', 'http://cbseacademic.nic.in/SQP_CLASSX_2019_20.html', 'https://epathshala.nic.in//', 'https://diksha.gov.in/explore', 'http://cbseacademic.nic.in/SQP_CLASSXII_2019_20.html');

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

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`) VALUES
(1, 'hellooo', '2020-11-09 00:00:00', '2020-11-10 00:00:00'),
(3, 'shubham b day', '2020-03-16 00:00:00', '2020-03-17 00:00:00'),
(4, 'xyz b day', '2020-03-10 00:00:00', '2020-03-11 00:00:00'),
(7, 'yelooo', '2020-11-11 00:00:00', '2020-11-12 00:00:00'),
(8, 'bdayyyyy', '2020-11-16 00:00:00', '2020-11-17 00:00:00'),
(9, 'hkjhkjhj', '2020-11-20 00:00:00', '2020-11-21 00:00:00'),
(10, 'christmas day', '2020-11-25 00:00:00', '2020-11-26 00:00:00'),
(11, 'jhkjkjk', '2020-11-30 00:00:00', '2020-12-01 00:00:00');

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
(9, 'Snapchat-1282645818.mp4', 'Junior', 'Video', '2020-10-16'),
(12, 'bg2.jpg', 'Senior', 'Photo', '2020-11-09'),
(13, 'slider2.mp4', 'Junior', 'Video', '2020-11-09'),
(14, 'Carbidecapstons.jpg', 'Senior', 'Photo', '2020-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `homeimage`
--

CREATE TABLE `homeimage` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homeimage`
--

INSERT INTO `homeimage` (`id`, `img`) VALUES
(4, 'slider_photo1.jpg'),
(5, 'slider_photo3.jpg'),
(6, 'slider_photo2.jpg'),
(7, 'slider_photo4.jpg');

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
(7, 'neelu', 'https://www.instagram.com/?hl=en', '2020-11-11'),
(8, 'today is monday', 'https://www.youtube.com/watch?v=PtEb8Rpr_TQ&t=325s', '2020-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `notice` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `file` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice`, `date`, `file`, `created_at`) VALUES
(1, 'this is a notice', '2020-10-16', 'ethical hacking hard copy.docx', '2020-10-16 13:14:47'),
(2, 'this is a notice', '2020-10-16', 'ethical hacking hard copy.docx', '2020-10-16 13:20:42'),
(3, 'hjdhasjd jashgd j', '2020-11-09', 'changes ssmc.txt', '2020-11-09 10:19:03'),
(4, 'ksdkjskd', '2020-11-10', 'Neelakshi T_Resume.pdf', '2020-11-10 13:50:06'),
(5, 'sdfdsfsdf', '2020-11-10', 'Neelakshi T_Resume.pdf', '2020-11-10 13:50:18'),
(6, 'kjkashklas', '2020-11-10', 'Neelakshi T_Resume.pdf', '2020-11-10 13:50:28'),
(7, 'dsasf', '2020-11-10', 'Neelakshi T_Resume.pdf', '2020-11-10 13:51:03'),
(8, 'hello world', '2020-11-11', 'neelu pic.jpg', '2020-11-11 14:01:40'),
(10, 'Clear browsing data Clear history, cookies, cache, and more Cookies and other site data Third-party cookies are blocked in Incognito mode 2 results Security Safe Browsing (protection from dangerous si', '2020-11-13', 'Untitled design (5).png', '2020-11-12 19:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `tc_issued`
--

CREATE TABLE `tc_issued` (
  `id` int(11) NOT NULL,
  `r_number` varchar(225) NOT NULL,
  `file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tc_issued`
--

INSERT INTO `tc_issued` (`id`, `r_number`, `file`) VALUES
(1, '', 'Group 53.png'),
(2, '234567890', 'Daco_36089.png');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(50) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `name`) VALUES
(12, 'https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DPtEb8Rpr_TQ%26t%3D325s'),
(13, 'https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DPtEb8Rpr_TQ'),
(14, 'https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DPtEb8Rpr_TQ%26t%3D325s'),
(17, 'https%3A%2F%2Fwww.youtube.com%2Fembed%2Fpn23kdhFLLY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_link`
--
ALTER TABLE `academic_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `current_principle`
--
ALTER TABLE `current_principle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventsindex`
--
ALTER TABLE `eventsindex`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeimage`
--
ALTER TABLE `homeimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_links`
--
ALTER TABLE `home_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tc_issued`
--
ALTER TABLE `tc_issued`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_link`
--
ALTER TABLE `academic_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `current_principle`
--
ALTER TABLE `current_principle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `eventsindex`
--
ALTER TABLE `eventsindex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `homeimage`
--
ALTER TABLE `homeimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `home_links`
--
ALTER TABLE `home_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tc_issued`
--
ALTER TABLE `tc_issued`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
