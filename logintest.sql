-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2018 at 06:37 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logintest`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(12) NOT NULL,
  `annsubject` varchar(64) NOT NULL,
  `annpost` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `annsubject`, `annpost`) VALUES
(1, 'Blood Donation Camp', 'Blood donation campaign will be held 8th April In EWU campus.'),
(2, 'Donate Blood, Save Life', 'Rampura Welfare society will be going to arrange a blood donation campaign at 1st May.');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(12) NOT NULL,
  `uname` varchar(64) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `weight` int(10) NOT NULL,
  `bloodgroup` varchar(4) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `psw` varchar(1024) NOT NULL,
  `ldd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `uname`, `gender`, `age`, `weight`, `bloodgroup`, `address`, `mob`, `email`, `psw`, `ldd`) VALUES
(1, 'r1f4t', 'male', 22, 52, 'B+', 'Rampura', '01689793866', 'rif@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2015-03-24'),
(2, 'Napa', 'female', 26, 65, 'B-', 'Dhanmondi', '01834567897', 'napa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-02-12'),
(3, 'ahsan', 'male', 45, 60, 'A+', 'Mohammabpur', '01687654322', 'ahsan@gmail.com', '674f3c2c1a8a6f90461e8a66fb5550ba', '2016-03-23'),
(4, 'sufia', 'female', 45, 58, 'A-', 'Azimpur', '01934567823', 'sufia@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '2015-07-08'),
(5, 'nazrul', 'male', 34, 76, 'B-', 'Polton, Dhaka', '0172345678', 'nazrul@gmail.com', '674f3c2c1a8a6f90461e8a66fb5550ba', '2017-09-03'),
(6, 'samsur', 'male', 28, 64, 'AB+', 'Lalbag', '0196543234', 'samsur@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '2018-01-04'),
(7, 'sukanto', 'male', 25, 57, 'AB-', 'Uttara, Dhaka', '01678234854', 'sukanto@gmail.com', '674f3c2c1a8a6f90461e8a66fb5550ba', '2017-09-12'),
(8, 'jashim', 'male', 54, 60, 'O+', 'Mirpur-11', '0198765452', 'jashim@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '2014-10-01'),
(9, 'rokeya', 'female', 38, 55, 'O-', 'Kakrail,Dhaka', '019456723746', 'rokeya@hotmail.com', '674f3c2c1a8a6f90461e8a66fb5550ba', '2017-12-04'),
(10, 'rok3ya', 'female', 38, 58, 'O-', 'Shantinogor', '01545673233', 'rokeya@hotmail.com', '674f3c2c1a8a6f90461e8a66fb5550ba', '2017-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(64) NOT NULL,
  `contact` varchar(64) NOT NULL,
  `feedback` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `name` varchar(64) NOT NULL,
  `contact` varchar(64) NOT NULL,
  `subject` varchar(64) NOT NULL,
  `post` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`name`, `contact`, `subject`, `post`) VALUES
('Begum Rokeya', '0197654344', 'Need Blood', 'Need AB+ Blood after 1 week at Square Hospital. Interested Donor please contact with me.  '),
('Nazrul Islam', '0189863454', 'Attention', 'B- blood need urgently at BSMMU hospital.'),
('Rifat', '01687654234', 'Need Blood', 'Urgently need B+ blood at Rampura.\r\n'),
('Shawn', '01823456824', 'Urgent Blood Needed', 'B- blood require on next week.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `fname` varchar(64) NOT NULL,
  `lname` varchar(64) NOT NULL,
  `uname` varchar(32) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `psw` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `uname`, `mob`, `email`, `psw`) VALUES
(1, 'Rifat', 'Ahmed', 'rifat', '01689793866', 'rif@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Ahsan', 'Habib', 'ahsan', '01687654322', 'ahsan@gmail.com', '674f3c2c1a8a6f90461e8a66fb5550ba'),
(3, 'Sufia', 'Kamal', 'sufia', '0189876543', 'sufia@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'Nazrul', 'Islam', 'nazrul', '01745672432', 'nazrul@gmail.com', '674f3c2c1a8a6f90461e8a66fb5550ba'),
(5, 'Samsur', 'Rahman', 'samsur', '0162345678', 'samsur@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'Sukanto', 'Roy', 'sukanto', '01845678234', 'sukanto@gmail.com', '674f3c2c1a8a6f90461e8a66fb5550ba'),
(7, 'Jashim', 'Uddin', 'jashim', '01456789345', 'jashim@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'Begum', 'Rokeya', 'rokeya', '01745678234', 'rokeya@hotmail.com', '674f3c2c1a8a6f90461e8a66fb5550ba');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
