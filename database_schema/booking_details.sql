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
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `Booking_Id` bigint(20) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Station_Id` bigint(20) NOT NULL,
  `Start_time` datetime NOT NULL,
  `End_time` datetime NOT NULL,
  `regno` varchar(10) NOT NULL,
  `model` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`Booking_Id`, `Username`, `Station_Id`, `Start_time`, `End_time`, `regno`, `model`) VALUES
(11, 'rushabh4', 2, '2022-12-16 19:00:00', '2022-12-16 20:00:00', '1111', 'car2'),
(12, 'rushabh4', 2, '2022-12-16 20:02:00', '2022-12-16 20:03:00', '2345', 'fegfew'),
(13, 'rushabh4', 2, '2022-12-16 20:02:00', '2022-12-16 20:03:00', '2345', 'fegfew'),
(14, 'rushabh4', 1, '2022-12-16 16:16:00', '2022-12-16 18:20:00', '34556', 'car2'),
(15, 'achintya', 1, '2022-12-16 20:33:00', '2022-12-16 22:33:00', '2222', 'car2'),
(16, 'rushabh4', 7, '2022-12-18 13:30:00', '2022-12-18 15:30:00', '9999', 'car2'),
(17, 'rushabh4', 4, '2022-12-18 12:40:00', '2022-12-18 13:40:00', '8888', 'car2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`Booking_Id`),
  ADD KEY `user_booking` (`Username`),
  ADD KEY `station_booking` (`Station_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `Booking_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
