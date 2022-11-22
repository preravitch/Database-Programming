-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 11:19 AM
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
-- Database: `labassign5`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Course_ID` int(11) UNSIGNED DEFAULT NULL,
  `Course_code` varchar(9) DEFAULT NULL,
  `Course_name` varchar(30) DEFAULT NULL,
  `Student_ID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Course_ID`, `Course_code`, `Course_name`, `Student_ID`) VALUES
(4576, 'ITS341', 'Programming', 6022040411),
(4576, 'ITS341', 'Programming', 6022040412),
(2345, 'GC124', 'Critical Thinking', 6022040413),
(1458, 'ME231', 'CAD/CAM', 6022040414),
(2345, 'GC124', 'Critical Thinking', 6022040415),
(4576, 'ITS341', 'Programming', 6022040416),
(4576, 'ITS341', 'Programming', 6022040417),
(1458, 'ME231', 'CAD/CAM', 6022040418),
(2345, 'GC124', 'Critical Thinking', 6022040419),
(1458, 'ME231', 'CAD/CAM', 6022040420);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Register_ID` int(10) UNSIGNED NOT NULL,
  `Student_ID` bigint(20) UNSIGNED DEFAULT NULL,
  `Course_ID` int(11) UNSIGNED DEFAULT NULL,
  `Grade` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Register_ID`, `Student_ID`, `Course_ID`, `Grade`) VALUES
(602, 6022040411, 4576, 'A'),
(603, 6022040412, 4576, 'B'),
(604, 6022040413, 2345, 'A'),
(605, 6022040414, 1458, 'C'),
(606, 6022040415, 2345, 'A'),
(607, 6022040416, 4576, 'A'),
(608, 6022040417, 4576, 'A'),
(609, 6022040418, 1458, 'C'),
(610, 6022040419, 2345, 'B'),
(611, 6022040420, 1458, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_ID` bigint(20) UNSIGNED NOT NULL,
  `First_name` varchar(30) DEFAULT NULL,
  `Last_name` varchar(30) DEFAULT NULL,
  `Sex` varchar(6) DEFAULT NULL,
  `City` varchar(30) DEFAULT NULL,
  `Curriculum` varchar(15) DEFAULT NULL,
  `Date_of_birth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_ID`, `First_name`, `Last_name`, `Sex`, `City`, `Curriculum`, `Date_of_birth`) VALUES
(6022040411, 'Adam', 'Phelps', 'Male', 'New York', 'ICT', '2000-07-24'),
(6022040412, 'Mark', 'Twain', 'Male', 'Los Angeles', 'ICT', '2002-09-13'),
(6022040413, 'Shania', 'Judith', 'Female', 'New York', 'CIVIL', '2001-05-19'),
(6022040414, 'Angelina', 'Rosswell', 'Male', 'California', 'MECHANICAL', '2002-07-27'),
(6022040415, 'Thomas', 'Hardy', 'Male', 'New York', 'MANAGEMENT', '2006-03-19'),
(6022040416, 'Philip', 'Stein', 'Male', 'New York', 'ICT', '2004-06-24'),
(6022040417, 'Ann', 'Stone', 'Female', 'London', 'ICT', '2000-09-23'),
(6022040418, 'Harris', 'Michael', 'Male', 'Sussex', 'MECHANICAL', '2001-05-19'),
(6022040419, 'Mitchelle', 'Rhyms', 'Female', 'Boston', 'CIVIL', '2001-05-19'),
(6022040420, 'John', 'Samuel', 'Male', 'California', 'MECHANICAL', '2002-02-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD KEY `Course_ID` (`Course_ID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Register_ID`),
  ADD KEY `Student_ID` (`Student_ID`,`Course_ID`),
  ADD KEY `Course_ID` (`Course_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Register_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=612;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Student_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6022040421;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `student` (`Student_ID`),
  ADD CONSTRAINT `register_ibfk_2` FOREIGN KEY (`Course_ID`) REFERENCES `course` (`Course_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
