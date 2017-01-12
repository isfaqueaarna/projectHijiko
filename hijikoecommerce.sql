-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2017 at 06:51 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hijikoecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `commissions`
--

CREATE TABLE `commissions` (
  `comId` int(11) NOT NULL,
  `comCode` varchar(255) NOT NULL,
  `comName` varchar(255) NOT NULL,
  `comDescription` text NOT NULL,
  `comPercentage` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commissions`
--

INSERT INTO `commissions` (`comId`, `comCode`, `comName`, `comDescription`, `comPercentage`, `created_at`) VALUES
(1, 'HIJIKOCOMMISSION', 'Jiko Fee', 'description for hijiko commission', 10, '2016-12-23 12:14:07');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `coupId` int(11) NOT NULL,
  `coupName` varchar(255) NOT NULL,
  `coupCode` varchar(255) NOT NULL,
  `coupDiscount` int(11) NOT NULL,
  `coupEndDate` varchar(255) NOT NULL,
  `coupEndTime` varchar(255) NOT NULL,
  `coupStatus` varchar(255) NOT NULL DEFAULT 'deactive',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`coupId`, `coupName`, `coupCode`, `coupDiscount`, `coupEndDate`, `coupEndTime`, `coupStatus`, `created_at`) VALUES
(1, 'Offer for 10% discount', 'OFFER10', 11, '12/30/2016', '12:00', 'deactive', '2016-12-24 06:48:15'),
(2, 'Offer for 20% Discount', 'OFFER20', 20, '12/31/2016', '23:00', 'deactive', '2016-12-24 06:49:00'),
(3, 'Offer for 25% discount', 'OFFER25', 25, '12/30/2016', '12:00', 'active', '2016-12-24 07:53:59'),
(4, 'offer for 10% discount', 'OFFER10', 10, '12/12/2016', '12:00', 'active', '2016-12-24 10:04:40'),
(5, 'offer for 10% discount', 'OFFER10', 10, '12/12/2016', '12:00', 'active', '2016-12-24 10:04:40'),
(6, 'offer for 10% discount', 'OFFER10', 10, '12/12/2016', '12:00', 'active', '2016-12-24 10:04:40'),
(7, 'offer for 10% discount', 'OFFER10', 10, '12/12/2016', '12:00', 'active', '2016-12-24 10:04:40'),
(8, 'offer for 10% discount', 'OFFER10', 10, '12/12/2016', '12:00', 'active', '2016-12-24 10:05:22'),
(9, 'offer for 10% discount', 'OFFER10', 10, '12/12/2016', '12:00', 'active', '2016-12-24 10:05:22'),
(10, 'offer for 10% discount', 'OFFER10', 10, '12/12/2016', '12:00', 'active', '2016-12-24 10:05:22'),
(11, 'offer for 10% discount', 'OFFER10', 10, '12/12/2016', '12:00', 'active', '2016-12-24 10:05:22'),
(12, 'offer for 10% discount', 'OFFER10', 10, '12/12/2016', '12:00', 'active', '2016-12-24 10:05:22'),
(13, 'offer for 10% discount', 'OFFER10', 10, '12/12/2016', '12:00', 'active', '2016-12-24 10:05:22'),
(14, 'offer for 10% discount', 'OFFER10', 10, '12/12/2016', '12:00', 'active', '2016-12-24 10:05:22'),
(15, 'offer for 10% discount', 'OFFER10', 10, '12/12/2016', '12:00', 'active', '2016-12-24 10:05:22'),
(16, 'offer for 10% discount', 'OFFER10', 10, '12/12/2016', '12:00', 'active', '2016-12-24 10:05:22'),
(17, 'offer for 10% discount', 'OFFER10', 10, '12/12/2016', '12:00', 'active', '2016-12-24 10:05:22'),
(18, 'offer for 10% discount', 'OFFER10', 10, '12/12/2016', '12:00', 'active', '2016-12-24 10:05:22'),
(19, 'offer for 10% discount', 'OFFER10', 10, '12/12/2016', '12:00', 'active', '2016-12-24 10:05:22'),
(20, 'offer for 10% discount', 'OFFER10', 10, '12/12/2016', '12:00', 'active', '2016-12-24 10:05:22'),
(21, 'offer for 10% discount', 'OFFER10', 10, '12/12/2016', '12:00', 'active', '2016-12-24 10:05:22'),
(22, 'offer for 10% discount', 'OFFER10', 10, '12/12/2016', '12:00', 'active', '2016-12-24 10:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `multinational_country`
--

CREATE TABLE `multinational_country` (
  `mncoId` int(11) NOT NULL,
  `mncoFName` varchar(255) NOT NULL,
  `mncoSName` varchar(255) NOT NULL,
  `mncoStatus` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multinational_country`
--

INSERT INTO `multinational_country` (`mncoId`, `mncoFName`, `mncoSName`, `mncoStatus`, `created_at`) VALUES
(1, 'India', 'IND', 'active', '2016-12-30 09:06:50'),
(2, 'United States of America', 'USA', 'active', '2016-12-30 09:07:04'),
(3, 'United Kingdom', 'UK', 'active', '2016-12-30 09:07:19'),
(4, 'United Arab Emirates', 'UAE', 'active', '2016-12-30 09:07:35');

-- --------------------------------------------------------

--
-- Table structure for table `multinational_currency`
--

CREATE TABLE `multinational_currency` (
  `mncuId` int(11) NOT NULL,
  `mncuSName` varchar(255) NOT NULL,
  `mncuFName` varchar(255) NOT NULL,
  `mncuRate` float NOT NULL,
  `mncuStatus` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multinational_currency`
--

INSERT INTO `multinational_currency` (`mncuId`, `mncuSName`, `mncuFName`, `mncuRate`, `mncuStatus`, `created_at`) VALUES
(1, 'INR', 'Indian Rupee', 68, 'active', '2016-12-30 09:06:19'),
(2, 'USD', 'US Dollar', 1, 'active', '2016-12-30 09:06:36');

-- --------------------------------------------------------

--
-- Table structure for table `multinational_language`
--

CREATE TABLE `multinational_language` (
  `mnlangId` int(11) NOT NULL,
  `mnlangSName` varchar(255) NOT NULL,
  `mnlangFName` varchar(255) NOT NULL,
  `mnlangStatus` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multinational_language`
--

INSERT INTO `multinational_language` (`mnlangId`, `mnlangSName`, `mnlangFName`, `mnlangStatus`, `created_at`) VALUES
(1, 'en', 'English', 'active', '2016-12-30 09:05:12'),
(2, 'fr', 'French', 'active', '2016-12-30 09:05:24'),
(3, 'hi', 'Hindi', 'active', '2016-12-30 09:05:37'),
(4, 'bn', 'Bengali', 'active', '2016-12-30 09:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `pcatId` int(11) NOT NULL,
  `pcatName` varchar(255) NOT NULL,
  `pcatImageName` varchar(255) NOT NULL,
  `pcatDescription` text NOT NULL,
  `pcatStatus` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`pcatId`, `pcatName`, `pcatImageName`, `pcatDescription`, `pcatStatus`, `created_at`) VALUES
(1, 'Fashion', 'hjk586624fdbb386.jpg', 'Men Clothes, Women Clothes', 'active', '2016-12-30 09:12:29'),
(2, 'Electronics', 'hjk5866251cebc21.jpg', 'Home appliances, Desktop, Laptop, Mobile', 'active', '2016-12-30 09:13:00'),
(3, 'Sports', 'hjk5874aef99af33.png', 'Sports related product', 'active', '2017-01-10 09:52:57'),
(4, 'Entertainment', 'hjk5875c941bc978.png', 'Entertainment related product', 'active', '2017-01-10 09:53:47'),
(5, 'Books', 'hjk5874af447bfb8.png', 'All type of books', 'active', '2017-01-10 09:54:12'),
(6, 'Food & Snacks', 'hjk5874af6a327a1.png', 'Food related production', 'active', '2017-01-10 09:54:50'),
(7, 'Kids Toys', 'hjk5874afd7e564e.png', 'Kids Toys related Production', 'active', '2017-01-10 09:56:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userTypeId` int(11) NOT NULL,
  `userTypeName` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userFullName` varchar(255) NOT NULL,
  `userFirstName` varchar(255) NOT NULL,
  `userLastName` varchar(255) NOT NULL,
  `userDob` varchar(255) NOT NULL,
  `userSubscribe` varchar(255) NOT NULL,
  `userVerified` varchar(255) NOT NULL DEFAULT 'no',
  `userIsVendor` varchar(255) NOT NULL DEFAULT 'no',
  `userVendorStep` varchar(255) NOT NULL DEFAULT 'start',
  `userVendorStatus` varchar(255) NOT NULL DEFAULT 'deactive',
  `userStatus` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userTypeId`, `userTypeName`, `userEmail`, `userPassword`, `userFullName`, `userFirstName`, `userLastName`, `userDob`, `userSubscribe`, `userVerified`, `userIsVendor`, `userVendorStep`, `userVendorStatus`, `userStatus`, `created_at`) VALUES
(1, 1, 'admin', 'adminone@gmail.com', 'password', 'Admin One', '', '', '', '', '', 'no', 'start', 'deactive', 'active', '2016-12-22 12:28:21'),
(2, 1, 'admin', 'admintwo@gmail.com', 'password', 'Admin Two', '', '', '', '', '', 'no', 'start', 'deactive', 'active', '2016-12-23 06:03:40'),
(5, 2, 'user', 'userone@gmail.com', 'password', '', 'user', 'one', '24/6/1991', 'true', 'yes', 'yes', 'submitted', 'active', 'active', '2016-12-28 05:26:56');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_details`
--

CREATE TABLE `vendor_details` (
  `vdId` int(11) NOT NULL,
  `vdUserId` int(11) NOT NULL,
  `vdLocation` text NOT NULL,
  `vdLocationLat` varchar(255) NOT NULL,
  `vdLocationLong` varchar(255) NOT NULL,
  `vdPLanguage` varchar(255) NOT NULL,
  `vdSLanguages` text NOT NULL,
  `vdPCategories` text NOT NULL,
  `vdCountry` varchar(255) NOT NULL,
  `vdState` varchar(255) NOT NULL,
  `vdCity` varchar(255) NOT NULL,
  `vdStreetAddress` text NOT NULL,
  `vdWebsites` text NOT NULL,
  `vdZIPCode` varchar(255) NOT NULL,
  `vdPhotoIdImage` varchar(255) NOT NULL DEFAULT 'defaultphotoid.jpg',
  `vdEmail` varchar(255) NOT NULL,
  `vdEmailOTP` varchar(255) NOT NULL,
  `vdEmailVerify` varchar(255) NOT NULL,
  `vdMobile` varchar(255) NOT NULL,
  `vdMobileOTP` varchar(255) NOT NULL,
  `vdMobileVerify` varchar(255) NOT NULL,
  `vdProfileImage` varchar(255) NOT NULL DEFAULT 'defaultprofile.jpg',
  `vdAboutYourself` text NOT NULL,
  `vdStatus` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_details`
--

INSERT INTO `vendor_details` (`vdId`, `vdUserId`, `vdLocation`, `vdLocationLat`, `vdLocationLong`, `vdPLanguage`, `vdSLanguages`, `vdPCategories`, `vdCountry`, `vdState`, `vdCity`, `vdStreetAddress`, `vdWebsites`, `vdZIPCode`, `vdPhotoIdImage`, `vdEmail`, `vdEmailOTP`, `vdEmailVerify`, `vdMobile`, `vdMobileOTP`, `vdMobileVerify`, `vdProfileImage`, `vdAboutYourself`, `vdStatus`, `created_at`) VALUES
(1, 5, 'Krishna Building, AJC Bose Rd, Beck Bagan, Ballygunge, Kolkata, West Bengal 700020, India', '22.540851', '88.35865000000001', 'English', '2,3', '2,4', '2', 'West Benga', 'ddd', 'ddd', 'ddd', '3333', 'hjk58762ebdadd36.png', 'userone@gmail.com', '1234', 'yes', '8017590358', '1234', 'yes', 'hjk58762ed8dac51.png', 'Hi Hijiko', '', '2017-01-11 13:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `web_contents`
--

CREATE TABLE `web_contents` (
  `webcId` int(11) NOT NULL,
  `webcName` varchar(255) NOT NULL,
  `webcDescription` text NOT NULL,
  `webcImageName` varchar(255) NOT NULL,
  `webcLink` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_contents`
--

INSERT INTO `web_contents` (`webcId`, `webcName`, `webcDescription`, `webcImageName`, `webcLink`, `created_at`) VALUES
(1, 'slider_image_one', '', 'hjk5860ecc2cbcca.jpg', '', '2016-12-26 06:32:44'),
(2, 'slider_image_two', '', 'hjk5860eccb8a64d.jpg', '', '2016-12-26 06:42:13'),
(3, 'slider_image_three', '', 'hjk5860ecd4646c2.jpg', '', '2016-12-26 06:42:30'),
(4, 'top_image_one', '', 'hjk5860ece070239.png', '', '2016-12-26 06:43:25'),
(5, 'top_image_two', '', 'hjk5860ece83d9ff.png', '', '2016-12-26 06:43:35'),
(6, 'top_image_three', '', 'hjk5860eece3110e.png', '', '2016-12-26 06:43:46'),
(7, 'top_image_four', '', 'hjk5860eedc84c6e.png', '', '2016-12-26 06:43:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commissions`
--
ALTER TABLE `commissions`
  ADD PRIMARY KEY (`comId`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`coupId`);

--
-- Indexes for table `multinational_country`
--
ALTER TABLE `multinational_country`
  ADD PRIMARY KEY (`mncoId`);

--
-- Indexes for table `multinational_currency`
--
ALTER TABLE `multinational_currency`
  ADD PRIMARY KEY (`mncuId`);

--
-- Indexes for table `multinational_language`
--
ALTER TABLE `multinational_language`
  ADD PRIMARY KEY (`mnlangId`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`pcatId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `vendor_details`
--
ALTER TABLE `vendor_details`
  ADD PRIMARY KEY (`vdId`);

--
-- Indexes for table `web_contents`
--
ALTER TABLE `web_contents`
  ADD PRIMARY KEY (`webcId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commissions`
--
ALTER TABLE `commissions`
  MODIFY `comId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `coupId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `multinational_country`
--
ALTER TABLE `multinational_country`
  MODIFY `mncoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `multinational_currency`
--
ALTER TABLE `multinational_currency`
  MODIFY `mncuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `multinational_language`
--
ALTER TABLE `multinational_language`
  MODIFY `mnlangId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `pcatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `vendor_details`
--
ALTER TABLE `vendor_details`
  MODIFY `vdId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `web_contents`
--
ALTER TABLE `web_contents`
  MODIFY `webcId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
