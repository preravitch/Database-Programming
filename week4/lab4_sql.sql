-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 02:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab4_sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Course_ID` int(4) NOT NULL,
  `Course_code` varchar(6) NOT NULL,
  `Course_num` int(2) NOT NULL,
  `Course_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Course_ID`, `Course_code`, `Course_num`, `Course_name`) VALUES
(1458, 'ME231', 12, 'CAD/CAM'),
(2345, 'GC124', 24, 'Critical Thinking'),
(4576, 'ITS341', 45, 'Programming');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Register_ID` int(3) NOT NULL,
  `Student_ID` bigint(10) NOT NULL,
  `Section_ID` int(3) NOT NULL,
  `Grade` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Register_ID`, `Student_ID`, `Section_ID`, `Grade`) VALUES
(602, 6022040411, 623, 'A'),
(603, 6022040412, 625, 'B'),
(604, 6022040413, 354, 'A'),
(605, 6022040414, 267, 'C'),
(606, 6022040415, 147, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `Section_ID` int(3) NOT NULL,
  `Course_ID` int(4) NOT NULL,
  `Section_no` int(1) NOT NULL,
  `Year` year(4) NOT NULL,
  `Semester` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`Section_ID`, `Course_ID`, `Section_no`, `Year`, `Semester`) VALUES
(147, 2345, 2, 2020, 2),
(267, 1458, 1, 2020, 2),
(354, 2345, 2, 2019, 1),
(623, 4576, 1, 2019, 1),
(625, 4576, 3, 2019, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_ID` bigint(10) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Sex` varchar(6) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Curriculum` varchar(20) NOT NULL,
  `Date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_ID`, `First_name`, `Last_name`, `Sex`, `City`, `Curriculum`, `Date_of_birth`) VALUES
(6022040411, 'Adam', 'Phelps', 'Male', 'New York', 'ICT', '2000-07-24'),
(6022040412, 'Mark', 'Twain', 'Male', 'Los Angeles', 'ICT', '2002-09-13'),
(6022040413, 'Shania', 'Judith', 'Female', 'New York', 'CIVIL', '2001-05-19'),
(6022040414, 'Angelina', 'Rosswell', 'Female', 'California', 'MECHANICAL', '2002-07-27'),
(6022040415, 'Thomas', 'Hardy', 'Male', 'New York', 'MANAGEMENT', '2006-03-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Course_ID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Register_ID`),
  ADD KEY `Section_ID` (`Section_ID`),
  ADD KEY `Student_ID` (`Student_ID`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`Section_ID`),
  ADD KEY `Course_ID` (`Course_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_ibfk_2` FOREIGN KEY (`Section_ID`) REFERENCES `section` (`Section_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `register_ibfk_3` FOREIGN KEY (`Student_ID`) REFERENCES `student` (`Student_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`Course_ID`) REFERENCES `course` (`Course_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
