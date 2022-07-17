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
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `external`
--

CREATE TABLE `external` (
  `enrollmentno` bigint(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `toc` int(3) NOT NULL,
  `ai` int(3) NOT NULL,
  `cc` int(3) NOT NULL,
  `wt` int(3) NOT NULL,
  `iot` int(3) NOT NULL,
  `uiux` int(3) NOT NULL,
  `cp` int(3) NOT NULL,
  `asb` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `external`
--

INSERT INTO `external` (`enrollmentno`, `Name`, `Department`, `toc`, `ai`, `cc`, `wt`, `iot`, `uiux`, `cp`, `asb`) VALUES
(19012011004, 'Gaurav Bilandani', 'CE', 128, 134, 143, 149, 111, 45, 41, 48),
(19012011024, 'Shobhit Mendiratta', 'CE', 129, 143, 110, 145, 102, 48, 45, 50),
(19012011086, 'Aum Thanky', 'CE', 110, 120, 122, 118, 107, 44, 48, 49);

-- --------------------------------------------------------

--
-- Table structure for table `internal1`
--

CREATE TABLE `internal1` (
  `enrollmentno` bigint(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `toc` int(2) NOT NULL,
  `ai` int(2) NOT NULL,
  `cc` int(2) NOT NULL,
  `wt` int(2) NOT NULL,
  `iot` int(2) NOT NULL,
  `uiux` int(2) NOT NULL,
  `cp` int(2) NOT NULL,
  `asb` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internal1`
--

INSERT INTO `internal1` (`enrollmentno`, `Name`, `Department`, `toc`, `ai`, `cc`, `wt`, `iot`, `uiux`, `cp`, `asb`) VALUES
(19012011004, 'Gaurav Bilandani', 'CE', 18, 18, 12, 19, 9, 19, 20, 19),
(19012011024, 'Shobhit Mendiratta', 'CE', 19, 13, 16, 20, 16, 17, 48, 17),
(19012011086, 'Aum Thanky', 'CE', 15, 12, 9, 15, 15, 18, 19, 20);

-- --------------------------------------------------------

--
-- Table structure for table `internal2`
--

CREATE TABLE `internal2` (
  `enrollmentno` bigint(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `toc` int(2) NOT NULL,
  `ai` int(2) NOT NULL,
  `cc` int(2) NOT NULL,
  `wt` int(2) NOT NULL,
  `iot` int(2) NOT NULL,
  `uiux` int(2) NOT NULL,
  `cp` int(2) NOT NULL,
  `asb` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internal2`
--

INSERT INTO `internal2` (`enrollmentno`, `Name`, `Department`, `toc`, `ai`, `cc`, `wt`, `iot`, `uiux`, `cp`, `asb`) VALUES
(19012011004, 'Gaurav Bilandani', 'CE', 19, 13, 11, 8, 12, 18, 20, 20),
(19012011024, 'Shobhit Mendiratta', 'CE', 18, 19, 19, 20, 17, 16, 19, 20),
(19012011086, 'Aum Thanky', 'CE', 19, 12, 17, 6, 5, 19, 19, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `external`
--
ALTER TABLE `external`
  ADD PRIMARY KEY (`enrollmentno`);

--
-- Indexes for table `internal1`
--
ALTER TABLE `internal1`
  ADD PRIMARY KEY (`enrollmentno`);

--
-- Indexes for table `internal2`
--
ALTER TABLE `internal2`
  ADD PRIMARY KEY (`enrollmentno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
