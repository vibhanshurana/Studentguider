-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 15, 2016 at 10:21 PM
-- Server version: 5.5.16
-- PHP Version: 5.4.0beta2-dev

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sgdbb`
--

-- --------------------------------------------------------

--
-- Table structure for table `b_info`
--

CREATE TABLE IF NOT EXISTS `b_info` (
  `dn` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) NOT NULL,
  `depart` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`dn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `b_info`
--

INSERT INTO `b_info` (`dn`, `sname`, `depart`, `mobile`, `email`, `pass`) VALUES
(2, 'vibhanshu', 'MCA I Year', '9012345678', 'vrana055@gmail.com', 'v'),
(12, 'Amit', 'MCA', '1234567890', 'amit@gmail.com', 'a'),
(13, 'ch lavanya', 'MCA', '9329858085', 'ch.lavanya0771@gmail.com', 'lavi@123'),
(16, 'david', 'Arch. I Year', '8449033619', 'david@gmail.com', 'd'),
(100, 'admin', '', '', 'aaaa', 'dddd');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `c_n` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL,
  PRIMARY KEY (`c_n`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_n`, `c_name`) VALUES
(1, 'education'),
(2, 'sports'),
(3, 'cultural');

-- --------------------------------------------------------

--
-- Table structure for table `choice`
--

CREATE TABLE IF NOT EXISTS `choice` (
  `ch_n` int(11) NOT NULL AUTO_INCREMENT,
  `d_n` int(11) NOT NULL,
  `c_n` int(11) NOT NULL,
  `g_n` int(11) NOT NULL,
  `cho` int(11) NOT NULL,
  PRIMARY KEY (`ch_n`),
  UNIQUE KEY `ch_n` (`ch_n`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=189 ;

--
-- Dumping data for table `choice`
--

INSERT INTO `choice` (`ch_n`, `d_n`, `c_n`, `g_n`, `cho`) VALUES
(43, 9, 4, 11, 0),
(44, 9, 4, 13, 0),
(45, 10, 1, 1, 0),
(46, 10, 1, 2, 0),
(47, 10, 1, 3, 0),
(48, 10, 1, 14, 0),
(49, 10, 1, 15, 0),
(50, 10, 1, 16, 0),
(51, 10, 1, 17, 0),
(52, 10, 1, 18, 0),
(53, 10, 1, 19, 0),
(54, 10, 2, 4, 0),
(55, 10, 2, 5, 0),
(56, 10, 2, 6, 0),
(57, 10, 3, 7, 0),
(58, 10, 3, 8, 0),
(59, 10, 3, 9, 0),
(60, 10, 4, 10, 0),
(61, 10, 4, 11, 0),
(62, 10, 4, 13, 0),
(63, 11, 1, 1, 1),
(64, 11, 1, 2, 0),
(65, 11, 1, 3, 0),
(66, 11, 1, 14, 0),
(67, 11, 1, 15, 0),
(68, 11, 1, 16, 0),
(69, 11, 1, 17, 0),
(70, 11, 1, 18, 0),
(71, 11, 1, 19, 0),
(72, 11, 2, 4, 0),
(73, 11, 2, 5, 0),
(74, 11, 2, 6, 0),
(75, 11, 3, 7, 0),
(76, 11, 3, 8, 0),
(77, 11, 3, 9, 0),
(78, 11, 4, 10, 0),
(79, 11, 4, 11, 0),
(80, 11, 4, 13, 0),
(81, 12, 1, 1, 1),
(82, 12, 1, 2, 1),
(83, 12, 1, 3, 1),
(84, 12, 1, 14, 0),
(85, 12, 1, 15, 0),
(86, 12, 1, 16, 0),
(87, 12, 1, 17, 0),
(88, 12, 1, 18, 0),
(89, 12, 1, 19, 0),
(90, 12, 2, 4, 0),
(91, 12, 2, 5, 0),
(92, 12, 2, 6, 0),
(93, 12, 3, 7, 0),
(94, 12, 3, 8, 0),
(95, 12, 3, 9, 0),
(96, 12, 4, 10, 0),
(97, 12, 4, 11, 0),
(98, 12, 4, 13, 0),
(99, 13, 1, 1, 0),
(100, 13, 1, 2, 0),
(101, 13, 1, 3, 0),
(102, 13, 1, 14, 0),
(103, 13, 1, 15, 0),
(104, 13, 1, 16, 0),
(105, 13, 1, 19, 0),
(106, 13, 2, 4, 0),
(107, 13, 2, 5, 0),
(108, 13, 2, 6, 0),
(109, 13, 3, 7, 0),
(110, 13, 3, 8, 0),
(111, 13, 3, 9, 0),
(112, 13, 4, 10, 0),
(113, 13, 4, 11, 0),
(114, 13, 4, 13, 0),
(131, 15, 1, 1, 0),
(132, 15, 1, 2, 0),
(133, 15, 1, 3, 0),
(134, 15, 1, 14, 0),
(135, 15, 1, 15, 0),
(136, 15, 1, 16, 0),
(137, 15, 1, 19, 0),
(138, 15, 2, 4, 0),
(139, 15, 2, 5, 0),
(140, 15, 2, 6, 0),
(141, 15, 3, 7, 0),
(142, 15, 3, 8, 0),
(143, 15, 3, 9, 0),
(144, 15, 4, 10, 0),
(145, 15, 4, 11, 0),
(146, 15, 4, 13, 0),
(147, 16, 1, 1, 1),
(148, 16, 1, 2, 1),
(149, 16, 1, 3, 1),
(150, 16, 1, 14, 0),
(151, 16, 1, 15, 0),
(152, 16, 1, 16, 0),
(153, 16, 1, 19, 0),
(154, 16, 2, 4, 0),
(155, 16, 2, 5, 0),
(156, 16, 2, 6, 0),
(157, 16, 3, 7, 0),
(158, 16, 3, 8, 1),
(159, 16, 3, 9, 0),
(160, 16, 4, 10, 0),
(161, 16, 4, 11, 0),
(162, 16, 4, 13, 0),
(163, 17, 1, 1, 1),
(164, 17, 1, 2, 1),
(165, 17, 1, 3, 0),
(166, 17, 1, 14, 0),
(167, 17, 1, 15, 0),
(168, 17, 1, 16, 0),
(169, 17, 1, 19, 0),
(170, 17, 2, 4, 0),
(171, 17, 2, 5, 0),
(172, 17, 2, 6, 0),
(173, 17, 3, 7, 1),
(174, 17, 3, 8, 1),
(175, 17, 3, 9, 1),
(176, 17, 4, 10, 0),
(177, 17, 4, 11, 0),
(178, 17, 4, 13, 0),
(179, 2, 5, 20, 1),
(180, 6, 5, 20, 0),
(181, 8, 5, 20, 0),
(182, 9, 5, 20, 0),
(183, 10, 5, 20, 0),
(184, 11, 5, 20, 0),
(185, 12, 5, 20, 0),
(186, 13, 5, 20, 0),
(187, 16, 5, 20, 0),
(188, 17, 5, 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `e_sl` int(11) NOT NULL AUTO_INCREMENT,
  `e_sub` varchar(50) NOT NULL,
  `e_disc` varchar(200) NOT NULL,
  `e_view` int(11) NOT NULL,
  `e_date` date NOT NULL,
  `e_group` varchar(20) NOT NULL,
  `e_cho` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`e_sl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`e_sl`, `e_sub`, `e_disc`, `e_view`, `e_date`, `e_group`, `e_cho`) VALUES
(1, 'ESubmit', 'Come on guys', 1, '2016-09-15', '10', 0),
(3, 'Avartan', 'WELCOME TO ALL\r\nOoooooo', 0, '2016-01-15', '1', 1),
(5, 'Tech', 'Warm Welcome', 1, '2016-09-01', '1', 1),
(6, 'Vigyan PPT Round', 'Come Onnnnnnnnnnnnnnnnn', 1, '2016-09-16', '1', 0),
(7, 'Code Mad', 'we Are Coder', 1, '2016-09-18', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `g_n` int(11) NOT NULL AUTO_INCREMENT,
  `g_name` varchar(50) NOT NULL,
  `c_n` int(11) NOT NULL,
  PRIMARY KEY (`g_n`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`g_n`, `g_name`, `c_n`) VALUES
(2, 'java', 1),
(3, 'php', 1),
(4, 'cricket', 2),
(5, 'football', 2),
(6, 'badminton', 2),
(7, 'dancing', 3),
(8, 'singing', 3),
(9, 'instrument', 3),
(14, 'DBMS', 1),
(16, 'c programming', 1),
(19, 'networking', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `p_sl` int(11) NOT NULL AUTO_INCREMENT,
  `dn` int(11) NOT NULL,
  `g_n` int(11) NOT NULL,
  `content` varchar(100) NOT NULL,
  `p_c` int(11) NOT NULL,
  `pn` int(11) DEFAULT NULL,
  PRIMARY KEY (`p_sl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
