-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 01, 2021 at 05:30 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timezone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` bigint(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Manish G. Thakkar', 'manish8200028763@gmail.com', 'eee'),
(2, 'Virat Kohli', 'virat_kohli@gmail.com', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` bigint(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) NOT NULL,
  `cat_img` varchar(100) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_img`) VALUES
(5, 'Clothes', '../upload/women5.jpg'),
(6, 'Electronics', '../upload/el5.jpg'),
(7, 'Furniture', '../upload/fur7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

DROP TABLE IF EXISTS `clothes`;
CREATE TABLE IF NOT EXISTS `clothes` (
  `p_id` bigint(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(20) NOT NULL,
  `p_name` varchar(100) DEFAULT NULL,
  `p_code` varchar(10) DEFAULT NULL,
  `p_price` varchar(10) DEFAULT NULL,
  `p_img1` varchar(100) DEFAULT NULL,
  `p_img2` varchar(100) DEFAULT NULL,
  `p_color` varchar(20) DEFAULT NULL,
  `p_size` varchar(10) DEFAULT NULL,
  `p_weight` varchar(10) DEFAULT NULL,
  `p_desc` varchar(100) DEFAULT NULL,
  `p_material` varchar(100) DEFAULT NULL,
  `p_ship_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`p_id`, `cat_name`, `p_name`, `p_code`, `p_price`, `p_img1`, `p_img2`, `p_color`, `p_size`, `p_weight`, `p_desc`, `p_material`, `p_ship_desc`) VALUES
(4, 'Clothes', 'Pink and Mehandi Beautiful Dress', 'dress1', '999', '../upload/women7.jpg', '../upload/women7.jpg', 'Pink and Mehandi', 'XL', '349gm', 'Nice', 'Long lasting', 'Free shipping'),
(6, 'Clothes', 'Red Beautiful Ready made dress for women', 'dress2', '1299', '../upload/women6.jpg', '../upload/women6.jpg', 'Red', 'XXL', '349gm', 'Nice', 'Nice and long lasting dress ', 'Free shipping');

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

DROP TABLE IF EXISTS `electronics`;
CREATE TABLE IF NOT EXISTS `electronics` (
  `p_id` bigint(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(20) NOT NULL,
  `p_name` varchar(25) DEFAULT NULL,
  `p_code` varchar(10) DEFAULT NULL,
  `p_price` varchar(10) DEFAULT NULL,
  `p_img1` varchar(100) DEFAULT NULL,
  `p_img2` varchar(100) DEFAULT NULL,
  `p_color` varchar(20) DEFAULT NULL,
  `p_size` varchar(10) DEFAULT NULL,
  `p_weight` varchar(10) DEFAULT NULL,
  `p_desc` varchar(100) DEFAULT NULL,
  `p_material` varchar(100) DEFAULT NULL,
  `p_ship_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

DROP TABLE IF EXISTS `furniture`;
CREATE TABLE IF NOT EXISTS `furniture` (
  `p_id` bigint(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(20) NOT NULL,
  `p_name` varchar(25) DEFAULT NULL,
  `p_code` varchar(10) DEFAULT NULL,
  `p_price` varchar(10) DEFAULT NULL,
  `p_img1` varchar(100) DEFAULT NULL,
  `p_img2` varchar(100) DEFAULT NULL,
  `p_color` varchar(20) DEFAULT NULL,
  `p_size` varchar(10) DEFAULT NULL,
  `p_weight` varchar(10) DEFAULT NULL,
  `p_desc` varchar(100) DEFAULT NULL,
  `p_material` varchar(100) DEFAULT NULL,
  `p_ship_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`p_id`, `cat_name`, `p_name`, `p_code`, `p_price`, `p_img1`, `p_img2`, `p_color`, `p_size`, `p_weight`, `p_desc`, `p_material`, `p_ship_desc`) VALUES
(6, 'Furniture', 'Virat', 'manish', '1000', 'upload/Gold Vintage frame 59$.jpg', 'upload/Wooden Vintage frame 79$.jpg', 'gold', 'Medium', '100gm', 'dgergre', 'gerge', 'sgeg'),
(4, 'Furniture', 'Sofa Set', 'sofa123', '20000', 'upload/fur3.jpg', 'upload/fur2.jpg', 'Multi', 'Two Thirds', '20kg', 'Nice', 'Long Lasting', 'Free Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `user_regi`
--

DROP TABLE IF EXISTS `user_regi`;
CREATE TABLE IF NOT EXISTS `user_regi` (
  `u_id` bigint(7) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_regi`
--

INSERT INTO `user_regi` (`u_id`, `username`, `email`, `password`, `mobile_no`) VALUES
(1, 'Virat Kohli', '123', 'manish8200028763@gmail.com', 8200028763);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
