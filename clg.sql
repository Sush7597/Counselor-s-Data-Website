-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 07, 2018 at 05:27 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `created_at` date NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `email`, `name`, `created_at`, `password`) VALUES
(1, 'sushantv7597@gmail.com', 'Sushant Verma', '2018-10-03', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `ayears`
--

DROP TABLE IF EXISTS `ayears`;
CREATE TABLE IF NOT EXISTS `ayears` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `start_year` bigint(20) NOT NULL,
  `end_year` bigint(20) NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ayears`
--

INSERT INTO `ayears` (`id`, `start_year`, `end_year`, `created_at`) VALUES
(1, 2016, 2020, '2016-08-01'),
(2, 2017, 2021, '2018-10-03'),
(3, 2018, 2022, '2018-10-03'),
(4, 2019, 2023, '2018-10-03'),
(5, 2019, 2023, '2018-10-03'),
(6, 2019, 2023, '2018-10-03'),
(7, 2019, 2023, '2018-10-03'),
(8, 1996, 2000, '2018-10-03');

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

DROP TABLE IF EXISTS `batches`;
CREATE TABLE IF NOT EXISTS `batches` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ayear` bigint(20) NOT NULL,
  `semester` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `admin` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`id`, `ayear`, `semester`, `code`, `admin`) VALUES
(1, 2016, 5, 8, 'abc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `co`
--

DROP TABLE IF EXISTS `co`;
CREATE TABLE IF NOT EXISTS `co` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_outcome` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `co`
--

INSERT INTO `co` (`id`, `course_outcome`) VALUES
(1, 'C01');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `semester` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `code`, `title`, `semester`) VALUES
(1, 'ETCS-203', 'ABC', 5);

-- --------------------------------------------------------

--
-- Table structure for table `cov`
--

DROP TABLE IF EXISTS `cov`;
CREATE TABLE IF NOT EXISTS `cov` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `course` varchar(30) NOT NULL,
  `course_outcome` varchar(5) NOT NULL,
  `value` double NOT NULL,
  `ayear` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cov`
--

INSERT INTO `cov` (`id`, `course`, `course_outcome`, `value`, `ayear`) VALUES
(1, 'Maths', 'C01', 2.83, 2016);

-- --------------------------------------------------------

--
-- Table structure for table `po`
--

DROP TABLE IF EXISTS `po`;
CREATE TABLE IF NOT EXISTS `po` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `po` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po`
--

INSERT INTO `po` (`id`, `po`) VALUES
(1, 'P01');

-- --------------------------------------------------------

--
-- Table structure for table `pov`
--

DROP TABLE IF EXISTS `pov`;
CREATE TABLE IF NOT EXISTS `pov` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ayear` int(11) NOT NULL,
  `program_outcome` varchar(5) NOT NULL,
  `value` double NOT NULL,
  `course` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pov`
--

INSERT INTO `pov` (`id`, `ayear`, `program_outcome`, `value`, `course`) VALUES
(1, 2016, 'P01', 2.83, 'Maths');

-- --------------------------------------------------------

--
-- Table structure for table `pso`
--

DROP TABLE IF EXISTS `pso`;
CREATE TABLE IF NOT EXISTS `pso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pso` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pso`
--

INSERT INTO `pso` (`id`, `pso`) VALUES
(1, 'PSO01');

-- --------------------------------------------------------

--
-- Table structure for table `psov`
--

DROP TABLE IF EXISTS `psov`;
CREATE TABLE IF NOT EXISTS `psov` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `program_sourse_outcome` varchar(5) NOT NULL,
  `value` double NOT NULL,
  `course` varchar(40) NOT NULL,
  `ayear` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

DROP TABLE IF EXISTS `semesters`;
CREATE TABLE IF NOT EXISTS `semesters` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `ayear` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `ayear`, `sem`) VALUES
(1, 2016, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `E-Mail` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Enrollment Number` varchar(12) NOT NULL,
  `Year` varchar(5) NOT NULL,
  `Group` varchar(10) NOT NULL,
  `Remark` varchar(10) NOT NULL DEFAULT 'Regular',
  `Contact` varchar(12) NOT NULL,
  `CET Roll Number` varchar(10) NOT NULL,
  `CET Rank` varchar(10) NOT NULL,
  `Father's Name` varchar(40) NOT NULL,
  `Mother's Name` varchar(40) NOT NULL,
  `DOB` varchar(12) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `P Code` int(11) NOT NULL DEFAULT '23',
  `Programme` varchar(10) NOT NULL DEFAULT 'B.Tech.',
  `Institute Code` int(11) NOT NULL DEFAULT '964',
  `Address` varchar(50) NOT NULL,
  `Father's Profession` varchar(30) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Academic Year ID` varchar(10) NOT NULL,
  `Batch ID` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `email` (`E-Mail`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `E-Mail`, `Password`, `Name`, `Enrollment Number`, `Year`, `Group`, `Remark`, `Contact`, `CET Roll Number`, `CET Rank`, `Father's Name`, `Mother's Name`, `DOB`, `Gender`, `P Code`, `Programme`, `Institute Code`, `Address`, `Father's Profession`, `Category`, `Academic Year ID`, `Batch ID`) VALUES
(1, 'sushantv7597@gmail.com', '1234', 'Sushant Verma', '', '', '', 'Regular', '', '', '', '', '', '', '', 23, 'B.Tech.', 964, '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
