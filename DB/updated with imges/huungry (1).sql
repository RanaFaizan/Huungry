-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2019 at 08:08 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `huungry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(10) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'faizi_733@ucp.edu.pk', 'Faizan02');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(10) NOT NULL,
  `brand_title` varchar(200) NOT NULL,
  `brand_img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`, `brand_img`) VALUES
(1, 'macdonald', 0x757365725f313536323639313936365f6d63646f6e616c642e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` varchar(200) NOT NULL,
  `cat_img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_img`) VALUES
(1, 'Burger', 0x757365725f313536323639323535335f3563343230323131623439326362356364623164383864342d3735302d3530312e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `cus_id` int(10) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cus_id` int(10) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `cus_pass` varchar(200) NOT NULL,
  `cus_img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cus_id`, `first_name`, `last_name`, `email`, `phone`, `gender`, `dob`, `city`, `cus_pass`, `cus_img`) VALUES
(1, 'Rana', 'Faizan', 'faizi_999@ucp.edu.pk', '03045555555', 'Male', '2019-07-06', 'Lahore', 'Faizan01', 0x757365725f313536323639353332385f31333430363838355f313037343039393239323637333230315f373231373531333532343531303130353036385f6e2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(10) NOT NULL,
  `pro_title` varchar(200) NOT NULL,
  `pro_brand` varchar(200) NOT NULL,
  `pro_cat` varchar(200) NOT NULL,
  `pro_price` int(20) NOT NULL,
  `pro_desc` varchar(2000) NOT NULL,
  `pro_img` longblob NOT NULL,
  `pro_keywords` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_title`, `pro_brand`, `pro_cat`, `pro_price`, `pro_desc`, `pro_img`, `pro_keywords`) VALUES
(1, 'zinger burger', 'macdonald', '1', 500, 'tasty', 0x757365725f313536323639323830325f6275726765722e706e67, 'zinger');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `cus_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cus_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
