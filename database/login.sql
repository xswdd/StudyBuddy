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
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `floginform`
--

CREATE TABLE `floginform` (
  `Name` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Username` varchar(3) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Confirm_Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `floginform`
--

INSERT INTO `floginform` (`Name`, `Email`, `Department`, `Username`, `Password`, `Confirm_Password`) VALUES
('Manan Thakkar', 'mananthakkar199@gnu.ac.in', 'CE', 'mdt', 'mdt@12345', 'mdt@12345'),
('Ravi Raval', 'raviraval123@gnu.ac.in', 'CE', 'rfr', 'raviraval@123', 'raviraval@123');

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `Name` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Department` text NOT NULL,
  `Username` bigint(11) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Confirm_Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`Name`, `Email`, `Department`, `Username`, `Password`, `Confirm_Password`) VALUES
('Gaurav Bilandani', 'gauravkumar19@gmail.com', 'CE', 19012011004, 'gaurav12345', 'gaurav12345'),
('Shobhit Mendiratta', 'shobhitmendiratta510@gmail.com', 'CE', 19012011024, 'kaku6602', 'kaku6602'),
('Manthan ', 'manthan12345@gmail.com', 'It', 19012011025, 'manthan12345', 'manthan12345'),
('Aum Thanky', 'aumthanky99@gmail.com', 'CE', 19012011086, 'aumthanky', 'aumthanky');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `floginform`
--
ALTER TABLE `floginform`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
