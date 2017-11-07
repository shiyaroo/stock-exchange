-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 30, 2017 at 04:22 PM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `authentication`
--
CREATE DATABASE IF NOT EXISTS `authentication` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `authentication`;

-- --------------------------------------------------------

--
-- Table structure for table `buy_sell`
--

CREATE TABLE IF NOT EXISTS `buy_sell` (
  `transaction_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `total_price` int(11) DEFAULT NULL,
  `no_of_shares` int(11) DEFAULT NULL,
  `isbuy` varchar(2) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `cid` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `no_shares` int(11) NOT NULL,
  `company_type` varchar(4) NOT NULL,
  `history` text,
  `worth` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `name`, `no_shares`, `company_type`, `history`, `worth`) VALUES
(1, 'FPA', 11, '', '', '20.32 bn'),
(2, 'DL24', 5, '', '', '11.3 bn'),
(3, 'FPL', 45, '', '', '1.633 bn'),
(4, 'FPC', 0, '', '', '50 bn');

-- --------------------------------------------------------

--
-- Table structure for table `stock_record`
--

CREATE TABLE IF NOT EXISTS `stock_record` (
  `time` time DEFAULT '00:00:00',
  `price_per_share` int(11) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  KEY `lookup` (`time`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_record`
--

INSERT INTO `stock_record` (`time`, `price_per_share`, `cid`) VALUES
('00:00:00', 725, 1),
('00:00:00', 216, 2),
('00:00:00', 501, 3),
('00:00:00', 902, 4),
('00:00:00', 301, 5),
('00:00:00', 395, 6),
('00:00:00', 818, 7),
('00:00:00', 338, 8),
('00:00:00', 470, 9),
('00:20:00', 626, 1),
('00:20:00', 206, 2),
('00:20:00', 524, 3),
('00:20:00', 896, 4),
('00:20:00', 337, 5),
('00:20:00', 157, 6),
('00:20:00', 755, 7),
('00:20:00', 367, 8),
('00:20:00', 505, 9),
('00:25:00', 653, 1),
('00:25:00', 216, 2),
('00:25:00', 504, 3),
('00:25:00', 966, 4),
('00:25:00', 344, 5),
('00:25:00', 164, 6),
('00:25:00', 761, 7),
('00:25:00', 333, 8),
('00:25:00', 511, 9),
('00:35:00', 758, 1),
('00:35:00', 236, 2),
('00:35:00', 544, 3),
('00:35:00', 976, 4),
('00:35:00', 360, 5),
('00:35:00', 159, 6),
('00:35:00', 757, 7),
('00:35:00', 311, 8),
('00:35:00', 480, 9),
('00:30:00', 779, 1),
('00:30:00', 226, 2),
('00:30:00', 541, 3),
('00:30:00', 887, 4),
('00:30:00', 367, 5),
('00:30:00', 152, 6),
('00:30:00', 777, 7),
('00:30:00', 316, 8),
('00:30:00', 469, 9),
('00:40:00', 749, 1),
('00:40:00', 223, 2),
('00:40:00', 521, 3),
('00:40:00', 879, 4),
('00:40:00', 369, 5),
('00:40:00', 164, 6),
('00:40:00', 800, 7),
('00:40:00', 321, 8),
('00:40:00', 491, 9),
('00:45:00', 799, 1),
('00:45:00', 243, 2),
('00:45:00', 491, 3),
('00:45:00', 800, 4),
('00:45:00', 397, 5),
('00:45:00', 160, 6),
('00:45:00', 809, 7),
('00:45:00', 301, 8),
('00:45:00', 480, 9),
('00:55:00', 782, 1),
('00:55:00', 213, 2),
('00:55:00', 499, 3),
('00:55:00', 896, 4),
('00:55:00', 371, 5),
('00:55:00', 168, 6),
('00:55:00', 771, 7),
('00:55:00', 311, 8),
('00:55:00', 460, 9),
('00:50:00', 760, 1),
('00:50:00', 224, 2),
('00:50:00', 479, 3),
('00:50:00', 958, 4),
('00:50:00', 376, 5),
('00:50:00', 164, 6),
('00:50:00', 779, 7),
('00:50:00', 319, 8),
('00:50:00', 477, 9),
('00:05:00', 653, 1),
('00:05:00', 212, 2),
('00:05:00', 497, 3),
('00:05:00', 887, 4),
('00:05:00', 261, 5),
('00:05:00', 420, 6),
('00:05:00', 802, 7),
('00:05:00', 335, 8),
('00:05:00', 498, 9),
('00:15:00', 692, 1),
('00:15:00', 233, 2),
('00:15:00', 536, 3),
('00:15:00', 859, 4),
('00:15:00', 321, 5),
('00:15:00', 164, 6),
('00:15:00', 742, 7),
('00:15:00', 311, 8),
('00:15:00', 516, 9),
('00:10:00', 676, 1),
('00:10:00', 230, 2),
('00:10:00', 539, 3),
('00:10:00', 804, 4),
('00:10:00', 284, 5),
('00:10:00', 414, 6),
('00:10:00', 800, 7),
('00:10:00', 333, 8),
('00:10:00', 503, 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(0, 'ddd', 'rrodi1980@hotmail.com', '11ddbaf3386aea1f2974eee984542152'),
(0, 'sssss', 'shiyar3li@gmail.com', '8f60c8102d29fcd525162d02eed4566b'),
(0, 'shiyar', 'rrodi1980@hotmail.com', '74b87337454200d4d33f80c4663dc5e5'),
(0, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(0, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(0, 'ali', 'yyyy@ghg.gf', 'b0baee9d279d34fa1dfd71aadb908c3f');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
