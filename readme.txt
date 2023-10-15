-----------autolanka----------------
Follow these steps to run the project
  1. Download the project
  2. Extract the project
  3. Copy the project folder to the htdocs folder in xampp
  4. Open the xampp control panel and start the apache and mysql
  5. Open the browser and type localhost/phpmyadmin
  6. Create a database named autolanka
  7. Import the sql files to the database (sql files are in the table folder) or run the follow table scripts in the sql tab in phpmyadmin
  8. Open the browser and type localhost
  9. Now you can use the project

-----------table script----------------

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 04:31 AM
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
-- Table structure for table `employ`
--

CREATE TABLE `employ` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employ`
--

INSERT INTO `employ` (`firstname`, `lastname`, `email`, `username`, `password`, `id`) VALUES
('Chathushka', 'Navod', 'chathushkanavod11@gmail.com', 'emp-navod', '1234', 11),
('Gagana', 'Yushan', 'gagana@gmail.com', 'emp-gagana', '1234', 12),
('Yashitha', 'Ranod', 'yashitha@gmail.com', 'emp-ranod', '1234', 13),
('Ayani', 'Jayaweera', 'ayani@gmail.com', 'emp-ayani', '1234', 14),
('Hashini', 'Tharushika', 'hashini@gmail.com', 'emp-hashini', '1234', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employ`
--
ALTER TABLE `employ`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employ`
--
ALTER TABLE `employ`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `NAME_ON_CARD` varchar(255) NOT NULL,
  `CREDIT_CARD_NUMBER` int(16) NOT NULL,
  `EXP_MONTH_YEAR` varchar(50) NOT NULL,
  `CVV` int(3) NOT NULL,
  `ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`First_Name`, `Last_Name`, `Email`, `NAME_ON_CARD`, `CREDIT_CARD_NUMBER`, `EXP_MONTH_YEAR`, `CVV`, `ID`) VALUES
('Chathu', 'Navod', 'chathushkanavod11@gmail.com', 'navod', 2147483647, '2023-12', 122, 1),
('roxayor', 'bookspre', 'roxayor809@bookspre.com', 'roxayor', 2147483647, '2023-12', 545, 2),
('DNV Muthumukummara', 'Dineth Muthukumara', 'chathushkawithanage@gmail.com', 'abc', 2147483647, '2023-12', 123, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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
(15, 'Chathushka', 'Navod', 'https://img.freepik.com/premium-photo/boy-flat-cartoon-character-illustration_620650-2108.jpg', '2002-02-05', 717537150, '132', 'Delgoda', 'Gampaha', 'chathushka', '1234'),
(16, 'Gagana', 'Yushan', 'https://img.freepik.com/premium-photo/toddler-2d-cartoon-vector-illustration-white-background_889056-29088.jpg', '2002-01-23', 785683566, '122', 'Pittugala', 'Malabe', 'gagana', '1234'),
(17, 'Yashitha', 'Dissanayake', 'https://img.freepik.com/free-vector/cute-boy-with-peace-sign-cartoon-vector-icon-illustration-people-fashion-icon-concept-isolated-premium-vector-flat-cartoon-style_138676-3946.jpg', '2002-02-04', 78654321, '786', 'Yakkala', 'Gampaha', 'yashitha', '1234'),
(18, 'Hashini', 'Tharushika', 'https://i.pinimg.com/550x/8d/52/c5/8d52c5c35382908832ffedb21c1e63b0.jpg', '2002-12-11', 78987654, '134', 'pittugala', 'malabe', 'hashini', '1234'),
(19, 'Ayani', 'Jayaweera', 'https://pbs.twimg.com/media/Eq0iI-yXIAMVatK.jpg', '2002-02-08', 75432123, '133', 'pittugala', 'malabe', 'ayani', '1234');

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
  MODIFY `UserID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 04:16 PM
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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `msg`, `id`) VALUES
('Ayani', 'ayani@gmail.com', 'this is subject', 'this is message', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
