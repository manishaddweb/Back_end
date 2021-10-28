-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2021 at 02:41 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `password`, `date`) VALUES
(1, 'virat@gmail.com', 'virat kohli', 'king', '1988-11-05'),
(2, 'rohit@gmail.com', 'rohit sharma', 'hitman', '1987-12-11'),
(3, 'rahul@gmail.com', 'kl rahul', 'classy', '1993-01-05'),
(4, 'sky@gmail.com', 'suryakymar yadav', 'sky', '0990-09-11'),
(5, 'pant@gmail.com', 'rishabh pant', 'lefty', '1995-02-18'),
(6, 'hardik@gmail.com', 'hardik pandya', 'kungfu', '1994-03-09'),
(7, 'jadeja@gmail.com', 'ravindra jadeja', 'bapu', '1989-07-15'),
(8, 'bhuvi@gmail.com', 'bhuvneshwar kumar', 'swing', '1990-12-11'),
(9, 'bumrah@gmail.com', 'jasprit bumrah', 'yorker', '1994-05-25'),
(10, 'chahal@gmail.com', 'yuzvendra chahal', 'gamechanger', '1996-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(30) DEFAULT NULL,
  `cat_image` blob DEFAULT NULL,
  `cat_desc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_image`, `cat_desc`) VALUES
(1, 'cloth', 0x312e6a7067, 'Clothes of men, women and kids'),
(2, 'elctronics', 0x312e6a7067, 'watches, adapter, weight machine, pen drives'),
(3, 'beauty & personal care', 0x312e6a7067, 'Clothes of men, women and kids'),
(4, 'sports', 0x312e6a7067, 'volleyball, football, cricket bat'),
(5, 'book', 0x312e6a7067, 'motivational, programming language'),
(6, 'toys', 0x312e6a7067, 'Cars, buses, train'),
(7, 'Home & Kitchen', 0x312e6a7067, 'Crockery, bed sheets'),
(8, 'grocery', 0x312e6a7067, 'wheet, wheet floor, rice'),
(9, 'Musical instruments', 0x312e6a7067, 'tabla, violin'),
(10, 'computers', 0x312e6a7067, 'personal computer, laptop');

-- --------------------------------------------------------

--
-- Table structure for table `empployee`
--

CREATE TABLE `empployee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(30) DEFAULT NULL,
  `emp_dep` varchar(30) DEFAULT NULL,
  `emp_salary` varchar(10) DEFAULT NULL,
  `emp_join_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empployee`
--

INSERT INTO `empployee` (`emp_id`, `emp_name`, `emp_dep`, `emp_salary`, `emp_join_date`) VALUES
(1, 'Virat Kohli', 'Cricket', '70000000', '2011-08-03'),
(2, 'Rohit sharma', 'Cricket', '70000000', '2008-12-05'),
(3, 'KL Rahul', 'Cricket', '50000000', '2013-10-03'),
(4, 'SKY', 'Cricket', '20000000', '2011-10-04'),
(5, 'Rishabh Pant', 'Cricket', '30000000', '2015-10-08'),
(6, 'Hardik Pandya', 'Cricket', '30000000', '2016-10-13'),
(7, 'Sonu sharma', 'MLM', '3300000', '1999-05-25'),
(8, 'Gaurav Bhatia', 'MLM', '1200000', '2014-10-17'),
(9, 'Sandeep Narwal', 'MLM', '1000000', '2014-06-04'),
(10, 'Virendra Pratap Singh', 'MLM', '750000', '2016-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `feedback` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `u_id`, `email`, `feedback`) VALUES
(11, 1, 'virat@gmail.com', 'I recommend to use MRF bat'),
(12, 2, 'rohit@gmail.com', 'I recommend to use CEAT bat'),
(13, 3, 'rahul@gmail.com', 'I recommend to use SG bat'),
(14, 4, 'sky@gmail.com', 'I recommend to use SG bat'),
(15, 5, 'pant@gmail.com', 'I recommend to use SG bat'),
(16, 6, 'pandya@gmail.com', 'I recommend to use SG bat'),
(17, 7, 'jadeja@gmail.com', 'I recommend to use SS bat'),
(18, 8, 'bhuvi@gmail.com', 'I recommend to use SG ball'),
(19, 9, 'jasprit@gmail.com', 'I recommend to use SG ball'),
(20, 10, 'chahal@gmail.com', 'I recommend to use SG ball');

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `or_id` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `or_date` date DEFAULT NULL,
  `or_total_price` varchar(30) DEFAULT NULL,
  `or_payment_mode` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`or_id`, `p_id`, `or_date`, `or_total_price`, `or_payment_mode`) VALUES
(1, 1, '2021-10-02', '5000', 'COD'),
(2, 2, '2021-10-06', '2222', 'Debit card');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `p_mode` varchar(30) DEFAULT NULL,
  `ac_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `user_id`, `p_mode`, `ac_no`) VALUES
(1, 1, 'COD', 1122334456),
(2, 2, 'Credit Card', 125678900),
(3, 3, 'Net Banking', 345678901),
(4, 4, 'Net banking', 234567890),
(5, 5, 'Credit card', 123456789),
(6, 6, 'Debit Card', 543219876),
(7, 7, 'COD', 654321987),
(8, 8, 'COD', 765432198),
(9, 9, 'Debit Card', 987654312),
(10, 10, 'Debit card', 987654321);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `p_name` varchar(30) DEFAULT NULL,
  `p_price` varchar(10) DEFAULT NULL,
  `p_color` varchar(10) DEFAULT NULL,
  `p_desc` varchar(100) DEFAULT NULL,
  `p_stock` varchar(10) DEFAULT NULL,
  `p_order_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `cat_id`, `sub_cat_id`, `p_name`, `p_price`, `p_color`, `p_desc`, `p_stock`, `p_order_date`) VALUES
(1, 1, 11, 'T shirt', '500', 'red', 'T shirt', '10', '2021-10-06'),
(2, 2, 12, 'charger', '700', 'black', 'Laptop charger', '11', '2021-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(30) DEFAULT NULL,
  `s_ac_no` int(11) DEFAULT NULL,
  `s_mobile` int(11) DEFAULT NULL,
  `s_address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`s_id`, `s_name`, `s_ac_no`, `s_mobile`, `s_address`) VALUES
(1, 'Manish', 1234567890, 1234323231, 'Ahmedabad'),
(2, 'Devarsh', 1234567810, 434322111, 'Ahmedabad'),
(3, 'Ranjeet', 456789123, 1234323232, 'Ahmedabad'),
(4, 'Jaydeep', 143143143, 234234234, 'Rajkot'),
(5, 'Shriya', 234567890, 123456789, 'Delhi'),
(6, 'Himanshu', 157157156, 444555666, 'jaipur'),
(7, 'mansi', 199199888, 888777541, 'Jaipur'),
(8, 'Vinit', 456456478, 143123140, 'jaipur'),
(9, 'Nikhil', 987654321, 654321987, 'Jaipur'),
(10, 'Anjani', 987645677, 909098765, 'Ahmedabad');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_cat_id` int(11) NOT NULL,
  `sub_cat_name` varchar(30) DEFAULT NULL,
  `sub_cat_image` blob DEFAULT NULL,
  `sub_cat_desc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_cat_id`, `sub_cat_name`, `sub_cat_image`, `sub_cat_desc`) VALUES
(11, 'men', 0x322e6a7067, 'Nice product'),
(12, 'kids', 0x322e6a7067, 'Nice product'),
(13, 'women', 0x322e6a7067, 'Nice product'),
(14, 'laptop', 0x322e6a7067, 'Nice product'),
(15, 'charger', 0x322e6a7067, 'Nice product'),
(16, 'CPU', 0x322e6a7067, 'Nice product'),
(17, 'computer', 0x322e6a7067, 'Nice product'),
(18, 'laptop', 0x322e6a7067, 'Nice product'),
(19, 'computer', 0x322e6a7067, 'Nice product'),
(20, 'men', 0x322e6a7067, 'Nice product');

-- --------------------------------------------------------

--
-- Table structure for table `user_regi`
--

CREATE TABLE `user_regi` (
  `id` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_regi`
--

INSERT INTO `user_regi` (`id`, `email`, `username`, `password`, `mobile`, `address`, `date`) VALUES
(1, 'virat@gmail.com', 'virat', 'kohli', 901165223, 'Delhi', NULL),
(2, 'rohit@gmail.com', 'rohit', 'sharma', 876587658, 'Mumbai', '2021-10-06'),
(3, 'rahul@gmail.com', 'kl', 'rahul', 876543876, 'Mumbai', '2021-10-03'),
(4, 'sky@gmail.com', 'sky', 'yadav', 1234567890, 'Mumbai', '2021-10-14'),
(5, 'pant@gmail.com', 'Pant', 'rishabh', 1234567980, 'Delhi', '2021-08-02'),
(6, 'pandya@gmail.com', 'hardik', 'pandya', 1234567676, 'mumbai', '2020-12-15'),
(7, 'jadeja@gmail.com', 'ravindra', 'bapu', 1431231431, 'Jamnagar', '2020-10-05'),
(8, 'bhuvi@gmail.com', 'bhuvi', 'swing', 1321541441, 'Mumbai', '2018-10-17'),
(9, 'jasprit@gmail.com', 'jassi', 'yorker', 1234554321, 'Mumbai', '2019-12-12'),
(10, 'chahal@gmail.com', 'yuzi', 'gamechanger', 1543215234, 'Mumbai', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `empployee`
--
ALTER TABLE `empployee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`or_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `sub_cat_id` (`sub_cat_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `s_ac_no` (`s_ac_no`),
  ADD UNIQUE KEY `s_mobile` (`s_mobile`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `user_regi`
--
ALTER TABLE `user_regi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `empployee`
--
ALTER TABLE `empployee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order1`
--
ALTER TABLE `order1`
  MODIFY `or_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_regi`
--
ALTER TABLE `user_regi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user_regi` (`id`);

--
-- Constraints for table `order1`
--
ALTER TABLE `order1`
  ADD CONSTRAINT `order1_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_regi` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`sub_cat_id`) REFERENCES `sub_category` (`sub_cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
