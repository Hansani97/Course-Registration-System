-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2020 at 07:51 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `one_year_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`ID`, `Name`, `Email`, `Username`, `Password`) VALUES
(1, 'Pasindu Dilshan', 'mmpdilshan971121@gmail.com', 'pdil', '123'),
(2, 'Hansani Prabodha', 'whprabo@gmail.com', 'prabo', 'enbit'),
(3, 'L.D.R.Madhuranga', 'madhuranga@gmail.com', 'madhuranga', 'ldr@123'),
(4, 'L.R.Wijesinghe', 'wije@gmail.com', 'ravi', '123'),
(5, 'L.D.R.Madhuranga', 'madhuranga@gmail.com', 'madhuranga', 'ldr@123');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Course_Title` varchar(100) NOT NULL,
  `Course_Code` varchar(10) NOT NULL,
  `Status` char(1) NOT NULL,
  `Credit` int(11) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Semester` varchar(20) NOT NULL,
  `Department` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=351 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`ID`, `Course_Title`, `Course_Code`, `Status`, `Credit`, `Year`, `Semester`, `Department`) VALUES
(1, 'Industrial Training', 'ICT-4609', 'C', 6, 'Fourth', 'Second', 'ICT'),
(2, 'Communication Skills III', 'CMT-2002', 'C', 0, 'Second', 'First', 'ICT'),
(3, 'Fundamentals of Electricity and Magnetism', 'ENT-1302', 'C', 3, 'First', 'Second', 'ICT'),
(4, 'Productivity Tools', 'ICT 1301', 'C', 3, 'First', 'First', 'ICT'),
(5, 'Fundamentals of Economics', 'ICT-1104', 'O', 1, 'First', 'Second', 'ICT'),
(6, 'Human Computer Interaction', 'ICT-1207', 'C', 3, 'First', 'Second', 'ICT'),
(7, 'Electronic Circuits', 'ICT-1302', 'C', 3, 'First', 'First', 'ICT'),
(8, 'Fundamentals of Statistic', 'ICT-1303', 'C', 3, 'First', 'First', 'ICT'),
(9, 'Introduction to Internet of Things', 'ICT-1306', 'C', 3, 'First', 'Second', 'ICT'),
(10, 'Program Designing and Programming', 'ICT-1405', 'C', 4, 'First', 'Second', 'ICT'),
(11, 'Communication And Learning Skill', 'ICT-2109', 'C', 1, 'Second', 'Second', 'ICT'),
(12, 'Advanced Application', 'ICT-2201', 'C', 2, 'Second', 'First', 'ICT'),
(13, 'Fundamental of Mathematics for Technology', 'CMT-1303', 'C', 3, 'First', 'First', 'ICT'),
(14, 'Fundamental of Physics for Technology', 'CMT-1301', 'C', 3, 'First', 'First', 'ICT'),
(15, 'Principles of Management', 'CML-1203', 'C', 2, 'First', 'Second', 'ICT'),
(16, 'Health and Well-being', 'CML-1204', 'C', 2, 'First', 'Second', 'ICT'),
(17, 'Social Science And Humanities', 'CML-2201', 'C', 2, 'Second', 'First', 'ICT'),
(18, 'Engineering Economics', 'CML-2202', 'C', 2, 'Second', 'First', 'ICT'),
(19, 'Foreign Language', 'CML-2204', 'C', 2, 'Second', 'Second', 'ICT'),
(20, 'Ethics in Science and Technology', 'CML-2205', 'C', 2, 'Second', 'Second', 'ICT'),
(21, 'Legal and Patent Aspects', 'CML-3101', 'C', 1, 'Third', 'First', 'ICT'),
(22, 'Basics of Accountancy', 'CML-3103', 'C', 1, 'Third', 'Second', 'ICT'),
(23, 'Entrepreneurship', 'CML-4201', 'C', 2, 'Fourth', 'First', 'ICT'),
(24, 'Communication Skills I', 'CMT-1005', 'C', 0, 'First', 'First', 'ICT'),
(25, 'Communication Skills II', 'CMT-1009', 'C', 0, 'First', 'Second', 'ICT'),
(26, 'Project', 'ICT-4608', 'C', 6, 'Fourth', 'Second', 'ICT'),
(27, 'SW Quality Assurance', 'ICT-3212', 'O', 2, 'Third', 'Second', 'ICT'),
(28, 'Robotics', 'ICT-3211', 'C', 2, 'Third', 'Second', 'ICT'),
(29, 'Design and Analysis of Algorithms', 'ICT-3208', 'C', 2, 'Third', 'First', 'ICT'),
(30, 'Skills Development Project', 'ICT-3206', 'C', 2, 'Third', 'First', 'ICT'),
(31, 'E-Commerce', 'ICT-3204', 'C', 2, 'Third', 'Second', 'ICT'),
(32, 'Scientific Computer Application', 'ICT-3203', 'C', 2, 'Third', 'First', 'ICT'),
(33, 'Database Systems', 'ICT-2308', 'C', 3, 'Second', 'Second', 'ICT'),
(34, 'Computational Mathematics', 'ICT-2305', 'C', 3, 'Second', 'Second', 'ICT'),
(35, 'Object Oriented Programming', 'ICT-2304', 'C', 3, 'Second', 'First', 'ICT'),
(36, 'Data Structures And Algforithem ', 'ICT-2303', 'C', 3, 'Second', 'First', 'ICT'),
(37, 'Software System Design', 'ICT-2207', 'C', 2, 'Second', 'Second', 'ICT'),
(38, 'Advanced SW System Designing', 'ICT-3213', 'C', 2, 'Third', 'Second', 'ICT'),
(39, 'Project Management', 'ICT-3301', 'C', 2, 'Third', 'First', 'ICT'),
(40, 'Data Science', 'ICT-4306', 'C', 3, 'Fourth', 'First', 'ICT'),
(41, 'Internet Applications', 'ICT-4302', 'C', 3, 'Fourth', 'First', 'ICT'),
(42, 'Mobile Computing', 'ICT-4301', 'C', 3, 'Fourth', 'First', 'ICT'),
(43, 'Artificial Intelligence', 'ICT-4207', 'C', 2, 'Fourth', 'First', 'ICT'),
(44, 'Current Topics in Information Technology', 'ICT-4205', 'C', 2, 'Fourth', 'First', 'ICT'),
(45, 'Software Engineering', 'ICt-4203', 'C', 2, 'Fourth', 'First', 'ICT'),
(46, 'Embedded Systems', 'ICT-3314', 'C', 3, 'Third', 'Second', 'ICT'),
(47, 'Information Security', 'ICT-3310', 'C', 3, 'Third', 'Second', 'ICT'),
(48, 'Computer Organization And Architecture', 'ICT-3309', 'C', 3, 'Third', 'Second', 'ICT'),
(49, 'Computational Statistics', 'ICT-3307', 'C', 3, 'Third', 'First', 'ICT'),
(50, 'Data Communication And Networking', 'ICT-3302', 'C', 3, 'Third', 'First', 'ICT'),
(51, 'Multimedia And Web Technology', 'ICT-2206', 'C', 2, 'Second', 'Second', 'ICT'),
(52, 'Technical Writting', 'ICT-2205', 'C', 2, 'Second', 'First', 'ICT'),
(53, 'Operating System', 'ICT-2202', 'C', 2, 'Second', 'First', 'ICT'),
(54, 'Personality Development(Soft Skill)', 'CML-1201', 'C', 2, 'First', 'First', 'ICT'),
(55, 'Graphics and Image Processing', 'ICT-4204', 'C', 2, 'Fourth', 'First', 'ICT'),
(56, 'SW Verification And Validation', 'ICT-3205', 'C', 2, 'Third', 'First', 'ICT'),
(57, 'Presentation Skills', 'CML-1202', 'C', 2, 'First', 'First', 'BST'),
(58, 'Fundamentals of Physics for Technology', 'CMT-1301', 'C', 3, 'First', 'First', 'BST'),
(59, 'Fundamentals of Chemistry For Technology', 'CMT-1302', 'C', 3, 'First', 'First', 'BST'),
(60, 'Fundamentals of Mathematics for Technology', 'CMT-1303', 'C', 3, 'First', 'First', 'BST'),
(61, 'Communication Skills I', 'CMT-1005', 'C', 0, 'First', 'First', 'BST'),
(62, 'Fundamentals of Computer for Technology\r\n', 'CMT-1304', 'C', 3, 'First', 'First', 'BST'),
(63, 'Fundamentals of Biology for Technology', 'CMT-1306', 'C', 3, 'First', 'First', 'BST'),
(64, 'Cell Biology', 'BPT-1202', 'C', 2, 'First', 'Second', 'BST'),
(65, 'Principles of Management', 'CML-1203', 'C', 2, 'First', 'Second', 'BST'),
(66, 'Health and Wellbeing', 'CML-1204', 'C', 2, 'First', 'Second', 'BST'),
(67, 'Communication Skills II', 'CMT-1009', 'C', 0, 'First', 'Second', 'BST'),
(68, 'Chemistry Laboratory I', 'CMT-1109', 'C', 1, 'First', 'Second', 'BST'),
(69, 'Mathematics for Technology', 'CMT-1207', 'C', 2, 'First', 'Second', 'BST'),
(70, 'Computer Programming for Technology', 'CMT-1208', 'C', 2, 'First', 'Second', 'BST'),
(71, 'Introduction to Basic Electronics', 'ENT-1301', 'O', 3, 'First', 'Second', 'BST'),
(72, 'General Microbiology', 'BPT-1201', 'C', 2, 'First', 'Second', 'BST'),
(73, 'Organic Chemistry', 'FDT-1201', 'C', 2, 'First', 'Second', 'BST'),
(74, 'Personality Development (Soft Skills)', 'CML-1201', 'C', 2, 'First', 'First', 'ENT'),
(75, 'Presentation Skills ', 'CML-1202', 'C', 2, 'First', 'First', 'ENT'),
(76, 'Principles of Management', 'CML-1203', 'C', 2, 'First', 'Second', 'ENT'),
(77, 'Health And Wellbeing', 'CML-1204', 'C', 2, 'First', 'Second', 'ENT'),
(78, 'Communication Skills I(English)', 'CMT-1005', 'C', 0, 'First', 'First', 'ENT'),
(79, 'Communication Skills II', 'CMT-1009', 'C', 0, 'First', 'Second', 'ENT'),
(80, 'Mathematics for Technology', 'CMT-1207', 'C', 1, 'First', 'Second', 'ENT'),
(81, 'Computer Programming for Technology', 'CMT-1208', 'C', 2, 'First', 'Second', 'ENT'),
(82, 'Fundamental Of Physics for Technology', 'CMt-1301', 'C', 3, 'First', 'First', 'ENT'),
(83, 'Fundamental of Chemistry for Technology', 'CMT-1302', 'C', 3, 'First', 'First', 'ENT'),
(84, 'Fundamental of Mathematics for Technology', 'CMT-1303', 'C', 3, 'First', 'First', 'ENT'),
(85, 'Fundamental of Computer For Technology', 'CMT-1304', 'C', 3, 'First', 'First', 'ENT'),
(86, 'Engineering Drawing', 'ENT-1203', 'O', 2, 'First', 'Second', 'ENT'),
(87, 'Workshop Technology I', 'ENT-1204', 'C', 2, 'First', 'Second', 'ENT'),
(88, 'Introduction to Basic Electronics', 'ENT-1301', 'C', 3, 'First', 'Second', 'ENT'),
(89, 'Fundamentals of Electricity and Magnetism', 'ENT-1302', 'C', 3, 'First', 'Second', 'ENT'),
(90, 'Introduction to Internet of Things', 'ICT-1306', 'O', 3, 'First', 'Second', 'ENT'),
(96, 'Social Science and Humanities', 'CML-2201', 'C', 2, 'Second', 'First', 'EET'),
(97, 'Engineering Economics', 'CML-2202', 'C', 2, 'Second', 'First', 'EET'),
(98, 'Foreign Language', 'CML-2204', 'C', 2, 'Second', 'Second', 'EET'),
(99, 'Ethics in Science and Technology', 'CML-2205', 'C', 2, 'Second', 'Second', 'EET'),
(100, 'Legal and Patent Aspects', 'CML-3101', 'C', 1, 'Third', 'First', 'EET'),
(101, 'Industrial Safety', 'CML-3102', 'C', 1, 'Third', 'Second', 'EET'),
(102, 'Entrepreneurship', 'CML-4201', 'O', 2, 'Fourth', 'First', 'EET'),
(103, 'Communication Skills III', 'CMT-2002', 'C', 0, 'Second', 'First', 'EET'),
(104, 'Mathematical Methods and Computational Methods', 'CMT-2103', 'O', 3, 'Second', 'Second', 'EET'),
(105, 'Fundamentals of Statistic for Technology', 'CMT-2301', 'C', 3, 'Second', 'First', 'EET'),
(106, 'Electrical Measurements And Instrumentation', 'EET-2202', 'C', 2, 'Second', 'First', 'EET'),
(107, 'Electronic Devices and Circuits', 'EET-2203', 'C', 2, 'Second', 'Second', 'EET'),
(108, 'Computer Architecture', 'EET-2206', 'C', 2, 'Second', 'Second', 'EET'),
(109, 'Digital And Analog Electronics', 'EET-2301', 'C', 3, 'Second', 'First', 'EET'),
(110, 'Electricity Networks', 'EET-2304', 'C', 3, 'Second', 'Second', 'EET'),
(111, 'Signal Processing and Data Acquisition', 'EET-2305', 'C', 3, 'Second', 'Second', 'EET'),
(112, 'Communication Electronics', 'EET-3202', 'C', 2, 'Third', 'First', 'EET'),
(113, 'Fiber Optic Tectonics', 'EET-3206', 'O', 2, 'Third', 'First', 'EET'),
(114, 'Electrical Power System', 'EET-3301', 'C', 3, 'Third', 'First', 'EET'),
(115, 'Computer Systems', 'EET-3303', 'C', 3, 'Third', 'First', 'EET'),
(116, 'Digital Signal Processing', 'EET-3304', 'C', 3, 'Third', 'First', 'EET'),
(117, 'Control Systems', 'EET-3305', 'C', 3, 'Third', 'First', 'EET'),
(118, 'Industrial Training', 'EET-3607', 'C', 6, 'Third', 'Second', 'EET'),
(119, 'Project', 'EET-3808', 'C', 8, 'Third', 'Second', 'EET'),
(120, 'Embedded System Design', 'EET-4202', 'C', 2, 'Fourth', 'First', 'EET'),
(121, 'Industrial Robotics and Automation', 'EET-4206', 'O', 2, 'Fourth', 'First', 'EET'),
(122, 'Telecommunication Systems', 'EET-4207', 'O', 2, 'Fourth', 'First', 'EET'),
(123, 'Electrical Drivers and Application', 'EET-4208', 'C', 2, 'Fourth', 'Second', 'EET'),
(124, 'High Voltage Engineering', 'EET-4209', 'C', 2, 'Fourth', 'Second', 'EET'),
(125, 'Electronics Products Design', 'EET-4210', 'C', 2, 'Fourth', 'Second', 'EET'),
(126, 'Antenna and Propagation', 'EET-4213', 'O', 2, 'Fourth', 'Second', 'EET'),
(127, 'Wireless Communication', 'EET-4214', 'O', 2, 'Fourth', 'Second', 'EET'),
(128, 'Mechatronics', 'EET-4215', 'O', 2, 'Fourth', 'Second', 'EET'),
(129, 'Electronic Circuit Design and Simulations', 'EET-4301', 'C', 3, 'Fourth', 'First', 'EET'),
(130, 'Electrical Machines and Drivers', 'EET-4303', 'C', 3, 'Fourth', 'First', 'EET'),
(131, 'Power Electronics', 'EET-4304', 'C', 3, 'Fourth', 'First', 'EET'),
(132, 'Digital Communication', 'EET-4305', 'O', 3, 'Fourth', 'First', 'EET'),
(133, 'Internet Technology and Applications', 'EET-4311', 'C', 3, 'Fourth', 'Second', 'EET'),
(134, 'Power System Analysis', 'EET-4312', 'C', 3, 'Fourth', 'Second', 'EET'),
(135, 'Operating System', 'ICT-2202', 'O', 2, 'Second', 'First', 'EET'),
(136, 'Multimedia and Web Technology', 'ICT-2206', 'O', 2, 'Second', 'Second', 'EET'),
(137, 'Data Structures and Algorithms', 'ICT-2303', 'O', 3, 'Second', 'First', 'EET'),
(138, 'Object Oriented Programming', 'ICT-2304', 'C', 3, 'Second', 'First', 'EET'),
(139, 'Data Communication and Networking', 'ICT-3302', 'O', 3, 'Third', 'First', 'EET'),
(159, 'Quality Assurance and Safety of Bio processed Products', 'BPT-2108', 'C', 1, 'Second', 'Second', 'BPT'),
(160, 'Quality Management', 'BPT-2201', 'C', 2, 'Second', 'First', 'BPT'),
(161, 'Introduction to Bio process Technology', 'BPT-2202', 'C', 2, 'Second', 'First', 'BPT'),
(162, 'Genetics and Evaluation', 'BPT-2203', 'C', 2, 'Second', 'First', 'BPT'),
(163, 'Plant Tissue Culture', 'BPT-2204', 'C', 2, 'Second', 'First', 'BPT'),
(164, 'Molecular Biology', 'BPT-2205', 'C', 2, 'Second', 'First', 'BPT'),
(165, 'Bioreactor Operation and Design', 'BPT-2206', 'C', 2, 'Second', 'Second', 'BPT'),
(166, 'Basic Immunology', 'BPT-2207', 'C', 2, 'Second', 'Second', 'BPT'),
(167, 'Molecular Biotechnology', 'BPT-2209', 'C', 2, 'Second', 'Second', 'BPT'),
(168, 'Seminar', 'BPT-3108', 'C', 1, 'Third', 'Second', 'BPT'),
(169, 'Molecular Microbiology', 'BPT-3201', 'C', 2, 'Third', 'First', 'BPT'),
(170, 'Bio process Instrumentation and Control', 'BPT-3203', 'C', 2, 'Third', 'First', 'BPT'),
(171, 'Bio process Optimization and Simulation', 'BPT-3205', 'C', 2, 'Third', 'First', 'BPT'),
(172, 'Molecular Immunology and Current Application', 'BPT-3206', 'C', 2, 'Third', 'First', 'BPT'),
(173, 'Enzyme Technology', 'BPT-3207', 'C', 2, 'Third', 'First', 'BPT'),
(174, 'Industrial Micro Biology', 'BPT-3208', 'C', 2, 'Third', 'First', 'BPT'),
(175, 'Scientific Writing ', 'BPT-3209', 'C', 2, 'Third', 'Second', 'BPT'),
(176, 'Bioinformatics', 'BPT-3302', 'C', 3, 'Third', 'First', 'BPT'),
(177, 'Internship ', 'BPT-3610', 'C', 6, 'Third', 'Second', 'BPT'),
(178, 'Molecular Virology ', 'BPT-4204', 'C', 2, 'Fourth', 'First', 'BPT'),
(179, 'Plant Cell Culture', 'BPT-4205', 'C', 2, 'Fourth', 'First', 'BPT'),
(180, 'Pharmaceutical Bio Technology', 'BPT-4206', 'C', 2, 'Fourth', 'First', 'BPT'),
(181, 'Bio Product Development', 'BPT-4207', 'C', 2, 'Fourth', 'First', 'BPT'),
(182, 'Drug Designing', 'BPT-4301', 'C', 3, 'Fourth', 'First', 'BPT'),
(183, 'Downstream Process Technology', 'BPT-4302', 'C', 3, 'Fourth', 'First', 'BPT'),
(184, 'Bio remediation and Waste Management', 'BPT-4303', 'C', 3, 'Fourth', 'First', 'BPT'),
(185, 'Bio Process Technology Project', 'BPT-4808', 'C', 8, 'Fourth', 'Second', 'BPT'),
(186, 'Engineering Economics', 'CML-2202', 'C', 2, 'Second', 'First', 'BPT'),
(187, 'Ethics in Science and Technology', 'CML-2205', 'C', 2, 'Second', 'Second', 'BPT'),
(188, 'Legal and Patent Aspects', 'CML-3101', 'C', 1, 'Third', 'First', 'BPT'),
(189, 'Industrial Safety', 'CML-3102', 'C', 1, 'Third', 'Second', 'BPT'),
(190, 'Entrepreneurship', 'CML-4201', 'C', 2, 'Fourth', 'First', 'BPT'),
(191, 'Communication Skills III', 'CMT-2002', 'C', 0, 'Second', 'First', 'BPT'),
(192, 'Mathematical Methods and Computational Methods Application of Software', 'CMT-2103', 'C', 1, 'Second', 'Second', 'BPT'),
(193, 'Chemistry Laboratory II', 'CMT-2105', 'C', 1, 'Second', 'First', 'BPT'),
(194, 'Foreign Language', 'CMT-2204', 'C', 2, 'Second', 'Second', 'BPT'),
(195, 'Fundamental of Statistics for Technology:Probability and Statistics', 'CMT-2301', 'C', 3, 'Second', 'First', 'BPT'),
(196, 'Basic Biochemistry', 'FDT-2202', 'C', 2, 'Second', 'First', 'BPT'),
(197, 'Analytical Chemistry', 'FDT-2305', 'C', 3, 'Second', 'Second', 'BPT'),
(222, 'Social Sciences and Humanities', 'CML-2201', 'C', 2, 'Second', 'First', 'FDT'),
(223, 'Foreign Language', 'CML-2204', 'C', 2, 'Second', 'Second', 'FDT'),
(224, 'Ethics in Science and Technology ', 'CML-2205', 'C', 2, 'Second', 'Second', 'FDT'),
(225, 'Legal and Patent Aspects', 'CML-3101', 'C', 1, 'Third', 'First', 'FDT'),
(226, 'Industrial Safety', 'CML-3102', 'C', 1, 'Third', 'Second', 'FDT'),
(227, 'Communication Skills III', 'CMT-2002', 'C', 0, 'Second', 'First', 'FDT'),
(228, 'Mathematical Methods and Computational     Methods, Applications of Software', 'CMT-2103', 'C', 1, 'Second', 'Second', 'FDT'),
(229, 'Chemistry Laboratory II', 'CMT-2105', 'C', 1, 'Second', 'First', 'FDT'),
(230, 'Fundamental of Statistics for Technology: Probability and Statistics ', 'CMT-2301', 'C', 3, 'Second', 'First', 'FDT'),
(231, 'Basics Biochemistry', 'FDT-2202', 'C', 2, 'Second', 'First', 'FDT'),
(232, 'Introduction to Food      Industry', 'FDT-2203', 'C', 2, 'Second', 'First', 'FDT'),
(233, 'Food Preservation', 'FDT-2204', 'C', 2, 'Second', 'First', 'FDT'),
(234, 'Food Physics ', 'FDT-2206', 'C', 2, 'Second', 'Second', 'FDT'),
(235, 'Food Chemistry', 'FDT-2207', 'C', 2, 'Second', 'Second', 'FDT'),
(236, 'Introduction to Human Nutrition', 'FDT-2209', 'C', 2, 'Second', 'Second', 'FDT'),
(237, 'Physical Chemistry', 'FDT-2301', 'C', 3, 'Second', 'First', 'FDT'),
(238, 'Analytical Chemistry', 'FDT-2305', 'C', 3, 'Second', 'Second', 'FDT'),
(239, 'Food Microbiology', 'FDT-2308', 'C', 3, 'Second', 'Second', 'FDT'),
(240, 'Current topics in Food Industry ', 'FDT-3108', 'C', 1, 'Third', 'First', 'FDT'),
(241, 'Fruits & Vegetables process Technology', 'FDT-3201', 'C', 2, 'Third', 'First', 'FDT'),
(242, 'Food Engineering', 'FDT-3202', 'C', 2, 'Third', 'First', 'FDT'),
(243, 'Food Analysis', 'FDT-3203', 'C', 2, 'Third', 'First', 'FDT'),
(244, 'Food Biotechnology', 'FDT-3204', 'C', 2, 'Third', 'First', 'FDT'),
(245, 'Functional food and food toxicology', 'FDT-3205', 'C', 2, 'Third', 'First', 'FDT'),
(246, 'Dairy product Technology', 'FDT-3206', 'C', 2, 'Thirs', 'First', 'FDT'),
(247, 'Nanotechnology', 'FDT-3209', 'O', 2, 'Third', 'First', 'FDT'),
(248, 'Cereals and Pulses Technology', 'FDT-3210', 'C', 2, 'Third', 'Second', 'FDT'),
(249, 'Meat and Fish Processing Technology', 'FDT-3211', 'C', 2, 'Third', 'Second', 'FDT'),
(250, 'Spices and oil seed processing Technology', 'FDT-3212', 'C', 2, 'Third', 'Second', 'FDT'),
(251, 'Water Science and Technology', 'FDT-3213', 'C', 2, 'Third', 'Second', 'FDT'),
(252, 'Independent study', 'FDT-3214', 'C', 2, 'Third', 'Second', 'FDT'),
(253, 'Food Packaging Technology', 'FDT-3215', 'C', 2, 'Third', 'Second', 'FDT'),
(254, 'Basic Accountancy', 'FDT-3216', 'O', 2, 'Third', 'Second', 'FDT'),
(255, 'Food product development', 'FDT-3307', 'C', 3, 'Third', 'First', 'FDT'),
(256, 'Flavor Science', 'FDT-4109', 'C', 1, 'Fourth', 'Second', 'FDT'),
(257, 'Confectionary and Beverage Technology ', 'FDT-4202', 'C', 2, 'Fourth', 'First', 'FDT'),
(258, 'Food Manufacturing Operations ', 'FDT-4203', 'C', 2, 'Fourth', 'First', 'FDT'),
(259, 'Food Marketing', 'FDT-4205', 'C', 2, 'Fourth', 'First', 'FDT'),
(260, 'Supply Chain Analysis', 'FDT-4206', 'C', 2, 'Fourth', 'First', 'FDT'),
(261, 'Cleaner production ', 'FDT-4208', 'C', 2, 'Fourth', 'Second', 'FDT'),
(262, 'Quality Assurance, Safety and Standards in Food Industry', 'FDT-4304', 'C', 3, 'Fourth', 'First', 'FDT'),
(263, 'Industrial Training', 'FDT-4607', 'C', 6, 'Fourth', 'Second', 'FDT'),
(264, 'Skill Development Projects', 'FDT-4801', 'C', 8, 'Fourth', 'First', 'FDT'),
(285, 'Humanities and Social sciences', 'CML-2201', 'C', 2, 'Second', 'First', 'MTT'),
(286, 'Engineering Economics ', 'CML-2202', 'C', 2, 'Second', 'First', 'MTT'),
(287, 'Ethics in Science and Technology', 'CML-2205', 'C', 2, 'Second', 'Second', 'MTT'),
(288, 'Legal and patent aspects', 'CML-3101', 'O', 1, 'Third', 'First', 'MTT'),
(289, 'Entrepreneurship', 'CML-4201', 'C', 2, 'Fourth', 'First', 'MTT'),
(290, 'Communication Skills III', 'CMT-2002', 'C', 0, 'Second', 'First', 'MTT'),
(291, 'Mathematical Method And Computational Methods,Application of Software', 'CMT-2103', 'C', 1, 'Second', 'Second', 'MTT'),
(292, 'Foreign Language ', 'CMT-2204', 'C', 2, 'Second', 'Second', 'MTT'),
(293, 'Fundamentals of Statics for Technology;Probability and Statistics', 'CMT-2301', 'C', 3, 'Second', 'First', 'MTT'),
(294, 'Electrical Measurements And Instrumentation', 'EET-2202', 'O', 2, 'Second', 'First', 'MTT'),
(295, 'Operating Systems', 'ICT-2202', 'O', 2, 'Second', 'First', 'MTT'),
(296, 'Multimedia and Web Technology', 'ICT-2206', 'O', 2, 'Second', 'Second', 'MTT'),
(297, 'Object Oriented Programming Concept', 'ICT-2311', 'O', 3, 'Second', 'First', 'MTT'),
(298, 'Computer Aided Design (CAD)', 'MTT-2204', 'C', 2, 'Second', 'First', 'MTT'),
(299, 'Introduction to Metallurgy', 'MTT-2205', 'C', 2, 'Second', 'First', 'MTT'),
(300, 'Graphical Programming', 'MTT-2206', 'O', 2, 'Second', 'First', 'MTT'),
(301, 'Measurements,Error Analysis and Instrumentation', 'MTT-2207', 'C', 2, 'Second', 'Second', 'MTT'),
(302, 'Chemical Engineering Sciences', 'MTT-2208', 'C', 2, 'Second', 'Second', 'MTT'),
(303, 'Fundamentals of Solid State Physics', 'MTT-2301', 'C', 3, 'Second', 'First', 'MTT'),
(304, 'Chemistry for Materials Technology', 'MTT-2302', 'C', 3, 'Second', 'First', 'MTT'),
(305, 'Introduction to ceramic Technology', 'MTT-2303', 'C', 3, 'Second', 'First', 'MTT'),
(306, 'Introduction to Polymer Technology', 'MTT-2309', 'C', 3, 'Second', 'Second', 'MTT'),
(307, 'Mechanical Behavior of Materials', 'MTT-2310', 'C', 3, 'Second', 'Second', 'MTT'),
(308, 'Ceramic Technology I', 'MTT-2311', 'C', 3, 'Second', 'Second', 'MTT'),
(309, 'Industrial Safety', 'MTT-3101', 'C', 1, 'Third', 'First', 'MTT'),
(310, 'Degradation of Materials', 'MTT-3102', 'C', 1, 'Third', 'First', 'MTT'),
(311, 'Ceramic Pilot plant Practices', 'MTT-3103', 'C', 1, 'Third', 'First', 'MTT'),
(312, 'Workshop Technology II', 'MTT-3104', 'C', 1, 'Third', 'First', 'MTT'),
(313, 'Research Methodology and Scientific Writing', 'MTT-3105', 'C', 1, 'Third', 'First', 'MTT'),
(314, 'Ceramic Technology II', 'MTT-3306', 'C', 3, 'Third', 'First', 'MTT'),
(315, 'Metallurgy I', 'MTT-3307', 'C', 3, 'Third', 'First', 'MTT'),
(316, 'Polymer Technology I', 'MTT-3308', 'C', 3, 'Third', 'First', 'MTT'),
(317, 'Industrial Training ', 'MTT-3609', 'C', 6, 'Third', 'Second', 'MTT'),
(318, 'Research Project(Continued to 4-1)', 'MTT-3810', 'C', 8, 'Third', 'Second', 'MTT'),
(319, 'Research Project(Continue)', 'MTT-3810-C', 'C', 0, 'Fourth ', 'First', 'MTT'),
(320, 'Glass Technology', 'MTT-4104', 'C', 1, 'Fourth', 'First', 'MTT'),
(321, 'Mineral Processing', 'MTT-4106', 'C', 1, 'Fourth', 'First', 'MTT'),
(322, 'Directed Reading ', 'MTT-4108', 'C', 1, 'Fourth', 'First', 'MTT'),
(323, 'Seminar', 'MTT-4109', 'C', 1, 'Fourth', 'First', 'MTT'),
(324, 'Quality Management ', 'MTT-4114', 'C', 1, 'Fourth', 'Second', 'MTT'),
(325, 'Composite Materials', 'MTT-4117', 'C', 1, 'Fourth', 'Second', 'MTT'),
(326, 'Fluid Mechanics and Engineering Thermodynamics for Technology', 'MTT-4201', 'C', 2, 'Fourth', 'First', 'MTT'),
(327, 'Non Destructive Testing Of Material', 'MTT-4202', 'C', 2, 'Fourth', 'First', 'MTT'),
(328, 'Metallurgy II', 'MTT-4207', 'C', 2, 'Fourth', 'First', 'MTT'),
(329, 'Work Shadowing', 'MTT-4210', 'O', 2, 'Fourth', 'First', 'MTT'),
(330, 'Manufacturing Systems ', 'MTT-4213', 'C', 2, 'Fourth', 'Second', 'MTT'),
(331, 'Cleaner Production ', 'MTT-4215', 'C', 2, 'Fourth', 'Second', 'MTT'),
(332, 'Industrial Metrology', 'MTT-4216', 'C', 2, 'Fourth', 'Second', 'MTT'),
(333, 'Paint Technology', 'MTT-4218', 'O', 2, 'Fourth', 'Second', 'MTT'),
(334, 'Ceramic Technology III', 'MTT-4303', 'C', 3, 'Fourth', 'First', 'MTT'),
(335, 'Polymer Technology II', 'MTT-4305', 'C', 3, 'Fourth', 'First', 'MTT'),
(336, 'Advanced Material', 'MTT-4311', 'C', 3, 'Fourth', 'Second', 'MTT'),
(337, 'Advanced Instrumental Techniques and Characterization of Materials ', 'MTT-4312', 'C', 3, 'Fourth', 'second', 'MTT'),
(349, '', '', '', 0, '', '', ''),
(350, '', '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reg_course`
--

CREATE TABLE IF NOT EXISTS `reg_course` (
  `ID` int(11) NOT NULL,
  `Course_Title` varchar(100) NOT NULL,
  `Course_Code` varchar(20) NOT NULL,
  `Status` char(1) NOT NULL,
  `Credit` int(11) NOT NULL,
  `Year` varchar(20) NOT NULL,
  `Semester` varchar(20) NOT NULL,
  `Department` varchar(20) NOT NULL,
  PRIMARY KEY (`Course_Code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(500) NOT NULL,
  `Reg_Number` varchar(50) NOT NULL,
  `Index_Number` int(11) NOT NULL,
  `Course_Code` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `Name`, `Reg_Number`, `Index_Number`, `Course_Code`) VALUES
(17, 'W.H.Prabodha', 'ITT/2016/2017/058', 477, ''),
(18, 'Hansani', 'ITT/16/17/058', 258, ''),
(19, 'Hansani', 'ITT/16/17/058', 477, ''),
(20, 'pasindu', 'itt/2016/2017/018', 437, '');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE IF NOT EXISTS `student_registration` (
  `Reg_Number` varchar(20) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Gender` char(1) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact_Number` int(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Confirm_Password` varchar(20) NOT NULL,
  PRIMARY KEY (`Reg_Number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`Reg_Number`, `First_Name`, `Last_Name`, `Gender`, `Email`, `Contact_Number`, `Password`, `Confirm_Password`) VALUES
('itt/2016/2017/016', 'pasindu', 'dilshan', 'm', 'dilshan@gmail.com', 715698648, 'dil@123456', 'dil@123456'),
('itt/2016/2017/018', 'pasi', 'dil', 'm', 'mmp@gmail.com', 174548578, '123456789', '123456789'),
('itt/2016/2017/050', 'ramesh', 'madhuranga', 'm', 'pasindu@gmail.com', 125, 'madhu789', 'madhu789'),
('itt/2016/2017/058', 'hansani', 'prabodha', 'f', 'pasindu@gmail.com', 2147483647, 'prabo123', 'prabo123'),
('itt/2016/2017/090', 'ravihansi', 'wijesinghe', 'f', 'ravi@gmail.com', 745896548, 'ravi@123', 'ravi@123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
