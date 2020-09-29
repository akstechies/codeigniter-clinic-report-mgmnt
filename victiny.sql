-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2020 at 02:28 PM
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
-- Database: `victiny`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `doctor_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `doctor_name`) VALUES
(1, 'Sonu'),
(2, 'Akshay'),
(3, 'Pranjal');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_details` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_details`) VALUES
(1, 'Medicine'),
(2, 'Injection');

-- --------------------------------------------------------

--
-- Table structure for table `promotional_items`
--

CREATE TABLE `promotional_items` (
  `id` int(11) NOT NULL,
  `promo_items` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promotional_items`
--

INSERT INTO `promotional_items` (`id`, `promo_items`) VALUES
(1, 'Pen'),
(2, 'Clip'),
(3, 'Chit');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` enum('1','2') NOT NULL COMMENT '1=active, 2=inactive',
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `user_id`, `username`, `name`, `password`, `status`, `image`) VALUES
(1, 'USER1', 'user@gmail.com', '1st user', 'userpass', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_report`
--

CREATE TABLE `user_report` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `doctor_name` varchar(200) NOT NULL,
  `area_of_visit` varchar(200) NOT NULL,
  `product_details` varchar(200) NOT NULL,
  `promo_items` varchar(200) NOT NULL,
  `visit_date` varchar(200) NOT NULL,
  `remarks` text NOT NULL,
  `created_at` varchar(200) NOT NULL,
  `status` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1=active, 2=cancel'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_report`
--

INSERT INTO `user_report` (`id`, `user_id`, `doctor_name`, `area_of_visit`, `product_details`, `promo_items`, `visit_date`, `remarks`, `created_at`, `status`) VALUES
(1, 'USER1', 'testdoc', 'testarea', 'testprod', 'testpromo', 'testvisitdate', 'Test remard', 'rtest crea', '2'),
(2, 'USER1', 'testDoc', 'Test Area', 'product details', 'promo', '2020-09-09', 'Test', 'aa', '1'),
(3, 'USER1', 'testDoc', 'Test Area', 'product details', 'promo', '2020-10-01', 'tetsts', '2020-09-08 19:21', '1'),
(4, 'USER1', 'testDoc', 'Test Area', 'product details', 'promo', '2020-09-26', 'Tetss', '2020-09-09 19:28', '1'),
(5, 'USER1', 'Pranjal', 'Lucknow', 'Medicine', 'Pen', '2020-09-18', 'Test', '2020-09-14 19:07', '1'),
(6, 'USER1', 'Pranjal', 'Lucknow', 'Medicine', 'Chit', '2020-09-09', 'Follow up', '2020-09-15 19:16', '1');

-- --------------------------------------------------------

--
-- Table structure for table `visit_area`
--

CREATE TABLE `visit_area` (
  `id` int(11) NOT NULL,
  `area_of_visit` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visit_area`
--

INSERT INTO `visit_area` (`id`, `area_of_visit`) VALUES
(1, 'Lucknow'),
(2, 'Gomtinagar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotional_items`
--
ALTER TABLE `promotional_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_report`
--
ALTER TABLE `user_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visit_area`
--
ALTER TABLE `visit_area`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `promotional_items`
--
ALTER TABLE `promotional_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_report`
--
ALTER TABLE `user_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `visit_area`
--
ALTER TABLE `visit_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
