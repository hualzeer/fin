-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 07:06 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `truck`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'moh', 'moh123');

-- --------------------------------------------------------

--
-- Table structure for table `all_trucks`
--

CREATE TABLE `all_trucks` (
  `truck_id` int(11) NOT NULL,
  `truck_name` varchar(255) NOT NULL,
  `truck_password` varchar(255) NOT NULL,
  `truck_phone` int(15) NOT NULL,
  `truck_email` varchar(255) NOT NULL,
  `truck_image` varchar(255) NOT NULL,
  `truck_cost` int(255) NOT NULL,
  `truck_food` varchar(255) NOT NULL,
  `truck_info` longtext NOT NULL,
  `truck_location` varchar(255) NOT NULL,
  `accepted` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_trucks`
--

INSERT INTO `all_trucks` (`truck_id`, `truck_name`, `truck_password`, `truck_phone`, `truck_email`, `truck_image`, `truck_cost`, `truck_food`, `truck_info`, `truck_location`, `accepted`) VALUES
(16, 'macdonald', 'mac123', 79000000, 'macdonald@gmail.com', 'macc.png', 400, 'chicken', 'no comme', 'jbal amman', 'accepted'),
(17, 'kfc', 'kfc123', 790045465, 'kfc@gmail.com', 'kfc.png', 60000, '', ' Kleine Snacks zum kleinen Preis: Egal, ob du Lust auf Chicken oder zur Abwechslung mal auf etwas anderes hast, unsere Goodies sind legendär für zwischendurch!  Mehr erfahren     Gästeservice  PRODUKTE RESTAURANTS KARRIERE ÜBER KFC Kleine Snacks zum kleinen Preis: Egal, ob du Lust auf Chicken oder zur Abwechslung mal auf etwas anderes hast, unsere Goodies sind legendär für zwischendurch!  Mehr erfahren     Gästeservice  PRODUKTE RESTAURANTS KARRIERE ÜBER KFC Kleine Snacks zum kleinen Preis: Egal, ob du Lust auf Chicken oder zur Abwechslung mal auf etwas anderes hast, unsere Goodies sind legendär für zwischendurch!  Mehr erfahren     Gästeservice  PRODUKTE RESTAURANTS KARRIERE ÜBER KFC', 'germany', 'accepted'),
(24, 'Burger maker', 'maker123', 796415224, 'burger_maker@gmail.com', 'maker.png', 550, 'BURGER', ' Kleine Snacks zum kleinen Preis: Egal, ob du Lust auf Chicken oder zur Abwechslung mal auf etwas anderes hast, unsere Goodies sind legendär für zwischendurch!  Mehr erfahren     Gästeservice  PRODUKTE RESTAURANTS KARRIERE ÜBER KFC', 'ranbow street', 'accepted'),
(26, '', '', 0, '', '', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_details` varchar(2555) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_category` varchar(255) NOT NULL,
  `truck_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_details`, `item_image`, `item_category`, `truck_id`) VALUES
(15, 'hammer', 'nothing at all its just empty', '4.jpg', 'hotdog', 17),
(16, 'mande', '', 'howcuttingdo.jpg', 'rise', 17),
(17, 'sandwish super', '', 'pops.png', 'hotdog', 17),
(18, 'kabab sandwish', 'kabab , mayo', 'kfc_thumb_chicken_filetbites.png', 'kabab', 17),
(22, 'Nashmi Beef Burger', 'Makers Sauce, cheddar Cheese, Lettuce, Tomato, & Beef 100 g', '1.png', 'BEEF MEAL', 24),
(23, 'Potato Beef Burger', '80g beef, Tomato, Lettuce, Maker sauce, Cheese, Pickles', '2.jpg', 'BEEF MEAL', 24),
(24, 'Makers Beef Burger', '180 g Of Fresh Beef Patty , Cheddar Cheese, Tomato, lettuce, Pickles, Onion & Makers Beef Sauce.', '3.jpg', 'BEEF MEAL', 24),
(25, 'Turkish Beef Burger', 'BBQ sauce, Mozzarella Cheese, Lettuce, Tomato & Makers Sauce.', '4.jpg', 'BEEF MEAL', 24),
(26, 'American Beef Burger', 'Chili Sauce, Cheddar Cheese, Onion, Tomato, Lettuce & Makers Sauce.', '5.jpg', 'BEEF MEAL', 24),
(27, 'Chili Cheese Hotdog', 'Chili Sauce, Cheddar Cheese, Mayo And Onion.', '6.jpg', 'hotdog', 24),
(28, 'Makers Hotdog', 'Chips, Jalapeno, Cheddar Cheese, Corn, Tomato, Lettuce, Onion, Mayo ,Mustard & Ketchup.', '7.jpg', 'hotdog', 24),
(29, 'Buffalo Wings', 'CHICKEN', '8.jpg', 'Chicken Wings', 24),
(30, 'Sweet Chili Wings', 'CHICKEN', '9.jpg', 'Chicken Wings', 24),
(31, 'BBQ Wings', 'CHICKEN', '10.jpg', 'Chicken Wings', 24);

-- --------------------------------------------------------

--
-- Table structure for table `truck_categories`
--

CREATE TABLE `truck_categories` (
  `cat_id` int(255) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `truck_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `truck_categories`
--

INSERT INTO `truck_categories` (`cat_id`, `cat_title`, `truck_id`) VALUES
(1, 'chicken', 1),
(2, 'burger', 1),
(22, 'rise', 17),
(23, 'kabab', 17),
(24, 'kabab', 23),
(25, 'hotdog', 17),
(26, 'BEEF MEAL', 24),
(27, 'hotdog', 24),
(28, 'Chicken Wings', 24);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(111) NOT NULL,
  `user_name_first` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_location` mediumtext NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name_first`, `user_phone`, `user_email`, `user_location`, `user_password`) VALUES
(6, 'amjad', '0795425681', 'amjad@gmail.com', '', 'amjad132'),
(7, 'truck', '0798546125', 'truck@gmail.com', '', 'truck123'),
(8, 'truck132', '0798546125', 'truck@gmail.com', '', '$truck123'),
(9, 'hassan', '0798541259', 'hassan@gmail.com', '', 'hassan123'),
(10, 'hassan', '0798546125', 'hassan@gmail.com', '', 'has123');

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

CREATE TABLE `users_orders` (
  `order_id` int(11) NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `order_phone` varchar(255) NOT NULL,
  `order_email` varchar(255) NOT NULL,
  `order_location` varchar(255) NOT NULL,
  `order_pay` varchar(255) NOT NULL,
  `order_info` longtext NOT NULL,
  `truck_id` int(11) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `order_time` varchar(255) NOT NULL,
  `accepted` varchar(255) NOT NULL,
  `street` longtext NOT NULL,
  `order_category` varchar(2550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_orders`
--

INSERT INTO `users_orders` (`order_id`, `order_name`, `order_phone`, `order_email`, `order_location`, `order_pay`, `order_info`, `truck_id`, `order_date`, `order_time`, `accepted`, `street`, `order_category`) VALUES
(65, 'amjad', '0795425681  ', 'amjad@gmail.com', 'amman', 'cash', '', 17, '', '', 'accepted', '', 'rise,'),
(66, 'amjad', '0795425681  ', 'amjad@gmail.com', 'amman', 'cash', '', 17, '', '', 'accepted', '', 'rise,kabab,'),
(67, 'amjad', '0795425681  ', 'amjad@gmail.com', 'amman', 'cash', '', 17, '', '', 'accepted', '', 'rise,kabab,'),
(68, 'amjad', '0795425681  ', 'amjad@gmail.com', 'amman', 'credit card', 'no comment', 17, '2021-05-26', '10:00 - 12:00', 'not_accepted', ' دوار الثاني', 'rise,kabab,hotdog,'),
(69, 'amjad', '0795425681  ', 'amjad@gmail.com', 'amman', 'credit card', 'no comment', 17, '2021-05-26', '10:00 - 12:00', 'not_accepted', ' دوار الثاني', 'rise,kabab,hotdog,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `all_trucks`
--
ALTER TABLE `all_trucks`
  ADD PRIMARY KEY (`truck_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `truck_categories`
--
ALTER TABLE `truck_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_orders`
--
ALTER TABLE `users_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `all_trucks`
--
ALTER TABLE `all_trucks`
  MODIFY `truck_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `truck_categories`
--
ALTER TABLE `truck_categories`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
