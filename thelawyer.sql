-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 09:30 AM
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
-- Database: `thelawyer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_Id`, `Name`, `Password`) VALUES
(1, 'Hunain', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `book_oppointment`
--

CREATE TABLE `book_oppointment` (
  `B_Id` int(11) NOT NULL,
  `CustomerName` varchar(50) DEFAULT NULL,
  `CustomerEmail` varchar(50) NOT NULL,
  `CustomerPhone` varchar(50) DEFAULT NULL,
  `CustomerAddress` varchar(200) NOT NULL,
  `Lawyerid` int(11) DEFAULT NULL,
  `customerid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_oppointment`
--

INSERT INTO `book_oppointment` (`B_Id`, `CustomerName`, `CustomerEmail`, `CustomerPhone`, `CustomerAddress`, `Lawyerid`, `customerid`) VALUES
(44, 'hunain', 'h@gmail.com', '12345678901', 'fdbdfb', 19, 1),
(45, 'ahsan', 'ahsan@gmail.com', '03333333334', 'fdbdfb', 19, 10),
(46, 'h@gmail.com', 'talha@gmail.com', '12345678901', 'dfdfg', 19, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `C_Id` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `cellnumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_Id`, `Name`, `Email`, `password`, `gender`, `cellnumber`) VALUES
(1, 'Hunain', 'h@gmail.com', '123', 'Male', '033124554'),
(2, 'faizan', 'f@gmail.com', '789', 'male', '0354234354'),
(3, 'hassan', 'hassan@gmail.com', '123456', 'male', '1345444'),
(9, 'hhhh', 'jokistan7@gmail.com', 'sss', 'male', '03351234567'),
(10, 'ahsan', 'ahsan@gmail.com', '123', 'male', '03351234567');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `L_Id` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `Address` varchar(500) DEFAULT NULL,
  `Lawyerimage` varchar(200) DEFAULT NULL,
  `Contact` varchar(20) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `specialization_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`L_Id`, `Name`, `Email`, `Password`, `Gender`, `Address`, `Lawyerimage`, `Contact`, `location_id`, `specialization_id`) VALUES
(14, 'Abbas', 'abbas@gmail.com', '123', 'Male', 'Karachi ', 'l1.jpg', '87109838893', 1, 1),
(17, 'Alina', 'alina@gmail.com', '222', 'Female', 'Karachi street 106 Nazimabad', 'l3.jpg', '87109838893', 2, 3),
(18, 'Simran', 's@gmail.com', '666', 'Female', 'Karachi street 102', 'l4.jpg', '87109838893', 5, 4),
(19, 'fahad', 'f@gmail.com', '12345', 'male', 'shahrah e faisal', 'michael-connelly-the-lincoln-lawyer-netflix.webp', '87109838893', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `L_Id` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`L_Id`, `Name`) VALUES
(1, 'karachi'),
(2, 'lahore'),
(3, 'islamabad'),
(4, 'punjab'),
(5, 'quatta');

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

CREATE TABLE `specialization` (
  `S_Id` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`S_Id`, `Name`) VALUES
(1, 'Political'),
(2, 'Criminal'),
(3, 'Divorce'),
(4, 'Property');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_Id`);

--
-- Indexes for table `book_oppointment`
--
ALTER TABLE `book_oppointment`
  ADD PRIMARY KEY (`B_Id`),
  ADD KEY `Lawyerid` (`Lawyerid`),
  ADD KEY `customerid` (`customerid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_Id`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`L_Id`),
  ADD KEY `location_id` (`location_id`),
  ADD KEY `specialization_id` (`specialization_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`L_Id`);

--
-- Indexes for table `specialization`
--
ALTER TABLE `specialization`
  ADD PRIMARY KEY (`S_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `A_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_oppointment`
--
ALTER TABLE `book_oppointment`
  MODIFY `B_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `C_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `L_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `L_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `specialization`
--
ALTER TABLE `specialization`
  MODIFY `S_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_oppointment`
--
ALTER TABLE `book_oppointment`
  ADD CONSTRAINT `book_oppointment_ibfk_1` FOREIGN KEY (`Lawyerid`) REFERENCES `lawyer` (`L_Id`),
  ADD CONSTRAINT `book_oppointment_ibfk_2` FOREIGN KEY (`customerid`) REFERENCES `customer` (`C_Id`);

--
-- Constraints for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD CONSTRAINT `lawyer_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `location` (`L_Id`),
  ADD CONSTRAINT `lawyer_ibfk_2` FOREIGN KEY (`specialization_id`) REFERENCES `specialization` (`S_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
