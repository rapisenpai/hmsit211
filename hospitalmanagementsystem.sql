-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 21, 2022 at 03:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitalmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `patientinformation`
--

CREATE TABLE `patientinformation` (
  `patientID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` varchar(8) NOT NULL,
  `maritalStatus` varchar(50) NOT NULL,
  `p_address` varchar(100) NOT NULL,
  `contactNumber` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `allergies` varchar(50) NOT NULL,
  `operations` varchar(50) NOT NULL,
  `medications` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patientinformation`
--

INSERT INTO `patientinformation` (`patientID`, `firstName`, `middleName`, `lastName`, `dateOfBirth`, `gender`, `maritalStatus`, `p_address`, `contactNumber`, `height`, `weight`, `allergies`, `operations`, `medications`) VALUES
(1, 'Jeremiah Jay', ' V.', ' Jayoma', '2002-01-14', 'Male', 'Taken', 'Purok 5, Mainit, Nabunturan, Davao del Sur', 2147483647, 55, 164, 'NA', 'NA', 'NA'),
(2, 'Rafhael Louix', 'A.', 'Homwad', '2002-01-14', 'Male', 'Single', 'Purok 14, Ising, Carmen, Davao del Norte', 2147483647, 167, 62, 'NA', 'NA', 'NA'),
(3, 'Rhea Ann', 'E.', 'Hernando', '2002-01-14', 'Male', 'Taken', 'Carmen, Davao del Norte', 2147483647, 55, 164, 'NA', 'NA', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `middleName`, `lastName`, `username`, `password`) VALUES
(1, ' Rafhael Lowix', 'Homwad', 'A.', 'rafhaellowix0905@gmail.com', 'password '),
(2, ' Rhea Ann', 'Hernando', 'E', 'hernando@gmail.com', 'password ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patientinformation`
--
ALTER TABLE `patientinformation`
  ADD PRIMARY KEY (`patientID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patientinformation`
--
ALTER TABLE `patientinformation`
  MODIFY `patientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
