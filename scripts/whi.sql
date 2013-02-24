-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 24, 2013 at 02:47 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE whi;

GRANT ALL PRIVILEGES ON whi.* TO 'whi'@'localhost' IDENTIFIED BY 'whi';
USE whi;




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
  PRIMARY KEY (`id`),
  KEY `roomid` (`roomid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `custinfo`
--

INSERT INTO `custinfo` (`id`, `firstname`, `lastname`, `email`, `phone`, `roomid`, `date`) VALUES
(1, 'Enos', 'Wakoko', 'enos@brudan.net', '0774369852', 2, '2013-02-24 12:55:35'),
(2, 'gkghg', 'ghjgh', 'wee@gmail.com', '3456782344624', 1, '2013-02-24 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `name`, `description`) VALUES
(1, 'Single', 'medium sized'),
(2, 'Double', 'large sized');

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
