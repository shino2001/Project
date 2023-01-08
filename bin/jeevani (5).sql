-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 10:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jeevani`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment_tbl`
--

CREATE TABLE `appoinment_tbl` (
  `appo_id` int(11) NOT NULL,
  `time_id` int(11) NOT NULL,
  `l_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `token` varchar(100) NOT NULL,
  `symptom` varchar(250) NOT NULL,
  `fee_status` tinyint(4) DEFAULT 0,
  `prescription` text DEFAULT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoinment_tbl`
--

INSERT INTO `appoinment_tbl` (`appo_id`, `time_id`, `l_id`, `date`, `token`, `symptom`, `fee_status`, `prescription`, `status`) VALUES
(27, 14, 178, '2022-10-25 00:00:00', 'Token-f8ea0cb372', 'knee pain', 1, 'Take Rest', 3),
(28, 14, 175, '2022-10-25 00:00:00', 'Token-53bde3cbdb', 'feaver', 1, 'take rest &#10;dashamoolam &#10;', 3),
(29, 14, 181, '2022-10-27 00:00:00', 'Token-5681e30f17', 'Body Pain', 1, 'test&#10;', 3),
(30, 16, 180, '2022-10-26 00:00:00', 'Token-b6433c90c8', 'faver', 0, '', 0),
(31, 15, 180, '2022-10-28 00:00:00', 'Token-f1c6ba93fa', 'pain', 0, '', 0),
(32, 14, 182, '2022-10-29 00:00:00', 'Token-4bfc0acdf5', 'head ache', 1, 'take rest &#10;', 3),
(33, 14, 175, '2022-10-26 00:00:00', 'Token-bc3c76e414', 'head ache', 0, '', 0),
(34, 16, 175, '2022-11-05 00:00:00', 'Token-ce1b7f14f6', 'pain', 0, 'Take rest', 3);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_timing_tbl`
--

CREATE TABLE `doctor_timing_tbl` (
  `time_id` int(11) NOT NULL,
  `l_id` int(11) NOT NULL,
  `start` varchar(10) NOT NULL,
  `end` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_timing_tbl`
--

INSERT INTO `doctor_timing_tbl` (`time_id`, `l_id`, `start`, `end`, `status`) VALUES
(14, 179, '08:59', '09:58', 1),
(15, 179, '10:04', '12:04', 1),
(16, 180, '11:07', '12:09', 1),
(17, 180, '12:48', '15:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment_tbl`
--

CREATE TABLE `payment_tbl` (
  `pay_id` int(11) NOT NULL,
  `r_pay_id` int(11) NOT NULL,
  `r_order_id` int(11) NOT NULL,
  `appo_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_tbl`
--

INSERT INTO `payment_tbl` (`pay_id`, `r_pay_id`, `r_order_id`, `appo_id`, `date`) VALUES
(14, 0, 0, 27, '2022-10-23 22:00:01'),
(15, 0, 0, 29, '2022-10-25 00:55:26'),
(16, 0, 0, 32, '2022-10-25 02:30:08'),
(17, 0, 0, 28, '2022-10-25 02:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_c_packages`
--

CREATE TABLE `tbl_c_packages` (
  `t_id` int(10) NOT NULL,
  `p_id` int(100) NOT NULL,
  `l_id` int(10) NOT NULL,
  `status` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_c_packages`
--

INSERT INTO `tbl_c_packages` (`t_id`, `p_id`, `l_id`, `status`) VALUES
(75, 15, 178, 1),
(79, 16, 175, 1),
(80, 15, 175, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE `tbl_doctor` (
  `d_id` int(100) NOT NULL,
  `a_id` int(5) NOT NULL,
  `l_id` int(11) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `d_address` varchar(100) NOT NULL,
  `d_fees` int(50) NOT NULL,
  `spec` varchar(100) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`d_id`, `a_id`, `l_id`, `d_name`, `d_address`, `d_fees`, `spec`, `status`) VALUES
(40, 2, 179, 'Dr France  ', ' Thottathil ', 1000, 'Baala Chikitsa ', 0),
(41, 2, 180, 'Foco   ', '   ', 1000, 'Baala Chikitsa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `f_id` int(100) NOT NULL,
  `fr_id` int(100) NOT NULL,
  `feedback` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`f_id`, `fr_id`, `feedback`) VALUES
(78, 119, 'test okay'),
(79, 121, 'Its all Good\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave`
--

CREATE TABLE `tbl_leave` (
  `lv_id` int(50) NOT NULL,
  `l_id` int(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  `fdate` varchar(30) NOT NULL,
  `tdate` varchar(30) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_leave`
--

INSERT INTO `tbl_leave` (`lv_id`, `l_id`, `type`, `fdate`, `tdate`, `reason`, `status`) VALUES
(21, 179, 'Sick', '2022-10-26', '2022-10-29', 'Feaver', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `l_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `code` varchar(100) NOT NULL,
  `verified` int(1) NOT NULL DEFAULT 0,
  `verify_token` varchar(100) NOT NULL,
  `a_id` int(5) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`l_id`, `email`, `password`, `code`, `verified`, `verify_token`, `a_id`, `status`) VALUES
(1, 'admin@gmail.com', '2bbc429b4ea1efbc2c78ff8a9c5403b8', '9b23033da15d3de425347579caf2f426', 1, '', 1, 0),
(175, 'abitmonrajancr7@gmail.com', '2bbc429b4ea1efbc2c78ff8a9c5403b8', '41c51f07c5549fa9a3600a1e44491acc', 1, '', 3, 0),
(178, 'abitmonrajan@gmail.com', '2bbc429b4ea1efbc2c78ff8a9c5403b8', '6cb9ebc26976a8a31d4eedd2f10852dc', 1, '', 3, 0),
(179, 'abitmonrajan@mca.ajce.in', '2bbc429b4ea1efbc2c78ff8a9c5403b8', '', 1, '', 2, 0),
(180, 'focosa8680@evilant.com', '2bbc429b4ea1efbc2c78ff8a9c5403b8', '', 1, '', 2, 0),
(181, 'pediv26627@corylan.com', '2bbc429b4ea1efbc2c78ff8a9c5403b8', 'fd63e2e6c2edfa100d6e8ed80c35b4e0', 1, '', 3, 0),
(182, 'maxisot384@ilusale.com', '2bbc429b4ea1efbc2c78ff8a9c5403b8', '5c98eff982cd9cd138a71e6303518423', 1, '', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_packages`
--

CREATE TABLE `tbl_packages` (
  `p_id` int(100) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_image` varchar(300) NOT NULL,
  `days` varchar(30) NOT NULL,
  `p_amount` varchar(30) NOT NULL,
  `p_status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_packages`
--

INSERT INTO `tbl_packages` (`p_id`, `p_name`, `p_image`, `days`, `p_amount`, `p_status`) VALUES
(15, 'lepam', 'lepam.png', '3 Days', '200', 0),
(16, 'Foot Massage', 'foot-massage,png.jpg', '3 Days', '900', 0),
(17, 'Karnapoornam', 'karnapooranam.png', '5 Days', '900', 0),
(18, 'Thalam', 'Thalam.png', '5 Days', '8000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient`
--

CREATE TABLE `tbl_patient` (
  `user_id` int(10) NOT NULL,
  `l_id` int(30) NOT NULL,
  `u_name` varchar(20) NOT NULL,
  `a_id` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `bloodgrp` varchar(5) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_patient`
--

INSERT INTO `tbl_patient` (`user_id`, `l_id`, `u_name`, `a_id`, `address`, `city`, `gender`, `dob`, `bloodgrp`, `status`) VALUES
(119, 175, 'amal', 3, 'mbn', 'km', 'male', '2002-12-31', 'A+ve', 0),
(120, 178, 'abit', 3, 'nbv', 'jbhgv', 'female', '2021-12-29', 'A+ve', 0),
(121, 181, 'Arun', 3, 'AJHJH', 'jhhjk', 'male', '2010-12-31', 'B+ve', 0),
(122, 182, 'Alen', 3, 'Jhb', 'kjnh', 'male', '2004-01-31', 'O+ve', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment_tbl`
--
ALTER TABLE `appoinment_tbl`
  ADD PRIMARY KEY (`appo_id`);

--
-- Indexes for table `doctor_timing_tbl`
--
ALTER TABLE `doctor_timing_tbl`
  ADD PRIMARY KEY (`time_id`),
  ADD KEY `time_log_id_fk` (`l_id`);

--
-- Indexes for table `payment_tbl`
--
ALTER TABLE `payment_tbl`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `tbl_c_packages`
--
ALTER TABLE `tbl_c_packages`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `l_id` (`l_id`);

--
-- Indexes for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `l_id` (`l_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `for_id` (`fr_id`);

--
-- Indexes for table `tbl_leave`
--
ALTER TABLE `tbl_leave`
  ADD PRIMARY KEY (`lv_id`),
  ADD KEY `d_id` (`l_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `tbl_packages`
--
ALTER TABLE `tbl_packages`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_login` (`l_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment_tbl`
--
ALTER TABLE `appoinment_tbl`
  MODIFY `appo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `doctor_timing_tbl`
--
ALTER TABLE `doctor_timing_tbl`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `payment_tbl`
--
ALTER TABLE `payment_tbl`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_c_packages`
--
ALTER TABLE `tbl_c_packages`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  MODIFY `d_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `f_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `tbl_leave`
--
ALTER TABLE `tbl_leave`
  MODIFY `lv_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `tbl_packages`
--
ALTER TABLE `tbl_packages`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor_timing_tbl`
--
ALTER TABLE `doctor_timing_tbl`
  ADD CONSTRAINT `time_log_id_fk` FOREIGN KEY (`l_id`) REFERENCES `tbl_login` (`l_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_c_packages`
--
ALTER TABLE `tbl_c_packages`
  ADD CONSTRAINT `l_id` FOREIGN KEY (`l_id`) REFERENCES `tbl_login` (`l_id`),
  ADD CONSTRAINT `p_id` FOREIGN KEY (`p_id`) REFERENCES `tbl_packages` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  ADD CONSTRAINT `tbl_doctor_ibfk_1` FOREIGN KEY (`l_id`) REFERENCES `tbl_login` (`l_id`);

--
-- Constraints for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD CONSTRAINT `for_id` FOREIGN KEY (`fr_id`) REFERENCES `tbl_patient` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_leave`
--
ALTER TABLE `tbl_leave`
  ADD CONSTRAINT `l_id_fk` FOREIGN KEY (`l_id`) REFERENCES `tbl_login` (`l_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  ADD CONSTRAINT `fk_login` FOREIGN KEY (`l_id`) REFERENCES `tbl_login` (`l_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
