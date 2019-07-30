-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 02:58 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sjpvotingdba`
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`id`, `election_name`, `election_term`, `election_start`, `election_end`, `created_by`, `description`) VALUES
(1, 'SSC 2019 first-sem', '20191', '2019-05-08', '2019-05-09', 20, 'rexx'),
(2, 'ICT dept election', '20181', '2019-05-01', '2019-05-22', 20, 'sss election for 2018 first sem'),
(3, 'erwerwer', 'werwrwer', '2019-07-20', '2019-01-01', 20, 'dsfsfsdf');

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `campaign_id`, `student_id`, `photo`, `position_id`, `partylist_id`, `platform`) VALUES
(12, 2, 501, 'uploads/501.jpg', 1, 2, 'sdfsdfsdf'),
(13, 2, 701, 'uploads/701.jpg', 2, 2, 'fdgdgf');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_code`, `course_name`, `created_by`) VALUES
(1, 'BSBA-DM', 'BSBA Development Management', 24),
(2, 'BSBA-FM', 'BSBA Financial Management', 24),
(4, 'law', 'lawyerx', 20),
(5, 'tertetr', 'ertetrertre', 20),
(6, 'sdfsfsdf', 'sdfsdfsdf', 25);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL,
  `department_code` varchar(50) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_code`, `department_name`, `created_by`) VALUES
(1, 'CBA', 'College of Business Administration', 24),
(2, 'erterte', 'ertetrert', 24),
(3, 'sdfsdfsdf', 'sdfsfsdf', 24);

-- --------------------------------------------------------

--
-- Table structure for table `import_student`
--

CREATE TABLE IF NOT EXISTS `import_student` (
  `id` int(11) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `date_import` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `import_student`
--

INSERT INTO `import_student` (`id`, `filename`, `date_import`, `created_by`) VALUES
(21, 'filename1563357338.xlsx', '2019-07-17 11:55:38', 20),
(24, 'filename1563414281.xlsx', '2019-07-18 03:44:41', 20),
(25, 'filename1563420532.xlsx', '2019-07-18 05:28:52', 20),
(26, 'filename1563435787.xlsx', '2019-07-18 09:43:07', 20),
(27, 'filename1563524044.xlsx', '2019-07-19 10:14:04', 25),
(28, 'filename1563582740.xlsx', '2019-07-20 02:32:20', 20),
(29, 'filename1563582788.xlsx', '2019-07-20 02:33:08', 20),
(30, 'filename1564374562.xlsx', '2019-07-29 06:29:22', 25),
(31, 'filename1564379764.xlsx', '2019-07-29 07:56:04', 25),
(32, 'filename1564379801.xlsx', '2019-07-29 07:56:41', 25),
(33, 'filename1564379867.xlsx', '2019-07-29 07:57:47', 25);

-- --------------------------------------------------------

--
-- Table structure for table `partylist`
--

CREATE TABLE IF NOT EXISTS `partylist` (
  `id` int(11) NOT NULL,
  `partylist_name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partylist`
--

INSERT INTO `partylist` (`id`, `partylist_name`, `description`) VALUES
(1, 'act cis', 'tulong mahirap'),
(2, 'marino', 'ang marino'),
(3, 'pba', 'bayaning atlitax'),
(4, 'werwrwexxx', 'werwerwe');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE IF NOT EXISTS `positions` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `max_vote` int(11) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `description`, `max_vote`, `priority`) VALUES
(1, 'press', 1, 1),
(2, 'vice-press', 1, 2),
(3, 'councilor', 5, 3),
(4, 'musex', 1, 4),
(5, 'werwrwerwxxx', 1, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `firstname`, `lastname`, `bday`, `gender`) VALUES
(51, 20, 't', 't', '2019-05-16', 'Male'),
(55, 24, 'rex', 'rex', '2019-05-29', 'Male'),
(56, 25, 'admin', 'admin', '1989-06-21', 'Male'),
(57, 26, 'user', 'user', '1995-03-15', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE IF NOT EXISTS `program` (
  `id` int(11) NOT NULL,
  `program_code` varchar(50) NOT NULL,
  `program_name` varchar(50) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `program_code`, `program_name`, `created_by`) VALUES
(1, 'Reg', 'Regular', 24),
(2, 'Sp', 'Special Programxx', 23),
(3, 'dsfsdfsdfxxxx', 'sfsdfsdfxxx', 23);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `student_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `department` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `program` varchar(50) NOT NULL,
  `importstudent_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_id`, `student_id`, `firstname`, `lastname`, `email`, `contact`, `department`, `course`, `program`, `importstudent_id`, `created_by`) VALUES
(23, 0, 101, 'Henry', 'Sy', 'henry@gmail.com', 9245671101, 'CBA', 'BSHR', 'Reg', 30, 25),
(24, 0, 102, 'Lucio', 'Tan', 'lucio@gmail.com', 9475345102, 'CBA', 'BSDM', 'Reg', 30, 25),
(25, 42, 601, 'Bill', 'Gates', 'bill@gmail.com', 9234567601, 'ICT', 'BSIT', 'Reg', 31, 25),
(26, 43, 602, 'Steve', 'Jobs', 'steve@gmail.com', 9475345602, 'ICT', 'BSCS', 'Reg', 31, 25),
(27, 0, 701, 'Albert', 'Einstein', 'albert@gmail.com', 9234567701, 'NURSING', 'BSN', 'Reg', 33, 25),
(28, 0, 702, 'Charles', 'Darwin', 'charles@gmail.com', 9475345702, 'NURSING', 'BSN', 'Reg', 33, 25);

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
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `auth_key`, `password_reset_token`) VALUES
(20, 't', '$2y$13$820Kag48rYcOC7A7Vu7KZeP7iKECIEiWZnicXJa0oweeiwjQxJ4Ue', 'lAMkfI4BNlggEJJ00WCgWiGb7k2DchKB', '4nPcNfVBvakKb88HbNhFohfv_KQ4rEHX_1557468165'),
(24, 'rex', '$2y$13$QNFhHhXBkUE0dhhY4pFnR.MbnDwB9AtPAJzxWk6M1ziHLZqJGd4Ty', 'llnj8CuznAqueQyMZDa_Hh_bXokGG3r8', 'qLVBszauIFCzmPtB4tmdvuSyQIeSDnup_1558492992'),
(25, 'admin', '$2y$13$ydIBuBia2F1fp2.Nc1kERugsElJ0QZ0/rXwidqmzzePME9BpuH8.i', 'yLYWzkDQ6TH_GdOoaGUzyouLLusSe-If', 'sqnyQ6za8FbNX2_FgOLTHKChjyBQig_r_1563425841'),
(26, 'user', '$2y$13$9jUXyw5xna50sv/LXBgjHeO/nT6DultCMHr31D98j1WeyhvWMAzFq', 'aKVaK_qwm13FK32DGpXC2srBjUMxTdi_', 'wR7fI9xKW617JSSvOXNO4dj8yzqFx61K_1563425945'),
(36, '101', '$2y$13$X1yHLxdFwNI3KoToCpFgaeuWosTOrLfpfYQxWZSeVMv2Mo0gDWi3y', 'Ix_EXfvrH1zsPz3Sge3c1KrHwtBXS8qa', '3snaxuZTyKhW-Lfa9Wmrmw0f3mK2soGV_1564389873'),
(42, '601', '$2y$13$b45cKqZW3pclxGj58fZ75OWV14isv3CHFEvvaIFbroLcARLR7dwtC', 'wh6dDU7FvIGC3ZV5QZQ6mF8LG5QYqr0U', 'zshFPDc1C_QMSF6uE-OF-67-C8OB_cS7_1564390435'),
(43, '602', '$2y$13$uTsmuWlAfbGRYtnu6CLMCeoZdYZjGFckeIp1jGSMQLM0DcqHkgM7m', 'eRONcmxGZrDx7L7qQtdowx1P1_1Wt5Tu', 'jH8yeumJAzG9JIKlnDHwdEmsDYVNecVU_1564390526');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `import_student`
--
ALTER TABLE `import_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `partylist`
--
ALTER TABLE `partylist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
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
