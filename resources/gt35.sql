-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2013 at 08:43 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gt35`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `crn` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `fullName` varchar(75) NOT NULL,
  PRIMARY KEY (`crn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`crn`, `name`, `fullName`) VALUES
(1, 'CS490', 'SOFTWARE ENGINEERING'),
(2, 'CS435', 'ADV DATA STRUCTURES'),
(3, 'IT266', 'GAME MOD DEVELOPMENT'),
(4, 'MATH346', 'MATHEMATICS OF FINANCE');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled`
--

CREATE TABLE IF NOT EXISTS `enrolled` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `crn` int(100) NOT NULL,
  `ucid` varchar(10) NOT NULL,
  `grade` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `enrolled`
--

INSERT INTO `enrolled` (`id`, `crn`, `ucid`, `grade`) VALUES
(1, 1, 'gt35', 0),
(2, 1, 'jdr22', 0),
(4, 2, 'gt35', 0),
(8, 3, 'jdr22', 0),
(9, 4, 'gt35', 0),
(10, 3, 'gt35', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ucid` varchar(10) NOT NULL,
  `password` varchar(25) NOT NULL,
  `type` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ucid`, `password`, `type`) VALUES
(1, 'gt35', 'password', 0),
(2, 'jdr22', 'password', 0),
(3, 'ac422', 'password', 0),
(4, 'theo', 'password', 1),
(5, 'lel1', 'password', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
