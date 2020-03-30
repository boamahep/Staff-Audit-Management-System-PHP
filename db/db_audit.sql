-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2014 at 01:35 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_audit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(3) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE IF NOT EXISTS `staffs` (
  `staff_id` int(50) NOT NULL AUTO_INCREMENT,
  `pport` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `year_of_service` varchar(100) NOT NULL,
  `service_start_date` varchar(100) NOT NULL,
  `gradelvl` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `cert` varchar(255) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `allowance` varchar(100) NOT NULL,
  `ext_ao_slr` varchar(100) NOT NULL,
  `ext_ao_pension` varchar(100) NOT NULL,
  `ext_ao_tax` varchar(100) NOT NULL,
  `ext_ao_other` varchar(100) NOT NULL,
  `verify` varchar(255) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`staff_id`, `pport`, `title`, `fname`, `mname`, `lname`, `gender`, `dob`, `year_of_service`, `service_start_date`, `gradelvl`, `category`, `cert`, `salary`, `allowance`, `ext_ao_slr`, `ext_ao_pension`, `ext_ao_tax`, `ext_ao_other`, `verify`) VALUES
(4, 'Formulator_3.png', 'Dr.', 'Sunusi', 'Mohd', 'Inuwa', 'Male', '01/01/1991', '15 years', '01/01/2015', 'Level 4', 'Senior', 'IADNCS', '50,000', '10,000', '5,000', '1,000', '500', '500', 'verified.png'),
(5, 'IMG.bmp', 'Dr.', 'Fahad', 'M', 'Hamisu', 'Male', '12/02/19883', '12 years', '01/01/2015', 'Level 4', 'junior', 'National Diploma', '30,000', '1,000', '5,000', '1,000,000', '500', '500', 'unverified.png'),
(6, '[000283].jpg', 'Eng.', 'Nura', 'Tijjani', 'Abubakar', 'Male', '02/01/1981', '15 years', '01/01/2015', 'Level 7', 'Senior', 'MS.c', '100,000', '10,000', '15,000', '30,000', '1,000', '1,000', 'unverified.png'),
(7, 'Najib_badamasi.jpg', 'Dr.', 'Ahmad', '', 'Tijjani', 'Male', '01/12/1974', '13 years', '01/01/2001', 'Level 9', 'Senior', 'MS.c. in ICT', '80,000', '20,000', '500,000', '50,000', '10,000', '1,000', 'verified.png');

-- --------------------------------------------------------

--
-- Table structure for table `staffs_backup`
--

CREATE TABLE IF NOT EXISTS `staffs_backup` (
  `staff_id` int(50) NOT NULL AUTO_INCREMENT,
  `pport` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `year_of_service` varchar(100) NOT NULL,
  `service_start_date` varchar(100) NOT NULL,
  `gradelvl` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `cert` varchar(255) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `allowance` varchar(100) NOT NULL,
  `ext_ao_slr` varchar(100) NOT NULL,
  `ext_ao_pension` varchar(100) NOT NULL,
  `ext_ao_tax` varchar(100) NOT NULL,
  `ext_ao_other` varchar(100) NOT NULL,
  `verify` varchar(255) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `staffs_backup`
--

INSERT INTO `staffs_backup` (`staff_id`, `pport`, `title`, `fname`, `mname`, `lname`, `gender`, `dob`, `year_of_service`, `service_start_date`, `gradelvl`, `category`, `cert`, `salary`, `allowance`, `ext_ao_slr`, `ext_ao_pension`, `ext_ao_tax`, `ext_ao_other`, `verify`) VALUES
(3, '[001373].jpg', 'Mrs.', 'Rahama', 'M', 'Yusif', 'Female', '03/11/1997', '10 years', '12/12/2016', 'Level 4', 'Senior', 'National diploma in health', '50,000', '5,000', '1,000', '1,000', '500', '500', 'verified.png'),
(4, 'Formulator_3.png', 'Mr.', 'Sunusi', 'Mohd', 'Inuwa', 'Male', '01/01/1991', '15 years', '01/01/2015', 'Level 4', 'Senior', 'IADNCS', '50,000', '10,000', '5,000', '1,000', '500', '500', 'unverified.png'),
(5, 'IMG.bmp', 'Dr.', 'Fahad', 'M', 'Hamisu', 'Male', '12/02/19883', '12 years', '01/01/2015', 'Level 4', 'junior', 'National Diploma', '30,000', '1,000', '5,000', '1,000,000', '500', '500', 'unverified.png'),
(6, '[000996] - Copy.jpg', 'Eng.', 'Nura', 'Tijjani', 'Abubakar', 'Male', '02/01/1981', '15 years', '01/01/2015', 'Level 7', 'Senior', 'MS.c', '100,000', '10,000', '15,000', '30,000', '1,000', '1,000', 'unverified.png'),
(7, 'Najib_badamasi.jpg', 'Prof.', 'Ahmad', '', 'Tijjani', 'Male', '01/12/1974', '13 years', '01/01/2001', 'Level 9', 'Senior', 'MS.c. in ICT', '70,000', '20,000', '500,000', '50,000', '10,000', '1,000', 'unverified.png'),
(8, 'minister.jpg', 'Dr.', 'sda', 'ss', 'ss', 'Male', '01/01/1991', '10 years', '12/02/2000', 'Level 3', 'junior', 'MS.c. in ICT', '30,000', '10,000', '100,000', '1,000', '1,000', '500', 'unverified.png');
