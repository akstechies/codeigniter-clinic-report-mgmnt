-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2020 at 01:40 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `docreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `member_cancel`
--

CREATE TABLE `member_cancel` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `reason` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `mobile_no` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `status` enum('1','2','3') NOT NULL DEFAULT '2' COMMENT '1=approve,2=pending,3=cancel'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_cancel`
--

INSERT INTO `member_cancel` (`id`, `user_id`, `user_name`, `reason`, `date`, `mobile_no`, `email`, `status`) VALUES
(1, 'USER0004', 'Ayush 222', 'Test', '2020-09-22', '123456', 'ayush2e@gmail.com', '3'),
(2, 'USER0004', 'Ayush 222', 'Test', '2020-09-22', '123456', 'ayush2e@gmail.com', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member_cancel`
--
ALTER TABLE `member_cancel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member_cancel`
--
ALTER TABLE `member_cancel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
