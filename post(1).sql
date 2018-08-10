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
-- Database: `post`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `date` text NOT NULL,
  `comment` longtext NOT NULL,
  `oldcomment` text NOT NULL,
  `uid` text NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`date`, `comment`, `oldcomment`, `uid`, `title`) VALUES
('11/19/2016', 'test', 'testtesttesttesttest', 'root', 'testtesttesttest'),
('11/19/2016', 'test', 'phones\r\n', 'hello', 'phones'),
('11/19/2016', 'test', 'phones\r\n', 'root', 'phones'),
('11/19/2016', 'test', 'ffreee', 'root', 'free'),
('11/19/2016', 'eazy e', 'josetest', 'root', 'josetest'),
('11/19/2016', 'test', 'josetest', 'root', 'josetest'),
('11/19/2016', 'test', 'ffeeee', 'root', 'frreeee'),
('11/19/2016', 'dfgsfg', 'dfgdsfg', 'root', 'jorg'),
('11/19/2016', 'sdahfdgdfg', 'egreag', 'root', 'sadfvfsdf'),
('11/19/2016', 'sdfasf', 'josetest', 'root', 'josetest');

-- --------------------------------------------------------

--
-- Table structure for table `login_comment`
--

CREATE TABLE IF NOT EXISTS `login_comment` (
  `header` text NOT NULL,
  `comment` longblob NOT NULL,
  `category` text NOT NULL,
  `date` text NOT NULL,
  `uid` text NOT NULL,
  `dir` text NOT NULL,
  `postid` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_comment`
--

INSERT INTO `login_comment` (`header`, `comment`, `category`, `date`, `uid`, `dir`, `postid`) VALUES
('test', 0x74657374, 'Activities', '2016-11-19 14:52:11', 'root', '0', 512102),
('test2', 0x7465737432, 'Art', '2016-11-19 14:52:23', 'root', '0', 1337344),
('test3', 0x7465737433, 'Car', '2016-11-19 14:52:36', 'root', '0', 38560),
('test4', 0x7465737434, 'Community', '2016-11-19 14:52:47', 'root', '0', 1279697),
('testtest', 0x7465737474657374, 'Events', '2016-11-19 14:53:23', 'root', '0', 1090400),
('testtesttesttest', 0x7465737474657374746573747465737474657374, 'Discussion', '2016-11-19 14:53:30', 'root', '0', 1204778),
('crack baby', 0x637261636b2062616279, 'Childcare', '2016-11-19 15:00:26', 'root', '0', 483007),
('1', 0x31, 'Activities', '2016-11-19 15:08:13', 'hello', '0', 746871),
('2', 0x32, 'Art', '2016-11-19 15:08:19', 'hello', '0', 1353089),
('3', 0x33, 'Classes', '2016-11-19 15:08:27', 'hello', '0', 132019),
('44', 0x3434, 'Fashion', '2016-11-19 15:08:39', 'hello', '0', 909057),
('434', 0x3235323335, 'Other', '2016-11-19 15:08:44', 'hello', '0', 91993),
('234234', 0x363334363334, 'Technology', '2016-11-19 15:08:53', 'hello', '0', 892097),
('sdfa', 0x736664666665, 'Volunteers', '2016-11-19 15:09:02', 'hello', '0', 1338455),
('sadfvfsdf', 0x656772656167, 'School', '2016-11-19 15:09:13', 'hello', '0', 445987),
('fdsaf', 0x66666666666666666666666666, 'Forsale', '2016-11-19 15:10:32', 'hello', '0', 808723),
('free', 0x666672656565, 'Activities', '2016-11-19 15:10:40', 'hello', '0', 522954),
('jorg', 0x64666764736667, 'Jobs', '2016-11-19 15:10:48', 'hello', '0', 337681),
('frreeee', 0x666665656565, 'Free', '2016-11-19 15:10:59', 'hello', '0', 337727),
('gerfd', 0x6765726e64736661, 'General', '2016-11-19 15:11:17', 'hello', '0', 767132),
('griyti', 0x6768647368, 'Groups', '2016-11-19 15:12:02', 'hello', '0', 595288),
('ggggg', 0x676767676767676767, 'Lost+found', '2016-11-19 15:12:09', 'hello', '0', 406576),
('pets', 0x70657473, 'Pets', '2016-11-19 15:12:24', 'hello', '0', 1090037),
('phones', 0x70686f6e6573, 'Activities', '2016-11-19 15:12:37', 'hello', '0', 746217),
('phones', 0x70686f6e65730d0a, 'Activities', '2016-11-19 15:12:55', 'hello', '0', 650722),
('tsfaf', 0x7361206673646620617364666120736466, 'Phone', '2016-11-19 15:13:09', 'hello', '0', 99225),
('sdafasdf sd', 0x736466736164666173646661736466, 'Services', '2016-11-19 15:13:42', 'hello', '0', 335430),
('rants', 0x72616e7473, 'Rants', '2016-11-19 15:14:15', 'hello', '0', 987272),
('james michtel', 0x6a616d6573206d69636874656c, 'Politics', '2016-11-19 15:14:56', 'hello', '0', 1290675),
('room 4 rent', 0x686f7573696e67, 'Housing', '2016-11-19 15:15:32', 'hello', '0', 541402),
('rkt leauge', 0x726b74206c6561756765, 'Gaming', '2016-11-19 15:15:59', 'hello', '0', 593829),
('josetest', 0x6a6f736574657374, 'Activities', '2016-11-19 15:32:22', 'root', 'img/la-me-0130-suge-knight-20150130', 1423522),
('mytest', 0x6d7974657374, 'Activities', '2016-11-19 15:36:21', 'root', 'img/suge-knight-at-2004-mtv-vma-billboard-650.jpg', 1018477);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `header` text NOT NULL,
  `total` int(255) NOT NULL,
  `totalrating` int(255) NOT NULL DEFAULT '0',
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`header`, `total`, `totalrating`, `comment`) VALUES
('testtesttesttest', 1, 1, 'testtesttesttesttest'),
('testtest', 1, 1, 'testtest'),
('mytest', 1, 1, 'mytest'),
('josetest', 1, 1, 'josetest'),
('frreeee', 1, 1, 'ffeeee'),
('jorg', 1, 1, 'dfgdsfg'),
('sadfvfsdf', 1, 1, 'egreag'),
('josetest', 1, 1, 'josetest'),
('mytest', 1, 1, 'mytest');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
