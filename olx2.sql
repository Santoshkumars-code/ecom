-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2021 at 06:32 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olx2`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `dob` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `dp` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `contact`, `email`, `address`, `dob`, `dp`, `password`) VALUES
(1, 'MOHIT KUMAR', 2147483647, 'rock@gmail.com', 'Rambagh', '2018-11-15 18:30:00.000000', 'Screenshot (69).png', '12345678'),
(2, 'MOHIT KUMAR', 2147483647, 'rock@gmail.com', 'Rambagh', '2018-11-15 18:30:00.000000', 'Screenshot (69).png', '12345678'),
(3, 'Mukesh kumar', 2147483647, 'rock@gmail.com', 'purnea', '2000-02-16 18:30:00.000000', 'key ring.jpg', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_title`) VALUES
(1, 'Electronic gadget'),
(4, 'Transportation'),
(5, 'Cars'),
(6, 'Motorcycles'),
(7, 'Mobile Phones'),
(8, 'Commercial Vehicles'),
(9, 'For Sale:Houses & Appartments'),
(10, 'For Rent:Houses & Appartments');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(50) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_desc` text NOT NULL,
  `brand` varchar(50) NOT NULL,
  `p_image` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `p_cat_id` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `seller_name` text NOT NULL,
  `seller_address` text NOT NULL,
  `qty` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_desc`, `brand`, `p_image`, `price`, `p_cat_id`, `date`, `seller_name`, `seller_address`, `qty`) VALUES
(22, 'Laptop', 'It is higher speed processor ', 'Apple', 'apple3.jpg', 65000, '1', '2021-03-23 13:27:13', '', '', 3),
(24, 'Laptop', 'It is faster.and magic colour.', 'Apple', 'apple3.jpg', 53625, '1', '2021-03-23 14:48:04', '', '', 2),
(45, 'Bike', 'It is faster.', 'ride', 'bike4.jpg', 21599, '6', '2021-03-23 16:31:11', '', '', 1),
(48, 'Redmi', 'Its battary backup high performance and fast charging. It is nine looking.', 'mi', 'j.jpg', 24999, '7', '2021-03-25 08:04:45', 'Amit kumar', 'Madhubanni purnea', 1),
(49, 'Bike', 'It is higher speed processor Lorem', 'ktm', 'bike2.jpg', 21599, '6', '2021-04-03 06:42:29', 'ajay kr', 'purneea', 1),
(50, 'Transport', 'It is faster. and it make eassy travel for long drive.', 'ots', 'trasportation.jpg', 5000, '4', '2021-04-03 14:24:27', 'Amit kumar', 'purnea', 1),
(51, 'Maruti', 'It is faster.and more mileze . Nice looks high speed.', 'Mahendra', 'car.jpg', 500000, '5', '2021-04-03 14:29:06', 'Akash kumar', 'Line bajar purnea', 1),
(52, 'Maruti', 'It is nice looks. High speed . it has six sits avlable.', 'Suzuki', 'car1.jpg', 650000, '5', '2021-04-03 14:33:25', 'Vikas sharma', 'Nepal', 1),
(53, 'Maruti', 'It is faster and magic colour & high speed.', 'Suzuki', 'car2.jpg', 745000, '5', '2021-04-03 14:36:57', 'Manish kr', 'Patna', 2),
(54, 'Maruti', 'It is faster and magic colour & high speed.', 'Suzuki', 'car3.jpg', 564000, '5', '2021-04-03 14:38:35', 'Abhijeet roy', 'Patna', 3),
(55, 'Maruti', 'It is faster and magic colour & high speed.', 'Tata', 'car6.jpg', 3520000, '5', '2021-04-03 14:39:49', 'Akash kumar', 'Line bajar purnea', 2),
(56, 'car', 'It is faster and magic colour & high speed.', 'Suzuki', 'car5.jpg', 235000, '5', '2021-04-03 14:41:11', 'Abhijeet roy', 'Madhubanni purnea', 2),
(57, 'Bike', 'It is faster  & high speed bike.it is also know as ride bike.', 'Yama', 'bike5.jpg', 100000, '6', '2021-04-03 14:43:50', 'Abhijeet roy', 'Line bajar purnea', 1),
(58, 'Bike', 'It is faster  & high speed bike.it is also know as ride bike.', 'Honda', 'bike.jpg', 24000, '6', '2021-04-03 14:46:55', 'Raj ', 'Bhopal', 1),
(59, 'Bike', 'It is faster  & high speed bike.it is also know as ride bike.', 'ktm', 'bike2.jpg', 320000, '5', '2021-04-03 14:48:13', 'Abhisek kr', 'Gaya', 3),
(60, 'Bike', 'It is faster  & high speed bike.it is also know as ride bike.', 'tvs', 'bike7.jpg', 320000, '6', '2021-04-03 14:49:32', 'Akash kumar', 'Bhopal', 1),
(61, 'Mobile', 'Its battary backup high performance and fast charging. It is nine looking.', 'OPPO', 'l.jpg', 21999, '7', '2021-04-03 14:52:17', 'Manish kr', 'purnea', 1),
(62, 'Mobile', 'Its battary backup high performance and fast charging. It is nine looking.', 'Oppo A5', 'a.jpg', 19989, '7', '2021-04-03 14:54:17', 'Vikas sharma', 'Patna', 1),
(63, 'Mobile A5', 'Its battary backup high performance and fast charging. It is nine looking.', 'Oppo', 'b.jpg', 19989, '7', '2021-04-03 14:55:59', 'Abhijeet roy', 'Madhubanni purnea', 1),
(64, 'Mobile', 'Its battary backup high performance and fast charging. It is nine looking.', 'Oppo A5', 'd.jpg', 21599, '7', '2021-04-03 14:57:23', 'Ajay kr', 'purnea', 1),
(65, 'House', 'It has seven room & nice design of house. it has also swimming pool.', 'Raaz', 'home4.jpg', 152000, '9', '2021-04-03 15:03:20', 'Rakesh kr', 'Delhi', 1),
(66, 'House', 'It has seven room & nice design of house. it has also swimming pool.', 'Raaz', 'home3.jpg', 1252210, '9', '2021-04-03 15:04:21', 'Vikas sharma', 'Patna', 1),
(68, 'House', 'It has seven room & nice design of house. it has also swimming pool.', 'Raaz', 'home5.jpg', 5458210, '9', '2021-04-03 15:06:14', 'Manish kr', 'Madhubanni purnea', 1),
(69, 'House', 'It has seven room & nice design of house. it has also swimming pool.', 'joy', 'home6.jpg', 321500, '9', '2021-04-03 15:07:32', 'Akash kumar', 'Goa', 1),
(70, 'Vehicles', 'It is used to inport & export goods. one place to another place.', 'tata', 'commerial2.jpg', 23000, '8', '2021-04-03 15:12:22', 'Anwer khan', 'Delhi', 1),
(71, 'Vehicles', 'It is used to inport & export goods. one place to another place.', 'Honda', 'commerial3.jpg', 321000, '8', '2021-04-03 15:13:31', 'Vikas sharma', 'Gaya', 1),
(72, 'Vehicles', 'It is used to inport & export goods. one place to another place.', 'Suzuki', 'commerial.jpg', 15000, '8', '2021-04-03 15:14:58', 'Abhijeet roy', 'Bhopal', 1),
(73, 'Vehicles', 'It is used to inport & export goods. one place to another place.', 'Honda', 'commerial1.jpg', 563201, '8', '2021-04-03 15:16:25', 'Vikas sharma', 'Goa', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
