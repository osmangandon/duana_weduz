-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 15, 2018 at 04:58 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duana_weduz`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminx`
--

CREATE TABLE `adminx` (
  `kd` varchar(50) NOT NULL,
  `usernamex` varchar(100) NOT NULL,
  `passwordx` varchar(100) NOT NULL,
  `postdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_butcher`
--

CREATE TABLE `m_butcher` (
  `kd` varchar(50) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `name_arab` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `postdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_customer`
--

CREATE TABLE `m_customer` (
  `kd` varchar(50) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `name_arab` varchar(100) NOT NULL,
  `postdate` datetime NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_item`
--

CREATE TABLE `m_item` (
  `kd` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `name_arab` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` varchar(15) NOT NULL,
  `price_cut` varchar(15) NOT NULL,
  `country` varchar(100) NOT NULL,
  `postdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_piece`
--

CREATE TABLE `m_piece` (
  `kd` varchar(50) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `name_arab` varchar(100) NOT NULL,
  `postdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_slaughter`
--

CREATE TABLE `m_slaughter` (
  `kd` varchar(50) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `name_arab` varchar(100) NOT NULL,
  `postdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `kd` varchar(50) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name1` varchar(100) NOT NULL,
  `name2` varchar(100) NOT NULL,
  `passwordx` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `filex` varchar(255) NOT NULL,
  `postdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `kd` varchar(50) NOT NULL,
  `date_order` date NOT NULL,
  `kd_customer` varchar(50) NOT NULL,
  `total` varchar(15) NOT NULL,
  `diskon` varchar(15) NOT NULL,
  `total2` varchar(15) NOT NULL,
  `pay_status` enum('true','false') NOT NULL DEFAULT 'false',
  `pay_date` date NOT NULL,
  `cash_pay` varchar(15) NOT NULL,
  `cash_back` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `kd` varchar(50) NOT NULL,
  `kd_order` varchar(50) NOT NULL,
  `kd_butcher` varchar(50) NOT NULL,
  `kd_item` varchar(50) NOT NULL,
  `item_count` varchar(15) NOT NULL,
  `item_subtotal` varchar(15) NOT NULL,
  `postdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
