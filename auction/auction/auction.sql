-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2023 at 10:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `auctions`
--

CREATE TABLE `auctions` (
  `AuctionID` int(11) NOT NULL,
  `ItemName` varchar(255) DEFAULT NULL,
  `ItemDescription` text DEFAULT NULL,
  `ItemImageURL` varchar(255) DEFAULT NULL,
  `StartingPrice` varchar(20) DEFAULT NULL,
  `CurrentPrice` varchar(20) DEFAULT NULL,
  `StartTime` datetime DEFAULT NULL,
  `EndTime` datetime DEFAULT NULL,
  `Status` enum('Open','Closed') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auctions`
--

INSERT INTO `auctions` (`AuctionID`, `ItemName`, `ItemDescription`, `ItemImageURL`, `StartingPrice`, `CurrentPrice`, `StartTime`, `EndTime`, `Status`) VALUES
(3, 'Macbook Pro', 'Macbook Pro 13 inch 2015 with Retina Display', 'auctionItemImages/pic1.jpeg', '899', '899', '2023-12-01 00:49:00', '2023-12-02 13:20:00', 'Open'),
(4, 'Lacoste Lerond Leather Trainers', 'Lacoste Lerond Leather Trainers...', 'auctionItemImages/pic2.jpeg', '299', '299', '2023-12-01 01:29:00', '2023-12-02 01:28:00', 'Open');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `SellerID` int(11) NOT NULL,
  `SellerUsername` varchar(20) NOT NULL,
  `SellerName` varchar(100) NOT NULL,
  `SellerEmail` varchar(100) NOT NULL,
  `SellerPassword` varchar(255) NOT NULL,
  `SellerGender` varchar(255) NOT NULL,
  `SellerAddress` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`SellerID`, `SellerUsername`, `SellerName`, `SellerEmail`, `SellerPassword`, `SellerGender`, `SellerAddress`) VALUES
(1, 'johndoe', 'John Doe', 'johndoe@gmail.com', 'johndoe112', 'M', '42th Avenue Park, Parkinson Street'),
(2, 'layman', 'Layman', 'layman@yahoo.com', 'layman112', 'M', '61 Park Avenue ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auctions`
--
ALTER TABLE `auctions`
  ADD PRIMARY KEY (`AuctionID`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`SellerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auctions`
--
ALTER TABLE `auctions`
  MODIFY `AuctionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `SellerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
