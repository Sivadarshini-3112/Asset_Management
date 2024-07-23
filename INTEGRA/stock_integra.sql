-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 04:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock_integra`
--

-- --------------------------------------------------------

--
-- Table structure for table `asset_details`
--

CREATE TABLE `asset_details` (
  `host_name` varchar(50) NOT NULL,
  `asset_make` varchar(50) NOT NULL,
  `asset_model` varchar(50) NOT NULL,
  `asset_type` varchar(50) NOT NULL,
  `e_id` varchar(50) NOT NULL,
  `bit_locker_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `asset_details`
--

INSERT INTO `asset_details` (`host_name`, `asset_make`, `asset_model`, `asset_type`, `e_id`, `bit_locker_status`) VALUES
('INT-LTP-111', 'make1', 'model1', 'laptop', 'E101', 'yes'),
('INT-LTP-203', 'make2', 'model2', 'laptop', 'E102', 'no'),
('INT-LTP-111', 'make1', 'model1', 'laptop', 'E101', 'yes'),
('INT-LTP-203', 'make2', 'model2', 'laptop', 'E102', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `e_id` varchar(50) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `project` varchar(50) NOT NULL,
  `reporting_head` varchar(50) NOT NULL,
  `account_head` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`e_id`, `department_name`, `branch`, `project`, `reporting_head`, `account_head`) VALUES
('E101', 'dept1', 'branch1', 'project1', 'rep_head1', 'acc_head1'),
('E102', 'dept2', 'branch2', 'project2', 'rep_head2', 'acc_head2'),
('E101', 'dept1', 'branch1', 'project1', 'rep_head1', 'acc_head1'),
('E102', 'dept2', 'branch2', 'project2', 'rep_head2', 'acc_head2');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` varchar(50) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_type` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_type`, `phone`, `email`) VALUES
('E101', 'Siva', 'Type1', '8492904421', 'siva@gmail.com'),
('E102', 'Darshini', 'type2', '3779294433', 'darshini@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `provision_details`
--

CREATE TABLE `provision_details` (
  `host_name` varchar(50) NOT NULL,
  `provisioned_by` varchar(50) NOT NULL,
  `mouse_count` int(11) NOT NULL,
  `keyboard_count` int(11) NOT NULL,
  `bag_provision` varchar(50) NOT NULL,
  `provisioned_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provision_list`
--

CREATE TABLE `provision_list` (
  `provision_id` int(11) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `host_name` varchar(50) NOT NULL,
  `provisioned_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `host_name` varchar(50) NOT NULL,
  `serial_no` varchar(50) NOT NULL,
  `device_type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `purchase_date` date NOT NULL,
  `warranty_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`host_name`, `serial_no`, `device_type`, `status`, `purchase_date`, `warranty_date`) VALUES
('INT-BAG-211', '348392', 'bag', 'working', '2022-03-12', '2023-02-11'),
('INT-BTY-323', '238922', 'battery', 'working', '2024-03-12', '2026-10-12'),
('INT-HDD-144', '384920', 'HDD', 'working', '2023-09-17', '2026-12-15'),
('INT-HDD-383', '438958', 'HDD', 'working', '2024-01-23', '2025-12-03'),
('INT-KBD-382', '382921', 'keyboard', 'not working', '2024-02-12', '2025-11-12'),
('INT-LTP-111', '707890', 'laptop', 'not working', '2025-05-23', '2027-09-23'),
('INT-LTP-203', '472929', 'laptop', 'working', '2023-01-12', '2025-08-12'),
('INT-LTP-379', '747278', 'laptop', 'working', '2024-06-02', '2026-09-09'),
('INT-LTP-487', '324348', 'laptop', 'working', '2024-09-14', '2025-12-09'),
('INT-LTP-492', '758489', 'laptop', 'not working', '2024-12-09', '2025-12-31'),
('INT-MOU-419', '372811', 'mouse', 'working', '2023-09-10', '2025-09-12'),
('INT-MOU-432', '747322', 'mouse', 'working', '0025-12-09', '2026-11-09'),
('INT-RAM-244', '489298', 'RAM', 'working', '2023-03-12', '2025-04-16'),
('INT-SDD-213', '212143', 'SDD', 'working', '2023-04-23', '2025-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `password`, `role`) VALUES
('001', 'admin001', 'admin'),
('002', 'admin002', 'admin'),
('003', 'admin003', 'admin'),
('004', 'admin004', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asset_details`
--
ALTER TABLE `asset_details`
  ADD KEY `host` (`host_name`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD KEY `emp_id` (`e_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `provision_list`
--
ALTER TABLE `provision_list`
  ADD PRIMARY KEY (`provision_id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `host_name` (`host_name`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`host_name`),
  ADD UNIQUE KEY `host_name` (`host_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `provision_list`
--
ALTER TABLE `provision_list`
  MODIFY `provision_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `asset_details`
--
ALTER TABLE `asset_details`
  ADD CONSTRAINT `host` FOREIGN KEY (`host_name`) REFERENCES `stock` (`host_name`);

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `emp_id` FOREIGN KEY (`e_id`) REFERENCES `employee` (`emp_id`);

--
-- Constraints for table `provision_list`
--
ALTER TABLE `provision_list`
  ADD CONSTRAINT `provision_list_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `provision_list_ibfk_2` FOREIGN KEY (`host_name`) REFERENCES `asset_details` (`host_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
