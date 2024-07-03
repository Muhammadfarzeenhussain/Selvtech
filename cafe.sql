-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 05:01 AM
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
-- Database: `cafe`
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
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `bid` int(11) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(200) NOT NULL,
  `content` longtext NOT NULL,
  `title` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`bid`, `date`, `image`, `content`, `title`) VALUES
(1, '2022-07-07', 'product/14.jpg', 'I love this italian curry so much its too good with spicy onion masala and with little pieces of crispy chicken', 'Italian Curry'),
(2, '2022-07-07', 'product/dishes-15.jpg', 'First let go over a brief history in 1994 Swarthmore College student Justin Hall is credited with the creation of the first blog', 'Russian Dish');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(10) NOT NULL,
  `cusid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `cprice` int(90) NOT NULL,
  `cquantity` int(20) NOT NULL,
  `rid` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cid`, `cusid`, `pid`, `cprice`, `cquantity`, `rid`) VALUES
(6, 0, 6, 220, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `username`, `email`, `password`, `phone`) VALUES
(1, 'Farmaz', 'farzeenhussain832@gmail.com', 'Zeen@123', 7795191929);

-- --------------------------------------------------------

--
-- Table structure for table `deliveryadd`
--

CREATE TABLE `deliveryadd` (
  `id` int(12) NOT NULL,
  `name` varchar(96) NOT NULL,
  `add` varchar(90) NOT NULL,
  `city` varchar(60) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `transid` varchar(23) NOT NULL,
  `status` varchar(60) NOT NULL,
  `oid` int(90) NOT NULL,
  `uid` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(23) NOT NULL,
  `cusid` int(23) NOT NULL,
  `content` longtext NOT NULL,
  `date` date NOT NULL,
  `pid` int(23) NOT NULL,
  `cname` varchar(56) NOT NULL,
  `rid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `cusid`, `content`, `date`, `pid`, `cname`, `rid`) VALUES
(1, 1, 'I like this dish very much it was too good!', '2022-07-07', 4, 'Farmaz', 2);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gid` int(12) NOT NULL,
  `gname` varchar(60) NOT NULL,
  `gimage` varchar(90) NOT NULL,
  `rid` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gid`, `gname`, `gimage`, `rid`, `date`) VALUES
(1, 'Roasted Chicken', 'product/01.jpg', 2, '2022-07-07'),
(2, 'Fish Fry', 'product/04.jpg', 2, '2022-07-07'),
(3, 'Meat Fried Masala', 'product/09.jpg', 2, '2022-07-07'),
(4, 'Flower Ball', 'product/02.jpg', 1, '2022-07-07'),
(5, 'Panner Roast', 'product/07.jpg', 1, '2022-07-07');

-- --------------------------------------------------------

--
-- Table structure for table `item_details`
--

CREATE TABLE `item_details` (
  `pid` int(10) NOT NULL,
  `image` varchar(300) NOT NULL,
  `Pname` varchar(30) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `quantity` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `rid` int(30) NOT NULL,
  `mid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_details`
--

INSERT INTO `item_details` (`pid`, `image`, `Pname`, `description`, `quantity`, `price`, `rid`, `mid`) VALUES
(1, 'product/3773094.jpg', 'Hariyali Shawarma', 'Very spicy with crispy chicken ', 100, 200, 1, 1),
(2, 'product/product-four.jpg', 'Roti Roll', 'Awesome veg classic roll', 100, 150, 1, 3),
(3, 'product/WhatsApp Image 2022-06-28 at 11.24.37 PM.jpeg', 'Kulukki', 'Mango and chilli mixed kulukki', 0, 50, 1, 2),
(4, 'product/product-two.jpg', 'Big Fat Sandwich', 'Its very Good awesome sandwich with italian sauce', 100, 65, 2, 4),
(5, 'product/product-one.jpg', 'Burger Sandwich', 'its very good with chicken pattie', 100, 120, 2, 4),
(6, 'product/WhatsApp Image 2022-06-28 at 11.24.35 PM (1).jpeg', 'Flower Pizza', 'its very good with red chilli sauce', 100, 220, 4, 7),
(7, 'product/WhatsApp Image 2022-06-28 at 11.24.36 PM (2).jpeg', 'Grape Kulukki', 'WOW.....! its awesome grape flavour', 100, 50, 4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `menu_details`
--

CREATE TABLE `menu_details` (
  `mid` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mimage` varchar(300) NOT NULL,
  `category` varchar(30) NOT NULL,
  `rid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_details`
--

INSERT INTO `menu_details` (`mid`, `name`, `mimage`, `category`, `rid`) VALUES
(1, 'Shawarma', 'product/WhatsApp Image 2022-06-28 at 11.24.34 PM.jpeg', 'Dinner', 1),
(2, 'Shakes', 'product/WhatsApp Image 2022-06-28 at 11.24.20 PM.jpeg', 'Drink', 1),
(3, 'Rolls', 'product/WhatsApp Image 2022-06-28 at 11.24.33 PM.jpeg', 'Snacks', 1),
(4, 'Sandwich', 'product/WhatsApp Image 2022-06-28 at 11.31.36 PM.jpeg', 'Breakfast', 2),
(5, 'Shawarma', 'product/WhatsApp Image 2022-06-28 at 11.31.37 PM.jpeg', 'Snacks', 2),
(6, 'Kulukki', 'product/WhatsApp Image 2022-06-28 at 11.24.37 PM.jpeg', 'Drink', 4),
(7, 'Pizza', 'product/462773.jpg', 'Lunch', 4);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) NOT NULL,
  `ogrand_total` int(100) NOT NULL,
  `ouser_id` varchar(100) NOT NULL,
  `ostatus` varchar(100) NOT NULL,
  `odate` date NOT NULL,
  `track` varchar(56) NOT NULL,
  `rid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `ogrand_total`, `ouser_id`, `ostatus`, `odate`, `track`, `rid`) VALUES
(1, 130, '1', 'PAID', '2022-07-07', 'Order Ready', 2),
(2, 500, '1', 'PAID', '2022-07-07', 'Served', 1),
(3, 240, '1', 'PAID', '2022-07-07', '', 2),
(4, 440, '1', 'PAID', '2022-07-07', 'Served', 4),
(5, 50, '1', 'PAID', '2022-07-07', '', 4),
(6, 50, '1', 'PAID', '2022-07-07', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_det`
--

CREATE TABLE `order_det` (
  `order_id` int(12) NOT NULL,
  `C_ID` int(10) NOT NULL,
  `P_ID` int(20) NOT NULL,
  `Date` date NOT NULL,
  `price` int(40) NOT NULL,
  `Order_Status` int(10) NOT NULL DEFAULT 0,
  `Del_Qty` decimal(50,0) NOT NULL,
  `O_ID` int(20) NOT NULL,
  `rid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_det`
--

INSERT INTO `order_det` (`order_id`, `C_ID`, `P_ID`, `Date`, `price`, `Order_Status`, `Del_Qty`, `O_ID`, `rid`) VALUES
(1, 1, 4, '2022-07-07', 65, 0, '2', 1, 2),
(2, 1, 1, '2022-07-07', 200, 0, '1', 2, 1),
(3, 1, 2, '2022-07-07', 150, 0, '2', 2, 1),
(4, 1, 5, '2022-07-07', 120, 0, '2', 3, 2),
(5, 1, 6, '2022-07-07', 220, 0, '2', 4, 4),
(6, 1, 7, '2022-07-07', 50, 0, '1', 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Pay_ID` int(10) NOT NULL,
  `O_ID` int(16) NOT NULL,
  `Pay_Tot` varchar(20) NOT NULL,
  `Pay_Method` varchar(10) NOT NULL,
  `Pay_Date` date NOT NULL,
  `C_ID` int(20) NOT NULL,
  `tid` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Pay_ID`, `O_ID`, `Pay_Tot`, `Pay_Method`, `Pay_Date`, `C_ID`, `tid`) VALUES
(1, 1, '130', 'ONLINE', '2022-07-07', 1, 'pay_JqC2q46jUdsAQy'),
(2, 2, '500', 'ONLINE', '2022-07-07', 1, 'pay_JqCLbFwn6srtwg'),
(3, 3, '240', 'ONLINE', '2022-07-07', 1, 'pay_JqCSvw8xCMG2IX'),
(4, 4, '440', 'ONLINE', '2022-07-07', 1, 'pay_JqJWcuqvvoaS6u'),
(5, 5, '50', 'ONLINE', '2022-07-07', 1, 'pay_JqJaFqczrmrq7i'),
(6, 6, '50', 'ONLINE', '2022-07-07', 1, 'pay_JqJaFqczrmrq7i');

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
(1, 'product/WhatsApp Image 2022-06-28 at 11.24.34 PM (1).jpeg', 'Aladdin Shawarma', 'Abu Usman', 8011156788, 'aladdin@gmail.com', 'Aladdin!1'),
(2, 'product/WhatsApp Image 2022-06-28 at 11.31.35 PM.jpeg', 'Olive Street', 'Nikith Kumar', 9215156723, 'olivestreet@gmail.com', 'Olive!1'),
(3, 'product/WhatsApp Image 2022-06-28 at 11.24.36 PM.jpeg', 'Pizza Hut', 'Manual Dsouza', 9003356748, 'pizzahut@gmail.com', 'Pizza!1'),
(4, 'product/WhatsApp Image 2022-06-28 at 11.24.36 PM (1).jpeg', 'Kulukki Hub', 'Ashiq', 8050400788, 'kulukki@gmail.com', 'Kulukki!1');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `cusid` (`cusid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `deliveryadd`
--
ALTER TABLE `deliveryadd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gid`);

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
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_det`
--
ALTER TABLE `order_det`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `O_ID` (`O_ID`),
  ADD KEY `P_ID` (`P_ID`),
  ADD KEY `C_ID` (`C_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Pay_ID`),
  ADD KEY `C_ID` (`C_ID`),
  ADD KEY `O_ID` (`O_ID`);

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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deliveryadd`
--
ALTER TABLE `deliveryadd`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `item_details`
--
ALTER TABLE `item_details`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu_details`
--
ALTER TABLE `menu_details`
  MODIFY `mid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_det`
--
ALTER TABLE `order_det`
  MODIFY `order_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Pay_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `restaurant_details`
--
ALTER TABLE `restaurant_details`
  MODIFY `rid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `restaurant_profile`
--
ALTER TABLE `restaurant_profile`
  MODIFY `rpid` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
