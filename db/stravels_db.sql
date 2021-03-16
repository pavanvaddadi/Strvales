-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 16, 2021 at 09:46 AM
-- Server version: 5.7.28
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stravels_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

DROP TABLE IF EXISTS `car_details`;
CREATE TABLE IF NOT EXISTS `car_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `carName` varchar(100) NOT NULL,
  `carImage` varchar(100) NOT NULL,
  `carDescription` varchar(200) NOT NULL,
  `carNo` varchar(55) DEFAULT NULL,
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`id`, `carName`, `carImage`, `carDescription`, `carNo`, `createdDate`) VALUES
(2, 'SwiftDezire', 'carImage2', '4 Seater with air condition', NULL, '2021-02-15 14:51:03'),
(3, 'Innova', 'car Image4', '5 Seater with air condition', NULL, '2021-02-15 14:52:48'),
(4, 'Tayota', 'car Image3', '4 Seater with air condition', NULL, '2021-02-15 14:52:54'),
(5, 'Innova crista', 'carImage1', '7 Seater with air condition', NULL, '2021-02-15 20:10:02'),
(6, 'Indica', 'carImage1', '4 Seater with air condition', NULL, '2021-02-15 20:17:23'),
(7, 'Toyata', 'carImage1', 'desc', NULL, '2021-02-15 20:17:25'),
(8, 'Toyata', 'carImage1', 'desc', NULL, '2021-02-15 20:17:27'),
(11, 'Toyata', 'carImage1', 'Car description2', NULL, '2021-02-15 20:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `package_details`
--

DROP TABLE IF EXISTS `package_details`;
CREATE TABLE IF NOT EXISTS `package_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `carId` int(11) NOT NULL,
  `packageId` int(11) NOT NULL,
  `packageImage1` varchar(100) NOT NULL,
  `packageImage2` varchar(100) DEFAULT NULL,
  `packageImage3` varchar(100) DEFAULT NULL,
  `packageImage4` varchar(100) DEFAULT NULL,
  `packagePlace1` varchar(100) NOT NULL,
  `packagePlace2` varchar(100) DEFAULT NULL,
  `packagePlace3` varchar(100) DEFAULT NULL,
  `packagePlace4` varchar(100) DEFAULT NULL,
  `createdDate` timestamp(2) NOT NULL DEFAULT CURRENT_TIMESTAMP(2),
  PRIMARY KEY (`id`),
  KEY `packageId` (`packageId`),
  KEY `carId` (`carId`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_details`
--

INSERT INTO `package_details` (`id`, `carId`, `packageId`, `packageImage1`, `packageImage2`, `packageImage3`, `packageImage4`, `packagePlace1`, `packagePlace2`, `packagePlace3`, `packagePlace4`, `createdDate`) VALUES
(1, 2, 1, 'airport1.jpg', NULL, NULL, NULL, 'Airport pickup and drop', NULL, NULL, NULL, '2021-03-11 18:30:00.00'),
(2, 2, 2, 'vizag11.jpg', 'vizag12.jpg', 'vizag13.jpg', 'vizag14.jpg', 'BeemiliBeach and Thotlakonda', 'Rushikonda & Rk beach', 'ZOO park', 'Kailashagiri', '2021-03-12 06:11:52.00'),
(3, 2, 3, 'araku1.jpg', 'araku2.jpg', 'araku3.jpg', 'araku4.jpg', 'Thatipudi and Anathagiri', 'Chaparayi', 'Araku Valley', 'Borra caves', '2021-03-12 06:16:59.00'),
(4, 2, 4, 'vzm11.jpg', 'vzm12.jpg', 'vzm13.png', 'vzm14.jpg', 'Chintapalli Beach and Vzm Local temples', 'Ramatheratham', 'Govinda puram Temple', 'RamaNarayanam', '2021-03-12 06:20:30.00'),
(5, 2, 5, 'sklm1.jpg', 'sklm2.jpg', 'sklm3.jpg', 'sklm4.jpg', 'Arasavelli', 'Srikurmam', 'MukhaLingam', 'Kalingapatnam', '2021-03-12 06:22:48.00'),
(6, 3, 6, 'vizag21.jpg', 'vizag22.jpg', 'vizag23.jpg', 'vizag24.jpg', 'Shimhachalam temple', 'Zoo park ', 'vizag local', 'Beemili Beach', '2021-03-12 14:24:47.00'),
(7, 6, 7, 'vzm21.jpg', 'vzm22.jpg', 'vzm24.png', 'vzm23.jpg', 'Ramateerdam temple\r\n ', 'Kumili temple', 'Govindapuram ', 'Chintapalli Beach', '2021-03-12 14:27:28.00');

-- --------------------------------------------------------

--
-- Table structure for table `package_list`
--

DROP TABLE IF EXISTS `package_list`;
CREATE TABLE IF NOT EXISTS `package_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `carId` int(11) NOT NULL,
  `pacakgeImage` varchar(100) NOT NULL,
  `packageName` varchar(200) NOT NULL,
  `fare` varchar(55) NOT NULL,
  `extraDetails` varchar(200) DEFAULT NULL,
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_references_carId` (`carId`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_list`
--

INSERT INTO `package_list` (`id`, `carId`, `pacakgeImage`, `packageName`, `fare`, `extraDetails`, `createdDate`) VALUES
(1, 1, 'airport1.jpg', 'Airport Pick up and Drop', '3000', NULL, '2021-02-15 15:02:57'),
(2, 3, 'vizag12.jpg', 'Vizag package-1', '4000', NULL, '2021-02-15 15:02:57'),
(3, 6, 'araku1.jpg', 'Araku', '5000', 'Tollgates & food extra', '2021-03-11 23:09:56'),
(4, 5, 'vzm14.jpg', 'VZM pacakge-1', '2500', 'Tollgates & food extra', '2021-03-11 23:10:49'),
(5, 5, 'sklm3.jpg', 'srikakulam', '4000', 'Tollgates & food extra', '2021-03-11 23:11:31'),
(6, 3, 'vizag21.jpg', 'Vizag Package-2', '4000', NULL, '2021-03-12 16:23:24'),
(7, 3, 'vzm21.jpg', 'VZM Package2', '3000', NULL, '2021-03-12 16:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `carId` int(11) NOT NULL,
  `extraPerHour` varchar(200) NOT NULL,
  `extraPerKm` varchar(200) NOT NULL,
  `servicePer40km` varchar(100) NOT NULL,
  `servicePer80km` varchar(100) NOT NULL,
  `servicePer100km` varchar(100) NOT NULL,
  `nightHalts` varchar(100) NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_reference_carId` (`carId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `carId`, `extraPerHour`, `extraPerKm`, `servicePer40km`, `servicePer80km`, `servicePer100km`, `nightHalts`, `createdDate`) VALUES
(1, 2, '250', '14', '1000', '2000', '2500', '1000', '2021-02-15 14:59:36'),
(2, 4, '250', '14', '1000', '2000', '2500', '1000', '2021-02-15 14:59:36'),
(3, 6, '250', '14', '1000', '2000', '2500', '1000', '2021-03-11 21:01:26'),
(4, 3, '350', '18', '1500', '2500', '3000', '1500', '2021-03-11 21:02:46'),
(5, 3, '350', '18', '1500', '2500', '3000', '1500', '2021-03-11 21:02:51'),
(6, 5, '400', '20', '1500', '2500', '3000', '1500', '2021-03-11 21:05:05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
