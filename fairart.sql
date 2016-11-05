-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2016 at 07:04 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fairart`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE IF NOT EXISTS `artists` (
  `aemail` varchar(255) NOT NULL,
  `apassword` varchar(200) NOT NULL,
  `aname` varchar(200) NOT NULL,
  `aaddress` varchar(200) NOT NULL,
  `aid` mediumint(9) NOT NULL AUTO_INCREMENT,
  `arating` tinyint(4) NOT NULL DEFAULT '0',
  `contact` int(11) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`aemail`, `apassword`, `aname`, `aaddress`, `aid`, `arating`, `contact`) VALUES
('q', 'q', 'ron', 'dent appt', 1, 0, 1767546798);

-- --------------------------------------------------------

--
-- Table structure for table `commodity`
--

CREATE TABLE IF NOT EXISTS `commodity` (
  `commid` mediumint(9) NOT NULL AUTO_INCREMENT,
  `product_type` varchar(50) NOT NULL,
  `size` varchar(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `sleeve` varchar(6) NOT NULL,
  `colour` varchar(10) NOT NULL,
  `price` int(5) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  PRIMARY KEY (`commid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `commodity`
--

INSERT INTO `commodity` (`commid`, `product_type`, `size`, `type`, `sleeve`, `colour`, `price`, `product_name`) VALUES
(1, 'tshirt', 'S', 'round neck', 'full', 'red', 211, '');

-- --------------------------------------------------------

--
-- Table structure for table `commodityartifact`
--

CREATE TABLE IF NOT EXISTS `commodityartifact` (
  `caid` mediumint(9) NOT NULL AUTO_INCREMENT,
  `commid` mediumint(9) NOT NULL,
  `designid` mediumint(9) NOT NULL,
  PRIMARY KEY (`caid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `commodityartifact`
--

INSERT INTO `commodityartifact` (`caid`, `commid`, `designid`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `cid` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` int(11) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cid`, `name`, `emailid`, `password`, `address`, `contact`) VALUES
(1, 'flav.com', 'flv@medi.com', 'flavimed', 'trekon apt', 43333333);

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE IF NOT EXISTS `income` (
  `artist_id` int(3) NOT NULL,
  `design_id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Price` int(5) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`design_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`artist_id`, `design_id`, `type`, `Date`, `Price`, `description`) VALUES
(1, 1, 'festive', '2016-11-04', 233, 'Cool in Mild');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `oid` mediumint(9) NOT NULL AUTO_INCREMENT,
  `designid` mediumint(9) NOT NULL,
  `customerid` mediumint(9) NOT NULL,
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `cid` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `purchase_date` date NOT NULL,
  `amt_paid` int(11) NOT NULL,
  `reviews` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requirement`
--

CREATE TABLE IF NOT EXISTS `requirement` (
  `aid` int(3) NOT NULL,
  `customer_id` int(5) NOT NULL,
  `requirement` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
