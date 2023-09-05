-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 17, 2021 at 07:34 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alvas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@alvas.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

DROP TABLE IF EXISTS `dept`;
CREATE TABLE IF NOT EXISTS `dept` (
  `deptid` int(11) NOT NULL AUTO_INCREMENT,
  `deptname` varchar(20) NOT NULL,
  PRIMARY KEY (`deptid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`deptid`, `deptname`) VALUES
(3, 'EC'),
(2, 'cs'),
(4, 'first');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
CREATE TABLE IF NOT EXISTS `section` (
  `secid` int(11) NOT NULL AUTO_INCREMENT,
  `deptid` int(11) NOT NULL,
  `sec` varchar(10) NOT NULL,
  PRIMARY KEY (`secid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`secid`, `deptid`, `sec`) VALUES
(3, 3, 'a'),
(2, 2, 'b'),
(4, 2, 'a'),
(5, 3, 'b');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `std_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Reg_no` varchar(50) NOT NULL,
  `internal` int(11) DEFAULT NULL,
  `project` varchar(20) DEFAULT NULL,
  `antirag` varchar(10) DEFAULT NULL,
  `sec` int(10) DEFAULT NULL,
  `sem` varchar(50) NOT NULL,
  `classcord` varchar(50) DEFAULT NULL,
  `mentership` varchar(10) DEFAULT NULL,
  `internship` varchar(10) DEFAULT NULL,
  `placement` varchar(10) DEFAULT NULL,
  `seminar` int(11) DEFAULT NULL,
  `hod` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`std_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `Name`, `Reg_no`, `internal`, `project`, `antirag`, `sec`, `sem`, `classcord`, `mentership`, `internship`, `placement`, `seminar`, `hod`) VALUES
(4, 'ghfgh', 'asd1234', 12, 'Yes', 'Yes', 2, 'sem1', 'Approved', 'Yes', 'Yes', 'Yes', 15, 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `tname` varchar(20) NOT NULL,
  `sec` int(11) NOT NULL,
  `designation` varchar(10) NOT NULL,
  `temail` varchar(30) NOT NULL,
  `tpass` varchar(20) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `tname`, `sec`, `designation`, `temail`, `tpass`) VALUES
(8, 'shafi', 2, 'HOD', 'ashi@gmail.com', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
