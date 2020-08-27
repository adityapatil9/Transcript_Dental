-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2016 at 08:07 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transcript`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userid` varchar(5) NOT NULL,
  `password` int(20) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `otp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userid`, `password`, `email_id`, `otp`) VALUES
('admin', 12345, 'admin@admin.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `application_complete`
--

CREATE TABLE `application_complete` (
  `roll` varchar(10) NOT NULL,
  `sem1` int(11) NOT NULL,
  `sem2` int(11) NOT NULL,
  `sem3` int(11) NOT NULL,
  `sem4` int(11) NOT NULL,
  `sem5` int(11) NOT NULL,
  `sem6` int(11) NOT NULL,
  `sem7` int(11) NOT NULL,
  `sem8` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_complete`
--

INSERT INTO `application_complete` (`roll`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `sem7`, `sem8`) VALUES
('00CE0000', 0, 0, 0, 0, 0, 0, 1, 0),
('00EE016', 0, 0, 0, 0, 0, 0, 0, 0),
('01CE136', 0, 0, 0, 0, 0, 0, 0, 0),
('01CE506', 0, 0, 1, 1, 1, 0, 0, 0),
('02et1042', 0, 0, 0, 0, 0, 0, 0, 0),
('02ET2015', 1, 0, 0, 1, 0, 0, 0, 0),
('03CE2138', 0, 0, 0, 0, 0, 0, 0, 0),
('03ET2080', 0, 0, 0, 0, 0, 0, 0, 0),
('05CE1000', 1, 1, 1, 1, 1, 1, 1, 1),
('05CE1033', 1, 1, 1, 1, 1, 1, 1, 1),
('05CE2032', 0, 0, 0, 0, 0, 0, 0, 0),
('05EE1037', 0, 0, 0, 0, 0, 0, 0, 0),
('05EE2041', 1, 1, 1, 1, 1, 1, 1, 1),
('06CE5015', 0, 0, 1, 1, 1, 1, 1, 1),
('06CE5016', 0, 0, 1, 0, 0, 0, 0, 0),
('06IN1005', 0, 0, 0, 0, 0, 0, 0, 0),
('06IN5009', 0, 0, 0, 0, 0, 0, 0, 0),
('08EE2026', 1, 0, 1, 1, 1, 1, 1, 1),
('08ee2029', 0, 0, 0, 0, 0, 0, 0, 0),
('08IN1008', 0, 0, 0, 0, 0, 0, 0, 0),
('09ee1062', 0, 0, 0, 0, 0, 0, 0, 0),
('10CE1040', 0, 0, 0, 0, 0, 0, 0, 0),
('10CE5022', 0, 0, 0, 0, 0, 0, 0, 0),
('10EE1045', 0, 0, 0, 0, 0, 0, 0, 0),
('10EE5013', 0, 0, 1, 1, 1, 1, 0, 0),
('11CE1019', 0, 0, 0, 0, 0, 0, 0, 0),
('11EE1072', 0, 0, 0, 0, 0, 0, 0, 0),
('11in1028', 1, 1, 1, 0, 1, 1, 1, 1),
('12CE1034', 0, 0, 0, 0, 0, 0, 0, 0),
('12EE5037', 0, 0, 0, 0, 0, 0, 0, 0),
('12IN6201', 0, 0, 0, 0, 0, 0, 0, 0),
('13CE1018', 1, 0, 0, 0, 0, 0, 0, 0),
('14ET1015', 0, 0, 0, 0, 0, 0, 0, 0),
('507', 0, 0, 0, 0, 0, 0, 0, 0),
('508', 1, 0, 0, 0, 0, 0, 0, 0),
('84022', 0, 0, 0, 0, 0, 0, 0, 0),
('91018', 0, 0, 0, 0, 0, 0, 0, 0),
('Suchitra i', 0, 0, 0, 0, 0, 0, 0, 0),
('suchitraiy', 0, 0, 0, 0, 0, 0, 0, 0),
('W505655', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `approved`
--

CREATE TABLE `approved` (
  `roll` varchar(10) NOT NULL,
  `date_approved` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approved`
--

INSERT INTO `approved` (`roll`, `date_approved`) VALUES
('06ce5015', '2016-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `course_table`
--

CREATE TABLE `course_table` (
  `branch` varchar(30) NOT NULL,
  `pattern` varchar(30) NOT NULL,
  `sem` int(30) NOT NULL,
  `subject` varchar(350) NOT NULL,
  `lec_week` int(30) NOT NULL,
  `prac_week` int(30) NOT NULL,
  `twmax` int(30) NOT NULL,
  `twmin` int(30) NOT NULL,
  `thmax` int(30) NOT NULL,
  `thmin` int(30) NOT NULL,
  `prmax` int(11) NOT NULL,
  `prmin` int(11) NOT NULL,
  `ormax` int(30) NOT NULL,
  `ormin` int(30) NOT NULL,
  `iamax` int(30) NOT NULL,
  `iamin` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_table`
--

INSERT INTO `course_table` (`branch`, `pattern`, `sem`, `subject`, `lec_week`, `prac_week`, `twmax`, `twmin`, `thmax`, `thmin`, `prmax`, `prmin`, `ormax`, `ormin`, `iamax`, `iamin`) VALUES
('CE', 'OLD2002', 1, 'Applied Mathematics - I', 5, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 1, 'Applied Sciences - I', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 1, 'Basic Electrical & Electronics Engg.', 6, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 1, 'Basic work shop - I', 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 1, 'Computer Programming - I', 4, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 1, 'Engineering Mechanics ', 6, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 2, 'Applied Mathematics - II', 5, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 2, 'Applied Sciences - II', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 2, 'Basic work shop - II ', 0, 4, 100, 40, 0, 0, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 2, 'Communication Skills ', 2, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 2, 'Computer Programming - II', 4, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 2, 'Engineering Drawing ', 4, 6, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 3, 'Applied Mathematics III', 4, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 3, 'Data Structures', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 3, 'Digital Logic Design & Applications', 4, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 3, 'Discrete Structures', 3, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 3, 'Electrical Networks', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 3, 'Electronic Devices & Circuits', 3, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 4, 'Analysis of Algorithms', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('CE', 'OLD2002', 4, 'Applied Mathematics IV', 4, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 4, 'Computer Organization & Architecture', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('CE', 'OLD2002', 4, 'Database Systems ', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('CE', 'OLD2002', 4, 'Industrial Economics & Management', 4, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 4, 'Principles of Comm. Engineering', 3, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('CE', 'OLD2002', 5, 'Applied Mathematics V', 4, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 5, 'Computer Network', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 5, 'Computer Programming Lab', 0, 3, 25, 10, 0, 0, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 5, 'Microprocessor', 4, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 5, 'Presentation & Comm. Techniques', 2, 0, 25, 10, 0, 0, 0, 0, 25, 10, 0, 0),
('CE', 'OLD2002', 5, 'Principles of Digital Communication', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 5, 'Theoretical Computer Science ', 3, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2002', 6, 'Advanced Databases ', 3, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('CE', 'OLD2002', 6, 'Computer Graphics', 3, 3, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('CE', 'OLD2002', 6, 'Object Oriented Analysis & Design', 3, 3, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('CE', 'OLD2002', 6, 'Operating Systems With Unix', 3, 3, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('CE', 'OLD2002', 6, 'Systems Programming ', 3, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('CE', 'OLD2002', 6, 'Web Technology', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('CE', 'OLD2002', 7, 'Advanced  Microprocessors', 4, 3, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('CE', 'OLD2002', 7, 'Digital Signal Processing', 4, 3, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('CE', 'OLD2002', 7, 'Elective I :Mobile Computing', 4, 3, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('CE', 'OLD2002', 7, 'Intelligent Systems', 5, 4, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('CE', 'OLD2002', 7, 'Project - A', 0, 4, 25, 10, 0, 0, 0, 0, 25, 10, 0, 0),
('CE', 'OLD2002', 7, 'Software Engineering', 4, 3, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('CE', 'OLD2002', 8, 'Distributed Computing', 4, 4, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('CE', 'OLD2002', 8, 'Elective II :Dataware Housing and Mining', 5, 4, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('CE', 'OLD2002', 8, 'Multimedia Systems', 5, 4, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('CE', 'OLD2002', 8, 'Project  - B', 0, 8, 50, 20, 0, 0, 0, 0, 50, 20, 0, 0),
('CE', 'OLD2002', 8, 'System Security', 4, 3, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('CE', 'OLD2007', 1, 'Applied Chemistry - I', 3, 1, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2007', 1, 'Applied Mathematics - I', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2007', 1, 'Applied Physics - I', 3, 1, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2007', 1, 'Basic Electrical & Electronics Engg.', 5, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('CE', 'OLD2007', 1, 'Basic Work Shop - I', 0, 4, 50, 20, 0, 0, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2007', 1, 'Computer Programming - I', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2007', 1, 'Engineering Mechanics', 5, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('CE', 'OLD2007', 2, 'Applied Chemistry - II', 3, 1, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2007', 2, 'Applied Mathematics - II', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2007', 2, 'Applied Physics - II', 3, 1, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2007', 2, 'Basic Work Shop - II', 0, 4, 50, 20, 0, 0, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2007', 2, 'Communication Skills', 3, 0, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2007', 2, 'Computer Programming - II', 4, 2, 25, 10, 100, 40, 25, 10, 25, 10, 0, 0),
('CE', 'OLD2007', 2, 'Engineering Drawing', 3, 4, 25, 10, 75, 30, 50, 20, 50, 20, 0, 0),
('CE', 'OLD2007', 3, 'Applied Mathematics - III', 5, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2007', 3, 'Computer Organzation & Architecture', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2007', 3, 'Data Structure and Files', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('CE', 'OLD2007', 3, 'Digital Logic Design & Application', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2007', 3, 'Discrete Structure & Graph Theory', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2007', 3, 'Electronic Devices & Linear Circuits', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('CE', 'OLD2007', 3, 'Presentation and Communication Techniques', 2, 2, 50, 20, 0, 0, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2007', 4, 'Analog & Digital Communication', 4, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2007', 4, 'Analysis of Algorithm & Design', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('CE', 'OLD2007', 4, 'Applied Mathematics - IV', 5, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2007', 4, 'Computer Graphics', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('CE', 'OLD2007', 4, 'Database Management System', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('CE', 'OLD2007', 4, 'Operating System', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('CE', 'OLD2007', 5, 'Advance Database Management System', 4, 2, 25, 10, 100, 40, 50, 20, 0, 0, 0, 0),
('CE', 'OLD2007', 5, 'Computer Network', 4, 2, 25, 10, 100, 40, 50, 20, 0, 0, 0, 0),
('CE', 'OLD2007', 5, 'Environment Studies', 2, 0, 25, 10, 50, 20, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2007', 5, 'Microprocessor', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('CE', 'OLD2007', 5, 'Theory of Computer Science', 4, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('CE', 'OLD2007', 5, 'Web Engineering', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('CE', 'OLD2007', 6, 'Advance Computer Network', 4, 2, 25, 10, 100, 40, 50, 20, 0, 0, 0, 0),
('CE', 'OLD2007', 6, 'Advance Microprocessor', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('CE', 'OLD2007', 6, 'Data Warehouse &  Mining', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('CE', 'OLD2007', 6, 'Object Oriented Software Engineering', 4, 2, 25, 10, 100, 40, 50, 20, 0, 0, 0, 0),
('CE', 'OLD2007', 6, 'Seminar', 0, 2, 25, 10, 0, 0, 25, 10, 0, 0, 0, 0),
('CE', 'OLD2007', 6, 'System Programming & Compiler Constrution', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('CE', 'OLD2007', 7, 'Digital Signal & Image Processing', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('CE', 'OLD2007', 7, 'Elective I : (  E- Commerce )', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('CE', 'OLD2007', 7, 'Mobile Computing', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('CE', 'OLD2007', 7, 'Project - I', 0, 2, 25, 10, 0, 0, 25, 10, 0, 0, 0, 0),
('CE', 'OLD2007', 7, 'Robotics and A I', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('CE', 'OLD2007', 7, 'System Security', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('CE', 'OLD2007', 8, 'Distributed Computing', 4, 2, 25, 10, 100, 40, 0, 0, 0, 10, 0, 0),
('CE', 'OLD2007', 8, 'Elective II : ( Computer Vision )', 4, 2, 25, 10, 100, 40, 0, 0, 0, 10, 0, 0),
('CE', 'OLD2007', 8, 'Multimedia System Design', 4, 2, 25, 10, 100, 40, 0, 0, 0, 10, 0, 0),
('CE', 'OLD2007', 8, 'Project - II', 0, 4, 50, 20, 0, 0, 50, 20, 0, 0, 0, 0),
('CE', 'OLD2007', 8, 'Software Architecture', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('EL', 'OLD2002', 1, 'Applied Mathematics - I', 5, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 1, 'Applied Sciences - I', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 1, 'Basic Electricity & Electronics Engg.', 6, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 1, 'Basic work shop - I', 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 1, 'Computer Programming - I', 4, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 1, 'Engineering Mechanics ', 6, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 2, 'Applied Mathematics - II', 5, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 2, 'Applied Sciences - II', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 2, 'Basic work shop - II ', 0, 4, 100, 40, 0, 0, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 2, 'Communication Skills ', 2, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 2, 'Computer Programming - II', 4, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 2, 'Engineering Drawing ', 4, 6, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 3, 'Applied Mathematics III', 4, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 3, 'Basics of Communication Engineering', 3, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 3, 'Digital Design I', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 3, 'Electrical Networks Analysis & Synthesis', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 3, 'Electronic Circuts Analysis & Design I', 4, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 3, 'Numerical Techniques', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 4, 'Applied Mathematics IV', 4, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 4, 'Control Systems Engineering', 3, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2002', 4, 'Digital Design II', 3, 2, 25, 10, 100, 40, 25, 10, 25, 10, 0, 0),
('EL', 'OLD2002', 4, 'Electrical Machines & Instruments', 3, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2002', 4, 'Electronic Circuts Analysis & Design  II', 4, 3, 25, 10, 100, 40, 25, 10, 25, 10, 0, 0),
('EL', 'OLD2002', 4, 'Principles of  Microprocessor Systems', 3, 3, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2002', 5, 'Applied Mathematics V', 4, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 5, 'Continuous Time Signals & Systems', 6, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 5, 'Electronic Measuring Instrument', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 5, 'Electronics Workshop', 0, 3, 0, 0, 0, 0, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2002', 5, 'Engg. Electromagetics', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 5, 'Microprocessors & Microcontrollers', 3, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 5, 'Presentation & Communication Tech.', 2, 2, 25, 10, 0, 0, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2002', 6, 'Analog Integrated Circuits & Applications', 4, 3, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2002', 6, 'Communication System', 3, 3, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2002', 6, 'Computer Organization', 3, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2002', 6, 'Discrete Time Signal Processing', 3, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2002', 6, 'Industrial Economics & Magagement', 3, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 6, 'Microwave & Optical Fiber Communication', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2002', 7, 'Basics of  VLSI', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2002', 7, 'Digital Communication', 3, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2002', 7, 'Elective I : ( Image Processing )', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2002', 7, 'Filter Theory & Applications', 4, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 7, 'Instrumentation Systems', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 7, 'Project  A', 4, 0, 25, 10, 0, 0, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2002', 8, 'Data Communication & Networking', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2002', 8, 'Elective II : ( Robotics )', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2002', 8, 'Mechatronics', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2002', 8, 'Power Electronics ', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2002', 8, 'Project  B', 0, 8, 50, 20, 0, 0, 0, 0, 50, 20, 0, 0),
('EL', 'OLD2007', 1, 'Applied Chemistry - I', 3, 1, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2007', 1, 'Applied Mathematics - I', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2007', 1, 'Applied Physics - I', 3, 1, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2007', 1, 'Basic Electrical & Electronics Engg.', 5, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('EL', 'OLD2007', 1, 'Basic Work Shop - I', 0, 4, 50, 20, 0, 0, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2007', 1, 'Computer Programming - I', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2007', 1, 'Engineering Mechanics', 5, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('EL', 'OLD2007', 2, 'Applied Chemistry - II', 3, 1, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2007', 2, 'Applied Mathematics - II', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2007', 2, 'Applied Physics - II', 3, 1, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2007', 2, 'Basic Work Shop - II', 0, 4, 50, 20, 0, 0, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2007', 2, 'Communication Skills', 3, 0, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2007', 2, 'Computer Programming - II', 4, 2, 25, 10, 100, 40, 25, 10, 25, 10, 0, 0),
('EL', 'OLD2007', 2, 'Engineering Drawing', 3, 4, 25, 10, 75, 30, 50, 20, 50, 20, 0, 0),
('EL', 'OLD2007', 3, 'Basic of Electronic Circuits', 4, 2, 25, 10, 100, 40, 50, 20, 25, 10, 0, 0),
('EL', 'OLD2007', 3, 'Control System', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2007', 3, 'Digital System Design I', 4, 2, 25, 10, 100, 40, 50, 20, 25, 10, 0, 0),
('EL', 'OLD2007', 3, 'Electrical Network Analysis and Synthesis', 4, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2007', 3, 'Engineering Mathematics', 5, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2007', 3, 'Presentation and Communication Techniques', 4, 0, 50, 20, 0, 0, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2007', 4, 'Advanced Engineering Mathematics', 4, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2007', 4, 'Basics of Analog and Digital Communication Systems', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2007', 4, 'Digital System Design - II', 4, 2, 25, 10, 100, 40, 50, 20, 25, 10, 0, 0),
('EL', 'OLD2007', 4, 'Electronic and Electrical Measuring Instruments & Machine', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2007', 4, 'Electronics Circuits Analysis and Design', 4, 2, 25, 10, 100, 40, 50, 20, 25, 10, 0, 0),
('EL', 'OLD2007', 4, 'Electronics Wokshop - I', 0, 4, 25, 10, 0, 0, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2007', 5, 'Continuous Time Signal & System', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2007', 5, 'Digital Communication and Coding Techniques', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2007', 5, 'Electromagnetic Engineering', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2007', 5, 'Electronics Workshop - II', 0, 4, 0, 0, 0, 0, 0, 0, 50, 20, 0, 0),
('EL', 'OLD2007', 5, 'Environmental Studies', 3, 0, 25, 10, 50, 20, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2007', 5, 'Linear Integrated Circuits and Design', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('EL', 'OLD2007', 5, 'Microprocessor and Microcontroller - I', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('EL', 'OLD2007', 6, 'Discrete Time Signal and System', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2007', 6, 'Elective : Communication Systems & Application', 4, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2007', 6, 'Electronics Instrumentation System', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2007', 6, 'Microprocessor and Microcontroller - II', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('EL', 'OLD2007', 6, 'Microwave Devices and Circuits', 4, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('EL', 'OLD2007', 6, 'Power Electronics', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('EL', 'OLD2007', 7, 'Communication Networks', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2007', 7, 'Elective I : ( Digital Image Processing Design )', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2007', 7, 'Filter Design', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2007', 7, 'Power Electronics and Drives', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2007', 7, 'Project - A', 0, 4, 25, 10, 0, 0, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2007', 7, 'VLSI Design', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2007', 8, 'Advance VLSI Design', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2007', 8, 'Elective II : ( Advanced Nteworking Technologies )', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2007', 8, 'Embedded Systems and Real Time Programming', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('EL', 'OLD2007', 8, 'Project - II', 0, 8, 50, 20, 0, 0, 0, 0, 100, 40, 0, 0),
('EL', 'OLD2007', 8, 'Robotics and Automation', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2002', 1, 'Applied Mathematics - I', 5, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 1, 'Applied Sciences - I', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 1, 'Basic Electrical & Electronics Engg.', 6, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 1, 'Basic work shop I', 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 1, 'Computer Programming - I', 4, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 1, 'Engineering Mechanics ', 6, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 2, 'Applied Mathematics - II', 5, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 2, 'Applied Sciences - II', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 2, 'Basic work shop II ', 0, 4, 100, 40, 0, 0, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 2, 'Communication Skills ', 2, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 2, 'Computer Programming - II', 4, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 2, 'Engineering Drawing ', 4, 6, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 3, 'Applied Mathematics III', 4, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 3, 'Electrical Networks', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 3, 'Electronics I', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 3, 'Logic Design', 3, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 3, 'Numerical Techniques', 4, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 3, 'Principles of Control Systems', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 4, 'Applied Mathematics IV', 4, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 4, 'Electromagnetic Wave Theory', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 4, 'Electronics   II', 4, 3, 25, 10, 100, 40, 25, 10, 25, 10, 0, 0),
('ET', 'OLD2002', 4, 'Principles of Communication Engg.', 3, 3, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2002', 4, 'Signals & System', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 4, 'Wave Shaping Techniques', 3, 2, 25, 10, 100, 40, 25, 10, 25, 10, 0, 0),
('ET', 'OLD2002', 5, 'Applied Mathematics V', 4, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 5, 'Communication Circuits', 3, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 5, 'Computer Architecture & Organization', 3, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 5, 'Elements of Microelectronics', 4, 1, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 5, 'Elements of Microprocessor', 4, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 5, 'Filter Theory', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 5, 'Presentation & Communication Tech.', 2, 0, 25, 10, 0, 0, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 6, 'Antenna & Wave Propagation', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2002', 6, 'Electronics  Instrumentation', 3, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2002', 6, 'Industrial Economics & Management', 3, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 6, 'Microcontrollers & Embeded Prog.', 4, 3, 25, 10, 100, 40, 25, 10, 25, 10, 0, 0),
('ET', 'OLD2002', 6, 'Probabiligy & Random Processes', 3, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 6, 'TV & Video Engineering', 3, 3, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2002', 7, 'Digital Communication', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2002', 7, 'Discrete Time Signal Processing', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2002', 7, 'Elective - I : ( Radar Engineering )', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2002', 7, 'Microwave Devices & Circuits', 3, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2002', 7, 'Mobile Communication System', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 7, 'Project -A', 4, 0, 25, 10, 0, 0, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2002', 8, 'Computer Communication Networks', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2002', 8, 'Elective - II :(Internet Communication Engg. )', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2002', 8, 'Optical Fibre Communication', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2002', 8, 'Project -B', 0, 8, 50, 20, 0, 0, 0, 0, 50, 20, 0, 0),
('ET', 'OLD2002', 8, 'Satellite Communication', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2007', 1, 'Applied Chemistry - I', 3, 1, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2007', 1, 'Applied Mathematics - I', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2007', 1, 'Applied Physics - I', 3, 1, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2007', 1, 'Basic Electrical & Electronics Engg.', 5, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('ET', 'OLD2007', 1, 'Basic Work Shop - I', 0, 4, 50, 20, 0, 0, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2007', 1, 'Computer Programming - I', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2007', 1, 'Engineering Mechanics', 5, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('ET', 'OLD2007', 2, 'Applied Chemistry - II', 3, 1, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2007', 2, 'Applied Mathematics - II', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2007', 2, 'Applied Physics - II', 3, 1, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2007', 2, 'Basic Work Shop - II', 0, 4, 50, 20, 0, 0, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2007', 2, 'Communication Skills', 3, 0, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2007', 2, 'Computer Programming - II', 4, 2, 25, 10, 100, 40, 25, 10, 25, 10, 0, 0),
('ET', 'OLD2007', 2, 'Engineering Drawing', 3, 4, 25, 10, 75, 30, 50, 20, 50, 20, 0, 0),
('ET', 'OLD2007', 3, 'Applied Mathematics III', 4, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2007', 3, 'Digital Logic Design', 4, 2, 25, 10, 100, 40, 50, 20, 25, 10, 0, 0),
('ET', 'OLD2007', 3, 'Electrical Networks', 4, 2, 25, 10, 100, 40, 50, 20, 25, 10, 0, 0),
('ET', 'OLD2007', 3, 'Electronic Devices & Circuits - I', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2007', 3, 'Electronic Instrumentation', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2007', 3, 'Presentation and Communication Techniques', 2, 2, 25, 20, 0, 0, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2007', 4, 'Analog & Digital IC Design & Applications', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2007', 4, 'Applied Mathematics IV', 4, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2007', 4, 'Electromagnetic Wave Theory', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2007', 4, 'Electronic Devices & Circuits - II', 4, 2, 25, 10, 100, 40, 50, 20, 25, 10, 0, 0),
('ET', 'OLD2007', 4, 'Principles of Communication Engineering', 4, 2, 25, 10, 100, 40, 50, 20, 25, 10, 0, 0),
('ET', 'OLD2007', 4, 'Simulation Software Workshop', 0, 2, 25, 10, 0, 0, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2007', 5, 'Electronics Hardware Workshop', 0, 2, 0, 0, 0, 0, 0, 0, 50, 20, 0, 0),
('ET', 'OLD2007', 5, 'Environment Studies', 2, 0, 25, 10, 50, 20, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2007', 5, 'Microprocessor and Microcontroller - I', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('ET', 'OLD2007', 5, 'Principles of Control Systems', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2007', 5, 'Random Singal Analysis', 4, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2007', 5, 'RF Circuits Design', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('ET', 'OLD2007', 5, 'Signal & Systems', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2007', 6, 'Antenna & Wave Propagation', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2007', 6, 'Digital Communication', 4, 2, 25, 10, 100, 40, 25, 10, 25, 10, 0, 0),
('ET', 'OLD2007', 6, 'Elective : Radar Engineering', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2007', 6, 'Industrial Economic & Telecomm Regulation', 2, 0, 25, 10, 50, 20, 0, 0, 0, 0, 0, 0),
('ET', 'OLD2007', 6, 'Microprocessor and Microcontroller - II', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('ET', 'OLD2007', 6, 'TV & Video', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2007', 7, 'Computer Communication Network', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2007', 7, 'Discrete Time Signal Processing', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2007', 7, 'Elective I : ( Data Compression and Encryption )', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2007', 7, 'Fundamentals of Microwave Engineering', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2007', 7, 'Mobile Communication Systems', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2007', 7, 'Project  Stage - I', 0, 4, 25, 10, 0, 0, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2007', 8, 'Advance Microwave Engineering', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2007', 8, 'Elective II : ( Satellite Communication )', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2007', 8, 'Optical Fibre Communication', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('ET', 'OLD2007', 8, 'Project Stage - II', 0, 8, 50, 20, 0, 0, 0, 0, 100, 40, 0, 0),
('ET', 'OLD2007', 8, 'Wireless Network', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2002', 1, 'Applied Mathematics - I', 5, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 1, 'Applied Sciences - I', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 1, 'Basic Electrical & Electronics  Engg.', 6, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 1, 'Basic work shop I', 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 1, 'Computer Programming - I', 4, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 1, 'Engineering Mechanics ', 6, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 2, 'Applied Mathematics ? II', 5, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 2, 'Applied Sciences - II', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 2, 'Basic work shop II ', 0, 4, 100, 40, 0, 0, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 2, 'Communication Skills ', 2, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 2, 'Computer Programming - II', 4, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 2, 'Engineering Drawing', 4, 6, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 3, 'Applied Mathematics III', 4, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 3, 'Electrical Networks', 3, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 3, 'Electrical Technology & Instruments', 4, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 3, 'Electronic Devices & Circuits', 4, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 3, 'Engineering Materials & Components', 3, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 3, 'Fundamentals of Process Measurements', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 4, 'Analytical Instrumentation', 3, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2002', 4, 'Applied Mathematics IV', 4, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 4, 'Basic Control Systems', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2002', 4, 'Industrial Electronics', 4, 2, 25, 10, 100, 40, 25, 10, 25, 10, 0, 0),
('IN', 'OLD2002', 4, 'Logic Circuits', 3, 2, 25, 10, 100, 40, 25, 10, 25, 10, 0, 0),
('IN', 'OLD2002', 4, 'Transducers for Instrumentation', 3, 2, 25, 10, 100, 40, 25, 10, 25, 10, 0, 0),
('IN', 'OLD2002', 5, 'Applied Mathematics V', 4, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 5, 'Control System & Components', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 5, 'Electronic & Digital Instrumentation', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 5, 'Elements of Microprocessor', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 5, 'Presentation & Communication Techniques', 2, 2, 25, 10, 0, 0, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 5, 'Principles of Communication Engg.', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 5, 'Signals & Systems', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 6, 'Advanced Microprocessor', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2002', 6, 'Computer Comm. Network', 3, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2002', 6, 'Control System Engineering', 3, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2002', 6, 'Industrial Eco. & Mgmt.', 3, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 6, 'Linear Integrated Circuits & App.', 4, 2, 25, 10, 100, 40, 25, 10, 25, 10, 0, 0),
('IN', 'OLD2002', 6, 'Process Instru. Systems', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2002', 7, 'Advance Control System', 4, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 7, 'Digital Signal Processing', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2002', 7, 'Elective I :( Advance Instrumentation)', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2002', 7, 'Industrial Process Control', 3, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2002', 7, 'Project  Planning & Engineering', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 7, 'Project - I', 4, 0, 25, 10, 0, 0, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2002', 8, 'Biomedical Instrumentation', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2002', 8, 'Digital Control System', 4, 2, 25, 10, 100, 40, 25, 10, 25, 10, 0, 0),
('IN', 'OLD2002', 8, 'Elective II :(Nuclear Instrumentation)', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2002', 8, 'Instrumentation System Design', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2002', 8, 'Project  - II', 0, 8, 50, 20, 0, 0, 0, 0, 50, 20, 0, 0),
('IN', 'OLD2007', 1, 'Applied Chemistry - I', 3, 1, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2007', 1, 'Applied Mathematics - I', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2007', 1, 'Applied Physics - I', 3, 1, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2007', 1, 'Basic Electrical & Electronics Engg.', 5, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('IN', 'OLD2007', 1, 'Basic Work Shop - I', 0, 4, 50, 20, 0, 0, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2007', 1, 'Computer Programming - I', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2007', 1, 'Engineering Mechanics', 5, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('IN', 'OLD2007', 2, 'Applied Chemistry - II', 3, 1, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2007', 2, 'Applied Mathematics - II', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2007', 2, 'Applied Physics - II', 3, 1, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2007', 2, 'Basic Work Shop - II', 0, 4, 50, 20, 0, 0, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2007', 2, 'Communication Skills', 3, 0, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2007', 2, 'Computer Programming - II', 4, 2, 25, 10, 100, 40, 25, 10, 25, 10, 0, 0),
('IN', 'OLD2007', 2, 'Engineering Drawing', 3, 4, 25, 10, 75, 30, 50, 20, 50, 20, 0, 0),
('IN', 'OLD2007', 3, 'Analog Electronics', 4, 2, 25, 10, 100, 40, 50, 20, 0, 0, 0, 0),
('IN', 'OLD2007', 3, 'Digital Electronics', 4, 2, 25, 10, 100, 40, 50, 20, 0, 0, 0, 0),
('IN', 'OLD2007', 3, 'Electrical Network', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2007', 3, 'Engineering Mathematics - III', 5, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2007', 3, 'Presentation & Communication Techniques', 2, 2, 50, 20, 0, 0, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2007', 3, 'Transducers - I', 4, 2, 25, 10, 100, 40, 50, 20, 25, 10, 0, 0),
('IN', 'OLD2007', 4, 'Analytical Instrumentation', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2007', 4, 'Application Software Practices - I', 0, 2, 25, 10, 0, 0, 50, 20, 0, 0, 0, 0),
('IN', 'OLD2007', 4, 'Electrical Technology & Instruments', 5, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2007', 4, 'Engineering Mathematics - IV', 5, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2007', 4, 'Feed Back Control System', 4, 2, 25, 10, 100, 40, 50, 20, 0, 0, 0, 0),
('IN', 'OLD2007', 4, 'Transducers - II', 4, 2, 25, 10, 100, 40, 50, 20, 25, 10, 0, 0),
('IN', 'OLD2007', 5, 'Application Software Practics -II', 0, 2, 25, 10, 0, 0, 25, 10, 0, 0, 0, 0),
('IN', 'OLD2007', 5, 'Communications Systems', 4, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2007', 5, 'Control System Components', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2007', 5, 'Environment Studies', 2, 1, 25, 10, 50, 20, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2007', 5, 'Microprocessors & Applications', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('IN', 'OLD2007', 5, 'Signal Conditioning Circuit Design', 4, 2, 25, 10, 100, 40, 25, 10, 25, 10, 0, 0),
('IN', 'OLD2007', 5, 'Signals & Systems', 4, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2007', 6, 'Control System Design', 4, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2007', 6, 'Digital Signal Processing', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('IN', 'OLD2007', 6, 'Embedded Systems for Instrumentation', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('IN', 'OLD2007', 6, 'Industrial Data Communications', 4, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IN', 'OLD2007', 6, 'Power Electronics & Drives', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('IN', 'OLD2007', 6, 'Process Instrumentation Systems', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2007', 7, 'Advanced Control Systems', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2007', 7, 'Biomedical Instrumentation', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2007', 7, 'Elective I : ( Image Processing )', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2007', 7, 'Industrial Process Control', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2007', 7, 'Process Automation', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2007', 7, 'Project - I', 0, 2, 25, 10, 0, 0, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2007', 8, 'Batch Process Automation', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2007', 8, 'Elective II : ( Digital Control System )', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2007', 8, 'Instrument & System Design', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2007', 8, 'Instrumentation Project Documentation & Execution', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IN', 'OLD2007', 8, 'Project - II', 0, 8, 50, 20, 0, 0, 0, 0, 50, 20, 0, 0),
('IT', 'OLD2002', 1, 'Applied Mathematics ? I', 5, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 1, 'Applied Sciences - I', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 1, 'Basic Electrical & Electronics Engg.', 6, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 1, 'Basic work shop I', 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 1, 'Computer Programming ', 4, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 1, 'Engineering Mechanics ', 6, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 2, 'Applied Mathematics  - II', 5, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 2, 'Applied Sciences - II', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 2, 'Basic work shop II ', 0, 4, 100, 40, 0, 0, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 2, 'Communication Skills ', 2, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 2, 'Computer Programming ', 4, 3, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 2, 'Engineering Drawing ', 4, 6, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 3, 'Applied Mathematics - III', 4, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 3, 'Digital Logic Design & Applications', 4, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 3, 'Discrete Structures', 3, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 3, 'Electrical Networks', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 3, 'Electronic Devices & Circuits', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 3, 'Foundation of Information Technology', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 4, 'Applied Mathematics - IV', 4, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 4, 'Computer Organization & Architecture', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2002', 4, 'Database Structures & Algorithms', 3, 3, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('IT', 'OLD2002', 4, 'Industrial Economics & Management', 4, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 4, 'InformationTheory & Coding', 4, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 4, 'Principles of Comm. Engineering', 3, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2002', 5, 'Applied Mathematics - V', 4, 0, 0, 0, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 5, 'Automata Theory', 5, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 5, 'Computer Network', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 5, 'Computer Programming Lab', 0, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 5, 'Digital Communication', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 5, 'Microprocessor', 5, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2002', 5, 'Presentation & Comm. Techniques', 3, 0, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('IT', 'OLD2002', 6, 'Database Systems', 3, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2002', 6, 'Digital Signal Processing', 3, 3, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2002', 6, 'Internet Technology & Applications', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2002', 6, 'Object Oriented Analysis & Design', 3, 3, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('IT', 'OLD2002', 6, 'Software Engineering', 3, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2002', 6, 'Systems Software Operating System', 3, 3, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('IT', 'OLD2002', 7, 'Computer Simulation & Modelling', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2002', 7, 'Elective I : ( Advance Database Systems )', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2002', 7, 'Image Processing', 3, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2002', 7, 'Management Information Systems', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2002', 7, 'Mobile Computing', 3, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2002', 7, 'Project - A', 4, 0, 25, 10, 0, 0, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2002', 8, 'Data Warehousing & Mining', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2002', 8, 'Elective II : ( Robotics )', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2002', 8, 'Multimedia Systems', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2002', 8, 'Project  - B', 0, 8, 50, 20, 0, 0, 0, 0, 50, 20, 0, 0),
('IT', 'OLD2002', 8, 'Project Management', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2007', 1, 'Applied Chemistry - I', 3, 1, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2007', 1, 'Applied Mathematics - I', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2007', 1, 'Applied Physics - I', 3, 1, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2007', 1, 'Basic Electrical & Electronics Engg.', 5, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('IT', 'OLD2007', 1, 'Basic Work Shop - I', 0, 4, 50, 20, 0, 0, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2007', 1, 'Computer Programming - I', 3, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2007', 1, 'Engineering Mechanics', 5, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('IT', 'OLD2007', 2, 'Applied Chemistry - II', 3, 1, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2007', 2, 'Applied Mathematics - II', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2007', 2, 'Applied Physics - II', 3, 1, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2007', 2, 'Basic Work Shop - II', 0, 4, 50, 20, 0, 0, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2007', 2, 'Communication Skills', 3, 0, 25, 10, 75, 30, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2007', 2, 'Computer Programming - II', 4, 2, 25, 10, 100, 40, 25, 10, 25, 10, 0, 0),
('IT', 'OLD2007', 2, 'Engineering Drawing', 3, 4, 25, 10, 75, 30, 50, 20, 50, 20, 0, 0),
('IT', 'OLD2007', 3, 'Applied Mathematics III', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2007', 3, 'Communication & Presentation Techniques', 4, 0, 50, 20, 0, 0, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2007', 3, 'Data Structure & Algorithms', 4, 2, 25, 10, 100, 40, 50, 20, 0, 0, 0, 0),
('IT', 'OLD2007', 3, 'Digital Logic Design & Applications', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2007', 3, 'Electronics Devices & Circuits', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2007', 3, 'GUI & Database Management', 4, 2, 25, 10, 100, 40, 50, 20, 25, 10, 0, 0),
('IT', 'OLD2007', 4, 'Computaional Mathematics', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2007', 4, 'Financial Accounting & Management of Tech. Innovation', 4, 0, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2007', 4, 'Internt Programming', 2, 4, 25, 10, 100, 40, 25, 10, 25, 10, 0, 0),
('IT', 'OLD2007', 4, 'Microprcocessor & Microcontrollers', 4, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2007', 4, 'Networking Technology for Digital Devices', 4, 2, 25, 10, 100, 40, 25, 10, 25, 10, 0, 0),
('IT', 'OLD2007', 4, 'Principles of Comm. Engineering', 4, 2, 25, 10, 100, 40, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2007', 5, 'Computer Graphics & Virtual Reality Systems', 4, 2, 25, 10, 100, 40, 25, 10, 25, 10, 0, 0),
('IT', 'OLD2007', 5, 'Convergence of Tech. & Networkin in Coomunication', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2007', 5, 'Environmental Studies', 2, 0, 25, 10, 50, 20, 0, 0, 0, 0, 0, 0),
('IT', 'OLD2007', 5, 'Manufacturing Processes, Planning & Systems', 4, 0, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2007', 5, 'Object Oriented Analysis & Design', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('IT', 'OLD2007', 5, 'Open Source Sofware Laboratory', 0, 2, 25, 10, 0, 0, 25, 10, 0, 0, 0, 0),
('IT', 'OLD2007', 5, 'Operating System for Computational Devices', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2007', 6, 'Database Technologies', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2007', 6, 'Information & Network Security', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2007', 6, 'Information Technology for Management of Enterprise', 4, 0, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2007', 6, 'Middleware & Enterprise Integration Technologies', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2007', 6, 'Programming for Mobile & Remote Computers', 4, 2, 25, 10, 100, 40, 25, 10, 0, 0, 0, 0),
('IT', 'OLD2007', 6, 'Software Engineering', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2007', 7, 'Data Warehousing, Mining & Bussiness Intelligence', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2007', 7, 'Digital Signal & Image Processing', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2007', 7, 'Elective I : ( Artificial Intelligence )', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2007', 7, 'Project - A', 0, 4, 25, 10, 0, 0, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2007', 7, 'Simulation & Modeling', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2007', 7, 'Software Testing and Quality Assurance', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2007', 8, 'Elective II : ( Mobile & E - Commerce )', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2007', 8, 'Gaming Architecture and Programming', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2007', 8, 'Information Storage Management & Disaster Recovery', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0),
('IT', 'OLD2007', 8, 'Project - II', 0, 4, 50, 20, 0, 0, 0, 0, 50, 20, 0, 0),
('IT', 'OLD2007', 8, 'Software Project Management', 4, 2, 25, 10, 100, 40, 0, 0, 25, 10, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `course_table_rev`
--

CREATE TABLE `course_table_rev` (
  `branch` varchar(30) NOT NULL,
  `pattern` varchar(30) NOT NULL,
  `sem` int(30) NOT NULL,
  `subject` varchar(350) NOT NULL,
  `coursecredits_th` varchar(10) NOT NULL,
  `coursecredits_tw` varchar(10) NOT NULL,
  `grade_ese` varchar(1) NOT NULL,
  `grade_op` varchar(1) NOT NULL,
  `grade_or` varchar(1) NOT NULL,
  `grade_ia` varchar(1) NOT NULL,
  `grade_tw` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_table_rev`
--

INSERT INTO `course_table_rev` (`branch`, `pattern`, `sem`, `subject`, `coursecredits_th`, `coursecredits_tw`, `grade_ese`, `grade_op`, `grade_or`, `grade_ia`, `grade_tw`) VALUES
('CE', 'REV2012', 1, 'Applied Chemistry - I', '3', '0.5', '', '-', '-', '', ''),
('CE', 'REV2012', 1, 'Applied Mathematics - I', '4', '1', '', '-', '-', '', ''),
('CE', 'REV2012', 1, 'Applied Physics - I', '3', '0.5', '', '-', '-', '', ''),
('CE', 'REV2012', 1, 'Basic Electrical & Electronics Engg.', '4', '1', '', '-', '', '', ''),
('CE', 'REV2012', 1, 'Basic Work Shop Practice ', '2', '-', '-', '-', '-', '-', ''),
('CE', 'REV2012', 1, 'Engineering Mechanics', '5', '1', '', '-', '', '', ''),
('CE', 'REV2012', 1, 'Environmental Studies (EVS)', '2', '-', '', '-', '-', '', '-'),
('CE', 'REV2013', 1, 'Applied Mathematics - I', '4', '1', '', '', '', '', ''),
('CE', 'REV2014', 1, 'Applied Physics - I', '3', '0.5', '', '', '', '', ''),
('CE', 'REV2015', 1, 'Applied Chemistry - I', '3', '0.5', '', '', '', '', ''),
('CE', 'REV2016', 1, 'Engineering Mechanics', '5', '1', '', '', '', '', ''),
('CE', 'REV2017', 1, 'Basic Electrical & Electronics Engg.', '4', '1', '', '', '', '', ''),
('CE', 'REV2018', 1, 'Environmental Studies (EVS)', '2', '-', '', '', '', '', ''),
('CE', 'REV2019', 1, 'Basic Work Shop Practice I', '2', '-', '', '', '', '', ''),
('CE', 'REV2020', 2, 'Applied Mathematics - II', '4', '1', '', '', '', '', ''),
('CE', 'REV2021', 2, 'Applied Physics - II', '3', '0.5', '', '', '', '', ''),
('CE', 'REV2022', 2, 'Applied Chemistry - II', '3', '0.5', '', '', '', '', ''),
('CE', 'REV2023', 2, 'Engineering Drawing', '3', '2', '', '', '', '', ''),
('CE', 'REV2024', 2, 'Structured Programming Aproach', '4', '1', '', '', '', '', ''),
('CE', 'REV2025', 2, 'Communication Skills', '2', '1', '', '', '', '', ''),
('CE', 'REV2026', 2, 'Basic Work Shop Practice II', '2', '-', '', '', '', '', ''),
('CE', 'REV2027', 3, 'Applied Mathematics - III', '4', '1', '', '', '', '', ''),
('CE', 'REV2028', 3, 'Object Oriented Programming Methodology', '4', '1', '', '', '', '', ''),
('CE', 'REV2029', 3, 'Data Structures', '4', '1', '', '', '', '', ''),
('CE', 'REV2030', 3, 'Digital Logic Design and Analysis', '3', '1', '', '', '', '', ''),
('CE', 'REV2031', 3, 'Discrete Structures', '4', '-', '', '', '', '', ''),
('CE', 'REV2032', 3, 'Electronic Circuits & Communication Fundamental', '4', '1', '', '', '', '', ''),
('CE', 'REV2033', 4, 'Applied Mathematics - IV', '4', '1', '', '', '', '', ''),
('CE', 'REV2034', 4, 'Analysis of Algorithms', '4', '1', '', '', '', '', ''),
('CE', 'REV2035', 4, 'Computer Organization & Architecture', '4', '1', '', '', '', '', ''),
('CE', 'REV2036', 4, 'Database Mangement System', '4', '1', '', '', '', '', ''),
('CE', 'REV2037', 4, 'Theoretial Computer Science', '4', '-', '', '', '', '', ''),
('CE', 'REV2038', 4, 'Computer Graphics', '3', '1', '', '', '', '', ''),
('CE', 'REV2039', 5, 'Microprocessor', '4', '1', '', '', '', '', ''),
('CE', 'REV2040', 5, 'Operating Systems', '4', '1', '', '', '', '', ''),
('CE', 'REV2041', 5, 'Structured & Object Oriented Analysis & Design', '4', '1', '', '', '', '', ''),
('CE', 'REV2042', 5, 'Computer Networks', '4', '1', '', '', '', '', ''),
('CE', 'REV2043', 5, 'Web Technologies Laboratory', '-', '2', '', '', '', '', ''),
('CE', 'REV2044', 5, 'Business Communication & Ethics', '-', '2', '', '', '', '', ''),
('CE', 'REV2045', 6, 'System Programming & Compiler Construction ', '4', '1', '', '', '', '', ''),
('CE', 'REV2046', 6, 'Software Engineering', '4', '1', '', '', '', '', ''),
('CE', 'REV2047', 6, 'Distributed Databases', '4', '1', '', '', '', '', ''),
('CE', 'REV2048', 6, 'Mobile Communication and Computing', '4', '1', '', '', '', '', ''),
('CE', 'REV2049', 6, 'Elective - I : Project Mangement', '-', '2', '', '', '', '', ''),
('CE', 'REV2050', 6, 'Network Programming Laboratory', '-', '2', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `current_status`
--

CREATE TABLE `current_status` (
  `roll` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current_status`
--

INSERT INTO `current_status` (`roll`, `status`) VALUES
('00CE0000', 1),
('00EE016', 0),
('01CE136', 0),
('01CE506', 0),
('02et1042', 0),
('02ET2015', 0),
('03CE2138', 0),
('03ET2080', 0),
('05CE1000', 1),
('05CE1033', 2),
('05CE2032', 0),
('05EE1037', 0),
('05EE2041', 1),
('06CE5015', 1),
('06CE5016', 5),
('06IN1005', 0),
('06IN5009', 0),
('08EE2026', 0),
('08ee2029', 0),
('08IN1008', 0),
('09ee1062', 0),
('10CE1040', 0),
('10CE5022', 0),
('10EE1045', 0),
('10EE5013', 0),
('11CE1019', 1),
('11EE1072', 1),
('11in1028', 0),
('12CE1034', 0),
('12EE5037', 0),
('12IN6201', 0),
('13CE1018', 0),
('14ET1015', 0),
('507', 0),
('508', 0),
('84022', 0),
('91018', 0),
('Suchitra i', 0),
('suchitraiy', 0),
('W505655', 0);

-- --------------------------------------------------------

--
-- Table structure for table `elective`
--

CREATE TABLE `elective` (
  `roll` varchar(50) NOT NULL,
  `sem` int(11) NOT NULL,
  `electivename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elective`
--

INSERT INTO `elective` (`roll`, `sem`, `electivename`) VALUES
('00CE0000', 7, 'Soft Computing');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `roll` varchar(10) NOT NULL,
  `branch` varchar(500) NOT NULL,
  `year_of_pass` int(11) NOT NULL,
  `name_full` varchar(100) NOT NULL,
  `present_addr` varchar(400) NOT NULL,
  `permanent_addr` varchar(400) NOT NULL,
  `email_id` varchar(60) NOT NULL,
  `telR` varchar(10) NOT NULL,
  `telM` varchar(10) NOT NULL,
  `present_status` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `otp` varchar(30) DEFAULT NULL,
  `pattern` varchar(20) NOT NULL,
  `directsy` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll`, `branch`, `year_of_pass`, `name_full`, `present_addr`, `permanent_addr`, `email_id`, `telR`, `telM`, `present_status`, `password`, `otp`, `pattern`, `directsy`) VALUES
('00CE0000', 'CE', 2000, 'Avinash Maurya', 'xyz', 'xyz', 'transcript.rait@gmail.com', '9876543210', '9876543210', 'WORKING', 'Avinash09', '0', 'OLD2007', 'N'),
('00EE016', 'EL', 2004, 'Jio Xavier', '40 Albatross Gardens, London, CR2 8QX', '40 Albatross Gardens, London, CR2 8QX', 'jio.xavier@gmail.com', '0044780879', '0044780879', 'Working', 'jxavier1a', '0', 'OLD2002', 'N'),
('01CE136', 'CE', 2005, 'Kushal Rajan Pandhi', '603, B5, Vikas Complex, Castle Mill', 'Compound, Thane west 400601', 'kushal.pandhi@gmail.com', '9819115933', '9820616409', 'Working', 'p@SSword123', '0', 'OLD2002', 'N'),
('01CE506', 'CE', 2005, 'Darshan Mody', 'NA', 'F 403 Vikram Apartments New Maneklal Estate LBS Marg Ghatkopar W Mumbai 400086', 'darshanmody@gmail.com', '9967799617', '9967799617', 'Working', 'mody_tinu_8770', 'b7469cb8', 'OLD2002', 'Y'),
('02et1042', 'ET', 2008, 'Tanmay Jagannath Sinnarkar', '01/ Shreeji Krupa Dham, Plo No114, Sector 21, Nerul, Navi Mumbai.', '01/ Shreeji Krupa Dham, Plo No114, Sector 21, Nerul, Navi Mumbai.', 'tanmay.sinnarkar@gmail.com', '0222770989', '+919820466', 'Working', 'Tanmay1983', '0', 'OLD2002', 'N'),
('02ET2015', 'ET', 2006, 'Swapnil Maruti Jadhav', '2743 Woodwind Road, Carlsbad, CA 92008', 'Plot No. E-34, Sector 12, Kharghar, Maharashtra, India 410210', 'jadhavswapnil@gmail.com', '+140863637', '+140863637', 'Working', '02ET2015', '0', 'OLD2002', 'N'),
('03CE2138', 'CE', 2010, 'Hari Murugesan', 'Plot no 8 unit no 2 sector 28 Vashi Navi Mumbai 400703', 'Same as Above', 'hari.murugesan@gmail.com', '0222789011', '9833493875', 'Working', 'welcome', '0', 'OLD2007', 'N'),
('03ET2080', 'ET', 2007, 'Gaurav', '', '202 Shivkrupa CHS, RDP 6, Plot no 196, Sector 6, Charkop, Kandiwali (W), Mumbai 400067', 'gchatterji@gmail.com', '', '9757018250', 'Student', 'animals', '0', 'REV2012', 'N'),
('05CE1000', 'CE', 2009, 'Smita Kashinath Patil', 'sion', 'sion', 'smitapatilbe@gmail.com', '9930938699', '9930938699', 'Working', 'Smita123', '0', 'OLD2002', 'N'),
('05CE1033', 'CE', 2009, 'Sarthak Krishna Nayak', 'B6 Anupam Complex (Near Kothrud Stand)', 'Survey Number 6/2+3B , Kothrud, Pune 411029', 'nayak.sarthak@yahoo.com', '9892696244', '9892696244', 'Working', 'scmcpcdd', '385e4e40', 'OLD2002', 'N'),
('05CE2032', 'CE', 2009, 'Ankur Jain', '250 Main Apt 612 Hartford CT 06106 USA', 'Kharhgar', 'i.ankurjaini@gmail.com', '_918600199', '+186099262', 'Working', 'Pass12@3', '0', 'REV2012', 'N'),
('05EE1037', 'EL', 2009, 'Vipin Vasantkumar Bodele', 'A 304 ShivanerPlaza Plot No 8, Sector 15 Sanpada, Navi Mumbai - 400705', 'A 304 ShivanerPlaza Plot No 8, Sector 15 Sanpada, Navi Mumbai - 400705', 'vipin.b.v@gmail.com', '27816212', '9930009875', 'Working', 'deadmens@01', '0', 'OLD2002', 'N'),
('05EE2041', 'EL', 2009, 'Abhilash Suresh Menon', '404, Tulip C.H.S., Plot 132', 'Sector - 28, Vashi,', 'menon.abhilash86@gmail.com', '9819945998', '9819945998', 'Working', 'Ab123456!@#$%^', '0', 'OLD2002', 'N'),
('06CE5015', 'CE', 2009, 'Smita K Patil', 'Sion', 'Sion', 'transcript.rait@gmail.com', '9930386990', '9930386990', 'Working', 'Smita011', '0', 'OLD2002', 'Y'),
('06CE5016', 'CE', 2009, 'PATIL PRITA KASHINATH', 'SION', 'SION', 'smitapatilbe@gmail.com', '9930938699', '9930938699', 'working', 'Prita123', '0', 'OLD2002', 'Y'),
('06IN1005', 'IN', 2010, 'Zubair Syed Kadri', 'G-51,RH-1,Sector-7, Vashi, Navi mumbai', '400703', 'zubair_kadri@hotmail.com', '0222782227', '8080566518', 'Working', 'Zs291088', '0', 'OLD2007', 'N'),
('06IN5009', 'IN', 2010, 'Aditya Vilas Aware', '601, KOYNA, Plot no 16, Sector 15, Sanpada, Navi Mumbai', 'Same as above', 'aaware01@gmail.com', '9920553845', '9930620084', 'Working', 'johnson', '67ec9d74', 'OLD2007', 'Y'),
('08EE2026', 'EL', 2014, 'Deepak', 'Ambika nagar 2, road no 29, gurukrupa housing 2,', 'Room no 7, wagle estate, Thane - 400 604 ', 'deepakpyadav@outlook.com', '9321393777', '8080272754', 'Working ', 'Transport123', '0', 'OLD2007', 'N'),
('08ee2029', 'EL', 2014, 'Nishant Ravindra Walavalkar', 'M2/1104', 'Sbi Colony', 'walavalkar.nishant@gmail.com', '9773001576', '9773001576', 'Working', 'qwert123', '0', 'OLD2007', 'N'),
('08IN1008', 'IN', 2013, 'Shrivallabh Shridhar Deshmukh ', 'Kanakia spaces Vasundhara b wing flat no 502 opp lokpuram thane West Maharashtra India 400601', 'Vatsal mayur Vihar colony pawdewadi naka Nanded Maharashtra India 431602', 'shrijeetdeshmukh@gmail.com', '9870648411', '', 'Working ', '#shrijeet.h', '0', 'OLD2007', 'N'),
('09ee1062', 'EL', 2013, 'ankur bhargava', '301, ishan society ram maruti road thane ', 'mumbai', 'ankurb2808@gmail.com', '7738341855', '9819639039', 'TCS', '12345678', '0', 'REV2012', 'N'),
('10CE1040', 'CE', 2014, 'Anuj Mohan Mulik', '1104 The Springs2 Roadpali Sector 20 Kalamboli Navi Mumbai', '1104 The Springs2 Roadpali Sector 20 Kalamboli Navi Mumbai', 'anuj9306@gmail.com', '9702203911', '9702203911', 'Working', 'kaliedoscope', '0', 'REV2012', 'N'),
('10CE5022', 'CE', 2013, 'Harshad Dilipsingh Pardeshi', '202, Raghukul Apt, Brahmin society, Murbad road, Kalyan (W)', '202, Raghukul Apt, Brahmin society, Murbad road, Kalyan (W)', 'harshad_pardeshi@yahoo.co.in', '9619197008', '9619197008', 'Working', 'GoldenGlobe2', '0', 'REV2012', 'Y'),
('10EE1045', 'EL', 2014, 'YASHWANT KAUL', '504 VAASTU CHHAYA CHS PLOT 59 SECTOR 2A KOPARKHAIRANE NAVI MUMBAI MAHARASHTRA', '354 FIRST FLOOR SECTOR 45-A CHANDIGARH ', 'yashwant.kaul17@gmail.com', '0172266524', '9967366039', 'Working', 'zxcVBN123', '0', 'REV2012', 'N'),
('10EE5013', 'EL', 2013, 'Adwait Purushottam Chandorkar', '108, Adarsh Nagar Bldg No.4, Kolbad Road, Thane(W) - 400601', '22/3, B, Shashank CHS, Devi Chowk, Shastri Nagar, Dombivli(W) - 421202', 'cadip92@gmail.com', '9820183485', '9029029083', 'Working', 'maharaj1', '0', 'OLD2007', 'Y'),
('11CE1019', 'CE', 2015, 'aniket ajit tambe', '75-C, flower valley soc. , anand park, near ram maruti road, Thane - west, Thane - 400604', '75-C, flower valley soc. , anand park, near ram maruti road, Thane - west, Thane - 400604', 'aniket@gmail.com', '9876543210', '9876543210', 'Working', 'Avinash09', '0', 'REV2012', 'N'),
('11EE1072', 'EL', 2015, 'Vikrant Girish Shinde', '102,Kausalya CHS,Ayodhya Nagari,Manpada Road,Dombivli (East)', '102,Kausalya CHS,Ayodhya Nagari,Manpada Road,Dombivli (East)', 'shinde.vikrant.11ee1072@gmail.com', '0902942698', '0902942698', 'Working', 'Sidrocks2011@', '7c9ea338', 'OLD2007', 'N'),
('11in1028', 'IN', 2015, 'Aditya Katarnavare', 'room no.302,aries apt, behind bethel church, ambernath west', 'khojgaon,ambernath', 'adityakatarnavare@gmail.com', '0251268734', '8087404099', 'working', 'adi404099', '0', 'REV2012', 'N'),
('12CE1034', 'CE', 2016, 'Omkar Manmohan Hawaldar', 'CD 113, C 23, Shreerang Society, Thane(W) 400601', 'CD 113, C-23, Shreerang Society, Thane(W) 400601', 'omkar.hawaldar@gmail.com', '022-253610', '9757078811', 'Student', 'sona1514$', '0', 'REV2012', 'N'),
('12EE5037', 'EL', 2015, 'Ruchita Chavan', '03,shri Balaji Soc. , near pioneer soc, nityanand margh, above saraswat bank- old panvel, Navi mumbai', '03, shri Balaji soc.,near pioneer soc, Nityanand margh, above saraswat bank, old panvel, Navi mumbai', 'ruchitavbc15@gmail.com', '9833275010', '9833275010', 'Working', 'Rjan@1994', '0', 'REV2012', 'Y'),
('12IN6201', 'IN', 2015, 'Suraj Hariprasad Ghimire Sharma', '205 B yashodhan nagar Thane', '205 B yashodhan nagar Thane', 'suraj09sharma@outlook.com', '9820639647', '9820639647', 'Student', 'Suraj@8494', '0', 'REV2012', 'N'),
('13CE1018', 'CE', 2017, 'Sarthak Subodh Langde', 'Vikhroli', 'Dreams Complex, Bhandup', 'sarthak.langde@gmail.com', '9819061071', '9819061071', 'Student', 'Sarthak123', '0', 'REV2012', 'N'),
('14ET1015', 'ET', 2018, 'Sawant Mayuresh Sudhir', '501, Sai  Swarg, Plot No. 35/B, Sector 6, New Panvel, Navi Mumbai', '501, Sai  Swarg, Plot No. 35/B, Sector 6, New Panvel, Navi Mumbai', 'mayuresh.sawant@live.in', '8976392180', '8976392180', 'Student', 'MAY.saw23', '0', 'REV2012', 'N'),
('507', 'CE', 1999, 'Iyer Jayashree Srinivasan', '3231,salzedo street,coral gables,florida33134', 'no.2/55,skanda Bldg.2nd road,pestom sagar,mumbai-400089', 'jayuiyer@gmail.com', '25258432', '9819897120', 'working', 'jayu_1978', '0', 'OLD2002', 'N'),
('508', 'CE', 1999, 'Suchitra Sunil Chadha', 'A 1403, Chestnut, Runwal Greens Annexe, Village Road, of Mulund Goregaon Link Road, Mulund(w) 400078', 'Same as above', 'suchitra_i@yahoo.com', '9619790816', '9619790816', 'NA', 'godblessus1', '0', 'OLD2002', 'N'),
('84022', 'CE', 1991, 'Sandeep', '3 Payne CT', 'Edison, NJ 08820', 'sndharam@yahoo.com', '9084446262', '7322595283', 'working', 'Hri97shi', '0', 'OLD2002', 'N'),
('91018', 'CE', 1996, 'Chaube manoj vijay', '359 Rolling Meadows Dr Ann Arbor MI 48103', '359 Rolling Meadows Dr Ann Arbor MI 48103', 'manojchaube@gmail.com', '', '3026354957', 'Working', 'shubhdam', '0', 'OLD2002', 'N'),
('Suchitra i', 'CE', 1999, 'Suchitra Sunil Chadha', 'A 1403, Chestnut, Runwal Greens Annexe, Village Road, of Mulund Goregaon Link Road, Mulund(w) 400078', 'Same as above', 'suchitra_i@yahoo.com', '9619790816', '9619790816', 'NA', 'godblessus', '0', 'OLD2002', 'N'),
('suchitraiy', 'CE', 1999, 'Suchitra Sunil Chadha', 'A 1403, Chestnut, Runwal Greens Annexe, Village Road, of Mulund Goregaon Link Road, Mulund(w) 400078', 'Same as above', 'suchitra_i@yahoo.com', '9619790816', '9619790816', 'NA', 'godblessus1', '0', 'OLD2002', 'N'),
('W505655', 'CE', 2014, 'Anuj Mohan Mulik', '1104 The Springs 2 Roadpali Sector 20 Kalamboli Navi Mumbai', '1104 The Springs 2 Roadpali Sector 20 Kalamboli Navi Mumbai', 'anuj9306@gmail.com', '9702203911', '9702203911', 'Work', 'kaliedoscope', '0', 'REV2012', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `student_documents`
--

CREATE TABLE `student_documents` (
  `roll` varchar(10) NOT NULL,
  `sem1` varchar(300) DEFAULT NULL,
  `sem2` varchar(300) DEFAULT NULL,
  `sem3` varchar(300) DEFAULT NULL,
  `sem4` varchar(300) DEFAULT NULL,
  `sem5` varchar(300) DEFAULT NULL,
  `sem6` varchar(300) DEFAULT NULL,
  `sem7` varchar(300) DEFAULT NULL,
  `sem8` varchar(300) DEFAULT NULL,
  `gregmat` varchar(300) DEFAULT NULL,
  `passport` varchar(300) DEFAULT NULL,
  `payment` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_documents`
--

INSERT INTO `student_documents` (`roll`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `sem7`, `sem8`, `gregmat`, `passport`, `payment`) VALUES
('', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified//sem1.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified//sem2.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified//sem3.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified//sem4.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified//sem5.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified//sem6.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified//sem7.pdf', NULL, NULL, NULL, NULL),
('00CE0000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('00EE016', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/00EE016/sem1.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('01CE136', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('01CE506', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('02et1042', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('02ET2015', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('03CE2138', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('03ET2080', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('05CE1000', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05CE1000/sem1.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05CE1000/sem2.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05CE1000/sem3.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05CE1000/sem4.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05CE1000/sem5.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05CE1000/sem6.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05CE1000/sem7.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05CE1000/sem8.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05CE1000/gregmat.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05CE1000/passport.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05CE1000/payment.pdf'),
('05CE1033', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05ce1033/sem1.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05ce1033/sem2.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05ce1033/sem3.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05ce1033/sem4.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05ce1033/sem5.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05ce1033/sem6.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05ce1033/sem7.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05ce1033/sem8.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05ce1033/gregmat.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05ce1033/passport.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05ce1033/payment.pdf'),
('05CE2032', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('05EE1037', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('05EE2041', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05EE2041/sem1.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05EE2041/sem2.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05EE2041/sem3.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05EE2041/sem4.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05EE2041/sem5.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05EE2041/sem6.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05EE2041/sem7.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05EE2041/sem8.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05EE2041/gregmat.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05EE2041/passport.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/05EE2041/payment.pdf'),
('06CE5015', NULL, NULL, 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/06CE5015/sem3.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/06CE5015/sem4.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/06CE5015/sem5.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/06CE5015/sem6.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/06CE5015/sem7.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/06CE5015/sem8.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/06CE5015/gregmat.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/06CE5015/passport.pdf', 'C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/06CE5015/payment.pdf'),
('06CE5016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('06IN1005', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('06IN5009', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('08EE2026', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('08ee2029', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('08IN1008', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('09ee1062', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('10CE1040', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('10CE5022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('10EE1045', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('10EE5013', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('11CE1019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('11EE1072', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('11in1028', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('12CE1034', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('12EE5037', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('12IN6201', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('13CE1018', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('14ET1015', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('507', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('508', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('84022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('91018', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Suchitra i', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('suchitraiy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('W505655', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

CREATE TABLE `student_marks` (
  `seat` int(11) NOT NULL,
  `roll` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `pattern` varchar(30) NOT NULL,
  `year` varchar(50) NOT NULL,
  `sem` int(11) NOT NULL,
  `subject` varchar(350) NOT NULL,
  `twob` int(11) NOT NULL,
  `thob` int(11) NOT NULL,
  `prob` int(11) NOT NULL,
  `orob` int(11) NOT NULL,
  `iaob` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_marks`
--

INSERT INTO `student_marks` (`seat`, `roll`, `branch`, `pattern`, `year`, `sem`, `subject`, `twob`, `thob`, `prob`, `orob`, `iaob`) VALUES
(1111, '00CE0000', 'CE', 'OLD2007', 'May 2013', 7, 'Digital Signal & Image Processing', 10, 40, 10, 0, 0),
(1111, '00CE0000', 'CE', 'OLD2007', 'May 2013', 7, 'Elective I : (  E- Commerce )', 10, 40, 10, 0, 0),
(1111, '00CE0000', 'CE', 'OLD2007', 'May 2013', 7, 'Mobile Computing', 10, 40, 10, 0, 0),
(1111, '00CE0000', 'CE', 'OLD2007', 'May 2013', 7, 'Project - I', 10, 0, 10, 0, 0),
(1111, '00CE0000', 'CE', 'OLD2007', 'May 2013', 7, 'Robotics and A I', 10, 40, 10, 0, 0),
(1111, '00CE0000', 'CE', 'OLD2007', 'May 2013', 7, 'System Security', 10, 40, 10, 0, 0),
(7374, '02ET2015', 'ET', 'OLD2002', 'Jan 2003', 1, 'Applied Mathematics - I', 64, 0, 0, 0, 0),
(7374, '02ET2015', 'ET', 'OLD2002', 'Jan 2003', 1, 'Applied Sciences - I', 44, 22, 0, 0, 0),
(7374, '02ET2015', 'ET', 'OLD2002', 'Jan 2003', 1, 'Basic Electrical & Electronics Engg.', 59, 21, 0, 0, 0),
(7374, '02ET2015', 'ET', 'OLD2002', 'Jan 2003', 1, 'Basic work shop I', 0, 0, 0, 0, 0),
(7374, '02ET2015', 'ET', 'OLD2002', 'Jan 2003', 1, 'Computer Programming - I', 40, 19, 0, 0, 0),
(7374, '02ET2015', 'ET', 'OLD2002', 'Jan 2003', 1, 'Engineering Mechanics ', 66, 23, 0, 0, 0),
(930, '02ET2015', 'ET', 'OLD2002', 'May 2004', 4, 'Applied Mathematics IV', 69, 0, 0, 0, 0),
(930, '02ET2015', 'ET', 'OLD2002', 'May 2004', 4, 'Electromagnetic Wave Theory', 70, 22, 0, 0, 0),
(930, '02ET2015', 'ET', 'OLD2002', 'May 2004', 4, 'Electronics   II', 63, 20, 23, 19, 0),
(930, '02ET2015', 'ET', 'OLD2002', 'May 2004', 4, 'Principles of Communication Engg.', 71, 22, 0, 19, 0),
(930, '02ET2015', 'ET', 'OLD2002', 'May 2004', 4, 'Signals & System', 70, 21, 0, 0, 0),
(930, '02ET2015', 'ET', 'OLD2002', 'May 2004', 4, 'Wave Shaping Techniques', 66, 22, 22, 20, 0),
(4656, '05CE1000', 'CE', 'OLD2002', 'December 2005', 1, 'Applied Mathematics - I', 83, 0, 0, 0, 0),
(4656, '05CE1000', 'CE', 'OLD2002', 'December 2005', 1, 'Applied Sciences - I', 71, 19, 0, 0, 0),
(4656, '05CE1000', 'CE', 'OLD2002', 'December 2005', 1, 'Basic Electrical & Electronics Engg.', 78, 24, 0, 0, 0),
(4656, '05CE1000', 'CE', 'OLD2002', 'December 2005', 1, 'Basic work shop - I', 0, 0, 0, 0, 0),
(4656, '05CE1000', 'CE', 'OLD2002', 'December 2005', 1, 'Computer Programming - I', 71, 24, 0, 0, 0),
(4656, '05CE1000', 'CE', 'OLD2002', 'December 2005', 1, 'Engineering Mechanics ', 89, 22, 0, 0, 0),
(3817, '05CE1000', 'CE', 'OLD2002', 'May 2006', 2, 'Applied Mathematics - II', 74, 0, 0, 0, 0),
(3817, '05CE1000', 'CE', 'OLD2002', 'May 2006', 2, 'Applied Sciences - II', 66, 24, 0, 0, 0),
(3817, '05CE1000', 'CE', 'OLD2002', 'May 2006', 2, 'Basic work shop - II ', 0, 68, 0, 0, 0),
(3817, '05CE1000', 'CE', 'OLD2002', 'May 2006', 2, 'Communication Skills ', 69, 23, 0, 0, 0),
(3817, '05CE1000', 'CE', 'OLD2002', 'May 2006', 2, 'Computer Programming - II', 77, 23, 0, 0, 0),
(3817, '05CE1000', 'CE', 'OLD2002', 'May 2006', 2, 'Engineering Drawing ', 81, 22, 0, 0, 0),
(77, '05Ce1000', 'CE', 'OLD2002', 'nov 2006', 3, 'Applied Mathematics III', 60, 0, 0, 0, 0),
(77, '05Ce1000', 'CE', 'OLD2002', 'nov 2006', 3, 'Data Structures', 67, 24, 0, 0, 0),
(77, '05Ce1000', 'CE', 'OLD2002', 'nov 2006', 3, 'Digital Logic Design & Applications', 68, 23, 0, 0, 0),
(77, '05Ce1000', 'CE', 'OLD2002', 'nov 2006', 3, 'Discrete Structures', 68, 23, 0, 0, 0),
(77, '05Ce1000', 'CE', 'OLD2002', 'nov 2006', 3, 'Electrical Networks', 72, 24, 0, 0, 0),
(77, '05Ce1000', 'CE', 'OLD2002', 'nov 2006', 3, 'Electronic Devices & Circuits', 75, 24, 0, 0, 0),
(85, '05Ce1000', 'CE', 'OLD2002', 'may 2007', 4, 'Analysis of Algorithms', 68, 24, 23, 0, 0),
(85, '05Ce1000', 'CE', 'OLD2002', 'may 2007', 4, 'Applied Mathematics IV', 85, 0, 0, 0, 0),
(85, '05Ce1000', 'CE', 'OLD2002', 'may 2007', 4, 'Computer Organization & Architecture', 78, 22, 0, 24, 0),
(85, '05Ce1000', 'CE', 'OLD2002', 'may 2007', 4, 'Database Systems ', 68, 24, 0, 23, 0),
(85, '05Ce1000', 'CE', 'OLD2002', 'may 2007', 4, 'Industrial Economics & Management', 70, 0, 0, 0, 0),
(85, '05Ce1000', 'CE', 'OLD2002', 'may 2007', 4, 'Principles of Comm. Engineering', 77, 23, 0, 20, 0),
(103, '05Ce1000', 'CE', 'OLD2002', 'dec 2006', 5, 'Applied Mathematics V', 42, 0, 0, 0, 0),
(103, '05Ce1000', 'CE', 'OLD2002', 'dec 2006', 5, 'Computer Network', 41, 10, 0, 0, 0),
(103, '05Ce1000', 'CE', 'OLD2002', 'dec 2006', 5, 'Computer Programming Lab', 0, 10, 0, 0, 0),
(103, '05Ce1000', 'CE', 'OLD2002', 'dec 2006', 5, 'Microprocessor', 43, 10, 0, 0, 0),
(103, '05Ce1000', 'CE', 'OLD2002', 'dec 2006', 5, 'Presentation & Comm. Techniques', 0, 10, 0, 11, 0),
(103, '05Ce1000', 'CE', 'OLD2002', 'dec 2006', 5, 'Principles of Digital Communication', 41, 14, 0, 0, 0),
(103, '05Ce1000', 'CE', 'OLD2002', 'dec 2006', 5, 'Theoretical Computer Science ', 40, 10, 0, 0, 0),
(105, '05Ce1000', 'CE', 'OLD2002', 'MAY 2008', 6, 'Advanced Databases ', 11, 40, 0, 10, 0),
(105, '05Ce1000', 'CE', 'OLD2002', 'MAY 2008', 6, 'Computer Graphics', 11, 41, 11, 0, 0),
(105, '05Ce1000', 'CE', 'OLD2002', 'MAY 2008', 6, 'Object Oriented Analysis & Design', 11, 43, 11, 0, 0),
(105, '05Ce1000', 'CE', 'OLD2002', 'MAY 2008', 6, 'Operating Systems With Unix', 11, 41, 0, 11, 0),
(105, '05Ce1000', 'CE', 'OLD2002', 'MAY 2008', 6, 'Systems Programming ', 11, 41, 11, 0, 0),
(105, '05Ce1000', 'CE', 'OLD2002', 'MAY 2008', 6, 'Web Technology', 11, 41, 0, 11, 0),
(105, '05Ce1000', 'CE', 'OLD2002', 'DEC 2008', 7, 'Advanced  Microprocessors', 10, 41, 0, 10, 0),
(105, '05Ce1000', 'CE', 'OLD2002', 'DEC 2008', 7, 'Digital Signal Processing', 10, 41, 0, 11, 0),
(105, '05Ce1000', 'CE', 'OLD2002', 'DEC 2008', 7, 'Elective I :Mobile Computing', 11, 41, 0, 11, 0),
(105, '05Ce1000', 'CE', 'OLD2002', 'DEC 2008', 7, 'Intelligent Systems', 11, 41, 0, 11, 0),
(105, '05Ce1000', 'CE', 'OLD2002', 'DEC 2008', 7, 'Project - A', 11, 0, 0, 11, 0),
(105, '05Ce1000', 'CE', 'OLD2002', 'DEC 2008', 7, 'Software Engineering', 11, 41, 0, 10, 0),
(708, '05Ce1000', 'CE', 'OLD2002', 'MAY 2009', 8, 'Distributed Computing', 11, 41, 0, 11, 0),
(708, '05Ce1000', 'CE', 'OLD2002', 'MAY 2009', 8, 'Elective II :Dataware Housing and Mining', 11, 41, 0, 11, 0),
(708, '05Ce1000', 'CE', 'OLD2002', 'MAY 2009', 8, 'Multimedia Systems', 11, 41, 0, 11, 0),
(708, '05Ce1000', 'CE', 'OLD2002', 'MAY 2009', 8, 'Project  - B', 21, 0, 0, 21, 0),
(708, '05Ce1000', 'CE', 'OLD2002', 'MAY 2009', 8, 'System Security', 11, 43, 0, 11, 0),
(4656, '05ce1033', 'CE', 'OLD2002', 'December 2005', 1, 'Applied Mathematics - I', 0, 83, 0, 0, 0),
(4656, '05ce1033', 'CE', 'OLD2002', 'December 2005', 1, 'Applied Sciences - I', 19, 71, 0, 0, 0),
(4656, '05ce1033', 'CE', 'OLD2002', 'December 2005', 1, 'Basic Electrical & Electronics Engg.', 24, 78, 0, 0, 0),
(4656, '05ce1033', 'CE', 'OLD2002', 'December 2005', 1, 'Basic work shop - I', 0, 0, 0, 0, 0),
(4656, '05ce1033', 'CE', 'OLD2002', 'December 2005', 1, 'Computer Programming - I', 24, 71, 0, 0, 0),
(4656, '05ce1033', 'CE', 'OLD2002', 'December 2005', 1, 'Engineering Mechanics ', 22, 89, 0, 0, 0),
(3817, '05ce1033', 'CE', 'OLD2002', 'May 2006', 2, 'Applied Mathematics - II', 0, 74, 0, 0, 0),
(3817, '05ce1033', 'CE', 'OLD2002', 'May 2006', 2, 'Applied Sciences - II', 24, 66, 0, 0, 0),
(3817, '05ce1033', 'CE', 'OLD2002', 'May 2006', 2, 'Basic work shop - II ', 68, 68, 0, 0, 0),
(3817, '05ce1033', 'CE', 'OLD2002', 'May 2006', 2, 'Communication Skills ', 23, 69, 0, 0, 0),
(3817, '05ce1033', 'CE', 'OLD2002', 'May 2006', 2, 'Computer Programming - II', 23, 77, 0, 0, 0),
(3817, '05ce1033', 'CE', 'OLD2002', 'May 2006', 2, 'Engineering Drawing ', 22, 81, 0, 0, 0),
(77, '05ce1033', 'CE', 'OLD2002', 'November 2006', 3, 'Applied Mathematics III', 0, 60, 0, 0, 0),
(77, '05ce1033', 'CE', 'OLD2002', 'November 2006', 3, 'Data Structures', 24, 67, 0, 0, 0),
(77, '05ce1033', 'CE', 'OLD2002', 'November 2006', 3, 'Digital Logic Design & Applications', 23, 68, 0, 0, 0),
(77, '05ce1033', 'CE', 'OLD2002', 'November 2006', 3, 'Discrete Structures', 23, 68, 0, 0, 0),
(77, '05ce1033', 'CE', 'OLD2002', 'November 2006', 3, 'Electrical Networks', 24, 72, 0, 0, 0),
(77, '05ce1033', 'CE', 'OLD2002', 'November 2006', 3, 'Electronic Devices & Circuits', 24, 75, 0, 0, 0),
(85, '05ce1033', 'CE', 'OLD2002', 'May 2007', 4, 'Analysis of Algorithms', 24, 76, 24, 0, 0),
(85, '05ce1033', 'CE', 'OLD2002', 'May 2007', 4, 'Applied Mathematics IV', 0, 85, 0, 0, 0),
(85, '05ce1033', 'CE', 'OLD2002', 'May 2007', 4, 'Computer Organization & Architecture', 22, 78, 0, 24, 0),
(85, '05ce1033', 'CE', 'OLD2002', 'May 2007', 4, 'Database Systems ', 24, 66, 0, 23, 0),
(85, '05ce1033', 'CE', 'OLD2002', 'May 2007', 4, 'Industrial Economics & Management', 0, 70, 0, 0, 0),
(85, '05ce1033', 'CE', 'OLD2002', 'May 2007', 4, 'Principles of Comm. Engineering', 23, 77, 0, 20, 0),
(82, '05ce1033', 'CE', 'OLD2002', 'November 2007', 5, 'Applied Mathematics V', 0, 59, 0, 0, 0),
(82, '05ce1033', 'CE', 'OLD2002', 'November 2007', 5, 'Computer Network', 24, 73, 0, 0, 0),
(82, '05ce1033', 'CE', 'OLD2002', 'November 2007', 5, 'Computer Programming Lab', 24, 0, 0, 0, 0),
(82, '05ce1033', 'CE', 'OLD2002', 'November 2007', 5, 'Microprocessor', 24, 71, 0, 0, 0),
(82, '05ce1033', 'CE', 'OLD2002', 'November 2007', 5, 'Presentation & Comm. Techniques', 23, 0, 0, 24, 0),
(82, '05ce1033', 'CE', 'OLD2002', 'November 2007', 5, 'Principles of Digital Communication', 22, 89, 0, 0, 0),
(82, '05ce1033', 'CE', 'OLD2002', 'November 2007', 5, 'Theoretical Computer Science ', 24, 48, 0, 0, 0),
(85, '05ce1033', 'CE', 'OLD2002', 'May 2008', 6, 'Advanced Databases ', 23, 73, 0, 23, 0),
(85, '05ce1033', 'CE', 'OLD2002', 'May 2008', 6, 'Computer Graphics', 24, 67, 24, 0, 0),
(85, '05ce1033', 'CE', 'OLD2002', 'May 2008', 6, 'Object Oriented Analysis & Design', 24, 69, 24, 0, 0),
(85, '05ce1033', 'CE', 'OLD2002', 'May 2008', 6, 'Operating Systems With Unix', 23, 63, 0, 24, 0),
(85, '05ce1033', 'CE', 'OLD2002', 'May 2008', 6, 'Systems Programming ', 22, 61, 22, 0, 0),
(85, '05ce1033', 'CE', 'OLD2002', 'May 2008', 6, 'Web Technology', 24, 58, 0, 23, 0),
(770, '05ce1033', 'CE', 'OLD2002', 'December 2008', 7, 'Advanced  Microprocessors', 20, 48, 0, 23, 0),
(770, '05ce1033', 'CE', 'OLD2002', 'December 2008', 7, 'Digital Signal Processing', 23, 60, 0, 20, 0),
(770, '05ce1033', 'CE', 'OLD2002', 'December 2008', 7, 'Elective I (Mobile Computing)', 23, 60, 0, 22, 0),
(770, '05ce1033', 'CE', 'OLD2002', 'December 2008', 7, 'Intelligent Systems', 24, 65, 0, 23, 0),
(770, '05ce1033', 'CE', 'OLD2002', 'December 2008', 7, 'Project - A', 24, 0, 0, 24, 0),
(770, '05ce1033', 'CE', 'OLD2002', 'December 2008', 7, 'Software Engineering', 23, 58, 0, 22, 0),
(760, '05ce1033', 'CE', 'OLD2002', 'May 2009', 8, 'Distributed Computing', 23, 62, 0, 16, 0),
(760, '05ce1033', 'CE', 'OLD2002', 'May 2009', 8, 'Elective II :(Dataware Housing and Mining)', 22, 66, 0, 23, 0),
(760, '05ce1033', 'CE', 'OLD2002', 'May 2009', 8, 'Multimedia Systems', 19, 53, 0, 19, 0),
(760, '05ce1033', 'CE', 'OLD2002', 'May 2009', 8, 'Project  - B', 48, 0, 0, 48, 0),
(760, '05ce1033', 'CE', 'OLD2002', 'May 2009', 8, 'System Security', 23, 62, 0, 24, 0),
(4600, '05EE2041', 'EL', 'OLD2002', 'December 2005', 1, 'Applied Mathematics - I', 43, 0, 0, 0, 0),
(4600, '05EE2041', 'EL', 'OLD2002', 'December 2005', 1, 'Applied Sciences - I', 40, 16, 0, 0, 0),
(4600, '05EE2041', 'EL', 'OLD2002', 'December 2005', 1, 'Basic Electricity & Electronics Engg.', 47, 18, 0, 0, 0),
(4600, '05EE2041', 'EL', 'OLD2002', 'December 2005', 1, 'Basic work shop - I', 0, 0, 0, 0, 0),
(4600, '05EE2041', 'EL', 'OLD2002', 'December 2005', 1, 'Computer Programming - I', 49, 20, 0, 0, 0),
(4600, '05EE2041', 'EL', 'OLD2002', 'December 2005', 1, 'Engineering Mechanics ', 62, 23, 0, 0, 0),
(3770, '05EE2041', 'EL', 'OLD2002', 'May 2006', 2, 'Applied Mathematics - II', 51, 0, 0, 0, 0),
(3770, '05EE2041', 'EL', 'OLD2002', 'May 2006', 2, 'Applied Sciences - II', 60, 22, 0, 0, 0),
(3770, '05EE2041', 'EL', 'OLD2002', 'May 2006', 2, 'Basic work shop - II ', 0, 68, 0, 0, 0),
(3770, '05EE2041', 'EL', 'OLD2002', 'May 2006', 2, 'Communication Skills ', 74, 20, 0, 0, 0),
(3770, '05EE2041', 'EL', 'OLD2002', 'May 2006', 2, 'Computer Programming - II', 58, 18, 0, 0, 0),
(3770, '05EE2041', 'EL', 'OLD2002', 'May 2006', 2, 'Engineering Drawing ', 86, 20, 0, 0, 0),
(353, '05EE2041', 'EL', 'OLD2002', 'November 2006', 3, 'Applied Mathematics III', 63, 0, 0, 0, 0),
(353, '05EE2041', 'EL', 'OLD2002', 'November 2006', 3, 'Basics of Communication Engineering', 67, 18, 0, 0, 0),
(353, '05EE2041', 'EL', 'OLD2002', 'November 2006', 3, 'Digital Design I', 41, 17, 0, 0, 0),
(353, '05EE2041', 'EL', 'OLD2002', 'November 2006', 3, 'Electrical Networks Analysis & Synthesis', 50, 16, 0, 0, 0),
(353, '05EE2041', 'EL', 'OLD2002', 'November 2006', 3, 'Electronic Circuts Analysis & Design I', 52, 15, 0, 0, 0),
(353, '05EE2041', 'EL', 'OLD2002', 'November 2006', 3, 'Numerical Techniques', 58, 21, 0, 0, 0),
(373, '05EE2041', 'EL', 'OLD2002', 'May 2007', 4, 'Applied Mathematics IV', 62, 0, 0, 0, 0),
(373, '05EE2041', 'EL', 'OLD2002', 'May 2007', 4, 'Control Systems Engineering', 66, 17, 0, 21, 0),
(373, '05EE2041', 'EL', 'OLD2002', 'May 2007', 4, 'Digital Design II', 54, 21, 15, 14, 0),
(373, '05EE2041', 'EL', 'OLD2002', 'May 2007', 4, 'Electrical Machines & Instruments', 72, 18, 0, 23, 0),
(373, '05EE2041', 'EL', 'OLD2002', 'May 2007', 4, 'Electronic Circuts Analysis & Design  II', 57, 17, 18, 16, 0),
(373, '05EE2041', 'EL', 'OLD2002', 'May 2007', 4, 'Principles of  Microprocessor Systems', 67, 15, 0, 18, 0),
(365, '05EE2041', 'EL', 'OLD2002', 'November 2007', 5, 'Applied Mathematics V', 44, 0, 0, 0, 0),
(365, '05EE2041', 'EL', 'OLD2002', 'November 2007', 5, 'Continuous Time Signals & Systems', 68, 19, 0, 0, 0),
(365, '05EE2041', 'EL', 'OLD2002', 'November 2007', 5, 'Electronic Measuring Instrument', 52, 19, 0, 0, 0),
(365, '05EE2041', 'EL', 'OLD2002', 'November 2007', 5, 'Electronics Workshop', 0, 0, 0, 24, 0),
(365, '05EE2041', 'EL', 'OLD2002', 'November 2007', 5, 'Engg. Electromagetics', 41, 17, 0, 0, 0),
(365, '05EE2041', 'EL', 'OLD2002', 'November 2007', 5, 'Microprocessors & Microcontrollers', 61, 18, 0, 0, 0),
(365, '05EE2041', 'EL', 'OLD2002', 'November 2007', 5, 'Presentation & Communication Tech.', 0, 16, 0, 23, 0),
(364, '05EE2041', 'EL', 'OLD2002', 'May 2008', 6, 'Analog Integrated Circuits & Applications', 60, 13, 0, 17, 0),
(364, '05EE2041', 'EL', 'OLD2002', 'May 2008', 6, 'Communication System', 48, 16, 0, 20, 0),
(364, '05EE2041', 'EL', 'OLD2002', 'May 2008', 6, 'Computer Organization', 55, 16, 0, 12, 0),
(364, '05EE2041', 'EL', 'OLD2002', 'May 2008', 6, 'Discrete Time Signal Processing', 51, 12, 0, 20, 0),
(364, '05EE2041', 'EL', 'OLD2002', 'May 2008', 6, 'Industrial Economics & Magagement', 48, 0, 0, 0, 0),
(364, '05EE2041', 'EL', 'OLD2002', 'May 2008', 6, 'Microwave & Optical Fiber Communication', 43, 16, 0, 17, 0),
(9511, '05EE2041', 'EL', 'OLD2002', 'December 2008', 7, 'Basics of  VLSI', 62, 17, 0, 17, 0),
(9511, '05EE2041', 'EL', 'OLD2002', 'December 2008', 7, 'Digital Communication', 47, 15, 0, 19, 0),
(9511, '05EE2041', 'EL', 'OLD2002', 'December 2008', 7, 'Elective I : ( Image Processing )', 66, 12, 0, 17, 0),
(9511, '05EE2041', 'EL', 'OLD2002', 'December 2008', 7, 'Filter Theory & Applications', 68, 17, 0, 0, 0),
(9511, '05EE2041', 'EL', 'OLD2002', 'December 2008', 7, 'Instrumentation Systems', 58, 18, 0, 0, 0),
(9511, '05EE2041', 'EL', 'OLD2002', 'December 2008', 7, 'Project  A', 0, 17, 0, 0, 0),
(9504, '05EE2041', 'EL', 'OLD2002', 'May 2009', 8, 'Data Communication & Networking', 56, 20, 0, 20, 0),
(9504, '05EE2041', 'EL', 'OLD2002', 'May 2009', 8, 'Elective II : ( Robotics )', 74, 19, 0, 19, 0),
(9504, '05EE2041', 'EL', 'OLD2002', 'May 2009', 8, 'Mechatronics', 75, 19, 0, 17, 0),
(9504, '05EE2041', 'EL', 'OLD2002', 'May 2009', 8, 'Power Electronics ', 68, 17, 0, 17, 0),
(9504, '05EE2041', 'EL', 'OLD2002', 'May 2009', 8, 'Project  B', 0, 45, 0, 45, 0),
(93, '06CE5015', 'CE', 'OLD2002', 'NOV 2006', 3, 'Applied Mathematics III', 81, 0, 0, 0, 0),
(93, '06CE5015', 'CE', 'OLD2002', 'NOV 2006', 3, 'Data Structures', 57, 20, 0, 0, 0),
(93, '06CE5015', 'CE', 'OLD2002', 'NOV 2006', 3, 'Digital Logic Design & Applications', 65, 21, 0, 0, 0),
(93, '06CE5015', 'CE', 'OLD2002', 'NOV 2006', 3, 'Discrete Structures', 54, 24, 0, 0, 0),
(93, '06CE5015', 'CE', 'OLD2002', 'NOV 2006', 3, 'Electrical Networks', 52, 22, 0, 0, 0),
(93, '06CE5015', 'CE', 'OLD2002', 'NOV 2006', 3, 'Electronic Devices & Circuits', 65, 24, 0, 0, 0),
(101, '06CE5015', 'CE', 'OLD2002', 'May 2007', 4, 'Analysis of Algorithms', 64, 24, 22, 0, 0),
(101, '06CE5015', 'CE', 'OLD2002', 'May 2007', 4, 'Applied Mathematics IV', 79, 0, 0, 0, 0),
(101, '06CE5015', 'CE', 'OLD2002', 'May 2007', 4, 'Computer Organization & Architecture', 75, 24, 0, 24, 0),
(101, '06CE5015', 'CE', 'OLD2002', 'May 2007', 4, 'Database Systems ', 74, 24, 0, 23, 0),
(101, '06CE5015', 'CE', 'OLD2002', 'May 2007', 4, 'Industrial Economics & Management', 68, 0, 0, 0, 0),
(101, '06CE5015', 'CE', 'OLD2002', 'May 2007', 4, 'Principles of Comm. Engineering', 68, 23, 0, 23, 0),
(98, '06CE5015', 'CE', 'OLD2002', 'NOV 2007', 5, 'Applied Mathematics V', 52, 0, 0, 0, 0),
(98, '06CE5015', 'CE', 'OLD2002', 'NOV 2007', 5, 'Computer Network', 72, 24, 0, 0, 0),
(98, '06CE5015', 'CE', 'OLD2002', 'NOV 2007', 5, 'Computer Programming Lab', 40, 23, 0, 0, 0),
(98, '06CE5015', 'CE', 'OLD2002', 'NOV 2007', 5, 'Microprocessor', 55, 23, 0, 0, 0),
(98, '06CE5015', 'CE', 'OLD2002', 'NOV 2007', 5, 'Presentation & Comm. Techniques', 40, 20, 0, 23, 0),
(98, '06CE5015', 'CE', 'OLD2002', 'NOV 2007', 5, 'Principles of Digital Communication', 54, 22, 0, 0, 0),
(98, '06CE5015', 'CE', 'OLD2002', 'NOV 2007', 5, 'Theoretical Computer Science ', 61, 24, 0, 0, 0),
(101, '06CE5015', 'CE', 'OLD2002', 'may 2008', 6, 'Advanced Databases ', 64, 24, 0, 23, 0),
(101, '06CE5015', 'CE', 'OLD2002', 'may 2008', 6, 'Computer Graphics', 65, 24, 24, 0, 0),
(101, '06CE5015', 'CE', 'OLD2002', 'may 2008', 6, 'Object Oriented Analysis & Design', 64, 24, 24, 0, 0),
(101, '06CE5015', 'CE', 'OLD2002', 'may 2008', 6, 'Operating Systems With Unix', 63, 23, 0, 24, 0),
(101, '06CE5015', 'CE', 'OLD2002', 'may 2008', 6, 'Systems Programming ', 64, 22, 22, 0, 0),
(101, '06CE5015', 'CE', 'OLD2002', 'may 2008', 6, 'Web Technology', 73, 24, 0, 24, 0),
(784, '06CE5015', 'CE', 'OLD2002', 'dec 2008', 7, 'Advanced  Microprocessors', 57, 23, 0, 23, 0),
(784, '06CE5015', 'CE', 'OLD2002', 'dec 2008', 7, 'Digital Signal Processing', 72, 23, 0, 21, 0),
(784, '06CE5015', 'CE', 'OLD2002', 'dec 2008', 7, 'Elective I :( Image Processing )', 54, 22, 0, 21, 0),
(784, '06CE5015', 'CE', 'OLD2002', 'dec 2008', 7, 'Intelligent Systems', 54, 24, 0, 24, 0),
(784, '06CE5015', 'CE', 'OLD2002', 'dec 2008', 7, 'Project - A', 0, 24, 0, 21, 0),
(784, '06CE5015', 'CE', 'OLD2002', 'dec 2008', 7, 'Software Engineering', 51, 24, 0, 24, 0),
(769, '06CE5015', 'CE', 'OLD2002', 'may 2009', 8, 'Distributed Computing', 62, 24, 0, 21, 0),
(769, '06CE5015', 'CE', 'OLD2002', 'may 2009', 8, 'Elective II :( Robotics )', 57, 22, 0, 24, 0),
(769, '06CE5015', 'CE', 'OLD2002', 'may 2009', 8, 'Multimedia Systems', 63, 24, 0, 24, 0),
(769, '06CE5015', 'CE', 'OLD2002', 'may 2009', 8, 'Project  - B', 0, 48, 0, 47, 0),
(769, '06CE5015', 'CE', 'OLD2002', 'may 2009', 8, 'System Security', 56, 24, 0, 24, 0),
(93, '06CE5016', 'CE', 'OLD2002', 'NOV 2006', 3, 'Applied Mathematics III', 40, 0, 0, 0, 0),
(93, '06CE5016', 'CE', 'OLD2002', 'NOV 2006', 3, 'Data Structures', 40, 10, 0, 0, 0),
(93, '06CE5016', 'CE', 'OLD2002', 'NOV 2006', 3, 'Digital Logic Design & Applications', 40, 10, 0, 0, 0),
(93, '06CE5016', 'CE', 'OLD2002', 'NOV 2006', 3, 'Discrete Structures', 40, 10, 0, 0, 0),
(93, '06CE5016', 'CE', 'OLD2002', 'NOV 2006', 3, 'Electrical Networks', 40, 10, 0, 0, 0),
(93, '06CE5016', 'CE', 'OLD2002', 'NOV 2006', 3, 'Electronic Devices & Circuits', 40, 10, 0, 0, 0),
(2333, '08EE2026', 'EL', 'OLD2007', 'MAY 2010', 1, 'Applied Chemistry - I', 31, 19, 0, 0, 0),
(2333, '08EE2026', 'EL', 'OLD2007', 'MAY 2010', 1, 'Applied Mathematics - I', 41, 20, 0, 0, 0),
(2333, '08EE2026', 'EL', 'OLD2007', 'MAY 2010', 1, 'Applied Physics - I', 34, 13, 0, 0, 0),
(2333, '08EE2026', 'EL', 'OLD2007', 'MAY 2010', 1, 'Basic Electrical & Electronics Engg.', 49, 18, 20, 0, 0),
(2333, '08EE2026', 'EL', 'OLD2007', 'MAY 2010', 1, 'Basic Work Shop - I', 0, 40, 0, 0, 0),
(2333, '08EE2026', 'EL', 'OLD2007', 'MAY 2010', 1, 'Computer Programming - I', 46, 16, 0, 0, 0),
(2333, '08EE2026', 'EL', 'OLD2007', 'MAY 2010', 1, 'Engineering Mechanics', 41, 16, 17, 0, 0),
(287, '08EE2026', 'EL', 'OLD2007', 'MAY 2011', 3, 'Basic of Electronic Circuits', 45, 12, 30, 15, 0),
(287, '08EE2026', 'EL', 'OLD2007', 'MAY 2011', 3, 'Control System', 59, 18, 0, 16, 0),
(287, '08EE2026', 'EL', 'OLD2007', 'MAY 2011', 3, 'Digital System Design I', 40, 14, 22, 13, 0),
(287, '08EE2026', 'EL', 'OLD2007', 'MAY 2011', 3, 'Electrical Network Analysis and Synthesis', 47, 14, 0, 0, 0),
(287, '08EE2026', 'EL', 'OLD2007', 'MAY 2011', 3, 'Engineering Mathematics', 56, 13, 0, 0, 0),
(287, '08EE2026', 'EL', 'OLD2007', 'MAY 2011', 3, 'Presentation and Communication Techniques', 0, 28, 0, 0, 0),
(2499, '08EE2026', 'EL', 'OLD2007', 'MAY 2013', 4, 'Advanced Engineering Mathematics', 69, 0, 0, 0, 0),
(2499, '08EE2026', 'EL', 'OLD2007', 'MAY 2013', 4, 'Basics of Analog and Digital Communication Systems', 42, 15, 0, 12, 0),
(2499, '08EE2026', 'EL', 'OLD2007', 'MAY 2013', 4, 'Digital System Design - II', 40, 11, 22, 11, 0),
(2499, '08EE2026', 'EL', 'OLD2007', 'MAY 2013', 4, 'Electronic and Electrical Measuring Instruments & Machine', 40, 10, 0, 10, 0),
(2499, '08EE2026', 'EL', 'OLD2007', 'MAY 2013', 4, 'Electronics Circuits Analysis and Design', 40, 11, 23, 13, 0),
(2499, '08EE2026', 'EL', 'OLD2007', 'MAY 2013', 4, 'Electronics Wokshop - I', 0, 19, 0, 17, 0),
(4274, '08EE2026', 'EL', 'OLD2007', 'MAY 2013', 5, 'Continuous Time Signal & System', 57, 14, 0, 14, 0),
(4274, '08EE2026', 'EL', 'OLD2007', 'MAY 2013', 5, 'Digital Communication and Coding Techniques', 55, 13, 0, 17, 0),
(4274, '08EE2026', 'EL', 'OLD2007', 'MAY 2013', 5, 'Electromagnetic Engineering', 43, 12, 0, 0, 0),
(4274, '08EE2026', 'EL', 'OLD2007', 'MAY 2013', 5, 'Electronics Workshop - II', 0, 0, 0, 33, 0),
(4274, '08EE2026', 'EL', 'OLD2007', 'MAY 2013', 5, 'Environmental Studies', 20, 20, 0, 0, 0),
(4274, '08EE2026', 'EL', 'OLD2007', 'MAY 2013', 5, 'Linear Integrated Circuits and Design', 47, 14, 15, 0, 0),
(4274, '08EE2026', 'EL', 'OLD2007', 'MAY 2013', 5, 'Microprocessor and Microcontroller - I', 61, 14, 16, 0, 0),
(6255, '08EE2026', 'EL', 'OLD2007', 'NOV 2013', 6, 'Discrete Time Signal and System', 40, 16, 0, 16, 0),
(6255, '08EE2026', 'EL', 'OLD2007', 'NOV 2013', 6, 'Elective : Communication Systems & Application', 40, 12, 0, 0, 0),
(6255, '08EE2026', 'EL', 'OLD2007', 'NOV 2013', 6, 'Electronics Instrumentation System', 46, 12, 0, 16, 0),
(6255, '08EE2026', 'EL', 'OLD2007', 'NOV 2013', 6, 'Microprocessor and Microcontroller - II', 53, 13, 11, 0, 0),
(6255, '08EE2026', 'EL', 'OLD2007', 'NOV 2013', 6, 'Microwave Devices and Circuits', 62, 14, 0, 0, 0),
(6255, '08EE2026', 'EL', 'OLD2007', 'NOV 2013', 6, 'Power Electronics', 55, 15, 15, 0, 0),
(12626, '08EE2026', 'EL', 'OLD2007', 'NOVEMBER 2013 ', 7, 'Communication Networks', 44, 20, 0, 17, 0),
(12626, '08EE2026', 'EL', 'OLD2007', 'NOVEMBER 2013 ', 7, 'Elective I : ( Digital Image Processing Design )', 58, 20, 0, 17, 0),
(12626, '08EE2026', 'EL', 'OLD2007', 'NOVEMBER 2013 ', 7, 'Filter Design', 51, 22, 0, 20, 0),
(12626, '08EE2026', 'EL', 'OLD2007', 'NOVEMBER 2013 ', 7, 'Power Electronics and Drives', 60, 15, 0, 20, 0),
(12626, '08EE2026', 'EL', 'OLD2007', 'NOVEMBER 2013 ', 7, 'Project - A', 0, 23, 0, 22, 0),
(12626, '08EE2026', 'EL', 'OLD2007', 'NOVEMBER 2013 ', 7, 'VLSI Design', 60, 20, 0, 20, 0),
(14581, '08EE2026', 'EL', 'OLD2007', 'MAY 2014', 8, 'Advance VLSI Design', 49, 17, 0, 20, 0),
(14581, '08EE2026', 'EL', 'OLD2007', 'MAY 2014', 8, 'Elective II : ( Advanced Nteworking Technologies )', 62, 19, 0, 18, 0),
(14581, '08EE2026', 'EL', 'OLD2007', 'MAY 2014', 8, 'Embedded Systems and Real Time Programming', 58, 19, 0, 18, 0),
(14581, '08EE2026', 'EL', 'OLD2007', 'MAY 2014', 8, 'Project - II', 0, 41, 0, 84, 0),
(14581, '08EE2026', 'EL', 'OLD2007', 'MAY 2014', 8, 'Robotics and Automation', 54, 20, 0, 19, 0),
(317, '10EE5013', 'EL', 'OLD2007', 'Nov 2010', 3, 'Basic of Electronic Circuits', 50, 19, 42, 22, 0),
(317, '10EE5013', 'EL', 'OLD2007', 'Nov 2010', 3, 'Control System', 51, 22, 0, 20, 0),
(317, '10EE5013', 'EL', 'OLD2007', 'Nov 2010', 3, 'Digital System Design I', 75, 23, 46, 18, 0),
(317, '10EE5013', 'EL', 'OLD2007', 'Nov 2010', 3, 'Electrical Network Analysis and Synthesis', 62, 22, 0, 0, 0),
(317, '10EE5013', 'EL', 'OLD2007', 'Nov 2010', 3, 'Engineering Mathematics', 54, 17, 0, 0, 0),
(317, '10EE5013', 'EL', 'OLD2007', 'Nov 2010', 3, 'Presentation and Communication Techniques', 0, 39, 0, 0, 0),
(218, '10EE5013', 'EL', 'OLD2007', 'May 2011', 4, 'Advanced Engineering Mathematics', 62, 0, 0, 0, 0),
(218, '10EE5013', 'EL', 'OLD2007', 'May 2011', 4, 'Basics of Analog and Digital Communication Systems', 78, 21, 0, 21, 0),
(218, '10EE5013', 'EL', 'OLD2007', 'May 2011', 4, 'Digital System Design - II', 66, 16, 39, 18, 0),
(218, '10EE5013', 'EL', 'OLD2007', 'May 2011', 4, 'Electronic and Electrical Measuring Instruments & Machine', 65, 19, 0, 21, 0),
(218, '10EE5013', 'EL', 'OLD2007', 'May 2011', 4, 'Electronics Circuits Analysis and Design', 40, 15, 42, 20, 0),
(218, '10EE5013', 'EL', 'OLD2007', 'May 2011', 4, 'Electronics Wokshop - I', 0, 20, 0, 20, 0),
(318, '10EE5013', 'EL', 'OLD2007', 'Nov 2011', 5, 'Continuous Time Signal & System', 51, 19, 0, 19, 0),
(318, '10EE5013', 'EL', 'OLD2007', 'Nov 2011', 5, 'Digital Communication and Coding Techniques', 68, 21, 0, 16, 0),
(318, '10EE5013', 'EL', 'OLD2007', 'Nov 2011', 5, 'Electromagnetic Engineering', 56, 21, 0, 0, 0),
(318, '10EE5013', 'EL', 'OLD2007', 'Nov 2011', 5, 'Electronics Workshop - II', 0, 0, 0, 44, 0),
(318, '10EE5013', 'EL', 'OLD2007', 'Nov 2011', 5, 'Environmental Studies', 43, 19, 0, 0, 0),
(318, '10EE5013', 'EL', 'OLD2007', 'Nov 2011', 5, 'Linear Integrated Circuits and Design', 54, 19, 19, 0, 0),
(318, '10EE5013', 'EL', 'OLD2007', 'Nov 2011', 5, 'Microprocessor and Microcontroller - I', 58, 17, 18, 0, 0),
(6321, '10EE5013', 'EL', 'OLD2007', 'May 2012', 6, 'Discrete Time Signal and System', 63, 19, 0, 18, 0),
(6321, '10EE5013', 'EL', 'OLD2007', 'May 2012', 6, 'Elective : Communication Systems & Application', 60, 21, 0, 0, 0),
(6321, '10EE5013', 'EL', 'OLD2007', 'May 2012', 6, 'Electronics Instrumentation System', 74, 22, 0, 22, 0),
(6321, '10EE5013', 'EL', 'OLD2007', 'May 2012', 6, 'Microprocessor and Microcontroller - II', 66, 24, 22, 0, 0),
(6321, '10EE5013', 'EL', 'OLD2007', 'May 2012', 6, 'Microwave Devices and Circuits', 72, 23, 0, 0, 0),
(6321, '10EE5013', 'EL', 'OLD2007', 'May 2012', 6, 'Power Electronics', 62, 21, 20, 0, 0),
(72, '508', 'CE', 'OLD2002', 'Nov 1995', 1, 'Applied Mathematics - I', 57, 0, 0, 0, 0),
(72, '508', 'CE', 'OLD2002', 'Nov 1995', 1, 'Applied Sciences - I', 46, 21, 0, 0, 0),
(72, '508', 'CE', 'OLD2002', 'Nov 1995', 1, 'Basic Electrical & Electronics Engg.', 50, 17, 0, 0, 0),
(72, '508', 'CE', 'OLD2002', 'Nov 1995', 1, 'Basic work shop - I', 0, 0, 0, 0, 0),
(72, '508', 'CE', 'OLD2002', 'Nov 1995', 1, 'Computer Programming - I', 68, 19, 0, 0, 0),
(72, '508', 'CE', 'OLD2002', 'Nov 1995', 1, 'Engineering Mechanics ', 45, 12, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_marks_rev`
--

CREATE TABLE `student_marks_rev` (
  `seat` int(11) NOT NULL,
  `roll` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `pattern` varchar(30) NOT NULL,
  `year` varchar(50) NOT NULL,
  `sem` int(11) NOT NULL,
  `subject` varchar(350) NOT NULL,
  `coursecredits_th` varchar(10) NOT NULL,
  `coursecredits_tw` varchar(10) NOT NULL,
  `grade_ese` varchar(1) NOT NULL,
  `grade_op` varchar(1) NOT NULL,
  `grade_or` varchar(1) NOT NULL,
  `grade_ia` varchar(1) NOT NULL,
  `grade_tw` varchar(1) NOT NULL,
  `overall_ese` varchar(1) NOT NULL,
  `overall_tw` varchar(1) NOT NULL,
  `creditsearned_th` varchar(10) NOT NULL,
  `creditsearned_tw` varchar(10) NOT NULL,
  `gradepoints_th` varchar(10) NOT NULL,
  `gradepoints_tw` varchar(10) NOT NULL,
  `cxg_th` varchar(10) NOT NULL,
  `cxg_tw` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_marks_rev`
--

INSERT INTO `student_marks_rev` (`seat`, `roll`, `branch`, `pattern`, `year`, `sem`, `subject`, `coursecredits_th`, `coursecredits_tw`, `grade_ese`, `grade_op`, `grade_or`, `grade_ia`, `grade_tw`, `overall_ese`, `overall_tw`, `creditsearned_th`, `creditsearned_tw`, `gradepoints_th`, `gradepoints_tw`, `cxg_th`, `cxg_tw`) VALUES
(4000, '13CE1018', 'CE', 'REV2012', 'December 2013', 1, 'Applied Chemistry - I', '3', '0.5', 'A', '-', '-', 'B', 'B', 'B', 'A', '3', '0.5', '4', '5', '10', '10'),
(4000, '13CE1018', 'CE', 'REV2012', 'December 2013', 1, 'Applied Mathematics - I', '4', '1', 'A', '-', '-', 'B', 'B', 'B', 'A', '4', '1', '5', '4', '10', '10'),
(4000, '13CE1018', 'CE', 'REV2012', 'December 2013', 1, 'Applied Physics - I', '3', '0.5', 'A', '-', '-', 'B', 'B', 'B', 'A', '3', '0.5', '4', '5', '10', '10'),
(4000, '13CE1018', 'CE', 'REV2012', 'December 2013', 1, 'Basic Electrical & Electronics Engg.', '4', '1', 'A', '-', 'A', 'B', 'B', 'B', 'A', '4', '1', '5', '4', '25', '10'),
(4000, '13CE1018', 'CE', 'REV2012', 'December 2013', 1, 'Basic Work Shop Practice ', '2', '-', '-', '-', '-', '-', 'B', 'A', 'A', '2', '-', '4', '-', '10', '-'),
(4000, '13CE1018', 'CE', 'REV2012', 'December 2013', 1, 'Engineering Mechanics', '5', '1', 'A', '-', 'A', 'B', 'B', 'A', 'A', '5', '1', '5', '5', '10', '10'),
(4000, '13CE1018', 'CE', 'REV2012', 'December 2013', 1, 'Environmental Studies (EVS)', '2', '-', 'A', '-', '-', 'B', '-', 'A', 'A', '2', '-', '4', '-', '10', '-');

-- --------------------------------------------------------

--
-- Table structure for table `student_total`
--

CREATE TABLE `student_total` (
  `seat` int(11) NOT NULL,
  `roll` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `pattern` varchar(30) NOT NULL,
  `year` varchar(50) NOT NULL,
  `sem` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `percentage` float NOT NULL,
  `remark` varchar(140) DEFAULT NULL,
  `passinone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_total`
--

INSERT INTO `student_total` (`seat`, `roll`, `branch`, `pattern`, `year`, `sem`, `total`, `percentage`, `remark`, `passinone`) VALUES
(1111, '00CE0000', 'CE', 'OLD2007', 'May 2013', 7, 320, 40, NULL, 1),
(7374, '02ET2015', 'ET', 'OLD2002', 'Jan 2003', 1, 358, 59.67, NULL, 1),
(930, '02ET2015', 'ET', 'OLD2002', 'May 2004', 4, 619, 72.82, 'FIRST CLASS', 1),
(4656, '05CE1000', 'CE', 'OLD2002', 'December 2005', 1, 481, 80.17, NULL, 1),
(3817, '05CE1000', 'CE', 'OLD2002', 'May 2006', 2, 527, 75.29, 'FIRST CLASS', 1),
(77, '05Ce1000', 'CE', 'OLD2002', 'nov 2006', 3, 528, 72.83, NULL, 1),
(85, '05Ce1000', 'CE', 'OLD2002', 'may 2007', 4, 629, 78.63, 'first class', 1),
(103, '05Ce1000', 'CE', 'OLD2002', 'dec 2006', 5, 282, 41.78, NULL, 1),
(105, '05Ce1000', 'CE', 'OLD2002', 'MAY 2008', 6, 378, 42, 'first class', 1),
(105, '05Ce1000', 'CE', 'OLD2002', 'DEC 2008', 7, 333, 41.63, NULL, 1),
(708, '05Ce1000', 'CE', 'OLD2002', 'MAY 2009', 8, 296, 42.29, 'FIRST', 1),
(4656, '05ce1033', 'CE', 'OLD2002', 'December 2005', 1, 481, 80.17, NULL, 1),
(3817, '05ce1033', 'CE', 'OLD2002', 'May 2006', 2, 527, 75.29, 'First Class', 1),
(77, '05ce1033', 'CE', 'OLD2002', 'November 2006', 3, 528, 72.83, NULL, 1),
(85, '05ce1033', 'CE', 'OLD2002', 'May 2007', 4, 636, 79.5, 'First Class', 1),
(82, '05ce1033', 'CE', 'OLD2002', 'November 2007', 5, 505, 74.81, NULL, 1),
(85, '05ce1033', 'CE', 'OLD2002', 'May 2008', 6, 671, 74.56, 'First Class', 1),
(770, '05ce1033', 'CE', 'OLD2002', 'December 2008', 7, 562, 70.25, NULL, 1),
(760, '05ce1033', 'CE', 'OLD2002', 'May 2009', 8, 508, 72.57, 'First Class with Distinction', 1),
(4600, '05EE2041', 'EL', 'OLD2002', 'December 2005', 1, 318, 53, NULL, 1),
(3770, '05EE2041', 'EL', 'OLD2002', 'May 2006', 2, 477, 68.14, 'First Class', 1),
(353, '05EE2041', 'EL', 'OLD2002', 'November 2006', 3, 418, 57.66, NULL, 1),
(373, '05EE2041', 'EL', 'OLD2002', 'May 2007', 4, 591, 65.67, 'First Class', 1),
(365, '05EE2041', 'EL', 'OLD2002', 'November 2007', 5, 402, 59.56, NULL, 1),
(364, '05EE2041', 'EL', 'OLD2002', 'May 2008', 6, 464, 54.59, 'Second Class', 1),
(9511, '05EE2041', 'EL', 'OLD2002', 'December 2008', 7, 450, 62.07, NULL, 1),
(9504, '05EE2041', 'EL', 'OLD2002', 'May 2009', 8, 511, 73, 'First Class', 1),
(93, '06CE5015', 'CE', 'OLD2002', 'NOV 2006', 3, 485, 66.9, NULL, 1),
(101, '06CE5015', 'CE', 'OLD2002', 'May 2007', 4, 615, 76.88, 'First Class', 1),
(98, '06CE5015', 'CE', 'OLD2002', 'NOV 2007', 5, 533, 60.91, NULL, 1),
(101, '06CE5015', 'CE', 'OLD2002', 'may 2008', 6, 675, 75, 'First Class', 1),
(784, '06CE5015', 'CE', 'OLD2002', 'dec 2008', 7, 562, 70.25, NULL, 1),
(769, '06CE5015', 'CE', 'OLD2002', 'may 2009', 8, 520, 74.29, 'First Class with Distinction', 1),
(93, '06CE5016', 'CE', 'OLD2002', 'NOV 2006', 3, 290, 40, NULL, 1),
(2333, '08EE2026', 'EL', 'OLD2007', 'MAY 2010', 1, 421, 52.63, NULL, 0),
(287, '08EE2026', 'EL', 'OLD2007', 'MAY 2011', 3, 442, 52, NULL, 0),
(2499, '08EE2026', 'EL', 'OLD2007', 'MAY 2013', 4, 405, 47.65, 'PASS CLASS', 0),
(4274, '08EE2026', 'EL', 'OLD2007', 'MAY 2013', 5, 465, 54.71, NULL, 0),
(6255, '08EE2026', 'EL', 'OLD2007', 'NOV 2013', 6, 436, 51.29, 'PASS CLASS', 1),
(12626, '08EE2026', 'EL', 'OLD2007', 'NOVEMBER 2013 ', 7, 509, 63.63, NULL, 1),
(14581, '08EE2026', 'EL', 'OLD2007', 'MAY 2014', 8, 498, 66.4, 'FIRST CLASS', 1),
(317, '10EE5013', 'EL', 'OLD2007', 'Nov 2010', 3, 582, 68.47, NULL, 1),
(218, '10EE5013', 'EL', 'OLD2007', 'May 2011', 4, 583, 68.59, 'FIRST CLASS', 1),
(318, '10EE5013', 'EL', 'OLD2007', 'Nov 2011', 5, 562, 66.12, NULL, 1),
(6321, '10EE5013', 'EL', 'OLD2007', 'May 2012', 6, 609, 71.65, 'FIRST CLASS', 1),
(4819, '11in1028', 'IN', 'REV2012', 'DECEMBER 2011', 1, 0, 0, NULL, 1),
(31284, '11in1028', 'IN', 'REV2012', 'may 2013', 2, 0, 0, 'pass class', 0),
(317, '11in1028', 'IN', 'REV2012', 'November 2013', 3, 0, 0, NULL, 0),
(428, '11in1028', 'IN', 'REV2012', 'may 2015', 5, 0, 0, NULL, 0),
(629, '11in1028', 'IN', 'REV2012', 'may 2015', 6, 0, 0, 'second class', 0),
(81700026, '11in1028', 'IN', 'REV2012', 'may 2015', 7, 0, 0, NULL, 0),
(76400104, '11in1028', 'IN', 'REV2012', 'may 2015', 8, 0, 0, 'second class', 1),
(72, '508', 'CE', 'OLD2002', 'Nov 1995', 1, 335, 55.83, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_total_rev`
--

CREATE TABLE `student_total_rev` (
  `seat` int(11) NOT NULL,
  `roll` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `pattern` varchar(30) NOT NULL,
  `year` varchar(50) NOT NULL,
  `sem` int(11) NOT NULL,
  `total_coursecredits` float NOT NULL,
  `total_creditsearned` float NOT NULL,
  `total_cxg` float NOT NULL,
  `pointer` varchar(10) NOT NULL,
  `remark` varchar(140) DEFAULT NULL,
  `passinone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_total_rev`
--

INSERT INTO `student_total_rev` (`seat`, `roll`, `branch`, `pattern`, `year`, `sem`, `total_coursecredits`, `total_creditsearned`, `total_cxg`, `pointer`, `remark`, `passinone`) VALUES
(4000, '13CE1018', 'CE', 'REV2012', 'December 2013', 1, 27, 27, 135, '8.5', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_complete`
--
ALTER TABLE `application_complete`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `approved`
--
ALTER TABLE `approved`
  ADD PRIMARY KEY (`roll`),
  ADD UNIQUE KEY `roll` (`roll`,`date_approved`);

--
-- Indexes for table `course_table`
--
ALTER TABLE `course_table`
  ADD UNIQUE KEY `branch` (`branch`,`pattern`,`sem`,`subject`);

--
-- Indexes for table `course_table_rev`
--
ALTER TABLE `course_table_rev`
  ADD UNIQUE KEY `branch` (`branch`,`pattern`,`sem`,`subject`);

--
-- Indexes for table `current_status`
--
ALTER TABLE `current_status`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `elective`
--
ALTER TABLE `elective`
  ADD UNIQUE KEY `roll` (`roll`,`sem`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `student_documents`
--
ALTER TABLE `student_documents`
  ADD PRIMARY KEY (`roll`),
  ADD UNIQUE KEY `uniroll` (`roll`);

--
-- Indexes for table `student_marks`
--
ALTER TABLE `student_marks`
  ADD UNIQUE KEY `roll` (`roll`,`branch`,`pattern`,`sem`,`subject`);

--
-- Indexes for table `student_marks_rev`
--
ALTER TABLE `student_marks_rev`
  ADD UNIQUE KEY `roll` (`roll`,`branch`,`pattern`,`sem`,`subject`);

--
-- Indexes for table `student_total`
--
ALTER TABLE `student_total`
  ADD UNIQUE KEY `roll` (`roll`,`branch`,`pattern`,`sem`);

--
-- Indexes for table `student_total_rev`
--
ALTER TABLE `student_total_rev`
  ADD UNIQUE KEY `roll` (`roll`,`branch`,`pattern`,`sem`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
