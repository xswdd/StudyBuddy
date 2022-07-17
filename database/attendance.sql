-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 11:47 AM
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
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
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
  `asb` int(3) NOT NULL,
  `toclab` int(3) NOT NULL,
  `ailab` int(3) NOT NULL,
  `cclab` int(3) NOT NULL,
  `wtlab` int(3) NOT NULL,
  `iotlab` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`enrollmentno`, `Name`, `Department`, `toc`, `ai`, `cc`, `wt`, `iot`, `uiux`, `cp`, `asb`, `toclab`, `ailab`, `cclab`, `wtlab`, `iotlab`) VALUES
(19012011004, 'Gaurav Bilandani', 'CE', 79, 81, 95, 100, 89, 75, 60, 80, 78, 89, 84, 100, 80),
(19012011024, 'Shobhit Mendiratta', 'CE', 90, 87, 90, 100, 100, 88, 76, 100, 98, 70, 89, 100, 95),
(19012011086, 'Aum Thanky', 'CE', 89, 92, 78, 81, 96, 84, 70, 80, 100, 77, 84, 100, 79);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`enrollmentno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
