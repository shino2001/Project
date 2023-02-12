-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 05:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simply`
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
(29, 14, 181, '2022-10-27 00:00:00', 'Token-5681e30f17', 'Body Pain', 0, 'test&#10;', 3),
(30, 16, 180, '2022-10-26 00:00:00', 'Token-b6433c90c8', 'faver', 0, '', 0),
(31, 15, 180, '2022-10-28 00:00:00', 'Token-f1c6ba93fa', 'pain', 0, '', 0),
(32, 14, 182, '2022-10-29 00:00:00', 'Token-4bfc0acdf5', 'head ache', 0, 'take rest &#10;', 3),
(33, 14, 175, '2022-10-26 00:00:00', 'Token-bc3c76e414', 'head ache', 0, '', 0),
(34, 16, 175, '2022-11-05 00:00:00', 'Token-ce1b7f14f6', 'pain', 1, 'Take rest', 3),
(35, 16, 175, '2022-10-27 00:00:00', 'Token-af416dedcf', 'as', 1, 'meet me', 3),
(36, 16, 184, '2023-02-08 00:00:00', 'Token-f7b5cc71d6', 'person', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `sno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `id_no` varchar(15) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `exp_date` varchar(20) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`sno`, `name`, `grade`, `id_no`, `email`, `phone`, `address`, `dob`, `date`, `exp_date`, `image`) VALUES
(722, 'Rishika Biswas', NULL, '2013020', 'rishi@gmail.com]', 'xxxxxxxxxx', 'Sector - 15, Noida', '2003-12-12', '2021-12-13 09:49:30', '2090-12-12', 'assets/uploads/images.jpg'),
(723, 'Coding Cush', NULL, '234567890876', 'codingcush@gmail.com]', '0123456789', 'New Delhi, India', '2021-12-22', '2021-12-14 10:48:54', '2023-03-15', 'assets/uploads/1623328813617.png'),
(724, 'ABY', NULL, '1222', 'abcd@gmail.com]', '0000000000', 'Anathadam,Ranni,Pathanamthitta,Kerala', '1111-11-11', '2023-02-09 11:42:22', '1111-11-11', 'assets/uploads/(1).png'),
(725, 'KEAM', NULL, '222', 'admin@gmail.com]', '0000000000', 'Anathadam,Ranni,Pathanamthitta,Kerala', '2333-02-11', '2023-02-09 11:44:09', '46666-03-12', 'assets/uploads/2.png'),
(726, 'geya', NULL, '123', 'shinovshibu@gmail.com]', '0000000000', 'Anathadam,Ranni,Pathanamthitta,Kerala', '2023-02-11', '2023-02-09 12:00:54', '2023-03-12', 'assets/uploads/');

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE `deductions` (
  `deduction_id` int(5) NOT NULL,
  `philhealth` int(20) NOT NULL,
  `bir` int(20) NOT NULL,
  `gsis` int(20) NOT NULL,
  `pag_ibig` int(20) NOT NULL,
  `loans` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deductions`
--

INSERT INTO `deductions` (`deduction_id`, `philhealth`, `bir`, `gsis`, `pag_ibig`, `loans`) VALUES
(1, 100, 20, 3, 4, 5);

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
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(10) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `emp_type` varchar(20) NOT NULL,
  `division` varchar(30) NOT NULL,
  `deduction` int(10) NOT NULL,
  `overtime` int(10) NOT NULL,
  `bonus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `overtime`
--

CREATE TABLE `overtime` (
  `ot_id` int(10) NOT NULL,
  `rate` int(10) NOT NULL,
  `none` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `overtime`
--

INSERT INTO `overtime` (`ot_id`, `rate`, `none`) VALUES
(1, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment_tbl`
--

CREATE TABLE `payment_tbl` (
  `pay_id` int(11) NOT NULL,
  `r_pay_id` varchar(250) NOT NULL,
  `r_order_id` varchar(250) NOT NULL,
  `appo_id` int(11) NOT NULL DEFAULT 0,
  `treament_id` int(11) DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_tbl`
--

INSERT INTO `payment_tbl` (`pay_id`, `r_pay_id`, `r_order_id`, `appo_id`, `treament_id`, `date`) VALUES
(25, 'pay_KYT6kxh3TVZ6Y6', 'order_KYT6VIjD1bK9Ty', 0, 90, '2022-10-26 01:06:30'),
(26, 'pay_KYTpPYFCta7jiX', 'order_KYTpDfJfsAG9EV', 35, 0, '2022-10-26 01:48:51'),
(27, 'pay_KYTryTqh7cL6Wk', 'order_KYTrkXbbtVjUsd', 0, 91, '2022-10-26 01:51:14'),
(28, 'pay_KYTsvdDaCruaaq', 'order_KYTsl2O9N8AQaF', 0, 92, '2022-10-26 01:52:11'),
(29, 'pay_KYc3e5yBDzJ2tV', 'order_KYc3IezIF3TzBa', 0, 93, '2022-10-26 21:51:43'),
(30, 'pay_KYjLInQsNfUKuo', 'order_KYjFksJuqHlpwt', 0, 94, '2022-10-27 04:54:22'),
(31, 'pay_LDBrOynfDQEHl1', 'order_LDBqxW7rqGf1ym', 0, 95, '2023-02-05 21:53:02');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `salary_id` int(10) NOT NULL,
  `salary_rate` int(10) NOT NULL,
  `none` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`salary_id`, `salary_rate`, `none`) VALUES
(1, 15000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `schedule_list`
--

CREATE TABLE `schedule_list` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule_list`
--

INSERT INTO `schedule_list` (`id`, `title`, `description`, `start_datetime`, `end_datetime`) VALUES
(1, 'Sample 101', 'This is a sample schedule only.', '2022-01-10 10:30:00', '2022-01-11 18:00:00'),
(2, 'Sample 102', 'Sample Description 102', '2022-01-08 09:30:00', '2022-01-08 11:30:00'),
(4, 'Sample 102', 'Sample Description', '2022-01-12 14:00:00', '2022-01-12 17:00:00'),
(6, 'ielts ', 'exam', '2023-02-08 05:27:00', '2023-02-09 15:22:00'),
(7, 'upsc', 'uu', '2023-02-27 09:35:00', '2023-02-27 13:39:00'),
(8, 'ielts', 'ielts', '2023-02-27 10:49:00', '2023-02-27 13:52:00'),
(11, 'upsc', 'upsc new batch starting', '2023-02-15 08:00:00', '2023-02-20 13:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_c_packages`
--

CREATE TABLE `tbl_c_packages` (
  `t_id` int(10) NOT NULL,
  `p_id` int(100) NOT NULL,
  `l_id` int(10) NOT NULL,
  `visit_date` date NOT NULL,
  `status` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_c_packages`
--

INSERT INTO `tbl_c_packages` (`t_id`, `p_id`, `l_id`, `visit_date`, `status`) VALUES
(90, 16, 175, '2022-10-29', 1),
(92, 17, 175, '2022-10-29', 1),
(93, 16, 181, '2022-11-05', 1),
(94, 18, 175, '2022-10-30', 1),
(95, 16, 184, '2023-02-07', 1);

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
(0, 0, 180, 'Foco   ', '   ', 1000, 'Baala Chikitsa', 0),
(40, 2, 179, 'Dr France  ', ' Thottathil ', 1000, 'Baala Chikitsa ', 0),
(42, 2, 183, 'ABY', '', 0, '', 0),
(43, 2, 185, 'Faizzy', '', 0, '', 0);

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
(21, 179, 'Sick', '2022-10-26', '2022-10-29', 'Feaver', 'Approved'),
(22, 179, 'Climatic Disaster ', '2022-10-28', '2022-10-30', 'kj', 'Pending');

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
(1, 'admin@gmail.com', '0e7517141fb53f21ee439b355b5a1d0a', '9b23033da15d3de425347579caf2f426', 1, '', 1, 0),
(175, 'abitmonrajancr7@gmail.com', '0e7517141fb53f21ee439b355b5a1d0a', '41c51f07c5549fa9a3600a1e44491acc', 1, '', 3, 0),
(178, 'abitmonrajan@gmail.com', '0e7517141fb53f21ee439b355b5a1d0a', '6cb9ebc26976a8a31d4eedd2f10852dc', 1, '', 3, 0),
(179, 'abitmonrajan@mca.ajce.in', '0e7517141fb53f21ee439b355b5a1d0a', '', 1, '', 2, 0),
(180, 'focosa8680@evilant.com', '0e7517141fb53f21ee439b355b5a1d0a', '', 1, '', 2, 0),
(181, 'pediv26627@corylan.com', '0e7517141fb53f21ee439b355b5a1d0a', 'fd63e2e6c2edfa100d6e8ed80c35b4e0', 1, '', 3, 0),
(182, 'maxisot384@ilusale.com', '0e7517141fb53f21ee439b355b5a1d0a', '5c98eff982cd9cd138a71e6303518423', 1, '', 3, 0),
(183, 'sogynuxy@brand-app.biz', '0e7517141fb53f21ee439b355b5a1d0a', '', 1, '', 2, 0),
(184, 'shinovshibu01@gmail.com', '0e7517141fb53f21ee439b355b5a1d0a', '479d68ea7764a92940abe3ad3146f522', 1, '', 3, 0),
(185, 'shinovshibu@gmail.com', '0e7517141fb53f21ee439b355b5a1d0a', '', 1, '', 2, 0),
(186, 'anitjames@amaljyothi.ac.in', 'd2d074bfafeb68a438d32090190f651e', 'c347b7774ed357d4600d3bb50a24fa58', 0, '', 3, 1);

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
(16, 'NEET    ', '2.jpg', '30days  ', '9000    rs', 0),
(17, 'UPSC ', '3.png', '50 Days  ', '19000  rs', 0),
(18, 'PSC ', '1.jpg', '25 Days  ', '8000 rs', 0),
(19, 'KEAM ', 'keam.jpg', '30 Days  ', '15000 rs', 0),
(20, 'NDA ', 'NDA_Exam_Nexamps.jpg', '25 Days  ', '12000 rs', 0);

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
  `gender` varchar(30) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `bloodgrp` varchar(50) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_patient`
--

INSERT INTO `tbl_patient` (`user_id`, `l_id`, `u_name`, `a_id`, `address`, `city`, `gender`, `dob`, `bloodgrp`, `status`) VALUES
(119, 175, 'amal', 3, 'mbn', 'km', 'male', '2002-12-31', 'Student', 0),
(120, 178, 'abit', 3, 'nbv', 'jbhgv', 'female', '2021-12-29', 'self-employed', 0),
(121, 181, 'Arun', 3, 'AJHJH', 'jhhjk', 'male', '2010-12-31', 'self-employed', 0),
(122, 182, 'Alen', 3, 'Jhb', 'kjnh', 'male', '2004-01-31', 'self-employed', 0),
(123, 184, 'Shino V Shibu ', 3, 'Vazhayil  ', ' pathanamthitta', 'male', '2001-04-29', 'Student', 0),
(124, 186, 'Anit', 3, 'gfghjk', 'bjhghf', 'others', '2022-09-15', 'self-employed', 1);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(6) NOT NULL,
  `day` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `from` time(6) NOT NULL,
  `to` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `day`, `batch`, `subject`, `teacher`, `from`, `to`) VALUES
(24, 'Monday', 'Plus one', 'Chemistry', 'blesson', '09:00:00.000000', '12:00:00.000000'),
(25, 'Tuesday', 'Plus one', 'Physics', 'alen', '09:00:00.000000', '12:00:00.000000'),
(26, 'Wednesday', 'Plus one', 'Biology', 'ashwathy', '09:00:00.000000', '12:00:00.000000'),
(27, 'Thursday', 'Plus one', 'Maths', 'binu', '09:00:00.000000', '12:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `fname`, `name`) VALUES
(1, '20230210064936_CRYPTO A2.pdf', 'CRYPTO A2.pdf'),
(2, '20230210065507_PYTHON A3.pdf', 'PYTHON A3.pdf'),
(3, '20230210070152_CLOUD A3.pdf', 'CLOUD A3.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment_tbl`
--
ALTER TABLE `appoinment_tbl`
  ADD PRIMARY KEY (`appo_id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `deductions`
--
ALTER TABLE `deductions`
  ADD PRIMARY KEY (`deduction_id`);

--
-- Indexes for table `doctor_timing_tbl`
--
ALTER TABLE `doctor_timing_tbl`
  ADD PRIMARY KEY (`time_id`),
  ADD KEY `time_log_id_fk` (`l_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `overtime`
--
ALTER TABLE `overtime`
  ADD PRIMARY KEY (`ot_id`);

--
-- Indexes for table `payment_tbl`
--
ALTER TABLE `payment_tbl`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salary_id`);

--
-- Indexes for table `schedule_list`
--
ALTER TABLE `schedule_list`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment_tbl`
--
ALTER TABLE `appoinment_tbl`
  MODIFY `appo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=727;

--
-- AUTO_INCREMENT for table `deductions`
--
ALTER TABLE `deductions`
  MODIFY `deduction_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor_timing_tbl`
--
ALTER TABLE `doctor_timing_tbl`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `overtime`
--
ALTER TABLE `overtime`
  MODIFY `ot_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_tbl`
--
ALTER TABLE `payment_tbl`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `salary_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedule_list`
--
ALTER TABLE `schedule_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_c_packages`
--
ALTER TABLE `tbl_c_packages`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  MODIFY `d_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `f_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `tbl_leave`
--
ALTER TABLE `tbl_leave`
  MODIFY `lv_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `tbl_packages`
--
ALTER TABLE `tbl_packages`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  ADD CONSTRAINT `fk_login` FOREIGN KEY (`l_id`) REFERENCES `tbl_login` (`l_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
