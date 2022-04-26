-- phpMyAdmin SQL Dump
-- version 4.0.10.17
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2016 at 11:46 AM
-- Server version: 5.1.73
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_comment`
--

CREATE TABLE IF NOT EXISTS `login_comment` (
  `header` text NOT NULL,
  `comment` text NOT NULL,
  `category` text NOT NULL,
  `email` text NOT NULL,
  `date` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `first` varchar(128) NOT NULL,
  `last` varchar(128) NOT NULL,
  `uid` varchar(128) NOT NULL,
  `pwd` varchar(1000) NOT NULL,
  `email` varchar(55) NOT NULL,
  `date` text NOT NULL,
  `firsttime` int(128) NOT NULL DEFAULT '0',
  `q1` text NOT NULL,
  `anw1` text NOT NULL,
  `q2` text NOT NULL,
  `anw2` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first`, `last`, `uid`, `pwd`, `email`, `date`, `firsttime`, `q1`, `anw1`, `q2`, `anw2`) VALUES
(0, 'pete', 'pete', 'pete', 'pete', 'pete@pete.com', '11-12-16', 1, 'What was your childhood nickname?', 'pete', 'Who is your childhood sports hero?', 'pete'),
(0, 'joshua', 'joshua', 'joshua', 'joshua', 'joshua', '11-12-16', 1, 'What was your childhood nickname?', 'joshua', 'Who is your childhood sports hero?', 'joshua'),
(0, 'josh', 'josh', 'josh', 'josh', 'josh', '11-19-16', 0, '', '', '', ''),
(0, 'two', 'two', 'two', 'two', 'two', '11-19-16', 1, 'What was your childhood nickname?', 'test', 'Who is your childhood sports hero?', 'test'),
(0, 'miggy', 'miggy', 'miggy', 'miggy', 'miggy@aol.com', '11-12-16', 1, 'What was your childhood nickname?', 'miggy', 'Who is your childhood sports hero?', 'Sevada'),
(0, 'root', 'root', 'root', 'root', 'root@rootmya.com', '11-16-16', 1, 'What is your favorite team?', 'root', 'What is your favorite team?', 'root'),
(0, 'test', 'test', 'test', 'test', 'test', '11-19-16', 1, 'What was your childhood nickname?', 'test', 'Who is your childhood sports hero?', 'test'),
(0, 'jose', 'jose', 'jose', 'jose', 'jose', '11-19-16', 1, 'What was your childhood nickname?', 'jose', 'Who is your childhood sports hero?', 'jose'),
(0, '11', '11', '11', '11', '11', '11-19-16', 1, 'What was your childhood nickname?', '11', 'Who is your childhood sports hero?', '11'),
(0, 'jose2', 'jose2', 'jose2', 'jose2', 'jose2', '11-19-16', 1, 'What was your childhood nickname?', 'jose2', 'Who is your childhood sports hero?', 'jose2'),
(0, 'jose3', 'jose3', 'jose3', 'jose3', 'jose3', '11-19-16', 1, 'What was your childhood nickname?', 'jose2', 'Who is your childhood sports hero?', 'jose2'),
(0, 'jose4', 'jose4', 'jose4', 'jose4', 'jose4', '11-19-16', 1, 'What was your childhood nickname?', 'jose4', 'Who is your childhood sports hero?', 'jose4'),
(0, 'hello', 'hello', 'hello', 'hello', 'hello', '11-19-16', 1, 'What was your childhood nickname?', 'hello', 'Who is your childhood sports hero?', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `userstable`
--

CREATE TABLE IF NOT EXISTS `userstable` (
  `ID` int(5) NOT NULL,
  `FNAME` text NOT NULL,
  `LNAME` text NOT NULL,
  `PASSWORD` text NOT NULL,
  `SECPASSWORD` text NOT NULL,
  `EMAIL` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
