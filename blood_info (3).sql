-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2016 at 04:24 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blood_info`
--
CREATE DATABASE IF NOT EXISTS `blood_info` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blood_info`;

-- --------------------------------------------------------

--
-- Table structure for table `acceptor_register`
--

CREATE TABLE IF NOT EXISTS `acceptor_register` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `l_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `acceptor_register`
--

INSERT INTO `acceptor_register` (`id`, `l_id`, `name`, `address`, `phone_no`, `email`) VALUES
(4, 8, 'Sanjana', 'anugraha', 9048334953, 'sanjana@sans'),
(5, 39, 'Smruthi Edit', 'downhil', 342345435, 'smruthi@gmail.com'),
(7, 41, 'anjitha', 'mndy', 9864333334, 'anjitha@gmail.com'),
(8, 43, 'rachana', 'meethaleveed', 2323545435, 'rach@rach'),
(9, 45, 'athira', 'asdfgh', 9878654321, 'athira@gmail.com'),
(10, 47, 'ashik', 'TK', 9544823287, 'ashik@ashik'),
(11, 48, 'San', 'anugraha', 9048334953, 'anusanju.al@gmail.co'),
(12, 51, 'ashik', 'manammal', 9946460369, 'aj@aj'),
(15, 54, 'Rach', 'sfsd', 8129602550, 'r@r'),
(16, 56, 'Pravi', 'sss', 9995675964, 'p@p'),
(17, 57, 'Anu', 'Anugraha', 9995465254, 'an@an'),
(18, 61, 'ajith', 'v p house', 9786453216, 'ajith@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `donor_register`
--

CREATE TABLE IF NOT EXISTS `donor_register` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `l_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `weight` float NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `donor_register`
--

INSERT INTO `donor_register` (`id`, `l_id`, `name`, `age`, `blood_group`, `gender`, `dob`, `weight`, `address`, `phone_no`, `state`, `district`, `location`, `status`, `email`) VALUES
(1, 2, 'Sanjana Ajay', 20, 'A+ve', 'Female', '1996-02-09', 46, 'Anugraha,', 9048334953, 'Kerala', 'Wayanad', 'vythiri', 'Unavailable', 'san@san'),
(4, 11, 'Anjana Ajay', 24, 'O+ve', 'Female', '1992-08-25', 49, 'Anugraha', 9995465254, 'Kerala', 'Wayanad', 'vythiri', 'Available', 'anjana@anu'),
(21, 36, 'nicky jane', 23, 'A+ve', 'Female', '1992-11-12', 55, 'down lane', 123456677, 'Kerala', 'Wayanad', 'mullankolli', 'Available', 'nicky@gmail.com'),
(22, 38, 'sonam', 25, 'AB-ve', 'Female', '1990-03-12', 60, 'ttt', 234667786, 'Kerala', 'Wayanad', 'vythiri', 'Unavailable', 'sonam@gmail.com'),
(24, 44, 'anu', 21, 'B+ve', 'Female', '1995-11-05', 50, 'house no.34', 8576493124, 'Kerala', 'Wayanad', 'vellamunda', 'Available', 'anu@gmail.com'),
(25, 46, 'mohamed ashik rahman', 21, 'O+ve', 'Male', '1995-12-02', 60, 'parayil house', 9544823287, 'Kerala', 'Wayanad', 'thavinhal', 'Available', 'mashikparayil@gmail.com'),
(26, 50, 'suhra', 42, 'O+ve', 'Female', '1974-12-02', 80, 'manammal', 9544823287, 'Kerala', 'Wayanad', 'thavinhal', 'Available', 'as@as'),
(27, 58, 'Ashlin Maria John', 22, 'O-ve', 'Female', '1994-12-20', 58, 'Valliparambil House', 9495979352, 'Kerala', 'Wayanad', 'thavinhal', 'Available', 'ashlinmariajohn94@gmail.com'),
(28, 59, 'anju mary paul', 12, 'A+ve', 'Female', '1995-05-16', 40, 'kalambukattu', 7559831929, 'Kerala', 'Wayanad', 'mananthavady', 'Available', 'anjumarypaulb@gmail.com'),
(29, 60, 'raju', 25, 'O-ve', 'Male', '1994-10-04', 40, 'V', 9895934527, 'Kerala', 'Wayanad', 'ambalavayal', 'Available', 'raju@gmail.com'),
(30, 62, 'anusree p s', 22, 'O-ve', 'Female', '1994-09-29', 49, 'dhevayanam house', 8592078687, 'Kerala', 'Wayanad', 'mananthavady', 'Available', 'anusreeps94@gmail.com'),
(31, 63, 'SRUTHI RAVEENDRAN', 21, 'O+ve', 'Female', '1995-09-26', 50, 'CHINGAN(H)', 9496071148, 'Kerala', 'Wayanad', 'mananthavady', 'Available', 'sruthiraveenran26@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `date` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `location` varchar(50) NOT NULL,
  `suggestion` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `date`, `name`, `email`, `location`, `suggestion`) VALUES
(1, '2016-10-25', 'name', 'email', 'location', 'suggestion'),
(2, '2016-10-25', 'San', 'san@san', 'jammu', 'this is just a testcase. working?       '),
(4, '2016-10-26', 'rachana', 'rach@gmail.com', 'mndy', '       good'),
(5, '2016-10-31', 'anu', 'an@an', 'blsy', 'great initiative!\r\n       ');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `phone_no` bigint(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `user_type`, `phone_no`) VALUES
(1, 'admin@admin', 'admin', 'admin', 9048334953),
(2, 'san@donor', '1234', 'donor', 9048334953),
(8, 'san@acceptor', '1234', 'acceptor', 9048334953),
(11, 'anjana@anu', '1122', 'donor', 9048334953),
(36, 'nicky@gmail.com', '1234', 'donor', 9048334953),
(38, 'sonam@gmail.com', 'sonam', 'donor', 9048334953),
(39, 'smruthi@gmail.com', 'qaz', 'acceptor', 9048334953),
(41, 'anjitha@gmail.com', 'anjitha', 'acceptor', 9048334953),
(43, 'rach@rach', '123', 'acceptor', 9048334953),
(44, 'anu@gmail.com', '0987', 'donor', 9048334953),
(45, 'athira@gmail.com', '3456', 'acceptor', 9048334953),
(46, 'mashikparayil@gmail.com', 'ashikmohamed', 'donor', 9048334953),
(47, 'ashik@ashik', 'ashik', 'acceptor', 9048334953),
(48, 'anusanju.al@gmail.com', 'qwerty', 'acceptor', 9048334953),
(50, 'as@as', 'suhra', 'donor', 9048334953),
(51, 'aj@aj', 'ashik', 'acceptor', 9048334953),
(54, 'r@r', 'qw', 'acceptor', 9048334953),
(56, 'p@p', 'qw', 'acceptor', 9048334953),
(57, 'an@an', 'qwerty', 'acceptor', 9048334953),
(58, 'ashlinmariajohn94@gmail.com', 'ash123', 'donor', 9495979352),
(59, 'anjumarypaulb@gmail.com', 'anju123', 'donor', 7559831929),
(60, 'raju@gmail.com', 'abcd', 'donor', 9895934527),
(61, 'ajith@gmail.com', '1029', 'acceptor', 9786453216),
(62, 'anusreeps94@gmail.com', 'aswin123', 'donor', 8592078687),
(63, 'sruthiraveenran26@gmail.com', '9496071148', 'donor', 9496071148);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `l_id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(50) NOT NULL,
  `state` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL,
  `notify` varchar(30) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `l_id`, `name`, `blood_group`, `phone_no`, `gender`, `age`, `state`, `district`, `location`, `date`, `notify`, `status`, `email`) VALUES
(6, 37, 'smruthi', 'A+ve', 23456788, 'Female', 0, 'Kerala', 'Wayanad', 'thavinhal', '1994-02-12', 'html', 'accepted', 'smruthi@gmail.com'),
(7, 8, 'testcase', 'A+ve', 9048334953, 'Female', 0, 'Kerala', 'Wayanad', 'thavinhal', '2016-10-31', NULL, 'accepted', 'sanjana@sans'),
(9, 39, 'testcase1', 'A+ve', 342345435, 'Male', 34, 'Kerala', 'Wayanad', 'idavaka', '2016-10-27', NULL, 'accepted', 'smruthi@gmail.com'),
(13, 41, 'renu', 'B-ve', 9864333334, 'Female', 35, 'Kerala', 'Wayanad', 'sulthan batheri', '2016-11-17', NULL, 'accepted', 'anjitha@gmail.com'),
(14, 45, 'arun', 'B+ve', 9878654321, 'Male', 31, 'Kerala', 'Wayanad', 'thirunelli', '2016-11-13', NULL, 'pending', 'athira@gmail.com'),
(15, 48, 'San', 'A+ve', 9544823287, 'Female', 20, 'Kerala', 'Wayanad', 'mananthavady', '2016-10-31', NULL, 'accepted', 'anusanju.al@gmail.co'),
(16, 51, 'ashik', 'O+ve', 9946460369, 'Male', 25, 'Kerala', 'Wayanad', 'thavinhal', '2016-10-31', NULL, 'accepted', 'aj@aj'),
(17, 56, 'reg', 'O+ve', 9995675964, 'Female', 45, 'Kerala', 'Wayanad', 'sulthan batheri', '2016-10-27', NULL, 'accepted', 'p@p'),
(18, 57, 'qwe', 'A+ve', 9995465254, 'Female', 19, 'Kerala', 'Wayanad', 'idavaka', '2016-10-14', NULL, 'accepted', 'an@an'),
(22, 60, 'testcase 3', 'A+ve', 9048334953, 'Male', 45, 'Kerala', 'Wayanad', 'idavaka', '2016-11-03', NULL, 'accepted', 't@t'),
(23, 61, 'testcase 4', 'A+ve', 9048334953, 'Male', 23, 'Kerala', 'Wayanad', 'idavaka', '2016-11-10', NULL, 'Accepter no longer Available', 'a@a');

-- --------------------------------------------------------

--
-- Table structure for table `notification_donor_info`
--

CREATE TABLE IF NOT EXISTS `notification_donor_info` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `l_id` int(30) NOT NULL,
  `n_id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `state` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `date` varchar(20) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `notification_donor_info`
--

INSERT INTO `notification_donor_info` (`id`, `l_id`, `n_id`, `name`, `blood_group`, `phone_no`, `email`, `gender`, `state`, `district`, `location`, `date`, `status`) VALUES
(8, 2, 1, 'Sanjana Ajay', 'A+ve', 9048334953, 'san@san', 'Female', 'Kerala', 'Kozhikode', 'Balussery', '2016-10-23', 'accepted'),
(14, 12, 4, 'das', 'A-ve', 34534534, 'das@das', 'Male', 'Kerala', 'Wayanad', 'sdfasfd', '2016-10-23', 'pending'),
(15, 13, 4, 'bos', 'A-ve', 9996665554, 'asd@as', 'Female', 'Kerala', 'Wayanad', 'yer', '2016-10-23', 'accepted'),
(16, 12, 5, 'das', 'A-ve', 34534534, 'das@das', 'Male', 'Kerala', 'Wayanad', 'sdfasfd', '2016-10-23', 'pending'),
(17, 36, 6, 'nicky jane', 'A+ve', 123456677, 'nicky@gmail.com', 'Female', 'Kerala', 'Wayanad', 'mullankolli', '2016-10-24', 'accepted'),
(27, 36, 7, 'nicky jane', 'A+ve', 123456677, 'nicky@gmail.com', 'Female', 'Kerala', 'Wayanad', 'mullankolli', '2016-10-25', 'pending'),
(29, 36, 1, 'nicky jane', 'A+ve', 123456677, 'nicky@gmail.com', 'Female', 'Kerala', 'Wayanad', 'mullankolli', '2016-10-25', 'pending'),
(30, 36, 9, 'nicky jane', 'A+ve', 123456677, 'nicky@gmail.com', 'Female', 'Kerala', 'Wayanad', 'mullankolli', '2016-10-25', 'pending'),
(31, 2, 7, 'Sanjana Ajay', 'A+ve', 9048334953, 'san@san', 'Female', 'Kerala', 'Kozhikode', 'Balussery', '2016-10-25', 'pending'),
(32, 2, 9, 'Sanjana Ajay', 'A+ve', 9048334953, 'san@san', 'Female', 'Kerala', 'Kozhikode', 'Balussery', '2016-10-25', 'pending'),
(33, 40, 13, 'amrutha', 'B-ve', 6577392882, 'amrutha@gmail.com', 'Female', 'Kerala', 'Wayanad', 'sulthan batheri', '2016-10-26', 'pending'),
(34, 46, 15, 'mohamed ashik rahman', 'O+ve', 9544823287, 'mashikparayil@gmail.com', 'Male', 'Kerala', 'Wayanad', 'thavinhal', '2016-10-26', 'pending'),
(45, 2, 15, 'Sanjana Ajay', 'A+ve', 9048334953, 'san@san', 'Female', 'Kerala', 'Wayanad', 'vythiri', '2016-10-27', 'accepted'),
(46, 50, 16, 'suhra', 'O+ve', 9544823287, 'as@as', 'Female', 'Kerala', 'Wayanad', 'thavinhal', '2016-10-27', 'pending'),
(47, 11, 17, 'Anjana Ajay', 'O+ve', 9995465254, 'anjana@anu', 'Female', 'Kerala', 'Wayanad', 'vythiri', '2016-10-29', 'pending'),
(48, 2, 18, 'Sanjana Ajay', 'A+ve', 9048334953, 'san@san', 'Female', 'Kerala', 'Wayanad', 'vythiri', '2016-10-31', 'pending'),
(49, 55, 15, 'rach', 'A+ve', 8129602550, 'qw@fmail', 'Female', 'Kerala', 'Wayanad', 'vellamunda', '2016-10-31', 'pending'),
(50, 55, 7, 'rach', 'A+ve', 8129602550, 'qw@fmail', 'Female', 'Kerala', 'Wayanad', 'vellamunda', '2016-10-31', 'pending'),
(53, 2, 22, 'Sanjana Ajay', 'A+ve', 9048334953, 'san@san', 'Female', 'Kerala', 'Wayanad', 'vythiri', '2016-10-31', 'rejected'),
(54, 2, 23, 'Sanjana Ajay', 'A+ve', 9048334953, 'san@san', 'Female', 'Kerala', 'Wayanad', 'vythiri', '2016-10-31', 'rejected'),
(55, 59, 22, 'anju mary paul', 'A+ve', 7559831929, 'anjumarypaulb@gmail.com', 'Female', 'Kerala', 'Wayanad', 'mananthavady', '2016-11-01', 'rejected');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
