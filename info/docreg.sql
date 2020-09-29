-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2020 at 10:12 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'docreg', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `id` int(11) NOT NULL,
  `acnt_no` varchar(200) NOT NULL,
  `holder_name` varchar(200) NOT NULL,
  `bank_name` varchar(200) NOT NULL,
  `ifsc_code` varchar(200) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `emergency_fund` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`id`, `acnt_no`, `holder_name`, `bank_name`, `ifsc_code`, `branch`, `emergency_fund`) VALUES
(6, '1234567', 'Pawan Kumar', 'BOB', 'BAR123', 'Lko', '14562');

-- --------------------------------------------------------

--
-- Table structure for table `contributions`
--

CREATE TABLE `contributions` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contribution` varchar(200) NOT NULL,
  `interest` varchar(200) NOT NULL,
  `emi_amount` varchar(200) NOT NULL DEFAULT '0',
  `total` varchar(200) NOT NULL,
  `pic_file` varchar(200) NOT NULL,
  `add_date` varchar(200) NOT NULL,
  `status` enum('1','2','3','4') NOT NULL DEFAULT '3' COMMENT '1=approved, 2=rejected, 3=pending,4=cancelled'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contributions`
--

INSERT INTO `contributions` (`id`, `user_id`, `name`, `contribution`, `interest`, `emi_amount`, `total`, `pic_file`, `add_date`, `status`) VALUES
(3, 'USER0004', 'Ayush 222', '10000', '', '0', '', '63.jpg', '2020-08-04 17:46', '1'),
(4, 'USER0004', 'Ayush 222', '100000', '', '0', '', '4.jpg', '2020-08-07 16:19', '3'),
(5, 'USER0004', 'Ayush 222', '2500', '', '0', '', '', '2020-08-15 09:25', '3'),
(7, 'USER0009', 'Virendra Singh Jakhar', '2500', '', '0', '', '', '2020-08-15 17:34', '1'),
(8, 'USER0004', 'Ayush 222', '2500', '25', '', '1000', '', '2020-08-31 12:53', '3'),
(9, 'USER0004', 'Ayush 222', '2500', '25', '', '2525', '', '2020-08-31 13:04', '1');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `detail` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `user_id`, `user_name`, `detail`, `date`, `amount`) VALUES
(1, 'USER0004', 'Ayush', 'hi', '10 10 10', '5000'),
(2, 'USER0004', 'admin', 'hik ', '2020-08-05', '100');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `image`) VALUES
(1, 'Vision', '5.jpg'),
(2, 'Healthy', '1.jpg'),
(3, 'Lucknow', '7.jpg'),
(4, 'hello', '41.jpg'),
(5, 'hello1', '71.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `loan_mgmt`
--

CREATE TABLE `loan_mgmt` (
  `id` int(11) NOT NULL,
  `loan_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `loan_name` varchar(200) NOT NULL,
  `start_month` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `no_of_emi` varchar(100) NOT NULL,
  `min_emi` varchar(100) NOT NULL,
  `max_emi` varchar(100) NOT NULL,
  `add_date` varchar(100) NOT NULL,
  `update_date` varchar(100) NOT NULL,
  `status` enum('1','2','3','4') NOT NULL DEFAULT '3' COMMENT '1=approved, 2=rejected, 3=pending, 4=cancelled'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_mgmt`
--

INSERT INTO `loan_mgmt` (`id`, `loan_id`, `user_id`, `loan_name`, `start_month`, `amount`, `duration`, `no_of_emi`, `min_emi`, `max_emi`, `add_date`, `update_date`, `status`) VALUES
(1, '', 'USER0004', '1234qw', '', '100000000', '25', '1', '12', '11', '', '2020-07-29', '4'),
(2, 'LOAN19237', 'USER0004', 'Test', '', '123', '12', '1', '2', '20', '', '2020-08-08', '1'),
(3, 'LOAN6429', 'USER0004', 'loan1', '2020-03', '123000', '36', '1', '3727.27', '4000', '2020-08-04 13:18', '', '4'),
(4, 'LOAN13692', 'USER0004', 'test2', '2020-02', '12000', '32', '1', '413.79', '420', '2020-08-07 13:50', '2020-08-07', '4'),
(5, 'LOAN24229', 'USER0004', 'test2', '2020-02', '1234567', '12', '1', '137174.11', '200000', '2020-08-07 16:16', '2020-08-07', '1'),
(6, 'LOAN24566', 'USER0004', 'test2', '2020-03', '1234', '12', '1', '13.67', '22', '2020-08-07 22:13', '', '3'),
(7, 'LOAN13002', 'USER0004', 'Personal', '2020-09', '24585', '36', '1', '745.00', '5000', '2020-08-08 15:25', '2020-08-13', '1'),
(8, 'LOAN21952', 'USER0004', 'testl', '2020-03', '1200000', '33', '1', '40000.00', '44444', '2020-08-11 12:33', '', '3'),
(9, 'LOAN8872', 'USER0004', 'Emergency Loan', '2020-07', '1452145', '4', '1', '12000.00', '', '2020-08-11 13:00', '', '3'),
(10, 'LOAN16788', 'USER0004', 'Normal Loan', '2020-08', '50000', '36', '1', '', '', '2020-08-15 09:31', '', '3'),
(11, 'LOAN9038', 'USER0009', 'Normal Loan', '2020-08', '10000', '60', '0', '1754.39', '', '2020-08-15 17:31', '2020-08-15', '1'),
(12, 'LOAN6130', 'USER00011', 'Normal Loan', '2020-08', '50000', '60', '0', '877.19', '', '2020-08-15 18:17', '2020-08-15', '1');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `member_name` varchar(200) NOT NULL,
  `joining_month` varchar(200) NOT NULL,
  `fee` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `user_id`, `member_name`, `joining_month`, `fee`) VALUES
(1, 'USER0001', 'Ayush', 'March', '1000'),
(2, 'USER0004', 'Ayush', '2020-04', '100');

-- --------------------------------------------------------

--
-- Table structure for table `pay_emi`
--

CREATE TABLE `pay_emi` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `acnt_no` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `date_of_pay` varchar(200) NOT NULL,
  `status` enum('1','2','3','4') NOT NULL DEFAULT '2' COMMENT '1=approved, 2= pending,3=cancelled, 4= rejected'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pay_emi`
--

INSERT INTO `pay_emi` (`id`, `user_id`, `acnt_no`, `amount`, `date_of_pay`, `status`) VALUES
(1, 'USER0004', '1234567897854', '100', '2020-08-07', '2'),
(2, 'USER0004', '1234567897854', '100', '2020-08-07', '2'),
(3, 'USER0004', '1234567897854', '1000', '2020-07-30', '2');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `whatsapp` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `aadhaar_card_front` varchar(100) NOT NULL,
  `aadhaar_card_back` varchar(100) NOT NULL,
  `cheque_passbook` varchar(100) NOT NULL,
  `pancard` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` enum('1','2','3') NOT NULL DEFAULT '3' COMMENT '1=active, 2=inactive, 3=pending',
  `created_at` varchar(100) NOT NULL,
  `total_contri` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `user_id`, `name`, `dob`, `email`, `mobile`, `whatsapp`, `address`, `username`, `password`, `aadhaar_card_front`, `aadhaar_card_back`, `cheque_passbook`, `pancard`, `photo`, `status`, `created_at`, `total_contri`) VALUES
(5, 'USER0003', 'Pawan K', '2006-02-08', '', '798585', '1234432', 'nagar', 'photography@123', '12345', 'Coming-Soon-.jpg', 'join_now.jpg', 'ps.jpg', 'service1.png', 'Starting-a-blog.png', '3', '', ''),
(6, 'USER0004', 'Ayush 222', '2020-07-01', 'ayush2e@gmail.com', '123456', '123456', 'mumbai', 'docreg@gmail.com', '123456', 'yoo.jpg', 'launching_soon.jpg', 'services-background-tall.jpg', 'join_now.jpg', 'blog.png', '3', '', '38468'),
(7, 'USER0005', 'testna', '2020-07-31', '', '7854126335', '745214569', 'lko', 'docreg', '12345', '1.jpg', '22.jpg', '3.jpg', '4.jpg', '5.jpg', '1', '', ''),
(9, 'USER0004', 'Test Name', '2020-08-01', '', '7452145889', '7452145889', 'Lucknow', 'testnm', '12345', '11.jpg', '23.jpg', '31.jpg', '41.jpg', '51.jpg', '2', '', '38468'),
(10, 'USER0005', 'KKM', '2020-08-20', 'kkm@gmail.com', '01212121212', '01212121212', 'D2/39, Gomti Nagar', 'doc', '123', 'Lighthouse.jpg', 'Lighthouse.jpg', 'Lighthouse.jpg', 'Lighthouse.jpg', 'Lighthouse.jpg', '3', '', ''),
(11, 'USER0006', 'DEVENDRA PRATAP NAGAR', '1985-09-26', 'devpnagar@gmail.com', '07651948544', '', 'Villa No.8 Mega Estate raibareily road purseni,Mohanlalganj LucknowNear DLF GARDEN CITY', 'devendra', 'kittu123@', '', '', '', '', '', '1', '', '2500'),
(12, 'USER0007', 'SANTOSH NAGAR', '1983-02-22', 'santoshnagar707@gmail.com', '9628320941', '', 'Villa No 8 Mega Estate Purseni Mohanlalganj Lucknow', 'Santoshnagar', 'Kittu123@', 'IMG_20191113_101648_1592226716439.jpg', 'IMG_20191113_101659.jpg', 'IMG_20200119_202519.jpg', 'IMG_20191113_101613.jpg', '', '1', '', ''),
(13, 'USER0008', 'Santoshnagar', '', 'santoshnagar707@gmail.com', '9628320941', '', '', 'Santoshnagar', 'Kittu123@', '', '', '', '', '', '3', '', ''),
(14, 'USER0009', 'Virendra Singh Jakhar', '1984-09-01', 'virendrasinghjakhar0109@gmail.com', '9929871321', '9929871321', 'Villa No 7 Mega Estate  Purseni Mohanlalganj  Lucknow ', 'Virendra Singh Jakhar ', 'Akky@2303', '20170130_140511.jpg', '20170130_140520.jpg', '20180918_170033.jpg', '', '', '1', '', '2500'),
(15, 'USER00010', 'Virendra Singh Jakhar', '1984-09-01', 'virendrasinghjakhar0109@gmail.com', '9929871321', '9929871321', 'Villa No 7 Mega Estate  Purseni Mohanlalganj  Lucknow ', 'Virendra Singh Jakhar ', 'Akky@2303', '', '', '', '', '', '3', '', ''),
(16, 'USER00011', 'Ramnaresh Yadav ', '1982-01-01', '', '9415788265', '9415788265', 'Villa no 284, Mega Estate,Purseni,Mohanlalganj \r\nLucknow ', 'Ramnaresh Yadav ', '01011982', '', '', '', '', '', '1', '', ''),
(17, 'USER00012', 'test', '2020-08-11', 'demoadmin@gmail.com', '7458962114', '', '', 'docreg@gmail.com', '123456', '', '', '', '', '', '3', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rewards`
--

INSERT INTO `rewards` (`id`, `user_id`, `user_name`, `amount`, `date`, `desc`) VALUES
(1, 'USER0001', '', '500', '20 10 2020', 'Test'),
(2, 'docreg@gmail.com', '', '24585', '2020-08-07', 'TestHi'),
(3, 'USER0004', 'admin', '24585', '2020-08-21', 'Hi');

-- --------------------------------------------------------

--
-- Table structure for table `statement`
--

CREATE TABLE `statement` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `statement` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_family`
--

CREATE TABLE `user_family` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `relation` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_family`
--

INSERT INTO `user_family` (`id`, `user_id`, `name`, `relation`, `dob`, `blood_group`, `photo`) VALUES
(1, 'USER0004', 'Test 1', 'Testing', '12-5-2014', 'A+', 'Web-Design-Blog-Image.jpg'),
(2, 'USER0004', 'Test 2', 'Uncle', '2020-07-09', 'O', 'ps.jpg'),
(3, 'USER0004', 'Test 2', 'Testing', '2020-07-04', 'O', 'just_beginning.jpeg'),
(4, 'USER0004', 'TestFam', '134', '2020-07-31', 'o', '1.jpg'),
(5, 'USER0004', 'TestFam2', 'unc', '2020-07-29', 'o', '7.jpg'),
(6, 'USER0004', 'TestFam3', 'unc', '2020-08-01', 'b', '6.jpg'),
(7, 'USER0009', 'Manju Devi', 'Wife', '1984-11-22', 'O Negative ', '1575445538750.png'),
(8, 'USER0009', 'Manju Devi', 'Wife', '1984-11-22', 'O Negative ', '15754455387501.png'),
(9, 'USER0009', 'Manju Devi', 'Wife', '1984-11-22', 'O Negative ', ''),
(10, 'USER0009', 'Manju Devi', 'Wife', '1984-11-22', 'O Negative ', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contributions`
--
ALTER TABLE `contributions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_mgmt`
--
ALTER TABLE `loan_mgmt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay_emi`
--
ALTER TABLE `pay_emi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statement`
--
ALTER TABLE `statement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_family`
--
ALTER TABLE `user_family`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contributions`
--
ALTER TABLE `contributions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loan_mgmt`
--
ALTER TABLE `loan_mgmt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pay_emi`
--
ALTER TABLE `pay_emi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `statement`
--
ALTER TABLE `statement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_family`
--
ALTER TABLE `user_family`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
