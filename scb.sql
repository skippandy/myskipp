-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2017 at 01:42 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scb`
--

-- --------------------------------------------------------

--
-- Table structure for table `RETRIEVE`
--

CREATE TABLE `RETRIEVE` (
  `ID` int(50) NOT NULL,
  `SERIAL_NO` varchar(50) NOT NULL,
  `EQUIPMENT_MAKE` varchar(50) NOT NULL,
  `DEPARTMENT` varchar(50) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `STATUS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RETRIEVE`
--

INSERT INTO `RETRIEVE` (`ID`, `SERIAL_NO`, `EQUIPMENT_MAKE`, `DEPARTMENT`, `USERNAME`, `STATUS`) VALUES
(1, '1234', 'DELL LATITUDE', 'TRADE', 'ANDREWS', ''),
(2, '13333', 'DELL LATITUDE', 'ITO', 'STEVEN KANDA', '');

-- --------------------------------------------------------

--
-- Table structure for table `SCB1`
--

CREATE TABLE `SCB1` (
  `ID` int(11) NOT NULL,
  `DATE_RECEIVED` date NOT NULL,
  `EQUIPMENT_MAKE` varchar(100) NOT NULL,
  `SERIAL_NO` varchar(100) NOT NULL,
  `DEPARTMENT` varchar(100) NOT NULL,
  `ISSUE` varchar(100) NOT NULL,
  `RESOLUTION` varchar(100) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `DATE_REPAIRED` date NOT NULL,
  `DATE_DISPATCHED` date NOT NULL,
  `TECHNICHIAN` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SCB1`
--

INSERT INTO `SCB1` (`ID`, `DATE_RECEIVED`, `EQUIPMENT_MAKE`, `SERIAL_NO`, `DEPARTMENT`, `ISSUE`, `RESOLUTION`, `USERNAME`, `DATE_REPAIRED`, `DATE_DISPATCHED`, `TECHNICHIAN`) VALUES
(66, '2017-07-14', 'dell latitude 6430', '143556', 'ITO', 'machine keeps restarting', 'eeeee', 'Philip', '2017-07-16', '2017-07-16', 'EUGENE VAN-DANIEL'),
(67, '2017-07-14', 'DELL LATITUDE', '1234', 'TRADE', 'select your issue', 'QQ', 'ANDREWS', '2017-07-16', '2017-07-16', 'SOLOMON DEGBLOR'),
(68, '2017-07-14', 'DELL LATITUDE', '13333', 'ITO', '', '', 'STEVEN KANDA', '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `ID` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`ID`, `PASSWORD`) VALUES
('1389200', 'Bernice@12345'),
('12345', 'admin'),
('0', ''),
('0', ''),
('0', ''),
('88888', 'tell'),
('0', 'ama'),
('33333', '33333'),
('andrews', 'andrews');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `RETRIEVE`
--
ALTER TABLE `RETRIEVE`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UK_RETRIEVE_1` (`SERIAL_NO`);

--
-- Indexes for table `SCB1`
--
ALTER TABLE `SCB1`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `RETRIEVE`
--
ALTER TABLE `RETRIEVE`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `SCB1`
--
ALTER TABLE `SCB1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
