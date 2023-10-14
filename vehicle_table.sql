-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2023 at 10:54 AM
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
-- Database: `autolanka`
--

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_table`
--

CREATE TABLE `vehicle_table` (
  `VehicleID` int(10) NOT NULL,
  `Brand` varchar(20) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Bags` int(255) NOT NULL,
  `Seats` int(100) NOT NULL,
  `AirCondition` varchar(10) NOT NULL,
  `VehicleType` varchar(20) NOT NULL,
  `GearType` varchar(10) NOT NULL,
  `ExtraCharge` int(10) NOT NULL,
  `Passengers` int(255) NOT NULL,
  `Doors` int(10) NOT NULL,
  `DayCharge` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_table`
--

INSERT INTO `vehicle_table` (`VehicleID`, `Brand`, `Model`, `Image`, `Bags`, `Seats`, `AirCondition`, `VehicleType`, `GearType`, `ExtraCharge`, `Passengers`, `Doors`, `DayCharge`) VALUES
(2, 'Benz', '520D', 'https://carsguide-res.cloudinary.com/image/upload/f_auto,fl_lossy,q_auto,t_cg_hero_large/v1/editorial/Mercedes-Benz-E220d-BMW-520d-comparo-%283%29.jpg', 4, 5, 'Yes', 'Cars', 'Auto', 1000, 4, 4, 2000),
(3, 'Toyota', 'CH-R', 'https://media.ed.edmunds-media.com/toyota/c-hr/2022/oem/2022_toyota_c-hr_4dr-suv_limited_fq_oem_1_1600.jpg', 4, 4, 'Yes', 'SUV and Cabs', 'Auto', 400, 5, 4, 1000),
(6, 'TOYOTA', 'Coaster', 'https://www.toyota.lk/wp-content/uploads/2017/03/1BUS-1.jpg', 20, 20, 'Yes', 'Van and Busses', 'Auto', 2000, 0, 0, 0),
(7, 'Honda', 'Dio', 'https://www.honda-mideast.com/en/-/media/honda/motorcycle/scooters/dio/large-mobile.jpg', 1, 2, 'No', 'Motorbikes', 'Auto', 150, 2, 0, 500),
(9, 'Bajaj', 'Pulsar', 'https://www.dpmco.com/public/images/product/pulsar-ns-200-abs.png', 1, 2, 'No', 'Motorbikes', 'Manual', 500, 2, 0, 800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vehicle_table`
--
ALTER TABLE `vehicle_table`
  ADD PRIMARY KEY (`VehicleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vehicle_table`
--
ALTER TABLE `vehicle_table`
  MODIFY `VehicleID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
