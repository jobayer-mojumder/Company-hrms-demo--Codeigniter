-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2017 at 06:05 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  `from_date` varchar(100) NOT NULL,
  `to_date` varchar(100) NOT NULL,
  `reason` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `regtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `employee_id`, `days`, `from_date`, `to_date`, `reason`, `type`, `status`, `regtime`) VALUES
(2, 2, 2, '2017-02-15', '2017-02-15', 'ddcscdcsd', 'sick', 1, '2017-02-20 09:42:38'),
(3, 2, 44, '2017-02-15', '2017-02-15', 'cdcscsd', 'casual', 2, '2017-02-16 09:53:03');

-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

CREATE TABLE `lunch` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `regtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lunch`
--

INSERT INTO `lunch` (`id`, `employee_id`, `order_date`, `status`, `regtime`) VALUES
(1, 2, '2017-02-14', 0, '2017-02-14 16:27:05'),
(2, 2, '2017-02-14', 1, '2017-02-14 16:27:07'),
(3, 2, '2017-02-15', 0, '2017-02-15 08:20:36'),
(4, 2, '2017-02-15', 1, '2017-02-15 08:20:39'),
(5, 2, '2017-02-16', 0, '2017-02-16 09:51:42'),
(6, 2, '2017-02-20', 0, '2017-02-20 09:40:02'),
(7, 2, '2017-02-20', 1, '2017-02-20 09:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `task_table`
--

CREATE TABLE `task_table` (
  `task_id` int(11) NOT NULL,
  `task_title` varchar(255) NOT NULL,
  `task_details` text NOT NULL,
  `employee_id` int(11) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `progress` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `regtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task_table`
--

INSERT INTO `task_table` (`task_id`, `task_title`, `task_details`, `employee_id`, `start_date`, `end_date`, `progress`, `status`, `regtime`) VALUES
(1, 'Daa fsdfs sdsa', ' sASAsASAsASSaasdasd', 2, '2017-02-15', '2017-02-08', 0, 0, '2017-02-14 11:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `joining_date` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `user_type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `regtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `fullname`, `email`, `contact`, `password`, `joining_date`, `designation`, `user_type`, `status`, `regtime`) VALUES
(1, 'Jobayer Mojumder', 'jobayer.pro@gmail.com', '2345678', '1234', '2017-03-12', 'CM', 1, 1, '2017-02-14 11:13:30'),
(2, 'Titas Ahamed', 'titas@gmail.com', '324567', '1234', '2017-02-09', 'Programmer', 2, 1, '2017-02-14 11:20:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lunch`
--
ALTER TABLE `lunch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_table`
--
ALTER TABLE `task_table`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lunch`
--
ALTER TABLE `lunch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `task_table`
--
ALTER TABLE `task_table`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
