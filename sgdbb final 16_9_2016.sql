-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 15, 2016 at 07:57 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=114 ;

--
-- Dumping data for table `b_info`
--

INSERT INTO `b_info` (`dn`, `sname`, `depart`, `mobile`, `email`, `pass`) VALUES
(102, 'Admin', '', '', 'aaaa', 'dddd'),
(104, 'vibhanshu', 'Arch. I Year', '7894561300', 'rana@yahoo.com', '0000'),
(106, 'revanth', 'Mechanical III Year', '7456981230', 'rev@yahoo.com', '0000'),
(111, 'subha@000.com', 'MCA II Year', '9533274247', 'subha@000.com', '0000'),
(112, 'PAVAN', 'MCA II Year', '7893693149', 'pavan@123.com', '0000'),
(113, 'akash', 'CHEM. II Year', '8888888888', 'a@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `c_n` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL,
  PRIMARY KEY (`c_n`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_n`, `c_name`) VALUES
(6, 'SPORTS'),
(7, 'EDUCATION'),
(8, 'CULTURALS'),
(9, 'AAVARTHAN'),
(10, 'TECHNOCRACY');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=502 ;

--
-- Dumping data for table `choice`
--

INSERT INTO `choice` (`ch_n`, `d_n`, `c_n`, `g_n`, `cho`) VALUES
(238, 102, 6, 28, 0),
(239, 102, 6, 29, 0),
(240, 102, 6, 30, 0),
(241, 102, 6, 31, 0),
(242, 102, 7, 32, 0),
(243, 102, 7, 33, 0),
(244, 102, 7, 34, 0),
(245, 102, 7, 35, 0),
(246, 102, 8, 36, 0),
(247, 102, 8, 37, 0),
(248, 102, 8, 38, 0),
(260, 104, 6, 28, 1),
(261, 104, 6, 29, 1),
(262, 104, 6, 30, 1),
(263, 104, 6, 31, 1),
(264, 104, 7, 32, 0),
(265, 104, 7, 33, 1),
(266, 104, 7, 34, 1),
(267, 104, 7, 35, 0),
(268, 104, 8, 36, 0),
(269, 104, 8, 37, 1),
(270, 104, 8, 38, 1),
(282, 106, 6, 28, 1),
(283, 106, 6, 29, 1),
(284, 106, 6, 30, 1),
(285, 106, 6, 31, 0),
(286, 106, 7, 32, 1),
(287, 106, 7, 33, 1),
(288, 106, 7, 34, 0),
(289, 106, 7, 35, 0),
(290, 106, 8, 36, 1),
(291, 106, 8, 37, 1),
(292, 106, 8, 38, 0),
(293, 107, 6, 28, 0),
(294, 107, 6, 29, 0),
(295, 107, 6, 30, 0),
(296, 107, 6, 31, 0),
(297, 107, 7, 32, 0),
(298, 107, 7, 33, 0),
(299, 107, 7, 34, 0),
(300, 107, 7, 35, 0),
(301, 107, 8, 36, 0),
(302, 107, 8, 37, 0),
(303, 107, 8, 38, 0),
(304, 108, 6, 28, 0),
(305, 108, 6, 29, 0),
(306, 108, 6, 30, 0),
(307, 108, 6, 31, 0),
(308, 108, 7, 32, 0),
(309, 108, 7, 33, 0),
(310, 108, 7, 34, 0),
(311, 108, 7, 35, 0),
(312, 108, 8, 36, 0),
(313, 108, 8, 37, 0),
(314, 108, 8, 38, 0),
(326, 102, 8, 39, 0),
(328, 104, 8, 39, 0),
(330, 106, 8, 39, 0),
(331, 107, 8, 39, 0),
(332, 108, 8, 39, 0),
(334, 102, 9, 40, 0),
(336, 104, 9, 40, 1),
(338, 106, 9, 40, 1),
(339, 107, 9, 40, 0),
(340, 108, 9, 40, 0),
(342, 102, 9, 41, 0),
(344, 104, 9, 41, 0),
(346, 106, 9, 41, 0),
(347, 107, 9, 41, 0),
(348, 108, 9, 41, 0),
(350, 102, 9, 42, 0),
(352, 104, 9, 42, 0),
(354, 106, 9, 42, 0),
(355, 107, 9, 42, 0),
(356, 108, 9, 42, 0),
(358, 102, 9, 43, 0),
(360, 104, 9, 43, 1),
(362, 106, 9, 43, 0),
(363, 107, 9, 43, 0),
(364, 108, 9, 43, 0),
(366, 102, 9, 44, 0),
(368, 104, 9, 44, 0),
(370, 106, 9, 44, 0),
(371, 107, 9, 44, 0),
(372, 108, 9, 44, 0),
(374, 102, 9, 45, 0),
(376, 104, 9, 45, 0),
(378, 106, 9, 45, 1),
(379, 107, 9, 45, 0),
(380, 108, 9, 45, 0),
(382, 102, 9, 46, 0),
(384, 104, 9, 46, 0),
(386, 106, 9, 46, 0),
(387, 107, 9, 46, 0),
(388, 108, 9, 46, 0),
(390, 102, 10, 47, 0),
(392, 104, 10, 47, 0),
(394, 106, 10, 47, 1),
(395, 107, 10, 47, 0),
(396, 108, 10, 47, 0),
(398, 102, 10, 48, 0),
(400, 104, 10, 48, 1),
(402, 106, 10, 48, 0),
(403, 107, 10, 48, 0),
(404, 108, 10, 48, 0),
(427, 111, 6, 28, 0),
(428, 111, 6, 29, 0),
(429, 111, 6, 30, 1),
(430, 111, 6, 31, 1),
(431, 111, 7, 32, 0),
(432, 111, 7, 33, 0),
(433, 111, 7, 34, 1),
(434, 111, 7, 35, 1),
(435, 111, 8, 36, 0),
(436, 111, 8, 37, 0),
(437, 111, 8, 38, 1),
(438, 111, 8, 39, 1),
(439, 111, 9, 40, 1),
(440, 111, 9, 41, 0),
(441, 111, 9, 42, 0),
(442, 111, 9, 43, 0),
(443, 111, 9, 44, 0),
(444, 111, 9, 45, 0),
(445, 111, 9, 46, 0),
(446, 111, 10, 47, 1),
(447, 111, 10, 48, 1),
(448, 112, 6, 28, 1),
(449, 112, 6, 29, 0),
(450, 112, 6, 30, 0),
(451, 112, 6, 31, 1),
(452, 112, 7, 32, 1),
(453, 112, 7, 33, 1),
(454, 112, 7, 34, 0),
(455, 112, 7, 35, 1),
(456, 112, 8, 36, 1),
(457, 112, 8, 37, 0),
(458, 112, 8, 38, 1),
(459, 112, 8, 39, 1),
(460, 112, 9, 40, 1),
(461, 112, 9, 41, 0),
(462, 112, 9, 42, 1),
(463, 112, 9, 43, 0),
(464, 112, 9, 44, 0),
(465, 112, 9, 45, 1),
(466, 112, 9, 46, 0),
(467, 112, 10, 47, 1),
(468, 112, 10, 48, 0),
(469, 113, 6, 28, 0),
(470, 113, 6, 29, 0),
(471, 113, 6, 30, 0),
(472, 113, 6, 31, 0),
(473, 113, 7, 32, 0),
(474, 113, 7, 33, 0),
(475, 113, 7, 34, 0),
(476, 113, 7, 35, 0),
(477, 113, 8, 36, 0),
(478, 113, 8, 37, 0),
(479, 113, 8, 38, 0),
(480, 113, 8, 39, 0),
(481, 113, 9, 40, 0),
(482, 113, 9, 41, 0),
(483, 113, 9, 42, 0),
(484, 113, 9, 43, 0),
(485, 113, 9, 44, 0),
(486, 113, 9, 45, 0),
(487, 113, 9, 46, 0),
(488, 113, 10, 47, 0),
(489, 113, 10, 48, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`e_sl`, `e_sub`, `e_disc`, `e_view`, `e_date`, `e_group`, `e_cho`) VALUES
(8, 'INTER COLLEGE LEVEL VOLLEY BALL COMPETATIONS-GOA', 'Students from all the Colleges can participate and  all the details mentioned at\r\nwww.intercollege.com ', 1, '2016-10-21', '28', 0),
(9, 'NATIONAL LEVEL SEMINAR AT NIT RAIPUR', 'National Level Seminar on CODING\r\nFor registration search www.nitrr.com', 1, '2016-10-01', '32', 1),
(10, 'Change of dates for Inter College Level VOLLEYBALL', 'DATES HAVE BEEN CHANGED \r\ndue to some management problems.\r\nNew dates will be informed soon ', 0, '2016-10-01', '28', 0),
(11, 'Selections for avartan singer', 'all the interested students can participate \r\nand who are selected in this competetions become singer of avartan', 1, '2016-09-23', '37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `g_n` int(11) NOT NULL AUTO_INCREMENT,
  `g_name` varchar(50) NOT NULL,
  `c_n` int(11) NOT NULL,
  PRIMARY KEY (`g_n`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`g_n`, `g_name`, `c_n`) VALUES
(28, 'VOLLEY BALL', 6),
(29, 'CRICKET', 6),
(30, 'BATMINTON', 6),
(31, 'CHESS', 6),
(32, 'COMPUTER SCIENCE', 7),
(33, 'MECHANICS', 7),
(34, 'CHEMICAL', 7),
(35, 'ELECRICAL', 7),
(36, 'DANCE', 8),
(37, 'SINGING', 8),
(38, 'DRAMA', 8),
(39, 'INSTRUMENTATION', 8),
(40, 'MCA', 9),
(41, 'ECE', 9),
(42, 'EEE', 9),
(43, 'MINING', 9),
(44, 'METALLURGY', 9),
(45, 'MECHANICAL', 9),
(46, 'CHEMICAL', 9),
(47, 'MINI MILITIA', 10),
(48, 'RUSH HOUR', 10);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`p_sl`, `dn`, `g_n`, `content`, `p_c`, `pn`) VALUES
(25, 104, 28, 'i am also comming please give your contact number', 1, 23),
(26, 111, 29, 'at what date college team selections for cricket?', 0, NULL),
(27, 104, 29, 'im also not sure......ill ask some seniors and informs you', 1, 26),
(28, 112, 28, 'what are new dates for INTER college level competetions held at goa??\r\n', 0, NULL),
(29, 102, 28, 'new dates are not mentioned till now.....we will inform when we get details about it', 1, 28),
(30, 102, 29, 'the selections for college cricket team will be on \r\nmid month of oct', 1, 26);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
