-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 11:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `h_and_t`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `name` varchar(20) NOT NULL,
  `enrollmentno` bigint(11) NOT NULL,
  `department` varchar(5) NOT NULL,
  `emailid` varchar(25) NOT NULL,
  `querysubject` varchar(30) NOT NULL,
  `query` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`name`, `enrollmentno`, `department`, `emailid`, `querysubject`, `query`) VALUES
('Gaurav Bilandani', 19012011004, 'CE', 'gbilandani12@gmail.com', 'transport issue', 'issue in getting bus'),
('Shobhit Mendiratta', 19012011024, 'CE', 'sam12@gmail.com', 'food issue', 'food quality not good');

-- --------------------------------------------------------

--
-- Table structure for table `fdetails`
--

CREATE TABLE `fdetails` (
  `name` varchar(20) NOT NULL,
  `username` varchar(5) NOT NULL,
  `department` varchar(5) NOT NULL,
  `emailid` varchar(25) NOT NULL,
  `querysubject` varchar(30) NOT NULL,
  `query` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fdetails`
--

INSERT INTO `fdetails` (`name`, `username`, `department`, `emailid`, `querysubject`, `query`) VALUES
('Manan Thakkar', 'mdt', 'CE', 'mdt01@gmail.com', 'transport issue', 'issue in getting bus'),
('Ravi raval', 'rfr', 'CE', 'rfr123@gmail.com', 'food issue', 'food quality not good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`enrollmentno`);

--
-- Indexes for table `fdetails`
--
ALTER TABLE `fdetails`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
