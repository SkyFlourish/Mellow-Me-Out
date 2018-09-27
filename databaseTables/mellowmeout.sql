-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2018 at 03:29 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mellowmeout`
--
CREATE DATABASE IF NOT EXISTS `mellowmeout` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mellowmeout`;

-- --------------------------------------------------------

--
-- Table structure for table `adminstaff`
--

DROP TABLE IF EXISTS `adminstaff`;
CREATE TABLE `adminstaff` (
  `AdminStaffID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminstaff`
--

INSERT INTO `adminstaff` (`AdminStaffID`, `Username`) VALUES
(1, 'Username');

-- --------------------------------------------------------

--
-- Table structure for table `blogcategorys`
--

DROP TABLE IF EXISTS `blogcategorys`;
CREATE TABLE `blogcategorys` (
  `BlogCategory` varchar(30) NOT NULL,
  `BlogCategoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogcategorys`
--

INSERT INTO `blogcategorys` (`BlogCategory`, `BlogCategoryID`) VALUES
('asd', 2),
('asdasdasd', 3);

-- --------------------------------------------------------

--
-- Table structure for table `blogcomments`
--

DROP TABLE IF EXISTS `blogcomments`;
CREATE TABLE `blogcomments` (
  `BlogCommentID` int(11) NOT NULL,
  `BlogCommentText` text NOT NULL,
  `Name` varchar(50) NOT NULL,
  `PhoneNumber` varchar(50) DEFAULT NULL,
  `EmailAddress` varchar(50) DEFAULT NULL,
  `BlogID` int(11) NOT NULL,
  `BlogCommentTimestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blogcontent`
--

DROP TABLE IF EXISTS `blogcontent`;
CREATE TABLE `blogcontent` (
  `BlogID` int(11) NOT NULL,
  `BlogTitle` text NOT NULL,
  `BlogContent` text,
  `BlogContentTimestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `BlogCategory` varchar(50) DEFAULT NULL,
  `Username` varchar(50) NOT NULL,
  `BlogContentImg` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogcontent`
--

INSERT INTO `blogcontent` (`BlogID`, `BlogTitle`, `BlogContent`, `BlogContentTimestamp`, `BlogCategory`, `Username`, `BlogContentImg`) VALUES
(7, 'asd', 'asd', '2018-09-21 20:46:11', '2', 'someSTAFF', '37592952_2254372327922617_2575121258056253440_n.pn'),
(8, 'sdasd', 'asdasd', '2018-09-22 11:17:41', '2', 'someSTAFF', '34366866_10157599868779498_6647136041511682048_n.j'),
(9, 'asda', 'asdasd', '2018-09-22 11:18:03', '3', 'someSTAFF', '37398787_2254370251256158_6612856876730155008_n.jp'),
(10, 'asdasd', 'asda', '2018-09-22 16:59:27', '3', 'someSTAFF', 'x113-Mazda-RX7-SA22-FB-640x427.jpg.pagespeed.ic.7RSs3vixq8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blogtags`
--

DROP TABLE IF EXISTS `blogtags`;
CREATE TABLE `blogtags` (
  `BlogTagID` int(11) NOT NULL,
  `BlogTag` varchar(100) NOT NULL,
  `BlogID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking` (
  `user_booking` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`user_booking`) VALUES
('0004-02-03-1');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE `bookings` (
  `BookingID` int(11) NOT NULL,
  `BookingDateTimeStart` datetime NOT NULL,
  `BookingDateTimeEnd` datetime NOT NULL,
  `BookingRegisteredFirstName` varchar(50) NOT NULL,
  `BookingRegisteredLastName` varchar(50) NOT NULL,
  `BookingRegisteredPhone` int(11) NOT NULL,
  `BookingRegisteredEmail` varchar(100) NOT NULL,
  `TotalOrderTab` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE `contactus` (
  `ContactUsID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `EmailAddress` varchar(100) NOT NULL,
  `Subject` text NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

DROP TABLE IF EXISTS `discount`;
CREATE TABLE `discount` (
  `DiscountCode` varchar(50) NOT NULL,
  `DiscountPercentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE `faq` (
  `FaqID` int(11) NOT NULL,
  `FaqTitle` text NOT NULL,
  `FaqContents` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nonbussinessdays`
--

DROP TABLE IF EXISTS `nonbussinessdays`;
CREATE TABLE `nonbussinessdays` (
  `NonBussinessDayID` int(11) NOT NULL,
  `NonBussinessDayDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `servicedescription`
--

DROP TABLE IF EXISTS `servicedescription`;
CREATE TABLE `servicedescription` (
  `ServiceDescriptionID` int(11) NOT NULL,
  `ServiceID` int(11) NOT NULL,
  `ServiceDescription` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `ServiceID` int(11) NOT NULL,
  `ServiceName` varchar(50) NOT NULL,
  `ServicePrice` decimal(15,2) NOT NULL,
  `ServiceType` int(11) NOT NULL,
  `ServiceTime` int(11) DEFAULT NULL,
  `ServiceImg` varchar(100) DEFAULT NULL,
  `ServiceDescription` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ServiceID`, `ServiceName`, `ServicePrice`, `ServiceType`, `ServiceTime`, `ServiceImg`, `ServiceDescription`) VALUES
(34, '22', '22.00', 22, 22, 'post-100549-0-19713900-1456727401.png', '22'),
(35, 'asd', '22.00', 22, 22, '1970_LC_Torana_4_Cylinder.jpg', '22'),
(36, '22', '223.00', 223, 33, '30629628_10160788769965112_7264237453702070272_n.jpg', '33'),
(37, 'ser', '22.00', 22, 22, 'mazda_fb.jpg', 'sad'),
(38, 'asd', '0.00', 0, 0, 'imageproxy.jpg', 'asdas'),
(39, 'asdas', '22.23', 0, 33, 'bfe33a18d37d6a42c4b60c7ab5ad7022.jpg', 'asdasd'),
(40, 'asd', '33.00', 3, 33, 'c34223c650b08f41dcc1c9345f63d8bf.jpg', '33'),
(41, 'asd', '22.00', 4, 333, '36718461_2229796040380246_7069605289787392000_n.jpg', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `servicesbooked`
--

DROP TABLE IF EXISTS `servicesbooked`;
CREATE TABLE `servicesbooked` (
  `BookedServiceID` int(11) NOT NULL,
  `BookedServiceDate` date NOT NULL,
  `BookedServiceLength` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `servicesimgvariant`
--

DROP TABLE IF EXISTS `servicesimgvariant`;
CREATE TABLE `servicesimgvariant` (
  `ServiceID` int(11) NOT NULL,
  `ServiceName` varchar(50) NOT NULL,
  `ServicePrice` decimal(15,2) NOT NULL,
  `ServiceType` int(11) NOT NULL,
  `ServiceTime` int(11) DEFAULT NULL,
  `ServiceImg` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `servicespricing`
--

DROP TABLE IF EXISTS `servicespricing`;
CREATE TABLE `servicespricing` (
  `ServicePricingID` int(11) NOT NULL,
  `ServiceID` int(11) NOT NULL,
  `ServiceTime` int(11) DEFAULT NULL,
  `ServicePrice` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicespricing`
--

INSERT INTO `servicespricing` (`ServicePricingID`, `ServiceID`, `ServiceTime`, `ServicePrice`) VALUES
(1, 41, 33, '33.00'),
(2, 40, 3344, '33.00');

-- --------------------------------------------------------

--
-- Table structure for table `servicetypes`
--

DROP TABLE IF EXISTS `servicetypes`;
CREATE TABLE `servicetypes` (
  `ServiceType` varchar(30) NOT NULL,
  `ServiceTypeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicetypes`
--

INSERT INTO `servicetypes` (`ServiceType`, `ServiceTypeID`) VALUES
('asd', 3),
('asdasdasd', 4);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE `staff` (
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Passphrase` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`FirstName`, `LastName`, `Username`, `Passphrase`) VALUES
('stafffirst', 'stafflast', 'someSTAFF', 'somepassword'),
('stafffirstsecond', 'stafflastsecond', 'someSTAFFsecond', 'somepassword'),
('user', 'name', 'Username', 'Password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminstaff`
--
ALTER TABLE `adminstaff`
  ADD PRIMARY KEY (`AdminStaffID`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `blogcategorys`
--
ALTER TABLE `blogcategorys`
  ADD PRIMARY KEY (`BlogCategoryID`);

--
-- Indexes for table `blogcomments`
--
ALTER TABLE `blogcomments`
  ADD PRIMARY KEY (`BlogCommentID`),
  ADD KEY `BlogID` (`BlogID`);

--
-- Indexes for table `blogcontent`
--
ALTER TABLE `blogcontent`
  ADD PRIMARY KEY (`BlogID`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `blogtags`
--
ALTER TABLE `blogtags`
  ADD PRIMARY KEY (`BlogTagID`),
  ADD KEY `BlogID` (`BlogID`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`BookingID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ContactUsID`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`DiscountCode`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`FaqID`);

--
-- Indexes for table `nonbussinessdays`
--
ALTER TABLE `nonbussinessdays`
  ADD PRIMARY KEY (`NonBussinessDayID`);

--
-- Indexes for table `servicedescription`
--
ALTER TABLE `servicedescription`
  ADD PRIMARY KEY (`ServiceDescriptionID`),
  ADD KEY `ServiceID` (`ServiceID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ServiceID`);

--
-- Indexes for table `servicesbooked`
--
ALTER TABLE `servicesbooked`
  ADD PRIMARY KEY (`BookedServiceID`);

--
-- Indexes for table `servicesimgvariant`
--
ALTER TABLE `servicesimgvariant`
  ADD PRIMARY KEY (`ServiceID`);

--
-- Indexes for table `servicespricing`
--
ALTER TABLE `servicespricing`
  ADD PRIMARY KEY (`ServicePricingID`),
  ADD KEY `ServiceID` (`ServiceID`);

--
-- Indexes for table `servicetypes`
--
ALTER TABLE `servicetypes`
  ADD PRIMARY KEY (`ServiceTypeID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminstaff`
--
ALTER TABLE `adminstaff`
  MODIFY `AdminStaffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogcategorys`
--
ALTER TABLE `blogcategorys`
  MODIFY `BlogCategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogcomments`
--
ALTER TABLE `blogcomments`
  MODIFY `BlogCommentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogcontent`
--
ALTER TABLE `blogcontent`
  MODIFY `BlogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blogtags`
--
ALTER TABLE `blogtags`
  MODIFY `BlogTagID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `BookingID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ContactUsID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `FaqID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nonbussinessdays`
--
ALTER TABLE `nonbussinessdays`
  MODIFY `NonBussinessDayID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicedescription`
--
ALTER TABLE `servicedescription`
  MODIFY `ServiceDescriptionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ServiceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `servicesbooked`
--
ALTER TABLE `servicesbooked`
  MODIFY `BookedServiceID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicesimgvariant`
--
ALTER TABLE `servicesimgvariant`
  MODIFY `ServiceID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicespricing`
--
ALTER TABLE `servicespricing`
  MODIFY `ServicePricingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `servicetypes`
--
ALTER TABLE `servicetypes`
  MODIFY `ServiceTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adminstaff`
--
ALTER TABLE `adminstaff`
  ADD CONSTRAINT `adminstaff_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `staff` (`Username`);

--
-- Constraints for table `blogcomments`
--
ALTER TABLE `blogcomments`
  ADD CONSTRAINT `blogcomments_ibfk_1` FOREIGN KEY (`BlogID`) REFERENCES `blogcontent` (`BlogID`);

--
-- Constraints for table `blogcontent`
--
ALTER TABLE `blogcontent`
  ADD CONSTRAINT `blogcontent_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `staff` (`Username`);

--
-- Constraints for table `blogtags`
--
ALTER TABLE `blogtags`
  ADD CONSTRAINT `blogtags_ibfk_1` FOREIGN KEY (`BlogID`) REFERENCES `blogcontent` (`BlogID`);

--
-- Constraints for table `servicedescription`
--
ALTER TABLE `servicedescription`
  ADD CONSTRAINT `servicedescription_ibfk_1` FOREIGN KEY (`ServiceID`) REFERENCES `services` (`ServiceID`);

--
-- Constraints for table `servicespricing`
--
ALTER TABLE `servicespricing`
  ADD CONSTRAINT `servicespricing_ibfk_1` FOREIGN KEY (`ServiceID`) REFERENCES `services` (`ServiceID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
