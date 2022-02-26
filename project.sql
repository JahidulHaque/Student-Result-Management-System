-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2021 at 06:49 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `hiredate` date NOT NULL,
  `address` varchar(30) NOT NULL,
  `sex` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `phone`, `email`, `dob`, `hiredate`, `address`, `sex`) VALUES
('ad1', 'Jahid', 'Jahid123@', '01871315176', 'jahid@gmail.com', '1998-12-02', '0000-00-00', 'Jatrabari', 'Male'),
('ad2', 'Rifat', 'Rifat123@', '01857321599', 'rifat@gmail', '1998-01-28', '0000-00-00', 'kajla,dhaka', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `studentid` int(40) NOT NULL,
  `grade` int(40) NOT NULL,
  `courseid` varchar(40) NOT NULL,
  `classid` int(40) NOT NULL,
  `session` int(40) NOT NULL,
  `term` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`studentid`, `grade`, `courseid`, `classid`, `session`, `term`) VALUES
(1, 10, 'CSE101', 2, 2020, 'quiz1'),
(1, 10, 'CSE101', 2, 2020, 'quiz1'),
(2, 9, 'CSE101', 3, 2020, 'quiz2');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(40) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `admissionDate` date NOT NULL,
  `address` varchar(30) NOT NULL,
  `class` int(30) NOT NULL,
  `session` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `password`, `sex`, `phone`, `email`, `dob`, `admissionDate`, `address`, `class`, `session`) VALUES
(1, 'kishor', 'Kishor123@', 'Male', '+8801857297599', 'kishor@gmail.com', '2021-08-13', '2021-08-28', 'Dhaka, Bangladesh', 2, 2020),
(2, 'Toukir', 'Toukir123@', 'Male', '+8801857297599', 'toukir@gmail.com', '2021-08-19', '2021-08-12', 'Dhaka, Bangladesh', 3, 2020);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
