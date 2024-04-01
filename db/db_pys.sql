-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2024 at 06:27 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pys`
--

-- --------------------------------------------------------

--
-- Table structure for table `deduction_details`
--

CREATE TABLE `deduction_details` (
  `deduction_id` int(11) NOT NULL,
  `absent_count` int(11) DEFAULT NULL,
  `absent_rate` decimal(10,2) DEFAULT NULL,
  `late_minutes` int(11) DEFAULT NULL,
  `late_rate` double(10,2) DEFAULT NULL,
  `philhealth` decimal(10,2) DEFAULT NULL,
  `sss` decimal(10,2) DEFAULT NULL,
  `pagibig` decimal(10,2) DEFAULT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deduction_details`
--

INSERT INTO `deduction_details` (`deduction_id`, `absent_count`, `absent_rate`, `late_minutes`, `late_rate`, `philhealth`, `sss`, `pagibig`, `employee_id`) VALUES
(1, 1, '500.00', 0, 1.00, '3000.00', '3000.00', '3000.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `employee_id` int(11) NOT NULL,
  `employee_number` varchar(11) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`employee_id`, `employee_number`, `full_name`, `position`, `department`) VALUES
(1, '31313341', 'Alli Shion', 'Financer', 'Finance');

-- --------------------------------------------------------

--
-- Table structure for table `salary_details`
--

CREATE TABLE `salary_details` (
  `salary_id` int(11) NOT NULL,
  `reference_number` int(11) NOT NULL,
  `basic_salary` decimal(10,2) DEFAULT NULL,
  `thirteenth_month_pay` decimal(10,2) DEFAULT NULL,
  `overtime_hours` decimal(10,2) DEFAULT NULL,
  `regular_overtime_rate` decimal(10,2) DEFAULT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary_details`
--

INSERT INTO `salary_details` (`salary_id`, `reference_number`, `basic_salary`, `thirteenth_month_pay`, `overtime_hours`, `regular_overtime_rate`, `employee_id`) VALUES
(1, 0, '100000.00', '10000.00', '8.00', '100.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `total_salary`
--

CREATE TABLE `total_salary` (
  `TotalSalary_id` int(11) NOT NULL,
  `total_gross` decimal(10,2) DEFAULT NULL,
  `total_deduction` decimal(10,2) DEFAULT NULL,
  `total_salary` decimal(10,2) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `total_salary`
--

INSERT INTO `total_salary` (`TotalSalary_id`, `total_gross`, `total_deduction`, `total_salary`, `date`, `employee_id`) VALUES
(1, '110800.00', '9500.00', '101300.00', '2024-04-01', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deduction_details`
--
ALTER TABLE `deduction_details`
  ADD PRIMARY KEY (`deduction_id`);

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `salary_details`
--
ALTER TABLE `salary_details`
  ADD PRIMARY KEY (`salary_id`);

--
-- Indexes for table `total_salary`
--
ALTER TABLE `total_salary`
  ADD PRIMARY KEY (`TotalSalary_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deduction_details`
--
ALTER TABLE `deduction_details`
  MODIFY `deduction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `salary_details`
--
ALTER TABLE `salary_details`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `total_salary`
--
ALTER TABLE `total_salary`
  MODIFY `TotalSalary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
