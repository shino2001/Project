-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 10:12 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

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
(19, 4, 160, '2022-10-24 00:00:00', 'Token-13516e7e21', 'dsfsdfdsf', 0, 'success', 3),
(20, 4, 160, '2022-10-24 00:00:00', 'Token-fe157ce004', 'xfsgfdsg', 0, '', 0),
(21, 4, 160, '2022-10-24 00:00:00', 'Token-76f0161554', 'sdfdsf', 0, 'testsdfdsfsdfsdfs', 3),
(22, 4, 160, '2022-10-24 00:00:00', 'Token-1b6aa332a0', 'sdfsdf', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0);

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
(3, 25, '17:51', '18:51', 1),
(4, 22, '10:03', '12:08', 1),
(5, 160, '10:42', '11:42', 1),
(8, 160, '10:50', '12:50', 1);

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
(1, 0, 0, 6, '2022-10-22 02:15:10'),
(2, 0, 0, 6, '2022-10-22 02:15:10'),
(3, 0, 0, 6, '2022-10-22 02:16:01'),
(4, 0, 0, 6, '2022-10-22 02:20:11'),
(5, 0, 0, 6, '2022-10-22 02:20:11'),
(6, 0, 0, 6, '2022-10-22 02:20:11'),
(7, 0, 0, 6, '2022-10-22 02:20:11'),
(8, 0, 0, 6, '2022-10-22 02:20:11'),
(9, 0, 0, 6, '2022-10-22 02:20:11'),
(10, 0, 0, 6, '2022-10-22 02:25:39'),
(11, 0, 0, 22, '2022-10-23 04:49:11');

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
(70, 1, 160, 1);

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
(19, 2, 22, 'drabit  asd ', 'Thottathil  dfsdfsdfdsfds    ', 152, 'Kayachikits  ', 0),
(20, 2, 25, 'drrabit', 'kidangil', 122, 'Shalakya Tantra', 1),
(21, 2, 26, 'draml', 'Pattel', 200, 'Baala Chikitsa', 0),
(22, 2, 27, 'drakhi', 'Palathunkal', 122, 'Urdhvanga Chikitsa', 0),
(23, 2, 28, 'draby', 'mullasheriyil', 200, 'Baala Chikitsa', 0),
(24, 2, 35, 'jjj', 'Mannel', 12222, 'Shalakya Tantra', 0),
(25, 2, 36, 'drabit', 'charivukalayilllll ', 12222, 'Kayachikits', 0),
(26, 2, 37, ' Raju', 'Anchariyil', 1000, 'Urdhvanga Chikitsa', 0),
(27, 2, 151, ' DR Hari', 'Altharackal', 1999, 'Baala Chikitsa', 0),
(28, 2, 156, '', '', 0, '', 0),
(29, 2, 161, '', '', 0, '', 0),
(30, 2, 162, '', '', 0, '', 0),
(31, 2, 163, '', '', 0, '', 0),
(32, 2, 164, '', '', 0, '', 0),
(33, 2, 165, 'Dr Merli', '', 0, '', 0),
(34, 2, 167, 'DR ABIT', '', 0, '', 0),
(35, 2, 168, 'drrrr', '', 0, '', 0);

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
(49, 48, 'hai'),
(50, 46, 'hai'),
(51, 46, 'Good'),
(52, 46, 'Bad Expirence'),
(53, 46, 'hai i am abit'),
(54, 46, 'hai'),
(55, 46, 'Good'),
(56, 46, 'Bad'),
(57, 46, 'Good'),
(58, 113, 'fcgvb'),
(60, 113, 'cxvxcvxcvxcv'),
(61, 113, 'cxvxcvxcvxcv'),
(62, 113, 'cxvxcvxcvxcv'),
(63, 113, 'dfsgsdfsdf'),
(64, 113, 'thisis for testong');

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
(17, 22, 'Sick', '2022-10-25', '2022-10-25', 'sdfsdfsdf', 'Rejected'),
(18, 22, 'Sick', '2022-10-27', '2022-10-27', 'dfsjdfhkjsdhfjk', 'Pending');

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
(1, 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad', '', 1, '', 1, 0),
(21, 'abit@gmail.com', '25d55ad283aa400af464c76d713c07ad', '', 1, '', 3, 0),
(22, 'drabit@gmail.com', '25d55ad283aa400af464c76d713c07ad', '', 1, '', 2, 0),
(23, 'amal@gmail.com', '2bbc429b4ea1efbc2c78ff8a9c5403b8', '', 1, '', 3, 0),
(24, 'aby@gmail.com', '2bbc429b4ea1efbc2c78ff8a9c5403b8', '', 1, '', 3, 0),
(25, 'drr@gmail.com', '25d55ad283aa400af464c76d713c07ad', '', 1, '', 2, 0),
(26, 'dramal@gmail.com', '2bbc429b4ea1efbc2c78ff8a9c5403b8', '', 1, '', 2, 0),
(27, 'drak@gmail.com', '2bbc429b4ea1efbc2c78ff8a9c5403b8', '', 1, '', 2, 0),
(28, 'draby@gmail.com', '2bbc429b4ea1efbc2c78ff8a9c5403b8', '', 1, '', 2, 0),
(29, 'sandeep@gmail.com', '2bbc429b4ea1efbc2c78ff8a9c5403b8', '', 1, '', 3, 0),
(35, 'j1@gmail.com', '2bbc429b4ea1efbc2c78ff8a9c5403b8', '', 1, '', 2, 0),
(36, 'tt2@gmail.com', '2bbc429b4ea1efbc2c78ff8a9c5403b8', '', 1, '', 2, 0),
(37, 'raju@gmail.com', '2bbc429b4ea1efbc2c78ff8a9c5403b8', '', 1, '', 2, 0),
(139, 'robit@gmail.com', '2bbc429b4ea1efbc2c78ff8a9c5403b8', 'f63a865d2b38f26a320ed71c80844824', 1, '', 3, 0),
(144, 'abcd@gmail.com', '2bbc429b4ea1efbc2c78ff8a9c5403b8', '081d9a0010333f7738f703671994b577', 1, '', 3, 0),
(151, 'drhari@gmail.com', '2bbc429b4ea1efbc2c78ff8a9c5403b8', '50796fa2e56f35bdb8302af63799945f', 1, '', 2, 0),
(156, 'abitmonrajan@mca.ajce.in', '25d55ad283aa400af464c76d713c07ad', '659d3b2f6367e59c3a87633e438cc353', 1, '', 2, 0),
(159, 'abitmoajancr7@gmail.com', '2bbc429b4ea1efbc2c78ff8a9c5403b8', '27e7f613e814ddb22d04cf40266fedaa', 1, '', 3, 0),
(160, 'abitmonrjan@gmail.com', '25d55ad283aa400af464c76d713c07ad', '25ad818e6916744d8aa1d2da5613c08f', 1, '', 3, 0),
(161, 'abitmonrajancr7@gmail.c', '1729792565', '', 1, '', 2, 0),
(162, 'abitmonrajancr7@g', '25d55ad283aa400af464c76d713c07ad', '', 1, '', 3, 0),
(163, 'monrajancr7@gmail.com', '9c6cd8a59264c82d3f84537432fa8cca', '', 1, '', 2, 0),
(164, 'abitmncr7@gmail.com', 'da2d7ff64a12c53f0233acbbcd69b7ca', '', 1, '', 2, 0),
(165, 'merlinmoncy07@gmail.com', 'eb6096dd0615c803d206e271646c1dac', '', 1, '', 2, 0),
(166, 'abitmonrajan@gmail.com', '251800da8d338eb82819105d5f3c7629', 'afe510cb1555fb770a2812f1442538cb', 1, '', 3, 0),
(167, 'ncr7@gmail.com', '9d0e0fd31ab16a1ee9e828dea62bbf6c', '', 1, '', 2, 0),
(168, 'abitmonrajancr7@gmail.com', '26b95d579d4ae474b9a65e0544a25f2a', '', 1, '', 2, 0);

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
(1, 'foot massage   ', 'foot-massage,png.jpg', ' 5 Days   ', '210 RS     ', 1),
(2, ' Thalam', 'Thalam.png', ' 2days', ' 67 Rs', 0),
(3, ' Lepam', 'lepam.png', ' 5 Days', ' 67 Rs', 0),
(4, ' Nasya', 'nasya.png', ' 45', ' 300', 0),
(5, 'sirovasthi', 'sirovasthi.png', '30 Days', '5000 Rs', 0),
(7, 'karnapooranam', 'karnapooranam.png', '8 Days', '900 Rs', 0),
(10, 'Immunisation', 't6.jpg', '30days', '220', 0),
(11, 'araving packages ', 'Thalam.png', '2Days ', '200 ', 0),
(12, 'raving packages', 'foot-massage,png.jpg', '30days', '678', 0);

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
(46, 21, 'Abit', 3, 'Charivukalayil   ', 'Pathanamthitta', 'male', '1999-09-09', 'B+ve', 0),
(47, 23, 'Amal', 3, 'Thottathil', 'Kanjirapally', 'male', '1999-09-09', 'A+ve', 0),
(48, 24, 'Aby Jose', 3, 'Pattel', 'Ranny', 'male', '1000-01-01', 'A+ve', 1),
(49, 29, 'sandeep', 3, 'koovapalyy             ', 'kanjirapally', 'male', '2000-01-01', 'B-ve', 0),
(99, 139, 'robit', 3, 'Maliackal', 'Ranny', 'male', '2002-12-09', 'B+ve', 0),
(112, 159, 'ajb', 3, 'mnsk', 'fsaefd', 'male', '1999-09-09', 'A+ve', 0),
(113, 160, 'TEst user', 3, 'M ', '  mallapally', 'female', '2000-09-26', 'AB+ve', 0),
(114, 166, 'knbsjd', 3, 'kmnjbhv', 'kjbhvg', 'female', '2022-09-06', 'AB+ve', 0);

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
  MODIFY `appo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `doctor_timing_tbl`
--
ALTER TABLE `doctor_timing_tbl`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment_tbl`
--
ALTER TABLE `payment_tbl`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_c_packages`
--
ALTER TABLE `tbl_c_packages`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  MODIFY `d_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `f_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tbl_leave`
--
ALTER TABLE `tbl_leave`
  MODIFY `lv_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `tbl_packages`
--
ALTER TABLE `tbl_packages`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

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
