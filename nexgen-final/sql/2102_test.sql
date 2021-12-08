-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2021 at 08:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2102_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidateid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nationality` text NOT NULL,
  `nicno` varchar(20) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL,
  `department` varchar(20) NOT NULL,
  `expsalary` float NOT NULL,
  `position` varchar(20) NOT NULL,
  `wrkschedule` varchar(25) NOT NULL,
  `eduqual` varchar(50) NOT NULL,
  `profqual` varchar(50) NOT NULL,
  `workcomp` varchar(20) NOT NULL,
  `workdesig` varchar(20) NOT NULL,
  `workfrom` date DEFAULT NULL,
  `workto` date DEFAULT NULL,
  `recmgr_assignemail` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `userRole` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'selected',
  `isDelete` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidateid`, `firstname`, `lastname`, `fullname`, `dob`, `gender`, `nationality`, `nicno`, `contactno`, `email`, `telephone`, `address`, `department`, `expsalary`, `position`, `wrkschedule`, `eduqual`, `profqual`, `workcomp`, `workdesig`, `workfrom`, `workto`, `recmgr_assignemail`, `password`, `userRole`, `status`, `isDelete`) VALUES
(93, 'Dileepa', 'Bandara', 'Dileepa Lakmina Bandara', '1997-10-12', 'Male', 'Sri Lankan', '973480448v', '0763451084', 'dileepal1213@gmail.com', '0763451084', 'axample', 'IT', 50000, '', '', 'IS(BSc)', '', '', '', '0000-00-00', '0000-00-00', 'dileepal1213@gmail.com', '$2y$10$OPQePomut7CM3xz9JzqeQOatr0W321Y/r5I9oteDfWqYJPw5IjkrS', 'employee', 'selected', 1);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `departmentId` varchar(100) NOT NULL,
  `departmentName` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `location` varchar(100) NOT NULL,
  `createdBy` varchar(50) NOT NULL,
  `createdDate` date NOT NULL,
  `depManagerEmpId` varchar(20) NOT NULL,
  `depManagerName` varchar(50) NOT NULL,
  `depManagerContact` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `departmentId`, `departmentName`, `description`, `location`, `createdBy`, `createdDate`, `depManagerEmpId`, `depManagerName`, `depManagerContact`) VALUES
(1, '', 'Marketing', '', '151 Kirula Rd, Colombo', 'Priya Silva', '2021-10-07', 'AC0020', 'Milan Perera', 786667333),
(2, '', 'Finance', '', '12 Green Rd, Nugegoda', 'Priya Silva', '2021-10-21', 'FF0023', 'Rahal Perera', 786667876),
(3, '', 'Sales', '', '151 Kirula Rd, Nugegoda', 'Priya Silva', '2021-10-22', 'AC0023', 'Suraj Milan', 783337876),
(4, '', 'IT', '', '12 Green Rd, Nugegoda', 'Priya Silva', '2021-10-24', 'AC0020', 'Sahan Silva', 786662346),
(5, '', 'HR', '', '12 Green Rd, Nugegoda', 'Priya Silva', '2021-10-24', 'HR0020', 'Amanda Perera', 786662345);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `first` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `issue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suggestions` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `workstyle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `feedback` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `managerreg`
--

CREATE TABLE `managerreg` (
  `empId` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `userRole` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nic` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `isDelete` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `managerreg`
--

INSERT INTO `managerreg` (`empId`, `name`, `gender`, `userRole`, `department`, `mobile`, `address`, `email`, `nic`, `password`, `created`, `isDelete`) VALUES
(24, 'Dinithi Gimhara', 'female', 'admin', 'IT', '0763451000', 'example.com', 'dinithi@gmail.com', '973480447v', '$2y$10$5CvN01gkXxyYxIxkO9w.6e58no3O1sZMSXwuJel76rSN6gzOHgHHS', '2021-10-27 05:46:03', 1),
(25, 'Tharahie Bhaskaran', 'female', 'recruitment-manager', 'hr-department', '0712244373', 'Colombo', 'tharahie@gmail.com', '983480448v', '$2y$10$VB4dvP..bk/NrtoDuhtDUOp6rGYFz5x5OsHcL9X.pXQHsavchZvm.', '2021-10-27 05:50:04', 1),
(26, 'Sadun Wijesinghe', 'male', 'payroll-manager', 'hr-department', '0712244373', 'Colombo', 'sadun@gmail.com', '983480448v', '$2y$10$W.oO6i0LzAKtwCU30F4U9u2gCq/TtF8Z5YuX5I7emUTUXXd6cRSxy', '2021-10-27 05:51:32', 1),
(27, 'Linda Jayasinghe', 'female', 'leave-manager', 'hr-department', '0712244373', 'Colombo', 'linda@gmail.com', '983480448v', '$2y$10$Xzvd5FQYQrrN61A8lkjkN.xlTDc.vWnb0G/sAPCeIaP3L0NQd4TUa', '2021-10-27 05:53:08', 1),
(28, 'Malani Perera', 'female', 'hr-manager', 'hr-department', '0712244373', 'Colombo', 'malani@gmail.com', '983480448v', '$2y$10$gOXb6KrANU4JXSd4Vfsqb.1UxDn4R8cIRavaI8zVg7ynmqjxL7p86', '2021-10-27 05:54:24', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidateid`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `managerreg`
--
ALTER TABLE `managerreg`
  ADD PRIMARY KEY (`empId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candidateid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `managerreg`
--
ALTER TABLE `managerreg`
  MODIFY `empId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `candidate` (`candidateid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
