-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 02:21 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `selv_tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(12) NOT NULL,
  `name` varchar(34) NOT NULL,
  `password` varchar(65) NOT NULL,
  `email` varchar(76) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `password`, `email`) VALUES
(1, 'zeen', 'z', 'z@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `c_mob` bigint(10) NOT NULL,
  `c_email` varchar(20) NOT NULL,
  `c_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `c_name`, `c_address`, `c_mob`, `c_email`, `c_pass`) VALUES
(1, 'Farmaz', 'Jeppu', 1234567890, 'f@gmail.com', 'fa');

-- --------------------------------------------------------

--
-- Table structure for table `item_details`
--

CREATE TABLE `item_details` (
  `pid` int(10) NOT NULL,
  `itemctg` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `quantity` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `rid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_details`
--

INSERT INTO `item_details` (`pid`, `itemctg`, `image`, `name`, `description`, `quantity`, `price`, `rid`) VALUES
(6, 'Pizza', 'product/genius (asif sir).png', 'fdsgs', 'trttr', 45, 453465, 0),
(9, 'Biryani', 'product/kudroli mtigers.png', 'dsfd', 'fddf', 43, 4555, 0),
(14, 'Juice', 'product/Haleema super shop kannada.png', 'nSL', 'SCJKL', 22, 4324, 0),
(16, 'Shawarma', 'product/6fba32b568fef022cc017e6bb4a19049.jpg', 'rrssss', 'SCJKL', 3, 300, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu_details`
--

CREATE TABLE `menu_details` (
  `mid` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(300) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_details`
--

INSERT INTO `menu_details` (`mid`, `name`, `image`, `category`) VALUES
(3, 'Broasted', 'product/mango B.png', 'Snacks'),
(4, 'Juice', 'product/AL-Khizar sticker3.png', 'Dinner'),
(17, 'rrggg', 'product/1_rxUhxYOSBh2txS8KdMWZ9A.jpeg', 'Breakfast'),
(18, 'rrggg', 'product/1_rxUhxYOSBh2txS8KdMWZ9A.jpeg', 'Breakfast');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_details`
--

CREATE TABLE `restaurant_details` (
  `rid` int(3) NOT NULL,
  `image` varchar(300) NOT NULL,
  `rname` varchar(30) NOT NULL,
  `oname` varchar(30) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant_details`
--

INSERT INTO `restaurant_details` (`rid`, `image`, `rname`, `oname`, `mob`, `email`, `pass`) VALUES
(5, 'product/Haifa Caterers 2.png', 'haifa caterers', 'farmaz', 1234, 'farzeenhussain832@gmail.com', 'fine'),
(7, 'product/1_rxUhxYOSBh2txS8KdMWZ9A.jpeg', 'ddtyff.co', 'farmaz', 23122321, 'nihaxoxo@gmail.com', 'zeen');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_profile`
--

CREATE TABLE `restaurant_profile` (
  `rpid` int(10) NOT NULL,
  `image` varchar(300) NOT NULL,
  `name` varchar(30) NOT NULL,
  `website` varchar(30) NOT NULL,
  `bio` varchar(300) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mob` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant_profile`
--

INSERT INTO `restaurant_profile` (`rpid`, `image`, `name`, `website`, `bio`, `email`, `mob`) VALUES
(1, '/productazad gases 2.png', 'ziyan', 'khhihhiogfjioj', 'jkjkhuihguihfghiojijijdfduhhhd', 'farzeenhussain832@gmail.com', 2147483647),
(2, '/productazad gases 2.png', 'ziyan', 'khhihhiogfjioj', 'jkjkhuihguihfghiojijijdfduhhhd', 'farzeenhussain832@gmail.com', 2147483647),
(3, '/productazad gases 2.png', 'ziyan', 'khhihhiogfjioj', 'jkjkhuihguihfghiojijijdfduhhhd', 'farzeenhussain832@gmail.com', 2147483647),
(4, '/product/', '', '', '', '', 0),
(5, '/product/mtigers print - Copy.png', 'ggfgf', 'ghghgh', 'fdhdfhdh', 'sbcahhsas@gmail.com', 5436346),
(6, 'product/', '', '', '', '', 0),
(7, 'product/', '', '', '', '', 0),
(8, 'product/', '', '', '', '', 0),
(9, 'product/', '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `item_details`
--
ALTER TABLE `item_details`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `menu_details`
--
ALTER TABLE `menu_details`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `restaurant_details`
--
ALTER TABLE `restaurant_details`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `restaurant_profile`
--
ALTER TABLE `restaurant_profile`
  ADD PRIMARY KEY (`rpid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item_details`
--
ALTER TABLE `item_details`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menu_details`
--
ALTER TABLE `menu_details`
  MODIFY `mid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `restaurant_details`
--
ALTER TABLE `restaurant_details`
  MODIFY `rid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `restaurant_profile`
--
ALTER TABLE `restaurant_profile`
  MODIFY `rpid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
