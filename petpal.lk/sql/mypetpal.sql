-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 12:09 PM
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
-- Database: `mypetpal`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoption`
--

CREATE TABLE `adoption` (
  `ID` int(255) NOT NULL,
  `Full_Name` varchar(255) NOT NULL,
  `Home_Address` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Request` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adoption`
--

INSERT INTO `adoption` (`ID`, `Full_Name`, `Home_Address`, `Email`, `Phone`, `Request`) VALUES
(1, 'gaynuka', '12/gsdv', 'dfs@gng', 2147483647, 'affaf'),
(2, 'gayyynika', 'fafv2FDBD', 'AFAF@bdb', 772212056, 'dbvcbz');

-- --------------------------------------------------------

--
-- Table structure for table `book_appoinment`
--

CREATE TABLE `book_appoinment` (
  `id` int(10) NOT NULL,
  `petType` varchar(10) NOT NULL,
  `service` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `additionalInfo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(9, 'JohnCena', 'jc@gmail.com', '0552013456', 'My name is Johnnnn Cenaaaa!!!! You cant see me');

-- --------------------------------------------------------

--
-- Table structure for table `petdetails`
--

CREATE TABLE `petdetails` (
  `Pet_ID` int(11) NOT NULL,
  `P_Name` varchar(255) NOT NULL,
  `P_Type` varchar(255) NOT NULL,
  `P_Age` varchar(255) NOT NULL,
  `Breed` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` int(10) NOT NULL,
  `userpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoption`
--
ALTER TABLE `adoption`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `book_appoinment`
--
ALTER TABLE `book_appoinment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petdetails`
--
ALTER TABLE `petdetails`
  ADD PRIMARY KEY (`Pet_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adoption`
--
ALTER TABLE `adoption`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book_appoinment`
--
ALTER TABLE `book_appoinment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `petdetails`
--
ALTER TABLE `petdetails`
  MODIFY `Pet_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
