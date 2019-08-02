-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2019 at 04:09 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sjpvoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE IF NOT EXISTS `campaign` (
  `id` int(11) NOT NULL,
  `election_name` varchar(100) NOT NULL,
  `election_term` varchar(50) NOT NULL,
  `election_start` date NOT NULL,
  `election_end` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`id`, `election_name`, `election_term`, `election_start`, `election_end`, `created_by`, `description`) VALUES
(1, 'SSC 2019 first-sem', '20191', '2019-05-08', '2019-05-09', 20, 'rexx'),
(2, 'ICT dept election', '20181', '2019-05-01', '2019-05-22', 20, 'sss election for 2018 first sem');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE IF NOT EXISTS `candidates` (
  `id` int(11) NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `position_id` int(11) NOT NULL,
  `partylist_id` int(11) NOT NULL,
  `platform` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `campaign_id`, `student_id`, `photo`, `position_id`, `partylist_id`, `platform`) VALUES
(9, 1, 11, 'uploads/1.jpg', 3, 1, 'dsdsds'),
(10, 1, 44, 'uploads/44.jpg', 3, 1, 'dsds');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_code`, `course_name`, `created_by`) VALUES
(1, 'BSBA-DM', 'BSBA Development Management', 24),
(2, 'BSBA-FM', 'BSBA Financial Management', 24),
(4, 'law', 'lawyerx', 20);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL,
  `department_code` varchar(50) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_code`, `department_name`, `created_by`) VALUES
(1, 'CBA', 'College of Business Administration', 24);

-- --------------------------------------------------------

--
-- Table structure for table `import_student`
--

CREATE TABLE IF NOT EXISTS `import_student` (
  `id` int(11) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `date_import` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partylist`
--

CREATE TABLE IF NOT EXISTS `partylist` (
  `id` int(11) NOT NULL,
  `partylist_name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partylist`
--

INSERT INTO `partylist` (`id`, `partylist_name`, `description`) VALUES
(1, 'act cis', 'tulong mahirap'),
(2, 'marino', 'ang marino'),
(3, 'pba', 'bayaning atlitax');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE IF NOT EXISTS `positions` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `max_vote` int(11) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `description`, `max_vote`, `priority`) VALUES
(1, 'press', 1, 1),
(2, 'vice-press', 1, 2),
(3, 'councilor', 5, 3),
(4, 'musex', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `bday` date NOT NULL,
  `gender` enum('Male','Female','','') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `firstname`, `lastname`, `bday`, `gender`) VALUES
(49, 18, 'qqqqqqq', 'qqqqqqqqq', '2019-02-22', 'Male'),
(50, 19, 'ssss', 'ssss', '2019-05-16', 'Male'),
(51, 20, 't', 't', '2019-05-16', 'Male'),
(52, 21, 'g', 'g', '2019-05-14', 'Male'),
(53, 22, 'rexx', 'rex', '2019-05-22', 'Male'),
(54, 23, 'rtrtr', 'rtrt', '2019-05-08', 'Male'),
(55, 24, 'rex', 'rex', '2019-05-29', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE IF NOT EXISTS `program` (
  `id` int(11) NOT NULL,
  `program_code` varchar(50) NOT NULL,
  `program_name` varchar(50) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `program_code`, `program_name`, `created_by`) VALUES
(1, 'Reg', 'Regular', 24);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `department` enum('CBA','CHM','CRIM','EDUC','ENG','ICT','NURSING') NOT NULL,
  `course` enum('CBA_BSDM','CBA_BSFM','CBA_BSHR','CBA_BSMM','CHM_BSHRM','CHM_BSTM','BSCRIM','EDUC_BEGEN','EDUC_BESPE','EDUC_BSENG','EDUC_BSMATH','ENG_BSCE','ENG_BSCOE','ENG_BSGE','ICT_BSCS','ICT_BSIT','BSN') NOT NULL,
  `program` enum('Regular','Special','','','','','','') NOT NULL,
  `importstudent_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `firstname`, `lastname`, `email`, `contact`, `department`, `course`, `program`, `importstudent_id`, `created_by`) VALUES
(1, 11, 'sony', 'angary', 'sony@gmail.com', 2147483647, 'CBA', 'CBA_BSHR', 'Regular', 0, 24),
(2, 22, 'rody', 'duterte', 'rody@gmail.com', 91234567898, 'CBA', 'CBA_BSDM', 'Regular', 0, 24),
(3, 33, 'jomary', 'binay', 'binay@gmail.com', 98765432123, 'CBA', 'CBA_BSDM', 'Regular', 0, 24);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `auth_key` varchar(150) NOT NULL,
  `password_reset_token` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `auth_key`, `password_reset_token`) VALUES
(18, 'qqqqqq', '$2y$13$56M84g/zx84qfXxMtTMxleqJ7nE634fpF5vWErG6Ybbqo5va83Z4W', '9-9n25Q14vKDRODvFYNxtfasNp60RbNi', 'yr09s6dqKFfEJ_l1cOPZlmDkQ_BHIQWl_1557467957'),
(19, 's', '$2y$13$q.VlQCJwrPAtbXz8IELAmuRBZrGFP5Aisuq/ZrzrUtMyjp1yMACm2', 'vUUQAp0Ei9DWOdXLxKiPZnLN5WtVEJ7c', 'lKyifbKbXaI5IKN3ld-LWH7a4YnY_V1v_1557468027'),
(20, 't', '$2y$13$820Kag48rYcOC7A7Vu7KZeP7iKECIEiWZnicXJa0oweeiwjQxJ4Ue', 'lAMkfI4BNlggEJJ00WCgWiGb7k2DchKB', '4nPcNfVBvakKb88HbNhFohfv_KQ4rEHX_1557468165'),
(21, 'g', '$2y$13$DYmT2L/PMNAlXk955eZfFOmLNza7uD/SVHt2lrXSAOhTBNQAcgmZG', 'CMrOh2EjRQXLL8cU5XQcNCD0gn58hbbp', 'a8zGW8niwP0xFm4_KEO0LKZo-AOYlJc-_1557469410'),
(22, 'rex', '$2y$13$9L/ChLutDt.ey1hPHAHt0emYLbZAJARVFYNeEvGRmZsCOYTP79T4K', '3mVOV70BifjJB9DR2t9v8Z9Tzt0-auwZ', '27YBQsmbjgTDejp-PqN8_77R5TmFhfKi_1557884208'),
(23, 'rtrt', '$2y$13$21hr6ZyLvDq0pxQ/bka09uBcAzcLD9ddTOCghBrm0X9pQsUn8DC7e', '99Dk3-sfqNNxRoqQ-0OcT_WBfPao98yf', 'yKipBwxQqf5wh91a8Ka1MRjIEuKPxviK_1558402036'),
(24, 'rex', '$2y$13$QNFhHhXBkUE0dhhY4pFnR.MbnDwB9AtPAJzxWk6M1ziHLZqJGd4Ty', 'llnj8CuznAqueQyMZDa_Hh_bXokGG3r8', 'qLVBszauIFCzmPtB4tmdvuSyQIeSDnup_1558492992');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_code` (`course_code`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `import_student`
--
ALTER TABLE `import_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partylist`
--
ALTER TABLE `partylist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `import_student`
--
ALTER TABLE `import_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `partylist`
--
ALTER TABLE `partylist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
