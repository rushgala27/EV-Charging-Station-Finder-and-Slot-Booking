-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 10, 2023 at 06:02 PM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20022737_evcharging`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Full Name` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Gender` enum('Male','Female','Prefer not to say') NOT NULL,
  `Mobile no` decimal(10,0) NOT NULL,
  `Age` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Full Name`, `Username`, `Email`, `Password`, `Gender`, `Mobile no`, `Age`, `Address`) VALUES
('Achintya Bhat', 'achintya', 'rushabhgala09@gmail.com', '12345', 'Male', 9920061467, 21, 'B11,Sonal Apartment,Ghatkopar(W),Mumbai-400086'),
('Admin', 'admin', 'admin@gmail.com', 'password@123', 'Male', 1234567890, 50, '1234, Mumbai, Maharashtra'),
('Rushabh Gala', 'rushabh4', 'rushabhgala09@gmail.com', '12345', 'Male', 9920061467, 20, 'B11,Sonal Apartment,Near Roa Hotel,L.B.S. Marg,Ghatkopar(W),Mumbai-400086');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
