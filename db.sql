-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2024 at 02:53 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_code` char(8) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `credit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_code`, `course_name`, `credit`) VALUES
('01204113', 'ComPro for CPE', 3),
('01204114', 'Intro to Hardware Development', 3),
('01204223', 'Practicum in Computer Engineering', 1),
('01204271', 'Intro to CPE', 1),
('01204332', 'Operting System', 3),
('01204351', 'Database System', 3),
('66402023', 'nareubad', 5),
('66402212', 'nareiiis', 5);

-- --------------------------------------------------------

--
-- Table structure for table `exam_result`
--

CREATE TABLE `exam_result` (
  `id` int(11) NOT NULL,
  `course_code` char(8) NOT NULL,
  `student_code` char(10) NOT NULL,
  `point` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exam_result`
--

INSERT INTO `exam_result` (`id`, `course_code`, `student_code`, `point`) VALUES
(1, '01204113', '6540201111', 30),
(2, '01204113', '6540202222', 15.4),
(3, '01204113', '6540203333', 15.5),
(4, '01204113', '6540204444', 20.6),
(5, '01204271', '6540205555', 19.5),
(6, '01204271', '6540206666', 19.5),
(7, '01204113', '6540205555', 22),
(8, '01204271', '6540207777', 25.5);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_code` char(10) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `gender` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_code`, `student_name`, `gender`) VALUES
('6540201111', 'Anan', 'F'),
('6540202222', 'Boonmee', 'M'),
('6540203333', 'Chokdee', 'm'),
('6540204444', 'Doajai', 'F'),
('6540205555', 'Eakkachai', 'M'),
('6540206666', 'Fahsai', 'F'),
('6540207777', 'Garuna', 'F'),
('6640200256', 'ganruethai', 'F'),
('6640202344', 'Namreubad', 'F');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `exam_result`
--
ALTER TABLE `exam_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam_result`
--
ALTER TABLE `exam_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
