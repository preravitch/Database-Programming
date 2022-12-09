-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 24, 2022 at 08:47 PM
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
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `Flight_ID` int(11) NOT NULL,
  `Flight_Date` datetime NOT NULL,
  `Departure` datetime DEFAULT NULL,
  `Arrival` datetime DEFAULT NULL,
  `Route_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `Registered_Date` datetime NOT NULL,
  `Expired_Date` datetime NOT NULL,
  `Membership_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `Passport_ID` int(11) NOT NULL,
  `First_Name` varchar(16) NOT NULL,
  `Last_Name` varchar(16) NOT NULL,
  `Gender` varchar(16) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Nationalities` varchar(16) NOT NULL,
  `Email` varchar(32) DEFAULT NULL,
  `Address` varchar(64) DEFAULT NULL,
  `Postcode` int(11) DEFAULT NULL,
  `Transactions_ID` int(11) NOT NULL,
  `Membership_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`Passport_ID`, `First_Name`, `Last_Name`, `Gender`, `Age`, `Nationalities`, `Email`, `Address`, `Postcode`, `Transactions_ID`, `Membership_ID`) VALUES
(123, 'dfdf', 'dfdff', 'm', 20, 'Thai', 'thai_hero@live.com', '123fgg', 10230, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `Route_ID` int(11) NOT NULL,
  `Airport` varchar(32) NOT NULL,
  `Destination` varchar(32) NOT NULL,
  `Route_Code` varchar(16) NOT NULL,
  `Aircraft` varchar(16) NOT NULL,
  `Net_Fare` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `Booking_Date` datetime NOT NULL,
  `Departure_Date` datetime NOT NULL,
  `Number_of_Passengers` int(11) NOT NULL,
  `Flight_Number` varchar(16) NOT NULL,
  `Charges` int(11) NOT NULL,
  `Discount` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Flight_ID` int(11) NOT NULL,
  `Transactions_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`Flight_ID`),
  ADD KEY `FK_Route` (`Route_ID`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`Membership_ID`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`Passport_ID`),
  ADD KEY `FK_Transactions` (`Transactions_ID`),
  ADD KEY `FK_Membership` (`Membership_ID`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`Route_ID`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`Transactions_ID`),
  ADD KEY `FK_Flight` (`Flight_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `Membership_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `Transactions_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flight`
--
ALTER TABLE `flight`
  ADD CONSTRAINT `FK_Route` FOREIGN KEY (`Route_ID`) REFERENCES `route` (`Route_ID`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `FK_Flight` FOREIGN KEY (`Flight_ID`) REFERENCES `flight` (`Flight_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
