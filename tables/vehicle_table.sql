-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 04:30 AM
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
(11, 'benz', 'c500', 'https://c8.alamy.com/comp/R6ER33/frankfurt-sept-2015-mercedes-benz-c-500-cabriolet-presented-at-iaa-international-motor-show-on-september-20-2015-in-frankfurt-germany-R6ER33.jpg', 4, 4, 'Yes', 'Cars', 'Auto', 1000, 0, 0, 0),
(12, 'SUZUKI', 'Swift', 'https://cdni.autocarindia.com/Utils/ImageResizer.ashx?n=https://cms.haymarketindia.net/model/uploads/modelimages/Maruti-Suzuki-Swift-100320211204.jpg', 3, 4, 'Yes', 'Cars', 'Auto', 500, 0, 0, 0),
(13, 'TATA', 'Eicher', 'https://5.imimg.com/data5/SELLER/Default/2022/6/NC/YP/FW/126360925/tata-school-bus.jpg', 20, 40, 'Yes', 'Van and Busses', 'Auto', 1000, 0, 0, 0),
(14, 'TOYOTA', 'KDH', 'https://www.lankaholidays.com/pics/37896/S%20L%20V%20H%2001.jpg', 5, 10, 'Yes', 'Van and Busses', 'Auto', 1000, 0, 0, 0),
(15, 'KAVASAKI', 'Ninja', 'https://images.hindustantimes.com/auto/img/2021/02/22/600x338/kawasaki-ninja-300-lime-green-ebony_1613968175881_1613968184978.png', 0, 2, 'No', 'Motorbikes', 'Manual', 300, 0, 0, 0),
(16, 'YAMAHA', 'MT-15', 'https://media.zigcdn.com/media/model/2023/Aug/yamaha-mt-15-v2-std-right-side-view_360x240.jpg', 0, 2, 'No', 'Motorbikes', 'Manual', 500, 0, 0, 0),
(17, 'HONDA', 'Elevate', 'https://imgd.aeplcdn.com/1200x900/n/cw/ec/149973/honda-elevate-left-front-three-quarter2.jpeg', 3, 5, 'Yes', 'SUV and Cabs', 'Auto', 800, 0, 0, 0),
(18, 'TOYOTA', 'CH-R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Toyota_C-HR_Hybrid_2017_%28cropped%29.jpg/800px-Toyota_C-HR_Hybrid_2017_%28cropped%29.jpg', 3, 5, 'Yes', 'SUV and Cabs', 'Auto', 900, 0, 0, 0),
(19, 'BAJAJ', 'RE', 'https://www.waysoftheworldblog.com/wp-content/uploads/2023/06/Sri-Lanka-Tuk-Tuk-27.jpg', 2, 3, 'No', 'Tuk Tuk', 'Manual', 300, 0, 0, 0),
(20, 'TATA', 'Dimo', 'https://4.imimg.com/data4/RE/GN/MY-23582002/hd-img3-big-500x500.jpg', 40, 2, 'Yes', 'Utility Vehicles', 'Manual', 1500, 0, 0, 0);

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
  MODIFY `VehicleID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
