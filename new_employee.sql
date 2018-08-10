-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 10, 2018 at 05:14 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `doodleblue`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `EmpId` varchar(15) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `EmployeeId` varchar(25) NOT NULL,
  `Designation` varchar(25) NOT NULL,
  `Salary` varchar(15) NOT NULL,
  `DateofJoining` varchar(10) NOT NULL,
  `MobileNumber` varchar(10) NOT NULL,
  `EmailId` varchar(25) NOT NULL,
  `DateOfBirth` varchar(10) NOT NULL,
  `BloodGroup` varchar(3) NOT NULL,
  PRIMARY KEY (`EmpId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmpId`, `Name`, `EmployeeId`, `Designation`, `Salary`, `DateofJoining`, `MobileNumber`, `EmailId`, `DateOfBirth`, `BloodGroup`) VALUES
('SAP405001', 'Baby Sowjanya', '100694', 'Java Developer', '3,50,000', '06-09-2016', '7548878238', 'babysowjanya27@gmail.com', '10-06-1994', 'B+'),
('NPLC405014', 'Swetha', '90693', 'Anroid Developer', '2,00,000', '09-06-2018', '9962636571', 'swetha.venket93@gmail.com', '09-06-1993', 'O+'),
('DBI405016', 'Cyril Joesph Daniel', '270694', 'Human Resource Executive', '2,00,000', '01-08-2018', '8056911889', 'cjdaniel1994@gmail.com', '27-06-1994', 'O+'),
('NPLC405017', 'Susanth', '240994', 'Digital Marketer', '2,50,000', '09-06-2017', '9500980912', 'sushanthg94@gmail.com', '24-09-1994', 'B+'),
('DBI405004', 'Praveen', '170594', 'iOS Developer', '2,00,000', '10-09-5018', '9788365721', 'praveenraj17@gmail.com', '17-05-1994', 'B+'),
('DTS405016', 'Sundareswaran', '180993', 'Software Engineer', '2,00,000', '18-06-2018', '9894270954', 'sundar.ravanan9@gmail.com', '18-09-1993', 'O+'),
('DTS405019', 'Yasmin Begyam', '121294', 'Game Developer', '2,50,000', '18-06-2018', '8610958030', 'yasminbegyam27@gmail.com', '12-12-1994', 'B+'),
('IFS405003', 'Blessy Thersa', '21294', 'Trainer', '1,50,000', '06-08-2018', '9994671381', 'blessythersa12@gmail.com', '02-12-1994', 'A+'),
('STS405011', 'Pandiyan', '140192', 'Database Administrator', '2,50,000', '08-09-2017', '9677673455', 'pandiyan1@gmail.com', '14-01-1992', 'O+'),
('DBI405011', 'Charumrutha Prakash', '220394', 'Web Application Developer', '3,60,000', '10-09-2018', '7299878989', 'charumrutha.p@gmail.com', '22-03-1994', 'B+');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
