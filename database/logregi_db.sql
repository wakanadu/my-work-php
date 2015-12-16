-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 16, 2015 at 07:51 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `logregi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `full` varchar(25) NOT NULL,
  `gender` text NOT NULL,
  `leave` varchar(35) NOT NULL,
  `go` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `booking`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `sname` varchar(25) NOT NULL,
  `fname` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  `other` varchar(15) NOT NULL,
  `gender` text NOT NULL,
  `place_of_birth` varchar(10) NOT NULL,
  `nationality` varchar(10) NOT NULL,
  `profession` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `sname`, `fname`, `password`, `other`, `gender`, `place_of_birth`, `nationality`, `profession`) VALUES
(1, 'WAKANA', 'Duhamel', '827ccb0eea8a706c4c34a16891f84e7b', 'devot', 'Male', 'NGOZI', 'burundian', 'STUDENT');
