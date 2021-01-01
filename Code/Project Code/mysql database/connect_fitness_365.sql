-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 06:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `connect_fitness_365`
--

-- --------------------------------------------------------

--
-- Table structure for table `gyms`
--

CREATE TABLE `gyms` (
  `gymname` varchar(30) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `user_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `totaluser_dietchart`
--

CREATE TABLE `totaluser_dietchart` (
  `user_id` int(7) NOT NULL,
  `gymname` varchar(30) NOT NULL,
  `day` varchar(30) NOT NULL,
  `meal_no` int(11) NOT NULL,
  `meal_details` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `total_userroutine`
--

CREATE TABLE `total_userroutine` (
  `user_id` int(7) NOT NULL,
  `gymname` varchar(30) NOT NULL,
  `day` varchar(30) NOT NULL,
  `exercise` varchar(30) NOT NULL,
  `sets` int(11) DEFAULT NULL,
  `reps` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `trainer_id` int(3) NOT NULL,
  `gymname` varchar(30) NOT NULL,
  `trainer_name` varchar(30) DEFAULT NULL,
  `trainer_email` varchar(25) DEFAULT NULL,
  `trainer_phone` varchar(15) DEFAULT NULL,
  `trainer_address` varchar(50) DEFAULT NULL,
  `trainer_gender` varchar(8) DEFAULT NULL,
  `trainer_salary` int(7) DEFAULT NULL,
  `hire_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(7) NOT NULL,
  `user_name` varchar(25) DEFAULT NULL,
  `user_password` varchar(15) DEFAULT NULL,
  `gymname` varchar(30) NOT NULL,
  `instructor_id` int(3) DEFAULT NULL,
  `user_email` varchar(25) DEFAULT NULL,
  `user_phone` varchar(15) DEFAULT NULL,
  `user_address` varchar(30) DEFAULT NULL,
  `user_age` int(3) DEFAULT NULL,
  `user_gender` varchar(8) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `package_id` int(4) DEFAULT NULL,
  `user_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gyms`
--
ALTER TABLE `gyms`
  ADD PRIMARY KEY (`gymname`),
  ADD UNIQUE KEY `password` (`password`),
  ADD KEY `package_id` (`package_id`,`user_type`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`,`user_type`);

--
-- Indexes for table `totaluser_dietchart`
--
ALTER TABLE `totaluser_dietchart`
  ADD PRIMARY KEY (`user_id`,`gymname`,`day`,`meal_no`);

--
-- Indexes for table `total_userroutine`
--
ALTER TABLE `total_userroutine`
  ADD PRIMARY KEY (`user_id`,`gymname`,`day`,`exercise`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainer_id`,`gymname`),
  ADD UNIQUE KEY `trainer_email` (`trainer_email`),
  ADD KEY `gymname` (`gymname`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`,`gymname`),
  ADD KEY `instructor_id` (`instructor_id`),
  ADD KEY `package_id` (`package_id`,`user_type`),
  ADD KEY `gymname` (`gymname`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gyms`
--
ALTER TABLE `gyms`
  ADD CONSTRAINT `gyms_ibfk_1` FOREIGN KEY (`package_id`,`user_type`) REFERENCES `subscriptions` (`id`, `user_type`);

--
-- Constraints for table `totaluser_dietchart`
--
ALTER TABLE `totaluser_dietchart`
  ADD CONSTRAINT `totaluser_dietchart_ibfk_1` FOREIGN KEY (`user_id`,`gymname`) REFERENCES `user_info` (`user_id`, `gymname`);

--
-- Constraints for table `total_userroutine`
--
ALTER TABLE `total_userroutine`
  ADD CONSTRAINT `total_userroutine_ibfk_1` FOREIGN KEY (`user_id`,`gymname`) REFERENCES `user_info` (`user_id`, `gymname`);

--
-- Constraints for table `trainer`
--
ALTER TABLE `trainer`
  ADD CONSTRAINT `trainer_ibfk_1` FOREIGN KEY (`gymname`) REFERENCES `gyms` (`gymname`);

--
-- Constraints for table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`instructor_id`) REFERENCES `trainer` (`trainer_id`),
  ADD CONSTRAINT `user_info_ibfk_2` FOREIGN KEY (`package_id`,`user_type`) REFERENCES `subscriptions` (`id`, `user_type`),
  ADD CONSTRAINT `user_info_ibfk_3` FOREIGN KEY (`gymname`) REFERENCES `gyms` (`gymname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
