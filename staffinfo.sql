-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 12:35 PM
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
-- Database: `staffinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `deputation`
--

CREATE TABLE `deputation` (
  `teacher_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `dob` date NOT NULL DEFAULT current_timestamp(),
  `appoint_date` date NOT NULL DEFAULT current_timestamp(),
  `aadhar` varchar(100) NOT NULL,
  `pan` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL,
  `ifsc` int(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `education_qualification` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `gender` enum('male','female','other','') NOT NULL,
  `address` varchar(200) NOT NULL,
  `caddress` varchar(200) NOT NULL,
  `height` varchar(110) NOT NULL,
  `weight` varchar(110) NOT NULL,
  `blood` varchar(100) NOT NULL,
  `vaccination` enum('yes','no','first','') NOT NULL,
  `nominee` varchar(110) NOT NULL,
  `ndob` date NOT NULL,
  `naddress` varchar(210) NOT NULL,
  `naccount` varchar(110) NOT NULL,
  `nifsc` varchar(110) NOT NULL,
  `nbank_name` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `retirement`
--

CREATE TABLE `retirement` (
  `teacher_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `dob` date NOT NULL DEFAULT current_timestamp(),
  `appoint_date` date NOT NULL DEFAULT current_timestamp(),
  `aadhar` varchar(100) NOT NULL,
  `pan` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL,
  `ifsc` int(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `education_qualification` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `gender` enum('male','female','other','') NOT NULL,
  `address` varchar(200) NOT NULL,
  `caddress` varchar(200) NOT NULL,
  `height` varchar(110) NOT NULL,
  `weight` varchar(110) NOT NULL,
  `blood` varchar(100) NOT NULL,
  `vaccination` enum('yes','no','first','') NOT NULL,
  `nominee` varchar(110) NOT NULL,
  `ndob` date NOT NULL,
  `naddress` varchar(210) NOT NULL,
  `naccount` varchar(110) NOT NULL,
  `nifsc` varchar(110) NOT NULL,
  `nbank_name` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `teacher_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `dob` date NOT NULL DEFAULT current_timestamp(),
  `appoint_date` date NOT NULL DEFAULT current_timestamp(),
  `aadhar` varchar(100) NOT NULL,
  `pan` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL,
  `ifsc` int(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `education_qualification` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `gender` enum('male','female','other','') NOT NULL,
  `address` varchar(200) NOT NULL,
  `caddress` varchar(200) NOT NULL,
  `height` varchar(110) NOT NULL,
  `weight` varchar(110) NOT NULL,
  `blood` varchar(100) NOT NULL,
  `vaccination` enum('yes','no','first','') NOT NULL,
  `nominee` varchar(110) NOT NULL,
  `ndob` date NOT NULL,
  `naddress` varchar(210) NOT NULL,
  `naccount` varchar(110) NOT NULL,
  `nifsc` varchar(110) NOT NULL,
  `nbank_name` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`teacher_id`, `name`, `fname`, `dob`, `appoint_date`, `aadhar`, `pan`, `phone_no`, `email`, `account`, `ifsc`, `bank_name`, `education_qualification`, `designation`, `department`, `gender`, `address`, `caddress`, `height`, `weight`, `blood`, `vaccination`, `nominee`, `ndob`, `naddress`, `naccount`, `nifsc`, `nbank_name`) VALUES
('100', 'Pooja Khare', 'Prabhash khare', '1992-08-15', '2013-07-25', '456789452356', 'DYEPK7461L', '7898461275', 'poojakhare1523@gmail.com', '15156984236', 0, 'SBI', 'B.E.', 'GUEST LECTURER', 'CSE', 'female', 'PANNA', 'PANNA', '164', '66', 'B+', 'yes', 'PRABHASK KHARE', '1982-03-04', 'PANNA', '11235648712', 'SBIN6063', 'SBI');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `teacher_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `dob` date NOT NULL DEFAULT current_timestamp(),
  `appoint_date` date NOT NULL DEFAULT current_timestamp(),
  `aadhar` varchar(100) NOT NULL,
  `pan` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL,
  `ifsc` int(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `education_qualification` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `gender` enum('male','female','other','') NOT NULL,
  `address` varchar(200) NOT NULL,
  `caddress` varchar(200) NOT NULL,
  `height` varchar(110) NOT NULL,
  `weight` varchar(110) NOT NULL,
  `blood` varchar(100) NOT NULL,
  `vaccination` enum('yes','no','first','') NOT NULL,
  `nominee` varchar(110) NOT NULL,
  `ndob` date NOT NULL,
  `naddress` varchar(210) NOT NULL,
  `naccount` varchar(110) NOT NULL,
  `nifsc` varchar(110) NOT NULL,
  `nbank_name` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deputation`
--
ALTER TABLE `deputation`
  ADD PRIMARY KEY (`teacher_id`),
  ADD UNIQUE KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `retirement`
--
ALTER TABLE `retirement`
  ADD PRIMARY KEY (`teacher_id`),
  ADD UNIQUE KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`teacher_id`),
  ADD UNIQUE KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`teacher_id`),
  ADD UNIQUE KEY `teacher_id` (`teacher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
