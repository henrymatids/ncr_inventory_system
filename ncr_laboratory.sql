-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2016 at 05:24 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ncr_laboratory`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `account_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`user_id`, `username`, `password`, `account_type`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin'),
(2, 'henry', 'ce2e736f5f17375c439cc0c19ac32cea', 'Student'),
(3, 'ncrstaff', 'e10adc3949ba59abbe56e057f20f883e', 'Staff'),
(4, 'testcase1', 'e10adc3949ba59abbe56e057f20f883e', 'Student'),
(5, 'kulafu', 'e10adc3949ba59abbe56e057f20f883e', 'Student'),
(6, 'henrych', 'e10adc3949ba59abbe56e057f20f883e', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `account_information`
--

CREATE TABLE `account_information` (
  `fk_id` int(11) NOT NULL,
  `id_number` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `middlename` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_information`
--

INSERT INTO `account_information` (`fk_id`, `id_number`, `firstname`, `middlename`, `lastname`) VALUES
(3, 123456, 'ncr', 'staff', 'staff'),
(4, 11105191, 'test', 'case', 'one'),
(5, 11105191, 'alfe', 'saguin', 'lana'),
(6, 11105191, 'henry', 'senerpida', 'matidios');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `brand_model` varchar(30) NOT NULL,
  `date_acquired` int(11) NOT NULL,
  `remarks` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `qty`, `item_name`, `brand_model`, `date_acquired`, `remarks`) VALUES
(1, 11, 'keyboard', 'Dell PS/2', 2009, 'due for TDA(TNS)'),
(2, 20, 'mouse', 'A4Tech', 2020, 'does not exists');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `account_information`
--
ALTER TABLE `account_information`
  ADD PRIMARY KEY (`fk_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_information`
--
ALTER TABLE `account_information`
  ADD CONSTRAINT `account_information_ibfk_1` FOREIGN KEY (`fk_id`) REFERENCES `account` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
