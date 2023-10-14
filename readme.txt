-----------autolanka----------------
Follow these steps to run the project
  1. Download the project
  2. Extract the project
  3. Copy the project folder to the htdocs folder in xampp
  4. Open the xampp control panel and start the apache and mysql
  5. Open the browser and type localhost/phpmyadmin
  6. Create a database named autolanka
  7. Import the sql files to the database (sql files are in the project folder) or run the follow table scripts in the sql tab in phpmyadmin
  8. Open the browser and type localhost
  9. Now you can use the project

-----------table script----------------

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2023 at 10:53 AM
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
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `UserID` int(5) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Birthday` varchar(10) NOT NULL,
  `Number` int(10) NOT NULL,
  `Street` varchar(20) NOT NULL,
  `Town` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`UserID`, `Firstname`, `Lastname`, `Image`, `Birthday`, `Number`, `Street`, `Town`, `City`, `Username`, `Password`) VALUES
(6, 'Ayani', 'Koswatta', 'https://www.hdwallpaper.nu/wp-content/uploads/2015/07/beautiful_Wallpaper_023.jpg', '1990-03-01', 712345654, '122', 'Koswatta', 'Malabe', 'ayani', '1234'),
(8, 'Gagana', 'Yushan', 'https://img.freepik.com/free-vector/cute-happy-smiling-child-isolated-white-background_1308-33482.jpg', '1234-12-12', 878909879, '134', 'Alvitigala', 'Hadapana', 'gagana', '1234'),
(9, 'Yashitha', 'Yashitha', 'https://images.unsplash.com/photo-1623230590824-f39e31a0a608?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aW5kaWFuJTIwYm95fGVufDB8fDB8fHww&w=1000&q=80', '1345-12-12', 765432123, '233', 'Bakery', 'Weeragula', 'yashitha', '1234'),
(10, 'Mahinda', 'Rajapaksha', 'https://c.ndtvimg.com/2018-11/djl3nqn8_mahinda-rajapaksa-reuters_625x300_14_November_18.jpg', '1000-02-03', 2147483647, '1', 'Hambanthota', 'Sri', 'appachchi', '1234'),
(12, 'Ranil', 'Wikramasinha', 'https://cdn.newsfirst.lk/english-uploads/2020/08/b1874651-9aa92aa5-52913258-ranil-wickremesinghe_850x460_acf_cropped_850x460_acf_cropped.jpg', '1000-12-02', 765432123, '122', 'Colombo', 'Haputhale', 'ranil', '1234'),
(13, 'Hashini', 'Tharushi', 'https://hips.hearstapps.com/hmg-prod/images/gh-2023-girl-name-trends-wednesday-resize-1671220446.jpeg', '2002-02-01', 78888888, '121', 'madagoda', 'pattiwela', 'hashini', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `UserID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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
