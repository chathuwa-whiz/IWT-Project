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
