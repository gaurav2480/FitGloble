-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 06:00 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitglobe`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `batchID` int(11) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `activeDate` varchar(100) NOT NULL,
  `inactveDate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batchID`, `batch`, `status`, `activeDate`, `inactveDate`) VALUES
(1, '5:30 am to 7:00 am', 'Active', '10/11/2018', ''),
(2, '7:00 am to 8:30 am', 'Inactive', '10/11/2018', ''),
(3, '8:30 am to 10:00 am', 'Active', '10/11/2018', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Customer_ID` int(11) NOT NULL,
  `Receipt_No` varchar(250) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Customer_Name` varchar(250) NOT NULL,
  `Date_Of_Birth` varchar(50) NOT NULL,
  `Age` varchar(30) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Mobile_Number` varchar(100) NOT NULL,
  `Alternate_Number` varchar(100) NOT NULL,
  `Batch_Timing` varchar(100) NOT NULL,
  `Locker_No` varchar(100) NOT NULL,
  `Fitness_Goals` varchar(300) NOT NULL,
  `Medical_Conditions` varchar(300) NOT NULL,
  `Created_Date` varchar(100) NOT NULL,
  `Expiry_Date` varchar(100) NOT NULL,
  `Employment_Status` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Image_Path` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Customer_ID`, `Receipt_No`, `Date`, `Customer_Name`, `Date_Of_Birth`, `Age`, `Address`, `Mobile_Number`, `Alternate_Number`, `Batch_Timing`, `Locker_No`, `Fitness_Goals`, `Medical_Conditions`, `Created_Date`, `Expiry_Date`, `Employment_Status`, `Status`, `User_ID`, `Gender`, `Image_Path`) VALUES
(3, '12345', '14/11/2018', 'Gaurav', '22/11/2018', '342', '23423fgfdgd', '9823636926', '534535', '5:30 am to 7:00 am', '123', '', '345345', '10-11-18', '20/11/2018', 'STUDENT', 'Active', 4, '', ''),
(10, '0248', '11-11-2018', 'AJAY SAWANT', '28-11-2018', '10', 'SAVORDEM', '9823636926', '9890928966', '5:30 am to 7:00 am', '123', 'GAIN MAXIMUM MUSCLE', 'Hello world', '11-11-18 07:53:16', '', 'STUDENT', 'Active', 1, 'MALE', ''),
(14, '123', '14-11-2018', 'BHAVESH SHRODKAR', '22-11-2018', '24', 'SAVORDEM', '9923636922', '0832 2712012', '8:30 am to 10:00 am', '123', 'GAIN MAXIMUM MUSCLE', 'GUD HEALTH', '11-11-2018', '', 'PUBLIC', 'Active', 12, 'MALE', ''),
(15, '123', '14-11-2018', 'BHAVESH SHRODKAR', '22-11-2018', '24', 'SAVORDEM', '9923636922', '0832 2712012', '8:30 am to 10:00 am', '123', 'GAIN MAXIMUM MUSCLE', 'GUD HEALTH', '11-11-2018', '', 'PUBLIC', 'Active', 12, 'MALE', ''),
(16, '123', '14-11-2018', 'BHAVESH SHRODKAR', '22-11-2018', '24', 'SAVORDEM', '9923636922', '0832 2712012', '8:30 am to 10:00 am', '123', 'GAIN MAXIMUM MUSCLE', 'GUD HEALTH', '11-11-2018', '', 'PUBLIC', 'Active', 12, 'MALE', ''),
(17, '123', '14-11-2018', 'BHAVESH SHRODKAR', '22-11-2018', '24', 'SAVORDEM', '9923636922', '0832 2712012', '8:30 am to 10:00 am', '123', 'GAIN MAXIMUM MUSCLE', 'GUD HEALTH', '11-11-2018', '', 'PUBLIC', 'Active', 12, 'MALE', 'CustomerImages/hell.jpg'),
(18, '123', '14-11-2018', 'BHAVESH SHRODKAR', '22-11-2018', '24', 'SAVORDEM', '9923636922', '0832 2712012', '8:30 am to 10:00 am', '123', 'GAIN MAXIMUM MUSCLE', 'GUD HEALTH', '11-11-2018', '', 'PUBLIC', 'Active', 12, 'MALE', 'CustomerImages/.jpg'),
(19, '123', '14-11-2018', 'BHAVESH', '22-11-2018', '24', 'SAVORDEM', '9923636922', '0832 2712012', '8:30 am to 10:00 am', '123', 'GAIN MAXIMUM MUSCLE', 'GUD HEALTH', '11-11-2018', '', 'PUBLIC', 'Active', 12, 'MALE', 'CustomerImages/BHAVESH.jpg'),
(20, '123', '14-11-2018', 'BHAVESH', '22-11-2018', '24', 'SAVORDEM', '9923636922', '0832 2712012', '8:30 am to 10:00 am', '123', 'GAIN MAXIMUM MUSCLE', 'GUD HEALTH', '11-11-2018', '', 'PUBLIC', 'Active', 12, 'MALE', 'CustomerImages/BHAVESH.jpg'),
(21, '123', '14-11-2018', 'DILIP', '22-11-2018', '24', 'QUEPEM', '9923636922', '0832 2712012', '8:30 am to 10:00 am', '123', 'GAIN MAXIMUM MUSCLE', 'GUD HEALTH', '11-11-2018', '', 'PUBLIC', 'Active', 12, 'MALE', 'CustomerImages/123.jpg'),
(22, '1234', '14-11-2018', 'Gaurav', '22-11-2018', '24', 'QUEPEM', '9923636922', '0832 2712012', '8:30 am to 10:00 am', '123', 'GAIN MAXIMUM MUSCLE', 'GUD HEALTH', '11-11-2018', '', 'PUBLIC', 'Active', 12, 'MALE', 'CustomerImages/1234.jpg'),
(23, '4555', '23-11-2018', 'Meena', '22-11-2018', '45', 'SAVORDEM', '9823636926', '1234444', '8:30 am to 10:00 am', '123', 'GAIN MAXIMUM MUSCLE', 'GUD HEALTH', '13-11-2018', '', 'STUDENT', 'Active', 2, 'MALE', 'CustomerImages/4555.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fitnessgoals`
--

CREATE TABLE `fitnessgoals` (
  `ID` int(11) NOT NULL,
  `goals` varchar(300) NOT NULL,
  `status` varchar(50) NOT NULL,
  `activeDate` varchar(50) NOT NULL,
  `inactveDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fitnessgoals`
--

INSERT INTO `fitnessgoals` (`ID`, `goals`, `status`, `activeDate`, `inactveDate`) VALUES
(1, 'GAIN MAXIMUM MUSCLE', 'Active', '10/11/2018', ''),
(2, 'GAIN LEAN MUSCLE', 'Active', '10/11/2018', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `Payment_ID` int(11) NOT NULL,
  `Plan` varchar(250) NOT NULL,
  `Plan_Amount` varchar(250) NOT NULL,
  `Discount` varchar(250) NOT NULL,
  `Discounted_Amount` varchar(250) NOT NULL,
  `Locker_Amount` varchar(250) NOT NULL,
  `Steam_Bath` varchar(250) NOT NULL,
  `Final_Amount` varchar(250) NOT NULL,
  `Plan_Duration` int(11) NOT NULL,
  `Plan_Start_Date` varchar(100) NOT NULL,
  `Plan_End_Date` varchar(100) NOT NULL,
  `Amount_Paid` varchar(250) NOT NULL,
  `Amount_Due` varchar(250) NOT NULL,
  `Plan_Status` varchar(100) NOT NULL,
  `Customers_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`batchID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Customer_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `fitnessgoals`
--
ALTER TABLE `fitnessgoals`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`Payment_ID`),
  ADD KEY `Customers_ID` (`Customers_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `batchID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `fitnessgoals`
--
ALTER TABLE `fitnessgoals`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `Payment_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD CONSTRAINT `payment_details_ibfk_1` FOREIGN KEY (`Customers_ID`) REFERENCES `customers` (`Customer_ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
