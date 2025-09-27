-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2025 at 07:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arcadia_second_2025`
--

-- --------------------------------------------------------

--
-- Table structure for table `ai_generated_designs`
--

CREATE TABLE `ai_generated_designs` (
  `ID` int(11) NOT NULL,
  `Design_Name` varchar(150) DEFAULT NULL,
  `Creation_Date` datetime DEFAULT current_timestamp(),
  `Associated_Category` varchar(100) DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `File_URL` varchar(255) DEFAULT NULL,
  `Furniture_Layout` text DEFAULT NULL,
  `Color_Schemes` text DEFAULT NULL,
  `Decoration_Ideas` text DEFAULT NULL,
  `Product_Links` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `design_collections`
--

CREATE TABLE `design_collections` (
  `ID` int(11) NOT NULL,
  `Collection_Name` varchar(100) DEFAULT NULL,
  `Design_Category` varchar(100) DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Design_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email_Address` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Status` enum('active','inactive') DEFAULT 'active',
  `Add_Date_Time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ai_generated_designs`
--
ALTER TABLE `ai_generated_designs`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `design_collections`
--
ALTER TABLE `design_collections`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `design_collections_ibfk_1` (`Design_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email_Address` (`Email_Address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ai_generated_designs`
--
ALTER TABLE `ai_generated_designs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `design_collections`
--
ALTER TABLE `design_collections`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ai_generated_designs`
--
ALTER TABLE `ai_generated_designs`
  ADD CONSTRAINT `ai_generated_designs_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `design_collections`
--
ALTER TABLE `design_collections`
  ADD CONSTRAINT `design_collections_ibfk_1` FOREIGN KEY (`Design_ID`) REFERENCES `ai_generated_designs` (`ID`),
  ADD CONSTRAINT `design_collections_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
