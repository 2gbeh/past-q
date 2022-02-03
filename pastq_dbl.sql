-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 03, 2022 at 11:26 PM
-- Server version: 5.7.26
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pastq_dbl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

DROP TABLE IF EXISTS `admin_tb`;
CREATE TABLE IF NOT EXISTS `admin_tb` (
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `control` int(1) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `date` varchar(16) DEFAULT NULL,
  `time` varchar(8) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`email`, `username`, `password`, `control`, `status`, `date`, `time`, `id`) VALUES
('info@hwplabs.com', 'admin-ssql', '_Thatssqlb0y', 2, 0, '2022/2/3/4/33', '22:45:17', 1),
('info@pastq.io', 'pastq', '_Strongp@ssw0rd', 1, 0, '2022/2/3/4/33', '22:45:17', 2);

-- --------------------------------------------------------

--
-- Table structure for table `material_tb`
--

DROP TABLE IF EXISTS `material_tb`;
CREATE TABLE IF NOT EXISTS `material_tb` (
  `faculty` int(3) DEFAULT NULL,
  `department` int(3) DEFAULT NULL,
  `level` int(1) DEFAULT NULL,
  `semester` int(1) DEFAULT NULL,
  `session` int(7) DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL,
  `code` varchar(25) DEFAULT NULL,
  `page1` varchar(160) DEFAULT NULL,
  `page2` varchar(160) DEFAULT NULL,
  `page3` varchar(160) DEFAULT NULL,
  `user_rid` int(7) DEFAULT NULL,
  `date` varchar(16) DEFAULT NULL,
  `time` varchar(8) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material_tb`
--

INSERT INTO `material_tb` (`faculty`, `department`, `level`, `semester`, `session`, `course`, `code`, `page1`, `page2`, `page3`, `user_rid`, `date`, `time`, `id`) VALUES
(0, 3, 3, 0, 0, 'Computer Graphics &amp; Visualization', 'CSC409', 'CSC4092018.jpg', '', '', 2, '2022/2/3/4/33', '22:45:17', 1),
(0, 3, 3, 0, 0, 'Design &amp; Analysis of Algorithms', 'CSC401', 'CSC4012018.jpg', '', '', 2, '2022/2/3/4/33', '22:45:17', 2),
(0, 3, 3, 0, 2, 'Database Design &amp; Management', 'CSC311', 'CSC3112016.jpg', '', '', 2, '2022/2/3/4/33', '22:45:17', 3),
(0, 3, 3, 0, 1, 'Computer Architecture', 'CSC305', 'CSC3052017.jpg', '', '', 2, '2022/2/3/4/33', '22:45:17', 4),
(0, 3, 3, 0, 2, 'Computer Architecture', 'CSC305', 'CSC3052016.jpg', '', '', 2, '2022/2/3/4/33', '22:45:17', 5),
(0, 3, 3, 0, 1, 'Operating System', 'CSC303', 'CSC3032017.jpg', '', '', 2, '2022/2/3/4/33', '22:45:17', 6),
(0, 3, 3, 0, 1, 'Advanced Programming with Java', 'CSC309', 'CSC3092017.jpg', '', '', 2, '2022/2/3/4/33', '22:45:17', 7),
(0, 3, 3, 0, 2, 'Advanced Programming with Java', 'CSC309', 'CSC3092016.jpg', '', '', 2, '2022/2/3/4/33', '22:45:17', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

DROP TABLE IF EXISTS `user_tb`;
CREATE TABLE IF NOT EXISTS `user_tb` (
  `fullname` varchar(50) DEFAULT NULL,
  `faculty` int(3) DEFAULT NULL,
  `department` int(3) DEFAULT NULL,
  `matno` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `date` varchar(16) DEFAULT NULL,
  `time` varchar(8) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`fullname`, `faculty`, `department`, `matno`, `password`, `date`, `time`, `id`) VALUES
('Tugbeh Osaretin', 0, 3, 'CNA/10/11/4444', '4444', '2022/2/3/4/33', '22:45:17', 1),
('Oyibode Eseoghene', 0, 3, 'CNA/14/15/1355', '1355', '2022/2/3/4/33', '22:45:17', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
