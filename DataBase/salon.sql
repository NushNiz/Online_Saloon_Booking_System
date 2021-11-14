-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 05:31 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `mobileNo` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `firstname`, `lastname`, `mobileNo`, `email`, `password`) VALUES
(19, 'manushika', 'Maldeniya', 710336616, 'mal@gmail.com', 'm123'),
(20, 'nimal', 'Maldeniya', 712534465, 'manu@gmail.com', 'nn');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adID` int(11) NOT NULL,
  `Admin` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adID`, `Admin`, `Pass`) VALUES
(1, 'admin', 'admin'),
(2, 'manushi', 'manu'),
(3, 'nush', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_details`
--

CREATE TABLE `appointment_details` (
  `Name` varchar(100) NOT NULL,
  `Mobile_Number` bigint(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Appointment_Notes` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment_details`
--

INSERT INTO `appointment_details` (`Name`, `Mobile_Number`, `Email`, `Appointment_Notes`, `Date`, `Time`) VALUES
('Kasuni', 724937600, 'nimeth08@gmail.com', ' ', '2020-10-22', 'Afternoon '),
('nuski', 2323222222, 'nncreative1000@gmail.com', '123', '2020-10-15', 'Afternoon'),
('Roshani Ovitigala', 724937671, 'rosh101@gmail.com', '', '2020-10-16', 'Morning'),
('Erandika', 765659964, 'roshanie101@gmail.com', 'Urgent ', '2020-10-16', 'Afternoon '),
('Vijitha Chandani', 724937671, 'vijithachan@gmail.com', '', '2020-10-20', 'Afternoon');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(5) NOT NULL,
  `emp_name` varchar(250) NOT NULL,
  `emp_tp` int(10) NOT NULL,
  `emp_home_town` varchar(30) NOT NULL,
  `emp_salary` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_tp`, `emp_home_town`, `emp_salary`) VALUES
(4, 'indunil', 22332233, 'colombo', 23),
(6, 'nuski', 9878987, 'ratnapura', 223),
(10, 'Erandika', 1233433, 'bln', 1222);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Admin_ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Admin_ID`, `name`, `password`) VALUES
(1, 'nusniz', 'apple');

-- --------------------------------------------------------

--
-- Table structure for table `manu`
--

CREATE TABLE `manu` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `mobileNo` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manu`
--

INSERT INTO `manu` (`id`, `firstname`, `lastname`, `mobileNo`, `email`, `password`) VALUES
(3, 'manushika', 'maldeniya', 710375705, 'manu@gmail.com', 'manu'),
(4, 'shashini', 'Maldeniya', 718449515, 'shashini@gmail.com', 'shashini'),
(5, 'sadani', 'soyza', 710375705, 'soy@gmail.com', '123'),
(7, 'apple', 'nush', 773661433, 'nncreative1000@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adID`);

--
-- Indexes for table `appointment_details`
--
ALTER TABLE `appointment_details`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `manu`
--
ALTER TABLE `manu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manu`
--
ALTER TABLE `manu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
