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
