-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2021 at 07:11 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adrelease`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Login_id` int(20) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Login_id`, `Username`, `Password`, `Email`, `Contact`) VALUES
(1, 'Het Patel', '2705', 'het@gmail.com', 7574041859),
(2, 'Ashish', 'ashish1234', 'ashu@gmail.com', 7041909995),
(3, 'Dhruv', 'dhruv1234', 'dhruv@gmail.com', 9157472229);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Agency_id` int(20) NOT NULL,
  `Agency_name` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Owner_name` varchar(40) NOT NULL,
  `Established_date` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(40) NOT NULL,
  `State` varchar(40) NOT NULL,
  `Request_date` date NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Agency_id`, `Agency_name`, `Email`, `Contact`, `Owner_name`, `Established_date`, `Address`, `City`, `State`, `Request_date`, `Password`, `Status`) VALUES
(1, 'sandesh', 'sandesh@gmail.com', 9925834602, 'Het', '2021-01-19', 'c 33 harinandan complex', 'ahmedabad', 'Gujarat', '2021-01-04', '1234', 'good'),
(5, 'gujarat', 'gu@gmail.com', 992292929, 'HET', '2020-02-02', 'HARINANDAN', 'AHMEDABAD', 'Gujarat', '2021-03-05', '2705', 'Done'),
(6, 'divy', 'divy@gmail.com', 9925834602, 'het', '0000-00-00', 'B-73 Harinandan tenament arbudanagar odhav ahmedab', 'Ahmedabad', 'Gujarat', '0000-00-00', '1234', 'done'),
(7, 'nav', 'nav@gmail.com', 7474747474, 'het patel', '2018-02-02', 'b 73 harinandan society \r\n', 'ahmedabad', 'Gujarat', '2020-02-02', '1234', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id` int(20) NOT NULL,
  `Fname` varchar(40) NOT NULL,
  `Lname` varchar(40) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Dob` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Request_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Id`, `Fname`, `Lname`, `Gender`, `Dob`, `Email`, `Contact`, `Address`, `Password`, `Request_date`) VALUES
(1, 'Het', 'Patel ', 'male', '2021-01-14', 'het@gmail.com', 7574041859, 'B 73 harinandan tenament', '1234', '2021-01-14'),
(2, 'het', '', '', '0000-00-00', '', 0, '', '', '0000-00-00'),
(3, 'het', 'patel', 'Male', '2021-01-07', 'hetp747@gmail.com', 1234, 'B-73 Harinandan tenament arbudanagar odhav ahmedab', '123', '2021-01-15'),
(4, 'Het', 'Patel', 'Male', '2021-03-26', 'hetp747@gmail.com', 7574, 'B-73 Harinandan tenament arbudanagar odhav ahmedab', '1234', '2021-03-19'),
(5, 'het', 'Patel', 'Male', '2021-03-12', 'het@gmail.com', 99253272, 'B-73 Harinandan tenament arbudanagar odhav ahmedab', '1234', '2021-03-19'),
(6, 'het', 'Patel', 'Male', '2021-03-12', 'het@gmail.com', 99253272, 'B-73 Harinandan tenament arbudanagar odhav ahmedab', '12345', '2021-03-19'),
(7, 'henil', 'patel', 'Male', '2000-03-12', 'henil@gmail.com', 9876543, 'B-73 Harinandan tenament arbudanagar odhav ahmedab', '2705', '2021-04-01'),
(8, 'Het', 'Patel', 'Male', '0000-00-00', 'hetp747@gmail.com', 7574, 'B-73 Harinandan tenament arbudanagar odhav ahmedab', '1234', '2021-03-19'),
(9, '', '', '', '0000-00-00', '', 0, '', '123', '0000-00-00'),
(10, 'mehta', 'dhruv', 'Male', '2000-02-22', 'd@gmail.com', 9654321, 'bdbwyyw', '9157', '2021-03-19'),
(11, 'Het', 'Patel', 'Male', '2001-05-27', 'hetp1010@gmail.com', 7574, 'B-73 Harinandan tenament arbudanagar odhav ahmedab', '1234', '2021-03-10'),
(12, '', '', '', '0000-00-00', '', 0, '', '', '0000-00-00'),
(13, 'Mousmi', 'Patel', 'Female', '2021-03-03', 'moshmipatel@gmail.com', 9925834602, 'B-73 Harinandan tenament arbudanagar odhav ahmedab', 'Patel2001', '2021-03-03'),
(14, 'hetr', 'patel', 'Male', '2021-03-27', 'hetpp@gmail.com', 9925834602, 'ahmedabad', 'Hetpatel123', '2021-03-08'),
(15, 'Het', 'Patel', 'Male', '2001-05-27', 'hetp747@gmail.com', 9925834602, 'B-73 Harinandan tenament arbudanagar odhav ahmedab', 'Hetpatel2001', '2021-03-02'),
(16, 'Dhruv', 'Mehta', 'Male', '2001-05-27', 'mehtaalpha2@gmail.com', 9157472229, 'B-73 Harinandan tenament arbudanagar odhav ahmedab', 'Dhruv1234', '2021-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `F_id` int(20) NOT NULL,
  `Customer_id` int(20) NOT NULL,
  `Message` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `agency_id` varchar(60) NOT NULL,
  `ratings` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`F_id`, `Customer_id`, `Message`, `Date`, `agency_id`, `ratings`) VALUES
(1, 7, 'Nice to visit your website!', '2021-03-30', '5', 3),
(2, 7, 'Nice to get in touch with new advertising agencies', '2021-03-30', '1', 4),
(3, 16, 'got increase in number of customers because of you', '2021-03-30', '5', 5),
(4, 16, 'Nothing to say\r\nJust like to give you 5 star ratin', '2021-03-30', '5', 5),
(5, 3, 'heyy', '2021-03-30', '6', 2),
(6, 3, 'Hello', '2021-03-30', '6', 3),
(7, 3, 'how are you??', '2021-03-30', '5', 4),
(8, 3, 'amazing services', '2021-03-30', '5', 5),
(9, 3, 'words are not enough to describe you!', '2021-03-30', '1', 5),
(10, 3, 'heyy! how are you?', '2021-03-30', '5', 2);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `Inq_id` int(20) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Message` varchar(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`Inq_id`, `Name`, `Email`, `Contact`, `Message`, `Date`) VALUES
(1, 'ashu', 'ashu@gmail.com', 54584, 'hy how are you??', '2021-01-22'),
(2, 'Het Patel', 'hetp747@gmail.com', 0, 'eger', '2021-01-07'),
(3, 'Dhruv', 'mehta4937@gmail.com', 876543, 'trgvgjwdnqha', '2021-01-29'),
(4, 'Dhruv', 'mehta4937@gmail.com', 876543, 'trgvgjwdnqha', '2021-01-29'),
(5, 'hetp747@gmail.com', 'hetp747@gmail.com', 7574, '', '0000-00-00'),
(6, 'hetp747@gmail.com', 'hetp747@gmail.com', 7574, '', '0000-00-00'),
(7, 'hetp747@gmail.com', 'hetp747@gmail.com', 7574, 'KKKK', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `Ad_id` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Size` varchar(30) NOT NULL,
  `Price` float NOT NULL,
  `ad_page` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(255) NOT NULL,
  `Agency_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `papper_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `Ad_id`, `Title`, `Size`, `Price`, `ad_page`, `user_id`, `description`, `filename`, `Agency_id`, `order_date`, `papper_date`) VALUES
(5, 11, 'Testing Demo', '2', 1212, '11', 7, 'hiii ooooye', '1264.jpg', 1, '0000-00-00', '0000-00-00'),
(6, 12, 'dsasad', '2', 1212, '11', 7, 'hello dhruv\r\n', '1263.jpg', 1, '0000-00-00', '0000-00-00'),
(7, 13, 'nav gujarat samachar', '2', 787, '10', 7, 'hello dharuv mehta ', 'times.png', 7, '0000-00-00', '0000-00-00'),
(8, 11, 'Testing Demo', '2', 1212, '11', 7, 'helo', 'Sandesh_News.jpg', 1, '2021-03-15', '2021-03-16'),
(9, 13, 'nav gujarat samachar', '2', 787, '10', 7, 'hello..', 'Sandesh_News.jpg', 7, '2021-03-18', '2021-03-17'),
(10, 16, 'nav gujarat samachar', '2', 999, '11', 7, 'hello', 'AD RELEASE 21-3-2021.pdf', 1, '2021-03-24', '2021-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `order_ad`
--

CREATE TABLE `order_ad` (
  `Order_id` int(20) NOT NULL,
  `Order_date` date NOT NULL,
  `Ad_id` int(20) NOT NULL,
  `Customer_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_ad`
--

INSERT INTO `order_ad` (`Order_id`, `Order_date`, `Ad_id`, `Customer_id`) VALUES
(1, '2021-01-15', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_ad`
--

CREATE TABLE `table_ad` (
  `Ad_id` int(20) NOT NULL,
  `Title` varchar(40) NOT NULL,
  `Size` int(10) NOT NULL,
  `Description` text NOT NULL,
  `Price` int(15) NOT NULL,
  `ad_type` varchar(20) NOT NULL,
  `ad_page` varchar(20) NOT NULL,
  `Agency_id` int(20) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_ad`
--

INSERT INTO `table_ad` (`Ad_id`, `Title`, `Size`, `Description`, `Price`, `ad_type`, `ad_page`, `Agency_id`, `logo`) VALUES
(11, 'Testing Demo', 2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In pariatur nostrum asperiores corrupti delectus.', 1212, 'online', '11', 1, 'dainik.png'),
(12, 'dsasad', 2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In pariatur nostrum asperiores corrupti delectus.', 1212, 'online', '11', 1, 'divy.jpg'),
(13, 'nav gujarat samachar', 2, 'this is nav gujarat samachart addd', 787, 'online', '10', 7, 'nav.png'),
(14, 'nav gujarat samachar', 3, 'this is nav gujarat best advertisement newspaper for devlop your business', 1000, 'offline', '1', 1, 'nav.png'),
(15, 'nav gujarat samachar', 4, 'this is nav gujarat best advertisement newspaper ', 1050, 'offline', '1', 1, 'nav.png'),
(16, 'nav gujarat samachar', 2, 'this is nav gujarat best advertisement newspaper', 999, 'offline', '11', 1, 'nav.png'),
(17, 'GUJARAT SAMACHAR ', 2, 'this is gujarat samachar best advertisement newspaper ', 1040, 'offline', '11', 1, 'gujarat.png'),
(18, 'DainikBhsakar', 2, 'this is dainikbhaskar best advertisement newspaper', 1010, 'offline', '11', 1, 'dainik.png'),
(19, 'Sandesh', 2, 'this is sandesh best advertisement newspaper ', 1080, 'offline', '11', 1, 'Sandesh_News.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int(20) NOT NULL,
  `view` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `view`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(109, 1),
(110, 1),
(111, 1),
(112, 1),
(113, 1),
(114, 1),
(115, 1),
(116, 1),
(117, 1),
(118, 1),
(119, 1),
(120, 1),
(121, 1),
(122, 1),
(123, 1),
(124, 1),
(125, 1),
(126, 1),
(127, 1),
(128, 1),
(129, 1),
(130, 1),
(131, 1),
(132, 1),
(133, 1),
(134, 1),
(135, 1),
(136, 1),
(137, 1),
(138, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Login_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Agency_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`F_id`),
  ADD KEY `Customer_id` (`Customer_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`Inq_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `Ad_id` (`Ad_id`);

--
-- Indexes for table `order_ad`
--
ALTER TABLE `order_ad`
  ADD PRIMARY KEY (`Order_id`),
  ADD KEY `Ad_id` (`Ad_id`),
  ADD KEY `Customer_id` (`Customer_id`),
  ADD KEY `Ad_id_2` (`Ad_id`),
  ADD KEY `Customer_id_2` (`Customer_id`);

--
-- Indexes for table `table_ad`
--
ALTER TABLE `table_ad`
  ADD PRIMARY KEY (`Ad_id`),
  ADD KEY `Agency_id` (`Agency_id`) USING BTREE;

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Login_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `Agency_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `F_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `Inq_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_ad`
--
ALTER TABLE `order_ad`
  MODIFY `Order_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_ad`
--
ALTER TABLE `table_ad`
  MODIFY `Ad_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`Ad_id`) REFERENCES `table_ad` (`Ad_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `customer` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `table_ad`
--
ALTER TABLE `table_ad`
  ADD CONSTRAINT `table_ad_ibfk_1` FOREIGN KEY (`Agency_id`) REFERENCES `company` (`Agency_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
