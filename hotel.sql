-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 17, 2017 at 02:47 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `AdminID` varchar(6) NOT NULL,
  `AdminName` char(50) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Position` char(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ContactNo` int(10) NOT NULL,
  PRIMARY KEY (`AdminID`),
  UNIQUE KEY `UserName` (`UserName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `BillNO` varchar(10) NOT NULL,
  `Amount` double NOT NULL,
  `PaymentID` varchar(8) NOT NULL,
  `CustomerID` varchar(6) NOT NULL,
  PRIMARY KEY (`BillNO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bill_payment`
--

CREATE TABLE IF NOT EXISTS `bill_payment` (
  `BillNo` varchar(10) NOT NULL,
  `PaymentID` varchar(8) NOT NULL,
  `IssuedDate` date NOT NULL,
  PRIMARY KEY (`BillNo`,`PaymentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `CustomerID` varchar(6) NOT NULL,
  `CustomerName` char(50) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `Password` varchar(15) NOT NULL,
  PRIMARY KEY (`CustomerID`),
  UNIQUE KEY `UserName` (`UserName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `UserName` varchar(10) NOT NULL,
  `Password` varchar(15) NOT NULL,
  UNIQUE KEY `UserName` (`UserName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `ReservationNO` int(10) NOT NULL,
  `CustomerID` varchar(6) NOT NULL,
  `PaymentID` varchar(10) NOT NULL,
  `PaymentDate` date NOT NULL,
  `Amount` double NOT NULL,
  `PaymentType` char(20) NOT NULL,
  `Discount` double NOT NULL,
  `BillNO` varchar(10) NOT NULL,
  PRIMARY KEY (`ReservationNO`,`CustomerID`,`PaymentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE IF NOT EXISTS `receptionist` (
  `ReservationNO` int(10) NOT NULL,
  `ReceptionistID` varchar(6) NOT NULL,
  `Name` char(50) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `Password` varchar(15) NOT NULL,
  PRIMARY KEY (`ReservationNO`,`ReceptionistID`),
  UNIQUE KEY `UserName` (`UserName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reception_hall`
--

CREATE TABLE IF NOT EXISTS `reception_hall` (
  `HallNO` varchar(3) NOT NULL,
  `HallName` char(20) NOT NULL,
  `HallType` char(10) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `HallAvailability` char(20) NOT NULL,
  `CustomerID` varchar(6) NOT NULL,
  PRIMARY KEY (`HallNO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `ReservationNO` int(10) NOT NULL,
  `ReservationDate` date NOT NULL,
  `CheckIN` date NOT NULL,
  `CheckOUT` date NOT NULL,
  `NoOfReservations` int(11) NOT NULL,
  `NoOfMembers` int(11) NOT NULL,
  `RoomNO` varchar(3) NOT NULL,
  `HallNO` varchar(3) NOT NULL,
  `CustomerID` varchar(6) NOT NULL,
  PRIMARY KEY (`ReservationNO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `RoomNO` varchar(3) NOT NULL,
  `RoomType` char(10) NOT NULL,
  `MaxNoOfMembers_per_Room` int(11) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Amount` double NOT NULL,
  `RoomAvailability` char(20) NOT NULL,
  `A/C_Facility` tinyint(1) NOT NULL,
  `CustomerID` varchar(6) NOT NULL,
  PRIMARY KEY (`RoomNO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
