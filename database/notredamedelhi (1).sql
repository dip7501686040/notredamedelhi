-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2020 at 04:27 PM
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
  `CBSE_Sample_paper` varchar(255) NOT NULL,
  `hpe` varchar(255) NOT NULL,
  `facebook` varchar(225) NOT NULL,
  `alumni` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_link`
--

INSERT INTO `academic_link` (`id`, `curriculum`, `Class_X_Sample_Question_Paper_&_Marking_Scheme_for_Exam`, `E-Pathshala`, `Diksha`, `CBSE_Sample_paper`, `hpe`, `facebook`, `alumni`) VALUES
(1, 'http://cbseacademic.nic.in/curriculum.html', 'http://cbseacademic.nic.in/SQP_CLASSX_2019_20.html', 'https://epathshala.nic.in//', 'https://diksha.gov.in/explore', 'http://cbseacademic.nic.in/SQP_CLASSXII_2019_20.html', 'http://cbseacademic.nic.in/web_material/CurriculumMain21/Coscholastic/Health_and_Physical_Education(HPE)IX-XII.pdf', 'https://www.facebook.com/notredamedelhi', 'https://getbootstrap.com/');

-- --------------------------------------------------------

--
-- Table structure for table `admission_doc`
--

CREATE TABLE `admission_doc` (
  `id` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `Admission_form` varchar(255) NOT NULL,
  `Admission_Schedule` varchar(255) NOT NULL,
  `Admission_Criteria` varchar(255) NOT NULL,
  `General_Instruction` varchar(255) NOT NULL,
  `Registered_Application` varchar(255) NOT NULL,
  `Selected_Candidates1` varchar(255) NOT NULL,
  `Selected_Candidates` varchar(255) NOT NULL,
  `notice` text NOT NULL,
  `notice8` text NOT NULL,
  `notice11` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_doc`
--

INSERT INTO `admission_doc` (`id`, `session`, `Admission_form`, `Admission_Schedule`, `Admission_Criteria`, `General_Instruction`, `Registered_Application`, `Selected_Candidates1`, `Selected_Candidates`, `notice`, `notice8`, `notice11`) VALUES
(1, '2020-21', '919829984428_status_dc8c1984300c4475ab6ddc7dae264fd5.jpg', '117435717_595305904690662_8623100774586614867_n.jpg', 'aa', 'aa', 'aa', 'aa', 'aa', 'shbham', 'hiii', 'hello');

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
(64, 'MRS. NAGHMA SHIRIN	', 'Librarian(Jr.)', '2020-10-17'),
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
(2, 'I-V', 'Rs.2965/month', '2020-10-17', 'NA'),
(0, 'PS&PP', 'Rs.2965/month', '2020-11-11', 'NTPC');

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
(14, 'Carbidecapstons.jpg', 'Senior', 'Photo', '2020-11-09'),
(15, 'Diwali-Crackers-PNG-Photo.png', 'Senior', 'Photo', '2020-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `dop` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `content`, `dop`) VALUES
(0, 'The history of Notre Dame School, Badarpur begins with the invitation of NTPC, BTPS unit to start a project school for the children of their employees and the children of surrounding areas. Notre Dame School under the charismatic leadership of Sr. Mary Shobana and the able assistance of Sr. Mary Jaya and Sr. Mary Neelima began in 1990.', '2020-11-15'),
(0, 'Sister Mary Ranjita is honoured as the founding principal of Notre Dame School. During her tenure of ten years as principal, the school developed into a first rate higher Secondary school, preparing students for the CBSE Examinations. The first batch of students appeared for their Secondary examination in 1996 and after the up gradation, the first batch of students appeared for their Senior Secondary examination in 2002.\r\n', '2020-11-15'),
(0, 'An overview of the history shows that during the past decades., the school has taken many giant strides with the collaborative efforts of devoted Principals, Sisters, Teachers, Parents and Well-wishers. As the School marches ahead to new heights of excellence, we keep our focus on the motto of the school.', '2020-11-15');

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
(7, 'ACADEMIC VALUES', '(a) Acquisition of knowledge and sharpening of her/his memory, speed and accuracy.\r\n(b) Acquisition of the following skills: observing, recording, quoting, illustrating, demonstrating, analysing, outlining, summarising, integrating, evaluating and criticising.\r\n(c) Power of expression through public speaking: debates, dramatics, elocution, extemporaneous speeches, dance, music and creative writing.\r\n(d) An on-going quest for knowledge that will last throughout her/his life.\r\n(e) An inner discernment which guides her/him to choose the correct values even when there is a dichotomy between the home and the school training or between society and the school.\r\n(f) Physical exercises, sports and athletic skills which help her/him develop a sound mind in a sound body.', '2020-11-15'),
(8, 'ADMISSION AND WITHDRAWAL OF PUPILS', 'Admissions are taken only at the beginning of the school year depending upon vacancy and merit. Students are given an entrance exam to ascertain the merit and eligibility to the class. A student will be eligible only if she/he has been studying in a recognized school and produces the transfer certificate from the school last attended. In an interstate transfer, the transfer certificate needs to be counter signed by the Education Department.', '2020-11-15'),
(9, 'ADMISSION AND WITHDRAWAL OF PUPILS', 'Admissions are taken only at the beginning of the school year depending upon vacancy and merit. Students are given an entrance exam to ascertain the merit and eligibility to the class. A student will be eligible only if she/he has been studying in a recognized school and produces the transfer certificate from the school last attended. In an interstate transfer, the transfer certificate needs to be counter signed by the Education Department.', '2020-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `old_principle`
--

CREATE TABLE `old_principle` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id` int(11) NOT NULL,
  `heading` varchar(225) NOT NULL,
  `content` text NOT NULL,
  `dop` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id`, `heading`, `content`, `dop`) VALUES
(1, 'ADMISSION AND WITHDRAWAL OF PUPILS', 'Admissions are taken only at the beginning of the school year depending upon vacancy and merit. Students are given an entrance exam to ascertain the merit and eligibility to the class. A student will be eligible only if she/he has been studying in a recognized school and produces the transfer certificate from the school last attended. In an interstate transfer, the transfer certificate needs to be counter signed by the Education Department.', '2020-11-15'),
(3, 'WITHDRAWAL', 'The intended withdrawal of a pupil should be made known to the Principal in writing one calendar month in advance. The current quarter fees must be paid in full before withdrawal. Those discontinuing after July will have to pay the fees for the entire year.\r\nTransfer Certificate can be obtained only after all the dues have been Duplicate copies of Transfer Certificate are ordinarily not issued. In special cases such certificates will be issued after verification, on payment of Rs. 200\r\nThe School Management, acting through the Principal will request the withdrawal of a pupil who fails for TWO consecutive years in the same class.\r\nThe school is not responsible for goods or money lost. Students are requested not to wear expensive watches, ornaments, jewellery Money should not be borrowed, lent or articles of any nature exchanged.\r\nWhen the school is in session, the students are strictly forbidden to leave the class without the teacher\'s permission. They are not allowed to leave the school premises without a gate-pass.', '0000-00-00'),
(4, 'CODE OF CONDUCT FOR PUPILS', 'Students should bring the diary to school every day.\r\nWhile changing classrooms between periods pupils should move in silence and in an orderly and disciplined manner.\r\nAll items belonging to the student must have his/her name.\r\nStudents are not allowed to bring mobile phone, walkman, ipod or other costly products to school. If a student is found carrying any of the above they will be confiscated. The school is not responsible for goods lost.\r\nInappropriate magazines, books and other print-video/digital materials should not, under any circumstance, be brought to school.\r\n', '2020-11-15'),
(5, 'Bursting of crackers and playing with colours will lead to expulsion of students from school', 'Respect school property. No student should damage any school furniture, write or draw anything on the walls, desks and chairs or damage things belonging to others.\r\nWe believe our students are gentle, well behaved and so we discourage abusive language.\r\nMisbehaviour in the bus, violence in school, participation in destructive activities and causing damage to school property is considered a major disciplinary violation. Reports of violence in any form in or out of the school shall result in the rustication of the pupil concerned.\r\nEach child is under our care and protection, we expect to see that violence is not done either to or by him/her.\r\nAny student found commuting to school individually or with fellow students in a motorised vehicle, will be liable for disciplinary action.', '2020-11-15'),
(6, 'RULES OF THE SCHOOL', 'The motto of the school is Glory To God and Service to All.\r\nStudents who come to the school should arrive at the school by 7:45 a.m. There will be a warning bell at 7:50 a.m. which will be a signal for all to go to the assembly. All have to be present for the assembly.\r\nLate comers and absentees must enter their late-for-school record in the diary, to be signed by the teachers and parents respectively.\r\nIn case of long leave, prior written permission of the principal must be obtained. In case of illness, a medical certificate must be submitted within three days of absence.\r\nConduct that is injurious to the moral tone of the school or the rights of others and not in accord with strict discipline is liable to incur suspension or dismissal.\r\nIrregular attendance, habitual idleness, neglect of homework, disobedience and disrespect towards the members of the school staff are considered as violations of school rules and regulations and will attract disciplinary action.\r\nAttendance is compulsory on the first day of a new academic session and on the day before and the day after the Puja/Diwali summer/ winter break.\r\nAttendance, adding upto 90% of the total number of working days, is/ compulsory.\r\nPupils who are accompanied by attendants should never leave alone. In case of a delay, they should report to the school office. Pupils must be picked up punctually after school hours. Those who go home alone, particularly those who stay for activities, should not loiter on the way but be prompt in returning home.\r\nPupils must understand that a school is judged by the discipline and conduct of its students. They should always be polite and courteous to their teachers and elders.\r\nAny kind of damage done to the school premises must be made good and will be seriously viewed by the authorities.\r\nStudents may not offer presents to their teachers except in those circumstances sanctioned by the principal.\r\nNo student is entitled to enter the class unless she/he is clean and neatly dressed in the School Uniform.\r\nStudents are requested to keep their class rooms/school building and campus neat and clean and throw litter into the dustbins only.', '2020-11-15'),
(7, 'NON-ACADEMIC', 'Students are encouraged to join the various activities of the school, and they must be regular in attending the activity once they have given their names.\r\nAny student desiring to be exempted from P.T. or games must produce parent\'s appeal along with doctor certificate to the effect that she/he is physically unfit to take part.\r\nPupils must attend games and other activities outside school hours when required to do so and participation in such circumstances will be deemed compulsory by the School Authorities. Exemption may be granted on a written request from parents. Such exemption should not be lightly sought as these activities play an important part in the student’s all-round education.', '0000-00-00'),
(8, 'SCHOOL FEES', 'The tuition fee covers twelve calendar months and must be paid in four quarterly installments:APRIL, JULY, **OCTOBER & JANUARY**\r\nThe Bank will not accept any cash transaction for the school fee.\r\nTuition fee can be paid online monthly/quarterly/annually through the fee gate way on the school website www.notredamedelhi.com', '2020-11-15'),
(9, 'OFFICE HOURS', 'Principal Office Visiting time for parents.\r\n\r\nMonday to Friday 8:30 a.m. to 9:30 a.m. (other times by appointment only).\r\n\r\nBusiness Office Monday to Saturday 8:00 a.m. to 1:00 p.m.\r\n\r\nSchool Office is closed on the second Saturday of each month.\r\n\r\nNo School business will be transacted on holidays.\r\n\r\nNo phone calls will be entertained before 7:30 a.m. and after 3:00 p.m.', '2020-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `school_info`
--

CREATE TABLE `school_info` (
  `id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_info`
--

INSERT INTO `school_info` (`id`, `file`, `date`) VALUES
(1, '1.jpg', '2020-11-15'),
(2, '6.jpg', '2020-11-15'),
(3, 'Neelakshi T_Resume.pdf', '2020-11-15'),
(4, 'TCS admit card.pdf', '2020-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `tc_issued`
--

CREATE TABLE `tc_issued` (
  `id` int(11) NOT NULL,
  `r_number` varchar(225) NOT NULL,
  `a_number` varchar(255) NOT NULL,
  `file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tc_issued`
--

INSERT INTO `tc_issued` (`id`, `r_number`, `a_number`, `file`) VALUES
(1, '', '', 'Group 53.png'),
(2, '234567890', '', 'Daco_36089.png'),
(3, '83687', '19236', 'Neelakshi Tamarala_Resume_Final.pdf');

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
-- Indexes for table `admission_doc`
--
ALTER TABLE `admission_doc`
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
-- Indexes for table `objectives`
--
ALTER TABLE `objectives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `old_principle`
--
ALTER TABLE `old_principle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_info`
--
ALTER TABLE `school_info`
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
-- AUTO_INCREMENT for table `admission_doc`
--
ALTER TABLE `admission_doc`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
-- AUTO_INCREMENT for table `objectives`
--
ALTER TABLE `objectives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `school_info`
--
ALTER TABLE `school_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tc_issued`
--
ALTER TABLE `tc_issued`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
