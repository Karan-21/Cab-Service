-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2017 at 08:00 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cabservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingdetail`
--

CREATE TABLE `bookingdetail` (
  `bid` int(11) NOT NULL,
  `cabid` int(11) NOT NULL,
  `cabmodel` varchar(100) NOT NULL,
  `cusid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `cdate` date NOT NULL,
  `bookingdate` date NOT NULL,
  `bookingtime` time NOT NULL,
  `source` varchar(50) NOT NULL,
  `dest` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingdetail`
--

INSERT INTO `bookingdetail` (`bid`, `cabid`, `cabmodel`, `cusid`, `cname`, `cdate`, `bookingdate`, `bookingtime`, `source`, `dest`, `status`) VALUES
(1, 2, '', 1, 'anitha', '2017-01-06', '2017-01-17', '11:30:00', 'madurai avaniyapuram', 'madurai Airport', 'Booked'),
(2, 3, 'Indigo (4 1)', 2, 'keerthi', '2017-01-10', '2017-01-11', '10:30:00', 'south gate', 'alagarkovil', 'Booked'),
(3, 4, 'Tempo Traveller (12  1) (Non A/C)', 3, 'karthik', '2017-01-10', '2017-01-11', '12:30:00', 'madurai', 'virudhunagar', 'Booked');

-- --------------------------------------------------------

--
-- Table structure for table `cabinfo`
--

CREATE TABLE `cabinfo` (
  `cabno` int(11) NOT NULL,
  `regno` varchar(50) NOT NULL,
  `cabmodel` varchar(50) NOT NULL,
  `basefare` int(11) NOT NULL,
  `dfare` int(11) NOT NULL,
  `drivername` varchar(50) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(60) NOT NULL,
  `licenseno` varchar(50) NOT NULL,
  `picture` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabinfo`
--

INSERT INTO `cabinfo` (`cabno`, `regno`, `cabmodel`, `basefare`, `dfare`, `drivername`, `contact`, `address`, `licenseno`, `picture`) VALUES
(2, 'TN4567', 'Tata Indica (4 + 1) (A/C)', 80, 17, 'Krishna', 9878678678, 'cas nagar, madurai', '4PUTN983', 'tata1.png'),
(3, 'TN346', 'Indigo (4+1)', 90, 17, 'Raju', 89785667898, 'indira nagar madurai', 'TN7345K567', 'indigo.png'),
(4, 'TN7876', 'Tempo Traveller (12  1) (Non A/C)', 80, 12, 'Ravikanth', 9876567888, 'plotno4indiranagar madurai', 'TN6783958', 'tempo-traveller.png');

-- --------------------------------------------------------

--
-- Table structure for table `customerfeedback`
--

CREATE TABLE `customerfeedback` (
  `fid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerfeedback`
--

INSERT INTO `customerfeedback` (`fid`, `cid`, `cname`, `subject`, `feedback`) VALUES
(4, 1, 'anitha', 'service', 'good service'),
(5, 3, 'karthik', 'rate', 'service is so nice.. give offer for regular customer');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `uid` int(11) NOT NULL,
  `customername` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `mailid` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`uid`, `customername`, `address`, `contact`, `mailid`, `username`, `password`, `confirm`) VALUES
(1, 'anitha', 'madurai', 9878678678, 'anitha@gmail.com', 'anitha', 'anitha123', 'anitha123'),
(2, 'keerthi', 'madurai', 9878787898, 'keerthi@gmail.com', 'keerthi', 'keerthi123', 'keerthi123'),
(3, 'karthik', 'madurai', 9876567888, 'karthik@gmail.com', 'karthik', 'karthik', 'karthik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingdetail`
--
ALTER TABLE `bookingdetail`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `cabinfo`
--
ALTER TABLE `cabinfo`
  ADD PRIMARY KEY (`cabno`);

--
-- Indexes for table `customerfeedback`
--
ALTER TABLE `customerfeedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingdetail`
--
ALTER TABLE `bookingdetail`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cabinfo`
--
ALTER TABLE `cabinfo`
  MODIFY `cabno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customerfeedback`
--
ALTER TABLE `customerfeedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
