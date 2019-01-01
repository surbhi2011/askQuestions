-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 01, 2019 at 07:38 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `que_ans`
--
CREATE DATABASE IF NOT EXISTS `que_ans` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `que_ans`;

-- --------------------------------------------------------

--
-- Table structure for table `ans_tbl`
--

CREATE TABLE IF NOT EXISTS `ans_tbl` (
  `p_a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_detail` varchar(5000) DEFAULT NULL,
  `f_a_e_id` varchar(40) NOT NULL,
  `a_date` date NOT NULL,
  `a_image` varchar(80) DEFAULT NULL,
  `a_like` int(11) DEFAULT NULL,
  `f_q_id` int(11) NOT NULL,
  PRIMARY KEY (`p_a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `ans_tbl`
--

INSERT INTO `ans_tbl` (`p_a_id`, `a_detail`, `f_a_e_id`, `a_date`, `a_image`, `a_like`, `f_q_id`) VALUES
(2, 'array is a collection of similar data type', 'kinjal@gmail.com', '2016-06-30', NULL, NULL, 1),
(12, 'An array is a collection of data items, all of the same type, accessed using a common name. A one-dimensional array is like a list; A two dimensional array is like a table; The C language places no limits on the number of dimensions in an array, though specific implementations may.\r\n', 'moni@gmail.com', '2016-07-01', 'null', 0, 1),
(38, '', 'moni@gmail.com', '2016-07-03', 'null', 0, 1),
(39, 'sdsaf\r\n', 'moni@gmail.com', '2016-07-03', 'null', 0, 1),
(40, '', 'moni@gmail.com', '2016-07-03', 'null', 0, 1),
(41, '', 'moni@gmail.com', '2016-07-03', 'null', 0, 1),
(42, '\r\nsfsfs', 'moni@gmail.com', '2016-07-03', 'null', 0, 1),
(43, '\r\nsfsfs', 'moni@gmail.com', '2016-07-03', 'null', 0, 1),
(44, '\r\nxascdas', 'moni@gmail.com', '2016-07-03', 'null', 0, 1),
(45, '\r\nvnkdfbnl', 'moni@gmail.com', '2016-07-03', 'null', 0, 1),
(46, '', 'moni@gmail.com', '2016-07-03', 'null', 0, 1),
(47, '', 'moni@gmail.com', '2016-07-03', 'null', 0, 1),
(48, '\r\nvnkdfbnl', 'moni@gmail.com', '2016-07-03', 'null', 0, 1),
(49, 'sjdndskfds\r\n', 'moni@gmail.com', '2016-07-04', 'null', 0, 1),
(50, '', '', '2017-03-06', 'null', 0, 0),
(51, '\r\nhello its my frirst comment', 'adtsolanki22@gmail.com', '2018-08-14', 'null', 0, 5),
(52, '\r\narray is only array', 'adtsolanki22@gmail.com', '2018-08-14', 'null', 0, 1),
(53, '\r\naditi is moni', 'adtsolanki22@gmail.com', '2018-08-14', 'null', 0, 7),
(54, '\r\njava is java', 'adtsolanki22@gmail.com', '2018-08-14', 'null', 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `cat_tbl`
--

CREATE TABLE IF NOT EXISTS `cat_tbl` (
  `p_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  PRIMARY KEY (`p_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cat_tbl`
--

INSERT INTO `cat_tbl` (`p_cat_id`, `cat_name`) VALUES
(1, 'I.T.'),
(2, 'G.K'),
(3, 'SCHOOL'),
(4, 'ENGLISH'),
(5, 'erewr'),
(6, 'dbms');

-- --------------------------------------------------------

--
-- Table structure for table `que_tbl`
--

CREATE TABLE IF NOT EXISTS `que_tbl` (
  `p_q_id` int(11) NOT NULL AUTO_INCREMENT,
  `q_name` varchar(40) NOT NULL,
  `q_desc` varchar(1000) DEFAULT NULL,
  `q_date` date NOT NULL,
  `f_q_cat_id` int(11) NOT NULL,
  `f_q_e_id` varchar(40) NOT NULL,
  `q_image` varchar(80) DEFAULT NULL,
  `q_view` int(11) DEFAULT NULL,
  `q_flag` varchar(30) NOT NULL,
  PRIMARY KEY (`p_q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `que_tbl`
--

INSERT INTO `que_tbl` (`p_q_id`, `q_name`, `q_desc`, `q_date`, `f_q_cat_id`, `f_q_e_id`, `q_image`, `q_view`, `q_flag`) VALUES
(1, 'what is an array??', 'how to define array in c language', '2016-05-30', 1, 'surbhi@gmail.com', NULL, NULL, 'active'),
(2, 'wt is c??', 'define c', '2016-06-30', 1, 'kinjal@gmail.com', NULL, NULL, 'active'),
(3, 'wt is sql??', 'define sql', '2016-06-30', 2, 'surbhi@gmail.com', NULL, NULL, 'unactive'),
(4, 'what is java?', 'definition java', '2016-07-04', 1, 'moni@gmail.com', '', 0, '0'),
(5, '1837847 + 7349824', 'Please give the correct answer', '2016-07-04', 3, 'moni@gmail.com', 'img/q8.jpg', 0, '0'),
(6, 'wt is pronoun??', 'guhkjnk', '2016-07-05', 4, 'moni@gmail.com', 'img/', 0, '0'),
(7, 'who is aditi', 'define myself', '2018-08-14', 3, 'adtsolanki22@gmail.com', 'img/', 0, '0'),
(8, 'rtcamp', 'what is rtcamp', '2018-08-16', 1, 'abcde@gmail.com', 'img/', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `user1_tbl`
--

CREATE TABLE IF NOT EXISTS `user1_tbl` (
  `p_u_id` varchar(40) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_pass` varchar(20) NOT NULL,
  `u_gender` varchar(20) NOT NULL,
  `u_mobile` varchar(12) DEFAULT NULL,
  `u_photo` varchar(80) DEFAULT NULL,
  `u_type` varchar(10) NOT NULL,
  `link` varchar(50) NOT NULL,
  `action` varchar(30) NOT NULL,
  PRIMARY KEY (`p_u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE IF NOT EXISTS `user_tbl` (
  `p_u_id` varchar(40) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_pass` varchar(20) NOT NULL,
  `u_gender` varchar(20) NOT NULL,
  `u_mobile` varchar(12) DEFAULT NULL,
  `u_photo` varchar(80) DEFAULT NULL,
  `u_type` varchar(10) NOT NULL,
  `link` varchar(50) NOT NULL,
  `action` varchar(30) NOT NULL,
  PRIMARY KEY (`p_u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`p_u_id`, `u_name`, `u_pass`, `u_gender`, `u_mobile`, `u_photo`, `u_type`, `link`, `action`) VALUES
('abcde@gmail.com', 'abcde', 'abcde123', 'female', '43546768', 'img/', 'user', '1a551829d5', 'f'),
('aditi@gmail.com', 'aditiii', 'aditi123', 'female', '9999687673', 'img/IMG_20160503_221535-1.jpg', 'admin', '', ''),
('adtsolanki22@gmail.com', 'aditi', 'aditi123', 'female', '231423058', 'img/', 'user', 'fad68ee497', 'f'),
('arjun@gmail.com', 'arjun', 'arjun123', 'male', '8560950999', '', 'user', '', ''),
('dev@gmail.com', 'dev', 'dev123456', 'male', '9860000000', 'img/20150417_110956.jpg', 'user', '', ''),
('jainsurbhi2021@gmail.com', 'Surbhi', 'null', 'female', 'null', 'null', 'null', 'null', 'null'),
('kimi@gmail.com', 'kimi', 'kimi123', 'female', '6788953456', 'img/Aqua_Eco_20150503_120958.jpg', 'user', '', ''),
('kinjal@gmail.com', 'kinjal', 'kinjal123', 'female', '70980980', '', 'user', '', ''),
('lipi2@gmail.com', 'lipi', 'lipi1234', 'female', '12345', 'img/', 'user', 'fc5a29b5d4', 'f'),
('lipi@gmail.com', 'lipi', 'lipi123', 'female', '9825857747', 'img/IMG_20150630_141455(1).jpg', 'admin', '', ''),
('moni@gmail.com', 'moniii', 'moni123', 'female', '9997998990', 'img/bff.jpg', 'user', '', ''),
('monika@gmail.com', 'monika', 'monika123', 'male', '8059409999', '', 'user', '', ''),
('priya1@gmail.com', 'priya', 'priya123', 'female', '006950690', '', 'user', '', ''),
('priya2@gmail.com', 'priya', 'priya123', 'male', '9090998877', '', 'user', '', ''),
('priya@gmail.com', 'priya', 'priya123', 'female', '85090590', '', 'user', '', ''),
('surbhi@gmail.com', 'sur', 'surbhi', 'female', '9922334455', 'img/IMG_20160324_160020.jpg', 'user', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
