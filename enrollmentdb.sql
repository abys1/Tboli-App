-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 09:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrollmentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactinfo`
--

CREATE TABLE `tbl_contactinfo` (
  `contact_id` int(11) NOT NULL,
  `userinfo_id` int(11) NOT NULL,
  `email` varchar(244) NOT NULL,
  `contact_num` bigint(11) NOT NULL,
  `city` varchar(244) NOT NULL,
  `barangay` varchar(244) NOT NULL,
  `street` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contactinfo`
--

INSERT INTO `tbl_contactinfo` (`contact_id`, `userinfo_id`, `email`, `contact_num`, `city`, `barangay`, `street`) VALUES
(1, 1, 'jvburdo@gmail.com', 1231231, 'Gensan', 'conel', 'guadalupe'),
(3, 4, 'mynftacc269@gmail.com', 9084082735, 'General Santos City', 'Bule', 'Gensanville'),
(4, 5, 'jvburdo@gmail.com', 1231231, 'Gensan', 'conel', 'guadalupe'),
(5, 6, 'jvburdo@gmail.com', 1231231, 'Gensan', 'conel', 'guadalupe'),
(6, 7, 'eim@gmail.com', 9087823721, 'General Santos City', 'conel', 'guadalupe'),
(7, 8, 'fbs@gmail.com', 9087823721, 'General Santos City', 'Barangay', 'guadalupe'),
(8, 9, 'smaw@gmai.com', 9087823721, 'smaw', 'smaw', 'smaw'),
(9, 10, 'ICT@gmail.com', 9087823721, 'ICT', 'ICT', 'ICT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enrollment`
--

CREATE TABLE `tbl_enrollment` (
  `enrollment_id` int(11) NOT NULL,
  `userinfo_id` int(11) NOT NULL,
  `admit_type` varchar(244) NOT NULL,
  `grade` varchar(244) NOT NULL,
  `program` varchar(244) NOT NULL,
  `term` varchar(244) NOT NULL,
  `lrn` int(11) NOT NULL,
  `lsa` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_enrollment`
--

INSERT INTO `tbl_enrollment` (`enrollment_id`, `userinfo_id`, `admit_type`, `grade`, `program`, `term`, `lrn`, `lsa`) VALUES
(1, 1, 'new', '12', 'abm', '1st', 2, 'For transferee only'),
(3, 4, '', '', '', '', 0, ''),
(4, 5, 'old', '12', 'humms', '2nd', 2, 'For transferee only'),
(5, 6, 'old', '11', 'stem', '1st', 2, 'For transferee only'),
(6, 7, 'new', '11', 'eim', '1st', 1231123, ''),
(7, 8, 'new', '11', 'fbs', '1st', 123112321, ''),
(8, 9, 'new', '11', 'smaw', '1st', 22222123, ''),
(9, 10, 'transferee', '12', 'ict', '2nd', 231123122, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subjects`
--

CREATE TABLE `tbl_subjects` (
  `subject_id` int(11) NOT NULL,
  `strand` varchar(244) NOT NULL,
  `grade` varchar(244) NOT NULL,
  `subjects` varchar(244) NOT NULL,
  `schedules` time NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_subjects`
--

INSERT INTO `tbl_subjects` (`subject_id`, `strand`, `grade`, `subjects`, `schedules`, `status`) VALUES
(1, 'stem', '11', 'Technology', '21:09:00', 1),
(2, 'abm', '11', 'Financial Management', '14:11:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usercredentials`
--

CREATE TABLE `tbl_usercredentials` (
  `usercredentials_id` int(11) NOT NULL,
  `userinfo_id` int(11) NOT NULL,
  `username` varchar(244) NOT NULL,
  `password` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_usercredentials`
--

INSERT INTO `tbl_usercredentials` (`usercredentials_id`, `userinfo_id`, `username`, `password`) VALUES
(1, 1, '', '$2y$10$WxbPafDsfAyV2KEmtEi1P.QiP11otU1BVGYWVYkI/ve8obrgAL29e'),
(3, 4, 'elmeradmin', '$2y$10$V2V65sAcge3cqeuf0wvqH.JDvJgRdZGhqCrFLue6cYHBItF0Nhuma'),
(4, 5, '', '$2y$10$3ryTSw67j4.u90zr9UmK6eOfKvdrVedg43W8OxwTWvRE07fd6BL7u');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userinfo`
--

CREATE TABLE `tbl_userinfo` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(244) NOT NULL,
  `middlename` varchar(244) NOT NULL,
  `lastname` varchar(244) NOT NULL,
  `suffix` varchar(244) NOT NULL,
  `gender` varchar(244) NOT NULL,
  `birthday` date NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_userinfo`
--

INSERT INTO `tbl_userinfo` (`user_id`, `firstname`, `middlename`, `lastname`, `suffix`, `gender`, `birthday`, `age`) VALUES
(1, 'Ryan', 'Cuties', 'larocos', 'XDs', '', '2023-06-03', 22),
(4, 'Elmer', '', 'Varquez', '', 'male', '2001-06-06', 22),
(5, 'Ryan', 'Cutie', 'laroco', 'XD', '', '2023-06-03', 22),
(6, 'Ryan', 'Cutie', 'laroco', 'XD', '', '2023-06-03', 22),
(7, 'EIM', '', 'Student', '', 'female', '2011-02-22', 22),
(8, 'FPB', '', 'Student', '', 'male', '2001-02-12', 22),
(9, 'SMAW', '', 'Student', '', 'male', '2007-06-06', 22),
(10, 'ICT', '', 'Student', '', 'male', '2002-02-22', 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_level`
--

CREATE TABLE `tbl_user_level` (
  `user_level_id` int(11) NOT NULL,
  `userinfo_id` int(11) NOT NULL,
  `level` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user_level`
--

INSERT INTO `tbl_user_level` (`user_level_id`, `userinfo_id`, `level`) VALUES
(1, 1, 'STUDENT'),
(4, 4, 'ADMIN'),
(5, 5, 'STUDENT'),
(6, 6, 'STUDENT'),
(7, 7, 'STUDENT'),
(8, 8, 'STUDENT'),
(9, 9, 'STUDENT'),
(10, 10, 'STUDENT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_status`
--

CREATE TABLE `tbl_user_status` (
  `status_id` int(11) NOT NULL,
  `userinfo_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user_status`
--

INSERT INTO `tbl_user_status` (`status_id`, `userinfo_id`, `status`) VALUES
(1, 1, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contactinfo`
--
ALTER TABLE `tbl_contactinfo`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `userinfo_id` (`userinfo_id`);

--
-- Indexes for table `tbl_enrollment`
--
ALTER TABLE `tbl_enrollment`
  ADD PRIMARY KEY (`enrollment_id`),
  ADD KEY `userinfo_id` (`userinfo_id`);

--
-- Indexes for table `tbl_subjects`
--
ALTER TABLE `tbl_subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `tbl_usercredentials`
--
ALTER TABLE `tbl_usercredentials`
  ADD PRIMARY KEY (`usercredentials_id`),
  ADD KEY `userinfo_id` (`userinfo_id`);

--
-- Indexes for table `tbl_userinfo`
--
ALTER TABLE `tbl_userinfo`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  ADD PRIMARY KEY (`user_level_id`),
  ADD KEY `userinfo_id` (`userinfo_id`);

--
-- Indexes for table `tbl_user_status`
--
ALTER TABLE `tbl_user_status`
  ADD PRIMARY KEY (`status_id`),
  ADD KEY `userinfo_id` (`userinfo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contactinfo`
--
ALTER TABLE `tbl_contactinfo`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_enrollment`
--
ALTER TABLE `tbl_enrollment`
  MODIFY `enrollment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_subjects`
--
ALTER TABLE `tbl_subjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_usercredentials`
--
ALTER TABLE `tbl_usercredentials`
  MODIFY `usercredentials_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_userinfo`
--
ALTER TABLE `tbl_userinfo`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  MODIFY `user_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_user_status`
--
ALTER TABLE `tbl_user_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_contactinfo`
--
ALTER TABLE `tbl_contactinfo`
  ADD CONSTRAINT `tbl_contactinfo_ibfk_1` FOREIGN KEY (`userinfo_id`) REFERENCES `tbl_userinfo` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_enrollment`
--
ALTER TABLE `tbl_enrollment`
  ADD CONSTRAINT `tbl_enrollment_ibfk_1` FOREIGN KEY (`userinfo_id`) REFERENCES `tbl_userinfo` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_usercredentials`
--
ALTER TABLE `tbl_usercredentials`
  ADD CONSTRAINT `tbl_usercredentials_ibfk_1` FOREIGN KEY (`userinfo_id`) REFERENCES `tbl_userinfo` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  ADD CONSTRAINT `tbl_user_level_ibfk_1` FOREIGN KEY (`userinfo_id`) REFERENCES `tbl_userinfo` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_user_status`
--
ALTER TABLE `tbl_user_status`
  ADD CONSTRAINT `tbl_user_status_ibfk_1` FOREIGN KEY (`userinfo_id`) REFERENCES `tbl_userinfo` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
