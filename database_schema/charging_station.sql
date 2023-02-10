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
-- Table structure for table `charging_station`
--

CREATE TABLE `charging_station` (
  `Station_Id` bigint(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `State` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Charger_type` enum('Slow','Fast','Rapid') NOT NULL,
  `No_of_4wheeler_ports` int(11) NOT NULL,
  `No_of_2wheeler_ports` int(11) NOT NULL,
  `Rate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `charging_station`
--

INSERT INTO `charging_station` (`Station_Id`, `name`, `address`, `State`, `City`, `Charger_type`, `No_of_4wheeler_ports`, `No_of_2wheeler_ports`, `Rate`) VALUES
(1, 'charging1', 'abc, Mumbai, Maharashtra', 'Maharashtra', 'Mumbai Suburban', 'Fast', 2, 2, 200),
(2, 'charging2', '111, Pune, Maharashtra', 'Maharashtra', 'Pune', 'Slow', 1, 1, 100),
(3, 'charging3', 'B11,Sonal Apartment,Near Roa Hotel,L.B.S. Marg,Ghatkopar(W),Mumbai-400086', 'MAHARASHTRA', 'Mumbai Suburban', 'Slow', 1, 1, 100),
(4, 'charging4', 'B11,Sonal Apartment,Near Roa Hotel,L.B.S. Marg,Ghatkopar(W),Mumbai-400086', 'MAHARASHTRA', 'Pune', 'Slow', 2, 1, 300),
(5, 'charging5', 'B11,Sonal Apartment,Near Roa Hotel,L.B.S. Marg,Ghatkopar(W),Mumbai-400086', 'MAHARASHTRA', 'Mumbai City', 'Slow', 1, 3, 500),
(6, 'charging6', 'B11,Sonal Apartment,Ghatkopar(W),Mumbai-400086', 'MAHARASHTRA', 'Pune', 'Slow', 1, 2, 300),
(7, 'charging7', 'B11,Sonal Apartment,Ghatkopar(W),Mumbai-400086', 'MAHARASHTRA', 'Mumbai Suburban', 'Rapid', 2, 3, 600),
(8, 'charging8', 'B11,Sonal Apartment,Near Roa Hotel,L.B.S. Marg,Ghatkopar(W),Mumbai-400086', 'Maharashtra', 'Mumbai', 'Rapid', 3, 2, 400),
(9, 'charging9', 'B11,Sonal Apartment,Near Roa Hotel,L.B.S. Marg,Ghatkopar(W),Mumbai-400086', 'Maharashtra', 'Mumbai', 'Fast', 1, 2, 3000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charging_station`
--
ALTER TABLE `charging_station`
  ADD PRIMARY KEY (`Station_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `charging_station`
--
ALTER TABLE `charging_station`
  MODIFY `Station_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
