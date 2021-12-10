-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 01:31 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goldencresentfx`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(100) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `contact` int(100) NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Dept_id` varchar(10) NOT NULL,
  `employee_id` varchar(10) NOT NULL,
  `Deptname` varchar(50) DEFAULT NULL,
  `Deptcapacity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Dept_id`, `employee_id`, `Deptname`, `Deptcapacity`) VALUES
('Dept01', 'EM001', 'Finance', 15),
('Dept02', 'EM002', 'Registration', 15),
('Dept03', 'EM003', 'Training Academy', 15),
('Dept04', 'EM004', 'Registration', 15),
('Dept05', 'EM005', 'Finance', 15);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` varchar(10) NOT NULL,
  `Assigned_package` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `Assigned_package`) VALUES
('EM001', 'Training Academy'),
('EM0010', 'Vip Group'),
('EM002', 'Vip Group'),
('EM003', 'Signals Copier'),
('EM004', 'Training Academy'),
('EM005', 'Vip Group'),
('EM006', 'Training Academy'),
('EM007', 'Vip Group'),
('EM008', 'Signals Copier'),
('EM009', 'Training Academy');

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `Finance_ID` varchar(10) NOT NULL,
  `total_subscriptioncapacity` int(11) DEFAULT NULL,
  `subscription_period` varchar(10) DEFAULT NULL,
  `Account_total` float DEFAULT NULL,
  `revenue_generated` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`Finance_ID`, `total_subscriptioncapacity`, `subscription_period`, `Account_total`, `revenue_generated`) VALUES
('F001', 40, '1 Month', 100, 200),
('F0010', 150, '10 Month', 500, 1600),
('F002', 60, '2 Month', 500, 300),
('F003', 70, '3 Month', 500, 600),
('F004', 70, '4 Month', 500, 800),
('F005', 110, '5 Month', 500, 1000),
('F006', 120, '6 Month', 500, 1000),
('F007', 120, '7 Month', 500, 12000),
('F008', 130, '8 Month', 500, 1000),
('F009', 140, '9 Month', 500, 1300);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `membership_id` int(11) NOT NULL,
  `subcription_package` varchar(50) DEFAULT NULL,
  `payment_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`membership_id`, `subcription_package`, `payment_id`) VALUES
(1, 'TrainingAcademy', 'P001'),
(2, 'VIP Group', 'P002'),
(3, 'Signals Copier', 'P003'),
(4, 'Signales Copier', 'P004'),
(5, 'TrainingAcademy', 'P005'),
(6, 'TrainingAcademy', 'P006'),
(7, 'VIP Group', 'P007'),
(8, 'Signals Copier', 'P008'),
(9, 'Signales Copier', 'P009'),
(10, 'TrainingAcademy', 'P010');

-- --------------------------------------------------------

--
-- Table structure for table `operations`
--

CREATE TABLE `operations` (
  `employee_id` varchar(10) NOT NULL,
  `package_id` varchar(10) DEFAULT NULL,
  `Operations_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(100) NOT NULL,
  `accountdetails` varchar(225) NOT NULL,
  `phone` int(100) NOT NULL,
  `service` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `accountdetails`, `phone`, `service`) VALUES
(1, '', 544262308, ''),
(2, 'USD1234579089', 544262308, 'Courses'),
(3, '0242766730', 242766730, 'Courses'),
(4, 'USD123457908932', 242766730, 'VIP COPIER'),
(5, 'USD1234579089', 242766730, 'Courses'),
(6, 'USD1234579089', 544262308, 'Courses'),
(7, 'USD1234579089', 544262308, 'Courses'),
(8, 'USD1234579089', 544262308, 'Courses'),
(9, 'USD1234579089', 544262308, 'Courses'),
(10, 'USD1234579089', 544262308, 'VIP COPIER'),
(11, 'USD1234579089', 242766730, 'Courses'),
(12, 'USD1234579089', 544262301, 'Courses'),
(13, 'USD1234579089', 544262308, 'VIP COPIER'),
(14, 'USD1234579089', 242766730, 'Courses'),
(15, 'USD1234579089', 544262308, 'Courses'),
(16, 'USD1234579089', 544262308, 'Courses'),
(21, '', 0, ''),
(22, 'USD123456780987', 544262308, 'VIP COPIER'),
(23, 'USD123456780987', 544262308, 'signals'),
(24, 'USD123456780987', 544262308, 'signals'),
(25, 'USD123456780987', 544262308, 'Courses'),
(26, 'USD123456780987', 242766730, 'Courses'),
(27, 'USD123456780987', 544262301, 'signals'),
(28, 'USD123456780987', 242766730, 'VIP COPIER'),
(29, 'USD123456780987', 242766730, 'VIP COPIER'),
(30, 'USD123456780987', 544262308, 'Courses'),
(31, 'USD123456780987', 544262308, 'Courses'),
(32, 'USD123456780987', 544262308, 'Courses'),
(33, 'USD123456780987', 544262301, 'signals'),
(34, 'USD123456780987', 544262301, 'signals'),
(35, 'USD123456780987', 544262308, 'Courses'),
(37, 'USD123456780987', 242766730, 'signals'),
(40, 'USD123456780987', 544262308, 'Courses'),
(41, 'USD123456780987', 544262308, 'Courses'),
(43, 'USD123456780987', 2147483647, 'signals'),
(44, 'USD123456780987', 2147483647, 'signals'),
(45, 'USD123456780987', 544262308, 'signals'),
(46, 'USD123456780987', 544262301, 'Courses'),
(47, 'USD123456780987', 242766730, 'Courses'),
(48, 'USD123456780987', 242766730, 'Courses'),
(49, 'USD123456780987', 242766730, 'signals'),
(50, 'USD123456780987', 242766730, 'signals'),
(51, 'USD123456780987', 544262308, 'signals'),
(52, 'USD123456780987', 544262308, 'signals'),
(53, 'USD123456780987', 544262308, 'signals'),
(54, 'USD123456780987', 544262308, 'signals'),
(55, 'USD123456780987', 544262308, 'signals'),
(56, 'USD123456780987', 544262308, 'Courses'),
(57, 'USD123456780987', 544262308, 'Courses'),
(58, 'USD123456780987', 544262308, 'Courses'),
(59, 'USD123456780987', 544262308, 'Courses'),
(60, 'USD123456780987', 544262308, 'Courses'),
(61, 'USD123456780987', 544262308, 'Courses'),
(62, 'USD123456780987', 544262308, 'Courses'),
(63, 'USD123456780987', 544262308, 'Courses'),
(64, 'USD123456780987', 242766730, 'VIP COPIER'),
(65, 'USD123456780987', 544262301, 'signals'),
(66, 'USD123456780987', 544262301, 'signals'),
(67, 'USD123456780987', 544262308, 'Courses'),
(68, 'USD123456780987', 544262308, 'Courses'),
(69, 'USD123456780987', 544262308, 'Courses'),
(70, 'USD123456780987', 544262308, 'Courses'),
(71, 'USD123456780987', 544262308, 'Courses'),
(72, 'USD123456780987', 544262308, 'Courses'),
(73, 'USD123456780987', 544262308, 'Courses'),
(74, 'USD123456780987', 544262308, 'Courses'),
(75, 'USD123456780987', 544262308, 'Courses'),
(76, 'USD123456780987', 544262308, 'Courses'),
(77, 'USD123456780987', 544262308, 'Courses'),
(78, 'USD123456780987', 242766730, 'VIP COPIER'),
(79, 'USD123456780987', 242766730, 'VIP COPIER'),
(80, 'USD123456780987', 242766730, 'VIP COPIER'),
(81, 'USD123456780987', 544262308, 'Courses'),
(82, 'USD123456780987', 2147483647, 'Courses'),
(83, 'USD123456780987', 2147483647, 'Courses'),
(84, 'USD123456780987', 2147483647, 'Courses'),
(85, 'USD123456780987', 2147483647, 'Courses'),
(86, 'USD123456780987', 2147483647, 'Courses'),
(87, 'USD123456780987', 2147483647, 'signals'),
(88, 'USD123456780987', 2147483647, 'VIP COPIER'),
(89, 'USD123456780987', 2147483647, 'VIP COPIER'),
(90, 'USD123456780987', 2147483647, 'signals'),
(91, 'USD123456780987', 2147483647, 'Courses'),
(92, 'USD123456780987', 2147483647, 'Courses'),
(93, 'USD123456780987', 2147483647, 'VIP COPIER'),
(94, 'USD123456780987', 544262308, 'Courses'),
(95, 'USD123456780987', 544262308, 'Courses'),
(96, 'USD123456780987', 2147483647, 'Courses'),
(97, 'USD123456780987', 243567890, 'VIP COPIER'),
(98, 'USD123456780987', 987654321, 'Courses'),
(99, 'USD123456780987', 987654321, 'Courses'),
(100, 'USD123456780987', 876543251, 'Courses'),
(101, 'USD123456780987', 876543251, 'Courses'),
(102, 'USD123456780987', 246789011, 'signals'),
(103, 'USD123456780987', 234567891, 'Courses'),
(104, 'USD123456780987', 235678901, 'signals');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `person_id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `contact` varchar(12) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`person_id`, `fname`, `lname`, `contact`, `email`, `message`) VALUES
(1, 'Bright', 'Augustt', '0246789023', 'BrightAugustt@gmail.com', ''),
(2, 'Samuel', 'Asamoah', '0546789403', 'SamuelAsamoah@gmail.com', ''),
(3, 'Chris', 'Daniels', '05524789122', 'ChrisDaniels@gmail.com', ''),
(4, 'Samson', 'Jackson', '0267851264', 'SamsonJackson@gmail.com', ''),
(5, 'Samuella', 'Smith', '0247895476', 'SamuellaSmith@gmail.com', ''),
(6, 'Chris', 'Augustt', '0544568791', 'christ.augustt@ashesi.edu.gh', ''),
(7, 'Chris', 'Smith', '0544262308', 'Chris.Smith@ashesi.edu.gh', ''),
(8, 'Chris', 'Smith', '0544262308', 'Chris.Smith@ashesi.edu.gh', ''),
(9, NULL, NULL, NULL, '', ''),
(10, 'Chris', 'Smith', 'Chris Smith', 'Chris.Smith@ashesi.edu.gh', ''),
(11, 'Bright', 'Augustt', '05444235789', 'BrightAppiahAugustt@gmail.com', NULL),
(13, NULL, NULL, NULL, 'Chris.Smith@ashesi.edu.gh', NULL),
(14, 'Elijah', 'Samuels', '09875445767', 'Elijah.Samuel@ashesi.edu.gh', 'Can you provide more information to how your services work entirely.'),
(15, 'Bright', 'Augustt', '0544789124', 'BrightAppiahAugustt@gmail.com', 'sure'),
(16, 'Chris', 'Smith', '0544262308', 'Chris.Smith@ashesi.edu.gh', 'sure'),
(17, 'Chris', 'Smith', '0544262308', 'Chris.Smith@ashesi.edu.gh', 'sure'),
(18, 'Samuel', 'Arthur', '09875445767', 'samuel.arthur@gmail.com', 'How long do i have to be in the training class'),
(19, NULL, NULL, NULL, 'samuel.arthur@gmail.com', NULL),
(20, 'Samuel Arthur', NULL, '0544262301', 'samuel.arthur@gmail.com', NULL),
(21, 'Bright Augustt', NULL, '0544262308', 'BrightAppiahAugustt@gmail.com', NULL),
(22, 'saintsmith', NULL, '0544262301', 'bright.augustt@ashesi.edu.gh', NULL),
(23, 'Veron', 'Appiah', '09875445767', 'VeronAppiah@gmail.com', 'Wow'),
(24, 'Veron', 'Chris', '0544262308', 'VeronAugustt@gmail.com', 'WOw'),
(25, 'Veron Appiah', NULL, '0544262308', 'VeronAppiah@gmail.com', NULL),
(26, 'Veron Chris', NULL, '0544262308', 'VeronAugustt@gmail.com', NULL),
(27, 'Samuel Arthur', NULL, '0544262301', 'samuel.arthur@gmail.com', NULL),
(28, 'saintsmith', NULL, '0544262301', 'bright.augustt@ashesi.edu.gh', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Registration_id` varchar(10) NOT NULL,
  `employee_id` varchar(10) NOT NULL,
  `Number_registered` int(11) DEFAULT NULL,
  `Registration_fee` float DEFAULT NULL,
  `subscription_period` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Registration_id`, `employee_id`, `Number_registered`, `Registration_fee`, `subscription_period`) VALUES
('RM01', 'EM001', 40, 10, '1 Month'),
('RM010', 'EM0010', 150, 10, '10 Month'),
('RM02', 'EM002', 60, 10, '2 Month'),
('RM03', 'EM003', 70, 10, '3 Month'),
('RM04', 'EM004', 70, 10, '4 Month'),
('RM05', 'EM005', 110, 10, '5 Month'),
('RM06', 'EM006', 120, 10, '6 Month'),
('RM07', 'EM007', 120, 10, '7 Month'),
('RM08', 'EM008', 130, 10, '8 Month'),
('RM09', 'EM009', 140, 10, '9 Month');

-- --------------------------------------------------------

--
-- Table structure for table `scopier`
--

CREATE TABLE `scopier` (
  `id` int(100) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `contact` int(100) NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signalcopier`
--

CREATE TABLE `signalcopier` (
  `membership_id` int(11) DEFAULT NULL,
  `lotsize` float DEFAULT NULL,
  `connected_accounts` int(11) DEFAULT NULL,
  `SC_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signalcopier`
--

INSERT INTO `signalcopier` (`membership_id`, `lotsize`, `connected_accounts`, `SC_id`) VALUES
(1, 0.01, 1, 'SC01'),
(10, 0.01, 1, 'SC010'),
(2, 0.01, 1, 'SC02'),
(3, 0.01, 2, 'SC03'),
(4, 0.01, 1, 'SC04'),
(5, 0.02, 1, 'SC05'),
(6, 0.01, 1, 'SC06'),
(7, 0.01, 1, 'SC07'),
(8, 0.01, 1, 'SC08'),
(9, 0.01, 1, 'SC09');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptionpackage`
--

CREATE TABLE `subscriptionpackage` (
  `packagename` varchar(50) DEFAULT NULL,
  `package_id` varchar(10) NOT NULL,
  `packagefee` float DEFAULT NULL,
  `Subscription_members` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscriptionpackage`
--

INSERT INTO `subscriptionpackage` (`packagename`, `package_id`, `packagefee`, `Subscription_members`) VALUES
('Signal Copier', 'SA00', 50, 15),
('Signal Copier', 'SSA00', 50, 15),
('Training Academy', 'TAA01', 50, 15),
('Training Academy', 'Tas00', 50, 15),
('VIP GROUP', 'VG00', 50, 15);

-- --------------------------------------------------------

--
-- Table structure for table `trainingacademy`
--

CREATE TABLE `trainingacademy` (
  `membership_id` int(11) DEFAULT NULL,
  `tradespcialist` int(11) DEFAULT NULL,
  `Training_id` varchar(10) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `contact` int(50) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainingacademy`
--

INSERT INTO `trainingacademy` (`membership_id`, `tradespcialist`, `Training_id`, `fname`, `contact`, `email`) VALUES
(NULL, NULL, '', 'Chris Smith', 544262308, 'Chris.Smith@ashesi.edu.gh'),
(1, 3, 'TA01', NULL, NULL, NULL),
(2, 5, 'TA02', NULL, NULL, NULL),
(3, 4, 'TA03', NULL, NULL, NULL),
(4, 3, 'TA04', NULL, NULL, NULL),
(5, 1, 'TA05', NULL, NULL, NULL),
(6, 4, 'TA06', NULL, NULL, NULL),
(7, 5, 'TA07', NULL, NULL, NULL),
(NULL, NULL, 'TA23', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vgroup`
--

CREATE TABLE `vgroup` (
  `id` int(100) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `contact` int(100) NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vgroup`
--

INSERT INTO `vgroup` (`id`, `fname`, `contact`, `email`) VALUES
(1, 'Chris Smith', 544262308, 'Chris.Smith@ashesi.edu.gh'),
(2, 'saintsmith', 544262301, 'bright.augustt@ashesi.edu.gh'),
(3, 'Veron Chris', 544262308, 'VeronAugustt@gmail.com'),
(4, 'Bright Augustt', 544262308, 'BrightAppiahAugustt@gmail.com'),
(5, 'Chris Smith', 544262308, 'Chris.Smith@ashesi.edu.gh'),
(6, 'saintsmith', 544262301, 'bright.augustt@ashesi.edu.gh');

-- --------------------------------------------------------

--
-- Table structure for table `vipgroup`
--

CREATE TABLE `vipgroup` (
  `membership_id` int(11) DEFAULT NULL,
  `accountsize` float DEFAULT NULL,
  `VIP_id` varchar(10) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `contact` int(50) NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vipgroup`
--

INSERT INTO `vipgroup` (`membership_id`, `accountsize`, `VIP_id`, `fname`, `contact`, `email`) VALUES
(1, 200, 'VP01', '', 0, ''),
(10, 100, 'VP010', '', 0, ''),
(2, 200, 'VP02', '', 0, ''),
(3, 50, 'VP03', '', 0, ''),
(4, 100, 'VP04', '', 0, ''),
(5, 120, 'VP05', '', 0, ''),
(6, 90, 'VP06', '', 0, ''),
(7, 60, 'VP07', '', 0, ''),
(8, 100, 'VP08', '', 0, ''),
(9, 200, 'VP09', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `weeklytradereport`
--

CREATE TABLE `weeklytradereport` (
  `membership_id` int(11) NOT NULL,
  `Week_ID` int(11) NOT NULL,
  `Report` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Dept_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`Finance_ID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`membership_id`);

--
-- Indexes for table `operations`
--
ALTER TABLE `operations`
  ADD PRIMARY KEY (`Operations_id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`person_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Registration_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `scopier`
--
ALTER TABLE `scopier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signalcopier`
--
ALTER TABLE `signalcopier`
  ADD PRIMARY KEY (`SC_id`),
  ADD KEY `membership_id` (`membership_id`);

--
-- Indexes for table `subscriptionpackage`
--
ALTER TABLE `subscriptionpackage`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `trainingacademy`
--
ALTER TABLE `trainingacademy`
  ADD PRIMARY KEY (`Training_id`),
  ADD KEY `membership_id` (`membership_id`);

--
-- Indexes for table `vgroup`
--
ALTER TABLE `vgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vipgroup`
--
ALTER TABLE `vipgroup`
  ADD PRIMARY KEY (`VIP_id`),
  ADD KEY `membership_id` (`membership_id`);

--
-- Indexes for table `weeklytradereport`
--
ALTER TABLE `weeklytradereport`
  ADD PRIMARY KEY (`Week_ID`),
  ADD KEY `membership_id` (`membership_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `scopier`
--
ALTER TABLE `scopier`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vgroup`
--
ALTER TABLE `vgroup`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`);

--
-- Constraints for table `operations`
--
ALTER TABLE `operations`
  ADD CONSTRAINT `operations_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`),
  ADD CONSTRAINT `operations_ibfk_2` FOREIGN KEY (`package_id`) REFERENCES `subscriptionpackage` (`package_id`);

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`);

--
-- Constraints for table `signalcopier`
--
ALTER TABLE `signalcopier`
  ADD CONSTRAINT `signalcopier_ibfk_1` FOREIGN KEY (`membership_id`) REFERENCES `members` (`membership_id`);

--
-- Constraints for table `trainingacademy`
--
ALTER TABLE `trainingacademy`
  ADD CONSTRAINT `trainingacademy_ibfk_1` FOREIGN KEY (`membership_id`) REFERENCES `members` (`membership_id`);

--
-- Constraints for table `vipgroup`
--
ALTER TABLE `vipgroup`
  ADD CONSTRAINT `vipgroup_ibfk_1` FOREIGN KEY (`membership_id`) REFERENCES `members` (`membership_id`);

--
-- Constraints for table `weeklytradereport`
--
ALTER TABLE `weeklytradereport`
  ADD CONSTRAINT `weeklytradereport_ibfk_1` FOREIGN KEY (`membership_id`) REFERENCES `members` (`membership_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
