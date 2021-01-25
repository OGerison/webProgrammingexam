-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 02:17 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adding`
--

-- --------------------------------------------------------

--
-- Table structure for table `addition`
--

CREATE TABLE `addition` (
  `no` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `ID` int(10) NOT NULL,
  `PROJECT` varchar(60) NOT NULL,
  `CONTACT` int(15) NOT NULL,
  `isDeleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addition`
--

INSERT INTO `addition` (`no`, `NAME`, `ID`, `PROJECT`, `CONTACT`, `isDeleted`) VALUES
(1, 'jordan', 1, 'book', 778, 1),
(2, 'gerison', 2, 'start', 7897, 0),
(3, 'william', 0, 'PHARMACY', 2147483647, 0),
(4, 'Otim William Gerison', 0, 'Super Market', 89784, 0),
(5, 'fred rodriguez', 0, 'soccer', 2147483647, 0),
(6, 'GERISON', 0, 'Z-SCORE', 775945681, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telephone` int(20) NOT NULL,
  `Comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`Name`, `Email`, `Telephone`, `Comment`) VALUES
('William Gerison Otim', 'otim22gerison@gmail.com', 2147483647, '0'),
('Telephone', 'otim22gerison@gmail.com', 2147483647, '0'),
('Otim William Gerison', 'otim22gerison@gmail.com', 2147483647, 'well done'),
('Otim William Gerison', 'otim22gerison@gmail.com', 2147483647, 'Great website.');

-- --------------------------------------------------------

--
-- Table structure for table `mylogin`
--

CREATE TABLE `mylogin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mylogin`
--

INSERT INTO `mylogin` (`id`, `name`, `password`) VALUES
(1, 'otim', 'otim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addition`
--
ALTER TABLE `addition`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addition`
--
ALTER TABLE `addition`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
