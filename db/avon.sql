-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 17, 2020 at 12:36 AM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 5.6.40-29+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avon`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_subject`
--

CREATE TABLE `assign_subject` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `admission_no` varchar(50) NOT NULL,
  `phone_no` varchar(12) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `email_id`, `admission_no`, `phone_no`, `created_at`, `update_at`) VALUES
(1, 'Code Improve', 'code@gmail.com', 'ADMIN', '9090909099', '2020-07-14 17:21:27', '0000-00-00 00:00:00'),
(2, 'Arun', 'arun@gmail.com', 'CD001', '9190909876', '2020-07-14 17:21:27', '0000-00-00 00:00:00'),
(3, 'Bhanu', 'bhanu@gmail.com', 'CD002', '9190909090', '2020-07-14 17:21:27', '0000-00-00 00:00:00'),
(4, 'Bharti', 'bharti@gmail.com', 'CD003', '9898989898', '2020-07-14 17:21:27', '0000-00-00 00:00:00'),
(5, 'Cherry', 'cherry@gmail.com', 'CD004', '7898757547', '2020-07-14 17:21:27', '0000-00-00 00:00:00'),
(6, 'Dinesh', 'dinesh@gmail.com', 'CD005', '7808757090', '2020-07-14 17:21:27', '0000-00-00 00:00:00'),
(7, 'Farahn', 'farahn@gmail.com', 'CD061', '9898757654', '2020-07-14 17:21:27', '0000-00-00 00:00:00'),
(8, 'Geetika', 'geetika@gmail.com', 'CD062', '7898757666', '2020-07-14 17:21:27', '0000-00-00 00:00:00'),
(9, 'Mahesh', 'mahesh@gmail.com', 'CD065', '7898757500', '2020-07-14 17:21:27', '0000-00-00 00:00:00'),
(10, 'Nitin', 'nitin@gmail.com', 'CD067', '9898757502', '2020-07-14 17:21:27', '0000-00-00 00:00:00'),
(11, 'Raman', 'raman@gmail.com', 'CD070', '6700098009', '2020-07-14 17:21:27', '0000-00-00 00:00:00'),
(12, 'Taail', 'taail@gmail.com', 'CD070', '6799098009', '2020-07-14 17:21:27', '0000-00-00 00:00:00'),
(13, 'Vishnu', 'vishnu@gmail.com', 'CD077', '8900012541', '2020-07-14 17:21:27', '0000-00-00 00:00:00'),
(14, 'user', 'user@gmail.com', 'CD121', '9898112121', '2020-07-14 17:32:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` enum('ADMIN','USER') NOT NULL DEFAULT 'USER',
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `email_id`, `user_id`, `password`, `user_type`, `status`, `created_at`) VALUES
(1, 'code@gmail.com', 1, '6ad14ba9986e3615423dfca256d04e3f', 'ADMIN', 'active', '2020-07-14 17:20:37'),
(2, 'arun@gmail.com', 2, '9190909090', 'USER', 'active', '2020-07-14 17:31:29'),
(3, 'bhanu@gmail.com', 3, '9190909090', 'USER', 'active', '2020-07-14 17:31:29'),
(4, 'bharti@gmail.com', 4, '9898989898', 'USER', 'active', '2020-07-14 17:31:29'),
(5, 'cherry@gmail.com', 5, '7898757547', 'USER', 'active', '2020-07-14 17:31:29'),
(6, 'dinesh@gmail.com', 6, '7808757090', 'USER', 'active', '2020-07-14 17:31:29'),
(7, 'farahn@gmail.com', 7, '9898757654', 'USER', 'active', '2020-07-14 17:31:29'),
(8, 'geetika@gmail.com', 8, '7898757666', 'USER', 'active', '2020-07-14 17:31:29'),
(9, 'mahesh@gmail.com', 9, '7898757500', 'USER', 'active', '2020-07-14 17:31:29'),
(10, 'nitin@gmail.com', 10, '9898757502', 'USER', 'active', '2020-07-14 17:31:29'),
(11, 'raman@gmail.com', 11, '6700098009', 'USER', 'active', '2020-07-14 17:31:29'),
(12, 'taail@gmail.com', 12, '6799098009', 'USER', 'active', '2020-07-14 17:31:29'),
(13, 'vishnu@gmail.com', 13, '8900012541', 'USER', 'active', '2020-07-14 17:31:29'),
(17, 'user@gmail.com', 14, '6ad14ba9986e3615423dfca256d04e3f', 'USER', 'active', '2020-07-14 17:32:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_subject`
--
ALTER TABLE `assign_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_subject`
--
ALTER TABLE `assign_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
