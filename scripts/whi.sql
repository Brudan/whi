-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 24, 2013 at 07:19 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `whi`
--

-- --------------------------------------------------------

--
-- Table structure for table `custinfo`
--

CREATE TABLE IF NOT EXISTS `custinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `roomid` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `roomid` (`roomid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `custinfo`
--

INSERT INTO `custinfo` (`id`, `firstname`, `lastname`, `email`, `phone`, `roomid`, `date`, `confirmed`) VALUES
(1, 'Enos', 'Wakoko', 'enos@brudan.net', '0774369852', 2, '2013-02-24 12:55:35', 0),
(3, 'ththt', 'yuuil', 'oli;', 'oifgsd', 1, '2013-02-24 15:03:58', 0),
(4, 'Marcus', 'Crassus', 'm@c.com', '987654-3210', 4, '2013-02-24 18:40:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `description` text,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `name`, `description`, `number`) VALUES
(1, 'Single', 'Single, not self-contained', 3),
(2, 'Double', 'double, not self-contained', 1),
(4, 'Deluxe', 'Double, self-contained', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` varchar(13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone`) VALUES
(1, 'admin', '828e096fef42d94858dd49b27ab903f3', 'admin@whi.com', '999-99999');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `custinfo`
--
ALTER TABLE `custinfo`
  ADD CONSTRAINT `fk_roomid` FOREIGN KEY (`roomid`) REFERENCES `room` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
