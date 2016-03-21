-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2016 at 12:30 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inventory_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cartID` bigint(20) NOT NULL AUTO_INCREMENT,
  `cartDate` date NOT NULL,
  `PID` bigint(20) NOT NULL,
  `Pname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cartID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartID`, `cartDate`, `PID`, `Pname`) VALUES
(1, '2016-03-22', 123, 'qwew'),
(2, '2016-03-20', 123, 'Last'),
(3, '2016-03-20', 7, 'RHEL'),
(4, '2016-03-19', 6, 'Ubuntu'),
(5, '2016-03-18', 6, 'Ubuntu');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `PID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Pname` varchar(50) NOT NULL,
  `Pprice` decimal(18,3) NOT NULL,
  `Pquantity` int(11) NOT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`PID`, `Pname`, `Pprice`, `Pquantity`) VALUES
(1, 'qwew', 23.000, 9),
(2, 'qwe', 22.000, 20),
(3, 'Apple', 234.000, 10),
(4, 'Windows', 234.000, 10),
(5, 'Linux', 221.000, 10),
(6, 'Ubuntu', 1234.000, 7),
(7, 'RHEL', 331.000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `Registration`
--

CREATE TABLE IF NOT EXISTS `Registration` (
  `Login_as` varchar(30) DEFAULT NULL,
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

CREATE TABLE IF NOT EXISTS `shipping_address` (
  `SAName` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `Reciepname` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` int(5) NOT NULL,
  `cartID` bigint(20) NOT NULL,
  PRIMARY KEY (`SAName`,`cartID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_address`
--

INSERT INTO `shipping_address` (`SAName`, `city`, `country`, `Reciepname`, `state`, `zip`, `cartID`) VALUES
('Aaron', 'Newark', 'United States', 'Kumar', 'New Jersey', 7029, 1),
('hillary', 'Harrison', 'United States', 'Jill', 'New Jersey', 7029, 2),
('ROKI', 'charlotte', 'United States', 'HAKU', 'North carolina', 4354, 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
