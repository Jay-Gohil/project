-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2019 at 05:08 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vlpr`
--

-- --------------------------------------------------------

--
-- Table structure for table `plate_master`
--

CREATE TABLE `plate_master` (
  `P_ID` int(4) NOT NULL,
  `Plate_Num` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plate_master`
--

INSERT INTO `plate_master` (`P_ID`, `Plate_Num`, `Date`, `Time`) VALUES
(1, 'GJ01AA0001', '2019-04-16', '09:00:00'),
(2, 'GJ780980', '2019-05-14', '09:00:00'),
(3, 'AR234324', '2019-05-09', '11:00:00'),
(4, 'AR4567', '2019-05-08', '18:26:00'),
(5, 'MP687', '2019-05-16', '37:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `Id` int(3) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `statecode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`Id`, `Name`, `statecode`) VALUES
(1, 'Andaman and Nicobar Islands', 'AN'),
(2, 'Andhra Pradesh', 'AP'),
(3, 'Arunachal Pradesh', 'AR'),
(5, 'Bihar', 'BR'),
(6, 'Chandigarh', 'CH'),
(7, 'Chhattisgarh', 'CG'),
(8, 'Dadra & Nagar Haveli', 'DN'),
(9, 'Daman & Diu', 'DD'),
(10, 'Delhi', 'DL'),
(11, 'Goa', 'GA'),
(12, 'Gujarat', 'GJ'),
(13, 'Haryana', 'HR'),
(14, 'Himachal Pradesh', 'HP'),
(15, 'Jammu & Kashmir', 'JK'),
(16, 'Jharkhand', 'JH'),
(17, 'Karnataka', 'KA'),
(18, 'Kerala', 'KL'),
(19, 'Lakshadweep', 'LD'),
(20, 'Madhya Pradesh', 'MP'),
(21, 'Maharashtra', 'MH'),
(22, 'Manipur', 'MN'),
(23, 'Meghalaya', 'ML'),
(24, 'Mizoram', 'MZ'),
(26, 'Odisha', 'OR'),
(27, 'Puducherry', 'PY'),
(28, 'Punjab', 'PB'),
(29, 'Rajasthan', 'RJ'),
(30, 'Sikkim', 'SK'),
(31, 'Tamil Nadu', 'TN'),
(32, 'Telangana', 'TS'),
(33, 'Tripura', 'TR'),
(34, 'Uttar Pradesh', 'UP'),
(35, 'Uttarakhand', 'UK'),
(36, 'West Bengal', 'WB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `plate_master`
--
ALTER TABLE `plate_master`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plate_master`
--
ALTER TABLE `plate_master`
  MODIFY `P_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
