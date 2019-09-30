-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 29, 2019 at 10:36 PM
-- Server version: 10.1.38-MariaDB-0ubuntu0.18.10.2
-- PHP Version: 7.2.19-0ubuntu0.18.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ger`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` varchar(250) NOT NULL,
  `product_img1` varchar(500) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_keywords` varchar(250) NOT NULL,
  `product_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_price`, `product_keywords`, `product_desc`) VALUES
(7, 2, 5, '2019-09-25 16:31:44', 'dafa', 'product-6.jpg', 123, '23', '112');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Doors', 'A car door is a type of door, typically hinged, but sometimes attached by other mechanisms such as tracks, in front of an opening which is used for entering and exiting a vehicle. A vehicle door can be opened to provide access to the opening, or closed to secure it. These doors can be opened manually, or powered electronically. Powered doors are usually found on minivans, high-end cars, or modified cars. '),
(2, 'Glass', 'Car glass includes windscreens, side and rear windows, and glass panel roofs on a vehicle. Side windows can be either fixed or raised and lowered by depressing a button (power window) or switch or using a hand-turned crank. The power moonroof, a transparent, retractable sunroof, may be considered as an extension of the power window concept. Some vehicles include sun blinds for rear and rear side windows. The windshield of a car is appropriate for safety and protection of debris on the road. The majority of car glass is held in place by glass run channels, which also serve to contain any fragments of glass if the glass breaks.\r\n\r\nBack Glass also called rear window glass, rear windshield, or rear glass, is the piece of glass opposite the windshield in a vehicle. Back glass is made from tempered glass, also known as safety glass, and when broken will shatter into small, round pieces. This is different from a front windshield, which is made of laminated glass, glass which consists of two pieces of glass, with vinyl in between.\r\n\r\nThis piece of glass may contain heating coils or antennae, depending on the year, make, and model of the vehicle. When broken, a back glass may be replaced by a technician to the specifications of the original glass of the vehicle '),
(3, 'Battery', 'An automotive battery is a rechargeable battery that supplies electrical current to a motor vehicle. Its main purpose is to feed the starter, which starts the engine. Once the engine is running, power for the car\'s electrical systems is supplied by the alternator. '),
(4, 'Light', 'The lighting system of a motor vehicle consists of lighting and signalling devices mounted or integrated to the front, rear, sides, and in some cases the top of a motor vehicle. This lights the roadway for the driver and increases the visibility of the vehicle, allowing other drivers and pedestrians to see a vehicle\'s presence, position, size, direction of travel, and the driver\'s intentions regarding direction and speed of travel. Emergency vehicles usually carry distinctive lighting equipment to warn drivers and indicate priority of movement in traffic. '),
(5, 'Roof Rack', 'A roof rack is a set of bars secured to the roof of a motor car.It is used to carry bulky items such as luggage, bicycles, canoes, kayaks, skis, or various carriers and containers.\r\n\r\nThey allow users of an automobile to transport objects on the roof of the vehicle without reducing interior space for occupants, or the cargo area volume limits such as in the typical car\'s trunk design. These include car top weatherproof containers, some designed for specific cargo such as skis or luggage'),
(6, 'Brakes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'),
(7, 'Speakers', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'),
(8, 'Tyre', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`) VALUES
(1, 'Slide number 1', 'slide-1.jpg'),
(2, 'Slide number 2', 'slide-2.jpg'),
(3, 'Slide number 3', 'slide-3.jpg'),
(4, 'slide number 4', 'slide-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) NOT NULL,
  `AdminuserName` varchar(120) NOT NULL,
  `MobileNumber` int(10) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Password` varchar(120) NOT NULL,
  `AdminRegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `AdminuserName`, `MobileNumber`, `Email`, `Password`, `AdminRegDate`) VALUES
(2, 'test', 'test', 457816171, 'test@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '2019-09-22 11:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `ID` int(10) NOT NULL,
  `VehicleCat` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`ID`, `VehicleCat`) VALUES
(1, 'Car'),
(2, 'Small Bus'),
(3, 'Small Vans'),
(4, 'Bikes'),
(5, 'MotorBikes'),
(6, 'nthin');

-- --------------------------------------------------------

--
-- Table structure for table `tblenginetype`
--

CREATE TABLE `tblenginetype` (
  `ID` int(10) NOT NULL,
  `enginetype` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblenginetype`
--

INSERT INTO `tblenginetype` (`ID`, `enginetype`) VALUES
(1, 'Diesel'),
(2, 'Petrol'),
(3, 'Hybrid'),
(4, 'Electric');

-- --------------------------------------------------------

--
-- Table structure for table `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `ID` int(10) NOT NULL,
  `UserId` int(10) NOT NULL,
  `EnquiryNumber` varchar(120) NOT NULL,
  `FullName` varchar(500) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `EnquiryType` varchar(120) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `EnquiryDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `AdminResponse` varchar(250) NOT NULL,
  `AdminStatus` int(10) NOT NULL,
  `AdminRemarkdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblenquiry`
--

INSERT INTO `tblenquiry` (`ID`, `UserId`, `EnquiryNumber`, `FullName`, `Email`, `EnquiryType`, `Description`, `EnquiryDate`, `AdminResponse`, `AdminStatus`, `AdminRemarkdate`) VALUES
(6, 0, '767470603', 'paras dua', 'paras.dua@pimcore.com', 'Price Related Enquiry', '1234', '2019-09-26 16:13:45', 'qw', 1, '2019-09-26 15:59:04'),
(8, 1, '245057356', 'paras dua', 'paras.dua@pimcore.com', 'Price Related Enquiry', 'QWESRDFG', '2019-09-26 16:15:45', 'sd', 1, '2019-09-26 16:08:37'),
(9, 1, '982658906', 'paras dua', 'paras.dua@pimcore.com', 'Price Related Enquiry', 'QWESRDFG', '2019-09-26 16:08:37', '', 0, '2019-09-26 16:08:37');

-- --------------------------------------------------------

--
-- Table structure for table `tblenquirytype`
--

CREATE TABLE `tblenquirytype` (
  `ID` int(10) NOT NULL,
  `EnquiryType` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblenquirytype`
--

INSERT INTO `tblenquirytype` (`ID`, `EnquiryType`) VALUES
(1, 'Service Related Enquiry'),
(2, 'Price Related Enquiry'),
(3, 'Parts Related Enquiry'),
(4, 'Other Enquiry');

-- --------------------------------------------------------

--
-- Table structure for table `tblmechanics`
--

CREATE TABLE `tblmechanics` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(120) NOT NULL,
  `MobileNumber` int(20) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmechanics`
--

INSERT INTO `tblmechanics` (`ID`, `FullName`, `MobileNumber`, `Email`, `Address`) VALUES
(1, 'Shonaya', 2147483647, 'lal@gmail.com', 'H.NO 6/8 New Delhi'),
(2, 'Naveen', 2147483647, 'munna@gmail.com', '6790 Plot, Delhi'),
(3, 'Rashid', 2147483647, 'rashid@gmail.com', '45-A, gali no 50, new colony new delhi'),
(4, 'Rahul Kumar', 2147483647, 'rahul@gmail.com', 'c/o, Mohan Rajnagar near metro place B3/4144'),
(5, 'Harish Singh', 2147483647, 'harish@gmail.com', 'gh-67, sohna road haryana'),
(6, 'Jone', 2147483647, 'jone@gmail.com', 'shastri Niketan gali no:75 near baikund dham neelgari Himchal Pradesh'),
(7, 'test mech', 423423423, 'restmech@gmail.com', 'New Delhi India'),
(8, 'rahul nagar', 987654321, 'rahul@gmail.com', 'delhi');

-- --------------------------------------------------------

--
-- Table structure for table `tblservicerequest`
--

CREATE TABLE `tblservicerequest` (
  `ID` int(10) NOT NULL,
  `UserId` int(10) NOT NULL,
  `ServiceNumber` varchar(20) NOT NULL,
  `ServiceType` varchar(120) NOT NULL,
  `Category` varchar(120) NOT NULL,
  `VehicleName` varchar(120) NOT NULL,
  `VehicleModel` varchar(120) NOT NULL,
  `VehicleBrand` varchar(120) NOT NULL,
  `VehicleRegno` varchar(120) NOT NULL,
  `ServiceDate` date NOT NULL,
  `ServiceTime` varchar(100) NOT NULL,
  `DeliveryType` varchar(120) NOT NULL,
  `PickupAddress` varchar(120) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `ServicerequestDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ServiceBy` varchar(120) NOT NULL,
  `ServiceCharge` int(10) NOT NULL,
  `PartsCharge` int(10) NOT NULL,
  `OtherCharge` int(10) NOT NULL,
  `AdminRemark` varchar(120) NOT NULL,
  `AdminStatus` varchar(120) NOT NULL,
  `AdminRemarkdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblservicerequest`
--

INSERT INTO `tblservicerequest` (`ID`, `UserId`, `ServiceNumber`, `ServiceType`, `Category`, `VehicleName`, `VehicleModel`, `VehicleBrand`, `VehicleRegno`, `ServiceDate`, `ServiceTime`, `DeliveryType`, `PickupAddress`, `Description`, `ServicerequestDate`, `ServiceBy`, `ServiceCharge`, `PartsCharge`, `OtherCharge`, `AdminRemark`, `AdminStatus`, `AdminRemarkdate`) VALUES
(36, 1, '176575264', 'Major Service', 'Car', 'sdz', '2018', 'asia', 'da', '2019-09-23', '01:01', 'dropservice', '', 'fesg', '2019-09-28 15:15:10', 'Shonaya', 222, 222, 222, 'test', '2', '2019-09-20 15:36:36'),
(37, 1, '164590304', 'Annual Service', 'Car', 'sdz', '2019', 'asia', 'da', '2019-09-24', '01:01', 'dropservice', '', 'vdsg', '2019-09-28 15:19:34', 'Naveen', 100, 123, 12, '323rd', '3', '2019-09-20 15:38:48'),
(38, 1, '316990919', 'Major Service', 'Car', 'sdz', '2018', 'bentley', 'da', '2019-09-23', '00:00', 'dropservice', '', 'xdvg', '2019-09-24 16:51:19', 'Jone', 0, 0, 0, '', '2', '2019-09-20 16:36:43'),
(39, 1, '259795194', 'Major Service', 'Small Bus', 'sdz', '2019', 'asia', 'da', '2019-09-23', '00:00', 'dropservice', '', 'dvs', '2019-09-24 16:51:29', 'Rashid', 0, 0, 0, '', '2', '2019-09-20 16:37:32'),
(40, 1, '837575482', 'Annual Service', 'Small Bus', 'sdz', '2018', 'asia', 'da', '2019-09-24', '00:00', 'pickupservice', 'cda', 'cda', '2019-09-25 15:21:36', 'Rashid', 0, 0, 0, 'test', '1', '2019-09-20 17:35:18'),
(41, 1, '100943485', 'Major Service', 'Small Bus', 'sdz', '2019', 'alfa romeo', 'da', '2019-09-23', '00:00', 'dropservice', '', 'xvdv', '2019-09-24 16:51:02', 'Jone', 0, 0, 0, 'test', '1', '2019-09-21 13:56:47'),
(42, 1, '146762491', 'Annual Service', 'Small Bus', 'sdz', '2019', 'asia', 'da', '2019-09-23', '00:00', 'dropservice', '', 'sgf', '2019-09-28 15:53:03', '', 0, 0, 0, '', '', '2019-09-21 14:25:35'),
(43, 1, '642084392', 'Major Service', 'Car', 'sdz', '2019', 'alfa romeo', 'da', '2019-09-24', '00:00', 'dropservice', '', 'fvs', '2019-09-28 15:52:36', '', 0, 0, 0, '', '6', '2019-09-21 14:32:45'),
(44, 1, '585522833', 'Annual Service', 'Small Bus', 'sdz', '2018', 'aston martin', 'da', '2019-09-23', '00:00', 'pickupservice', 'dc', 'vd', '2019-09-24 16:42:05', 'Naveen', 0, 0, 0, '', '1', '2019-09-21 14:33:40'),
(45, 1, '609113282', 'Major Service', 'Car', 'test', '2018', 'alfa romeo', '123', '2019-09-23', '00:00', 'pickupservice', 'sdf', 'dfg', '2019-09-28 15:52:39', 'Shonaya', 100, 123, 12, 'test', '3', '2019-09-22 17:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `tblservicestatus`
--

CREATE TABLE `tblservicestatus` (
  `id` int(10) NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblservicestatus`
--

INSERT INTO `tblservicestatus` (`id`, `status`) VALUES
(1, 'Booked'),
(2, 'In service'),
(3, 'Completed'),
(4, 'Collected'),
(5, 'Scraped'),
(6, 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `tblservicetype`
--

CREATE TABLE `tblservicetype` (
  `ID` int(10) NOT NULL,
  `ServiceType` varchar(250) NOT NULL,
  `ServicePrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblservicetype`
--

INSERT INTO `tblservicetype` (`ID`, `ServiceType`, `ServicePrice`) VALUES
(1, 'Major Service', 300),
(2, 'Annual Service', 250),
(3, 'Fault/Major Repair', 100),
(4, 'Minor Repair', 100),
(5, 'Lubrication Oil', 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(120) NOT NULL,
  `MobileNo` int(20) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Password` varchar(120) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FullName`, `MobileNo`, `Email`, `Password`, `RegDate`) VALUES
(1, 'Rahul Nagar', 987654252, 'test2@gmail.com', '16d7a4fca7442dda3ad93c9a726597e4', '2019-09-22 11:19:37'),
(2, 'Test', 2147483647, 'testr@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '2019-09-07 15:32:12'),
(3, 'Rahul Nagars', 2147483647, 'deepakagrawal93117@gmail.com', 'c06db68e819be6ec3d26c6038d8e8d1f', '2019-09-21 15:39:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblenginetype`
--
ALTER TABLE `tblenginetype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblenquirytype`
--
ALTER TABLE `tblenquirytype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblmechanics`
--
ALTER TABLE `tblmechanics`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblservicerequest`
--
ALTER TABLE `tblservicerequest`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblservicestatus`
--
ALTER TABLE `tblservicestatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblservicetype`
--
ALTER TABLE `tblservicetype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tblenginetype`
--
ALTER TABLE `tblenginetype`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tblenquirytype`
--
ALTER TABLE `tblenquirytype`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblmechanics`
--
ALTER TABLE `tblmechanics`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tblservicerequest`
--
ALTER TABLE `tblservicerequest`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `tblservicestatus`
--
ALTER TABLE `tblservicestatus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tblservicetype`
--
ALTER TABLE `tblservicetype`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
