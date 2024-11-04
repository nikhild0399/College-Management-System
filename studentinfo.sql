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
-- Database: `studentinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `exstudent`
--

CREATE TABLE `exstudent` (
  `roll_no` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` enum('male','female','other','') NOT NULL,
  `account` varchar(100) NOT NULL,
  `ifsc` varchar(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `aadhar` varchar(100) NOT NULL,
  `pan` varchar(100) NOT NULL,
  `vaccination` enum('yes','no','first','') NOT NULL,
  `blood` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `district` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `admission_year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `incomplete`
--

CREATE TABLE `incomplete` (
  `roll_no` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` enum('male','female','other','') NOT NULL,
  `account` varchar(100) NOT NULL,
  `ifsc` varchar(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `aadhar` varchar(100) NOT NULL,
  `pan` varchar(100) NOT NULL,
  `vaccination` enum('yes','no','first','') NOT NULL,
  `blood` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `district` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `admission_year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studinfo`
--

CREATE TABLE `studinfo` (
  `roll_no` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` enum('male','female','other','') NOT NULL,
  `account` varchar(100) NOT NULL,
  `ifsc` varchar(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `aadhar` varchar(100) NOT NULL,
  `pan` varchar(100) NOT NULL,
  `vaccination` enum('yes','no','first','') NOT NULL,
  `blood` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `district` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `admission_year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studinfo`
--

INSERT INTO `studinfo` (`roll_no`, `username`, `father_name`, `mother_name`, `dob`, `phone_no`, `email`, `gender`, `account`, `ifsc`, `bank_name`, `aadhar`, `pan`, `vaccination`, `blood`, `address`, `district`, `pincode`, `state`, `branch`, `semester`, `admission_year`) VALUES
('19064c04007', 'Chndrajyoti Lodhi ', 'Ram Autura Lodi', 'Bhoori Lodi', '2001-05-03', '6268893263', 'jyotisingraul056@gmail.com', 'female', '45862011545568', 'SBIN0002845', 'sbi', '25555555', '85555555', 'yes', 'B+', 'bade bajr', 'panna', '488001', 'madhya pradesh', 'CSE', '6', '2019-12-12'),
('19064c04014', 'Narendra Tirpathi ', 'Ramshamkar Tirpathi', 'Tulsa Devi Tirpathi', '2000-08-02', '6265752096', 'narendratripathi6269@gmail.com', 'male', '213456546545432146', '23232', 'sbi', '325848484854', '154D4856FG', 'yes', 'B+', 'Badwara', 'panna', '488001', 'madhya pradesh', 'CSE', '6', '2019-06-01'),
('19064c04021', 'Rashi Sharma ', 'Sanjay Sharma', 'Reena Sharma', '2000-11-06', '9009613560', 'rashi11sharma08@gmail.com', 'female', '5255353253', '4532532', 'sbi', '600221100656', '1253', 'yes', 'A+', 'Behind gas godam civil line road  panna', 'panna', '488001', 'panna', 'CSE', '6', '2019-02-08'),
('19064c04025', 'Nikhil Dwivedi ', 'LAXMI NARAYAN KHARE', 'Mamta Dwivedi', '2001-10-06', '7477230781', 'nikhild470@gmail.com', 'male', '121454', '4532532', 'sbi', '213131246545', '154D4856FG', 'yes', 'B+', 'Behind Bade jain mandir dham mohalla panna', 'panna', '488001', 'panna', 'CSE', '6', '2019-01-06'),
('19064c04028', 'yuvraj kewat ', 'chhote lal kewat', 'sudha kewat', '2001-02-14', '6268893263', 'yuvrajkwt50@gmail.com', 'male', '45862011545568', 'SBIN0002845', 'union', '600221100656', '154D4856FG', 'yes', 'B+', 'villege post janakpur panna (m.p)', 'panna', '488001', 'madhya pradesh', 'CSE', '6', '2019-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `roll_no` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` enum('male','female','other','') NOT NULL,
  `account` varchar(100) NOT NULL,
  `ifsc` varchar(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `aadhar` varchar(100) NOT NULL,
  `pan` varchar(100) NOT NULL,
  `vaccination` enum('yes','no','first','') NOT NULL,
  `blood` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `district` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `admission_year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exstudent`
--
ALTER TABLE `exstudent`
  ADD PRIMARY KEY (`roll_no`),
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `incomplete`
--
ALTER TABLE `incomplete`
  ADD PRIMARY KEY (`roll_no`),
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `studinfo`
--
ALTER TABLE `studinfo`
  ADD PRIMARY KEY (`roll_no`),
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`roll_no`),
  ADD UNIQUE KEY `roll_no` (`roll_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
