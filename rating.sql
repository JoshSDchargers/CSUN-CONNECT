-- phpMyAdmin SQL Dump
-- version 4.0.10.17
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2016 at 11:45 AM
-- Server version: 5.1.73
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rating`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `uid` text NOT NULL,
  `rid` text NOT NULL,
  `comment` text NOT NULL,
  `date` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`uid`, `rid`, `comment`, `date`) VALUES
('pete', 'joshua', 'bruh u suck nuts ', '2016-11-12 14:20:50'),
('pete', 'joshua', 'test', '2016-11-12 14:23:39'),
('joshua', 'pete', 'this nigga hurt my feelings', '2016-11-12 14:51:45'),
('root', 'root', 'this nagger is the one who stole my bike', '2016-11-16 15:32:51'),
('root', 'root', 'test 5', '2016-11-19 10:32:33'),
('root', 'root', 'test 4', '2016-11-19 10:32:38'),
('root', 'root', 'test 3', '2016-11-19 10:32:42'),
('root', 'root', 'test 2', '2016-11-19 10:32:46'),
('root', 'root', 'test 1', '2016-11-19 10:32:50'),
('root', 'root', 'test 6', '2016-11-19 10:32:56'),
('root', 'root', 'test ', '2016-11-19 10:33:00'),
('root', 'root', 'test 6', '2016-11-19 10:33:07'),
('joshua', 'root', 'test', '2016-11-19 10:41:53'),
('joshua', 'root', 'test', '2016-11-19 10:41:55'),
('pete', 'root', 'yo pete, suck nuts', '2016-11-19 10:42:15'),
('joshua', 'root', 'test', '2016-11-19 10:43:34');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE IF NOT EXISTS `rates` (
  `uid` text NOT NULL,
  `total` int(255) NOT NULL,
  `totaluser` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`uid`, `total`, `totaluser`) VALUES
('pete', 1, 1),
('joshua', 15, 42),
('root', 7, 29);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
