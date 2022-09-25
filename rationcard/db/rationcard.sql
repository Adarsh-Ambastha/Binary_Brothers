-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2022 at 06:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rationcard`
--

-- --------------------------------------------------------

--
-- Table structure for table `centerinfo`
--

CREATE TABLE `centerinfo` (
  `centerNumber` int(3) NOT NULL,
  `productNumber` varchar(6) NOT NULL,
  `availableQ` int(3) NOT NULL,
  `area` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `centerinfo`
--

INSERT INTO `centerinfo` (`centerNumber`, `productNumber`, `availableQ`, `area`) VALUES
(100, 'SKU001', 95, 380051),
(101, 'SKU002', 107, 380015);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `productNumber` int(6) NOT NULL,
  `availableStock` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `orderId` text NOT NULL,
  `productNumber` varchar(6) NOT NULL,
  `centerNumber` int(3) NOT NULL,
  `quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`orderId`, `productNumber`, `centerNumber`, `quantity`) VALUES
('ORD001', 'SKU001', 100, 3),
('ORD001', 'SKU006', 101, 4),
('ORD001', 'SKU002', 101, 10),
('ORD001', 'SKU003', 101, 5);

-- --------------------------------------------------------

--
-- Table structure for table `prodavailability`
--

CREATE TABLE `prodavailability` (
  `rationCardNum` int(17) NOT NULL,
  `productNumber` varchar(6) NOT NULL,
  `availableQuota` int(3) NOT NULL,
  `usedQuota` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodavailability`
--

INSERT INTO `prodavailability` (`rationCardNum`, `productNumber`, `availableQuota`, `usedQuota`) VALUES
(1234567800, 'SKU001', 3, 2),
(987654321, 'SKU001', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `productinfo`
--

CREATE TABLE `productinfo` (
  `productNumber` text NOT NULL,
  `productName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productinfo`
--

INSERT INTO `productinfo` (`productNumber`, `productName`) VALUES
('SKU001', 'RICE'),
('SKU002', 'SUGAR'),
('SKU003', 'WHEAT'),
('SKU004', 'CHILLI POWDER'),
('SKU005', 'RAJMA'),
('SKU006', 'KEROSENE');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `rationCardNum` int(17) NOT NULL,
  `primaryHolderName` text NOT NULL,
  `cardType` text NOT NULL,
  `residenceAddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`rationCardNum`, `primaryHolderName`, `cardType`, `residenceAddress`) VALUES
(1234567800, 'PCK', 'BPL', 'Indus University Rancharda Ahmedabad'),
(987654321, 'CT', 'AAY', 'Dhirubhai Ambani University Gandhinagar');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
