-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 05:30 PM
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
-- Database: `payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Bank_Order_No` varchar(50) NOT NULL,
  `Payment_Amount` varchar(50) NOT NULL,
  `Card_Type` varchar(50) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Card_Number` varchar(20) NOT NULL,
  `Expiry_Date` varchar(50) NOT NULL,
  `CVC` varchar(24) NOT NULL,
  `PAY_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Bank_Order_No`, `Payment_Amount`, `Card_Type`, `First_Name`, `Last_Name`, `Card_Number`, `Expiry_Date`, `CVC`, `PAY_ID`) VALUES
('44', ' 5000', 'on', '  Manu', 'zoysa', '0123456789123456', '2020-10-08', '678', 4),
('345', ' 3000', 'on', '  Senith', 'Gamaetige', '0123456789123456', '2020-10-13', '835', 5),
('345', ' 3000', 'on', '  Manu', 'zoysa', '0123456789123456', '2020-10-01', '456', 6),
('123124', ' 1231231313141414', 'on', '  Erandika', 'maldeniya', '1111122212121212', '2020-10-02', '121', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PAY_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PAY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
