-- phpMyAdmin SQL Dump
-- version 3.2.2
-- http://www.phpmyadmin.net
--
-- Host: sql.njit.edu
-- Generation Time: Nov 26, 2013 at 04:09 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `enrolled`
--

INSERT INTO `enrolled` (`id`, `crn`, `ucid`, `grade`) VALUES
(1, 1, 'gt35', 0),
(2, 1, 'jdr22', 0),
(4, 2, 'gt35', 0),
(8, 3, 'jdr22', 0),
(9, 4, 'gt35', 0),
(10, 3, 'gt35', 0),
(11, 1, 'teacher', 0),
(12, 2, 'teacher', 0),
(13, 3, 'teacher', 0),
(14, 4, 'teacher', 0);

-- --------------------------------------------------------

--
-- Table structure for table `openEnded`
--

CREATE TABLE IF NOT EXISTS `openEnded` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `crn` int(100) NOT NULL,
  `text` varchar(2048) NOT NULL,
  `type` varchar(50) NOT NULL,
  `input` varchar(1024) NOT NULL,
  `output` varchar(1024) NOT NULL,
  `arguments` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `weight` int(100) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `openEnded`
--

INSERT INTO `openEnded` (`id`, `crn`, `text`, `type`, `input`, `output`, `arguments`, `name`, `weight`) VALUES
(1, 0, 'test', 'typetest', 'input', 'output', 'args', 'name', 10),
(2, 1, 'gt35test', 'test', 'test', 'test', 'test', 'test', 10),
(3, 0, '', 'int', 'Inputsdfsdfsd', 'Outputsdfsdf', 'commadsfdsfsd', 'namesdfsdf', 10),
(4, 1, 'gt35test2', 'test', 'test', 'test', 'test', 'test', 10),
(5, 0, 'quesasdasdas', 'boolean', 'Inputfghfghgf', 'Outputfghfghfg', 'commadgfhdfghg', 'namefghgfhfghfg', 10),
(8, 0, 'blah', 'blah1', 'blah2', 'blah3', 'blah4', 'blah5', 10),
(9, 0, 'question777', 'int', 'Input777', 'Output777', 'comma777', 'name777', 10),
(30, 4, 'Write a function to add two integers.', 'int', '(2,2) (3,3) (4,4)', '4,6,8', 'int arg1, int arg2', 'add', 10),
(32, 2, 'Write a function to', 'double', '1 2', '2 3', '(2,3)', 'getAnswer', 10),
(33, 0, 'a', 'b', 'c', 'd', 'e', 'f', 10),
(34, 0, 'a', 'int', 'b', 'c', '(2,3)', 'writeStuff', 10),
(35, 0, 'Write a function to', 'a', 'b', 'c', 'd', 'e', 10),
(36, 0, '1', '2', 'q', 'x', 'x', 's', 10),
(37, 0, '1', '2', 'q', 'x', 'x', 's', 10),
(38, 1, 'test2', 'int', 'test2', 'test2', 'djflsjfsdlfjsdlfjdslfdsjflsjl', 'dlkfjdslj', 10);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `crn` int(4) NOT NULL,
  `text` varchar(1024) NOT NULL,
  `a` varchar(256) NOT NULL,
  `b` varchar(256) NOT NULL,
  `c` varchar(256) NOT NULL,
  `d` varchar(256) NOT NULL,
  `ans` varchar(1) NOT NULL,
  `weight` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `crn`, `text`, `a`, `b`, `c`, `d`, `ans`, `weight`) VALUES
(6, 1, 'what is java', 'coffe', 'bean', 'programming language', 'all of the above', 'd', 10),
(9, 1, 'What is the best pokemon?', 'pikachu', 'mr cool guy', 'sandslash', 'Blastoise', 'a', 10),
(34, 1, 'Which of the following is the keyword for the integer data type in Java?', 'int', 'inty', 'ints', 'double', 'a', 10),
(35, 1, 'Which of these statements is invalid?', 'String name = "Daniel";', 'int number = 5;', 'boolean isFalse = false;', 'int numbers = name;', 'd', 10),
(39, 1, 'What is CS 490?', 'A class on software engineering', 'I have no idea', 'A math course', 'Random Answer', 'a', 10),
(40, 1, 'this question is worth 100 points in weight.', 'this is the right answer', 'dont get it wrong', 'you will fail', 'im serious', 'a', 100),
(41, 1, 'This question is worth an incredible amount of points.', 'better get it right', 'or you will surely fail', 'maybe even worse', 'who knows', 'a', 90000000),
(42, 1, 'test', 'right', 'wrong', 'wrong', 'wrong', 'a', 10),
(48, 1, 'Wgat s8r ', '', '', 'rught', '', 'c', 20),
(49, 1, 'Test question about numbers.', '1', '-1', '0', 'pi', 'd', 2),
(50, 1, 'What is the name of this course?', 'CS490', 'IT101', 'CS102', 'MTH473', 'a', 1),
(51, 1, 'first', 'a', 'b', 'c', 'd', 'a', 1),
(52, 1, 'first3', 'a', 'dsd', 'sf', 'ss', 'b', 2),
(53, 1, 'second3', 'aa', 'sd', 'asd', 'asdas', 'd', 0),
(54, 1, 'first2', 'a', 'b', 'c', 'd', 'c', 0),
(55, 1, 'first3', 'a', 'b', 'c', 'd', 'c', 0),
(56, 1, 'second3', 'a', 'b', 'c', 'd', 'c', 0),
(57, 0, 'first4', 'a', 'b', 'c', 'd', 'c', 0),
(58, 0, 'second4', 'a', 'b', 'c', 'd', 'c', 0)