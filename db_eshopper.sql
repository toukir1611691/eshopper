-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2018 at 01:48 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_eshopper`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_short_desc` varchar(255) NOT NULL,
  `category_long_desc` text NOT NULL,
  `category_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_short_desc`, `category_long_desc`, `category_status`) VALUES
(6, 'Fashion', 'Fashion', 'Fashion', 1),
(7, 'Computer', 'Computer', 'Computer', 1),
(8, 'Mobile', 'Mobile', 'Mobile', 1),
(10, 'Interior', 'Interior', 'Interior', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `zip_code` varchar(10) NOT NULL,
  `shipping_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `email_address`, `password`, `mobile_number`, `address`, `city`, `country`, `zip_code`, `shipping_status`) VALUES
(2, 'Toukir Ahmad', 'toukir@talha.com', 'e10adc3949ba59abbe56e057f20f883e', '01689673861', '161/b, lake circus, kalabagan', 'Dhaka', '--Select Country Nam', '1205', 0),
(3, 'akash', 'akash@talha.com', 'e10adc3949ba59abbe56e057f20f883e', '12345678901', '161/b, lake circus, kalabagan', 'Dhaka', 'Bangladesh', '1205', 0),
(4, 'keya', 'keya@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', 0),
(5, 'bappi', 'bappi@talha.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', 0),
(6, 'bappi', 'bappi@talha.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', 0),
(7, 'bappi', 'bappi@talha.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', 0),
(8, 'bappi', 'bappi@talha.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', 0),
(9, 'bappi', 'bappi@talha.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', 0),
(10, 'bappi', 'bappi@talha.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', 0),
(11, 'bappi', 'bappi@talha.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', 0),
(12, 'bappi', 'bappi@talha.com', 'e10adc3949ba59abbe56e057f20f883e', '12345678901', '161/b, lake circus, kalabagan', 'Dhaka', 'Bangladesh', '1205', 0),
(13, 'Toukir Ahmad', 'toukir@talha.com', 'e10adc3949ba59abbe56e057f20f883e', '12345678901', '161/b, lake circus, kalabagan', 'Dhaka', 'Bangladesh', '1205', 0),
(14, 'bappi', 'bappi@talha.com', 'e10adc3949ba59abbe56e057f20f883e', '01689673861', '161/b, lake circus, kalabagan', 'Dhaka', 'Bangladesh', '1205', 0),
(15, 'tanvir', 'tanvir@talha.com', 'e10adc3949ba59abbe56e057f20f883e', '12345678901', '161/b, lake circus, kalabagan', 'Dhaka', 'Bangladesh', '1205', 0),
(16, 'tanvir', 'tanvir@talha.com', 'e10adc3949ba59abbe56e057f20f883e', '12345678901', '161/b, lake circus, kalabagan', 'Dhaka', 'Bangladesh', '1205', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_short_desc` varchar(255) NOT NULL,
  `product_long_desc` text NOT NULL,
  `product_category` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(6) NOT NULL,
  `product_image` text NOT NULL,
  `top_product` tinyint(1) NOT NULL,
  `product_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_short_desc`, `product_long_desc`, `product_category`, `product_price`, `product_quantity`, `product_image`, `top_product`, `product_status`) VALUES
(3, 'HP Pavilion 15 chn', 'HP Pavilion 15 chn', 'HP Pavilion 15 chn', 7, 55001, 5, 'product_images/hp_pavilion_15.png', 1, 1),
(4, 'Samsung Galaxy Note 7 chn', 'Samsung Galaxy Note 7 chn', 'Samsung Galaxy Note 7 chn', 8, 80001, 55, 'product_images/Samsung-Galaxy-Note-72.jpg', 1, 1),
(6, 'Samsung Galaxy Note 8', 'Samsung Galaxy Note 8', 'Samsung Galaxy Note 8', 8, 90000, 3, 'product_images/galaxy-note-82.jpg', 0, 1),
(12, 'Dell Xps 13 changed', 'Dell Xps 13 short description changed', 'Dell Xps 13 long description changed', 8, 800000, 12, 'product_images/dell-xps-13-2018-640x3603.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `shipping_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `customer_id`, `customer_name`, `email_address`, `address`, `mobile_number`, `city`, `country`, `zip_code`, `shipping_status`) VALUES
(3, 3, 'akash', 'akash@talha.com', '161/b, lake circus, kalabagan', '12345678901', 'Dhaka', 'Bangladesh', 1205, 0),
(4, 3, 'akash', 'akash@talha.com', '161/b, lake circus, kalabagan', '12345678901', 'Dhaka', 'Bangladesh', 1205, 0),
(5, 3, 'akash', 'akash@talha.com', '161/b, lake circus, kalabagan', '12345678901', 'Dhaka', 'Bangladesh', 1205, 0),
(6, 3, 'akash', 'akash@talha.com', '161/b, lake circus, kalabagan', '12345678901', 'Dhaka', 'Bangladesh', 1205, 0),
(7, 3, 'akash', 'akash@talha.com', '161/b, lake circus, kalabagan', '12345678901', 'Dhaka', 'Bangladesh', 1205, 0),
(8, 3, 'akash', 'akash@talha.com', '161/b, lake circus, kalabagan', '12345678901', 'Dhaka', 'Bangladesh', 1205, 0),
(9, 3, 'akash', 'akash@talha.com', '161/b, lake circus, kalabagan', '12345678901', 'Dhaka', 'Bangladesh', 1205, 0),
(10, 3, 'akash', 'akash@talha.com', '161/b, lake circus, kalabagan', '12345678901', 'Dhaka', 'Bangladesh', 1205, 0),
(11, 12, 'bappi', 'bappi@talha.com', '161/b, lake circus, kalabagan', '12345678901', 'Dhaka', 'Bangladesh', 1205, 0),
(12, 14, 'bappi', 'bappi@talha.com', '161/b, lake circus, kalabagan', '01689673861', 'Dhaka', 'Bangladesh', 1205, 0),
(13, 15, 'tanvir', 'tanvir@talha.com', '161/b, lake circus, kalabagan', '12345678901', 'Dhaka', 'Bangladesh', 1205, 0),
(14, 15, 'tanvir', 'tanvir@talha.com', '161/b, lake circus, kalabagan', '12345678901', 'Dhaka', 'Bangladesh', 1205, 0),
(15, 15, 'tanvir', 'tanvir@talha.com', '161/b, lake circus, kalabagan', '12345678901', 'Dhaka', 'Bangladesh', 1205, 0),
(16, 16, 'tanvir', 'tanvir@talha.com', '161/b, lake circus, kalabagan', '12345678901', 'Dhaka', 'Bangladesh', 1205, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_email`, `user_password`, `user_status`) VALUES
(1, 'toukir@talha.com', '8b75b159d24c123adba4bfc3f095af29', 1),
(2, 'user@talha.com', 'e10adc3949ba59abbe56e057f20f883e', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
