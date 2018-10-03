-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 03, 2018 at 03:31 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartplantwatering`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `contactNo` varchar(50) NOT NULL,
  `feedback` text NOT NULL,
  KEY `contactNo` (`contactNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `station` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plant_details`
--

DROP TABLE IF EXISTS `plant_details`;
CREATE TABLE IF NOT EXISTS `plant_details` (
  `plantId` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`plantId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plant_details`
--

INSERT INTO `plant_details` (`plantId`, `name`) VALUES
('1', 'Rose');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
CREATE TABLE IF NOT EXISTS `user_details` (
  `contactNo` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dateOfCreation` datetime NOT NULL,
  `dateOfDeletion` datetime DEFAULT NULL,
  `isDelete` varchar(20) NOT NULL DEFAULT '0',
  `isBlocked` varchar(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`contactNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`contactNo`, `name`, `email`, `password`, `dateOfCreation`, `dateOfDeletion`, `isDelete`, `isBlocked`) VALUES
('7775026761', 'Nishant', 'nimbalkarnishant98@gmail.com', 'Nishant', '2018-10-02 12:22:58', NULL, '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_plant_rel`
--

DROP TABLE IF EXISTS `user_plant_rel`;
CREATE TABLE IF NOT EXISTS `user_plant_rel` (
  `contactNo` varchar(50) NOT NULL,
  `plantId` varchar(50) NOT NULL,
  `soilMoisture` varchar(100) NOT NULL,
  `waterLevel` varchar(100) NOT NULL,
  `humidityLevel` varchar(100) NOT NULL,
  `temperature` varchar(100) NOT NULL,
  `pumpStatus` varchar(100) NOT NULL,
  `time` time NOT NULL,
  `date` date DEFAULT NULL,
  KEY `contactNo` (`contactNo`),
  KEY `plantId` (`plantId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_plant_rel`
--

INSERT INTO `user_plant_rel` (`contactNo`, `plantId`, `soilMoisture`, `waterLevel`, `humidityLevel`, `temperature`, `pumpStatus`, `time`, `date`) VALUES
('7775026761', '1', '210', '240', '40', '27', 'OFF', '09:30:15', NULL),
('7775026761', '1', '200', '250', '45', '25', 'OFF', '09:45:15', NULL),
('7775026761', '1', '230', '300', '45', '29', 'OFF', '10:00:15', NULL),
('7775026761', '1', '400', '250', '45', '25', 'ON', '10:15:15', NULL),
('7775026761', '1', '200', '250', '45', '25', 'OFF', '02:15:15', NULL),
('7775026761', '1', '150', '250', '45', '25', 'OFF', '02:30:15', NULL),
('7775026761', '1', '170', '250', '45', '25', 'OFF', '02:45:15', NULL),
('7775026761', '1', '200', '250', '45', '25', 'OFF', '03:00:15', NULL),
('7775026761', '1', '450', '250', '45', '25', 'ON', '03:15:15', NULL),
('7775026761', '1', '1', '3', 'NULL', 'NULL', 'OFF', '13:08:27', '2018-10-03'),
('7775026761', '1', '1', '7', 'NULL', 'NULL', 'OFF', '13:08:32', '2018-10-03'),
('7775026761', '1', '1', '7', 'NULL', 'NULL', 'OFF', '13:08:38', '2018-10-03'),
('7775026761', '1', '1', '10', 'NULL', 'NULL', 'OFF', '13:08:44', '2018-10-03'),
('7775026761', '1', '1', '8', 'NULL', 'NULL', 'OFF', '13:08:49', '2018-10-03'),
('7775026761', '1', '1', '7', 'NULL', 'NULL', 'OFF', '13:08:55', '2018-10-03'),
('7775026761', '1', '1', '8', 'NULL', 'NULL', 'OFF', '13:09:01', '2018-10-03'),
('7775026761', '1', '1', '7', 'NULL', 'NULL', 'OFF', '13:09:07', '2018-10-03'),
('7775026761', '1', '1', '7', 'NULL', 'NULL', 'OFF', '13:09:13', '2018-10-03'),
('7775026761', '1', '1', '10', 'NULL', 'NULL', 'OFF', '13:09:20', '2018-10-03'),
('7775026761', '1', '1', '8', 'NULL', 'NULL', 'OFF', '13:09:26', '2018-10-03'),
('7775026761', '1', '1', '1', 'NULL', 'NULL', 'OFF', '13:09:32', '2018-10-03'),
('7775026761', '1', '1', '8', 'NULL', 'NULL', 'OFF', '13:09:38', '2018-10-03'),
('7775026761', '1', '1', '7', 'NULL', 'NULL', 'OFF', '13:09:43', '2018-10-03'),
('7775026761', '1', '1', '9', 'NULL', 'NULL', 'OFF', '13:09:48', '2018-10-03'),
('7775026761', '1', '1', '1', 'NULL', 'NULL', 'OFF', '13:09:53', '2018-10-03'),
('7775026761', '1', '1', '1', 'NULL', 'NULL', 'OFF', '13:09:59', '2018-10-03'),
('7775026761', '1', '1', '7', 'NULL', 'NULL', 'OFF', '13:10:04', '2018-10-03'),
('7775026761', '1', '1', '8', 'NULL', 'NULL', 'OFF', '13:10:09', '2018-10-03'),
('7775026761', '1', '1', '8', 'NULL', 'NULL', 'OFF', '13:10:15', '2018-10-03'),
('7775026761', '1', '1', '7', 'NULL', 'NULL', 'OFF', '13:10:20', '2018-10-03'),
('7775026761', '1', '1', '7', 'NULL', 'NULL', 'OFF', '13:10:25', '2018-10-03'),
('7775026761', '1', '1', '9', 'NULL', 'NULL', 'OFF', '13:10:31', '2018-10-03'),
('7775026761', '1', '1', '12', 'NULL', 'NULL', 'OFF', '13:10:36', '2018-10-03'),
('7775026761', '1', '1', '9', 'NULL', 'NULL', 'OFF', '13:10:41', '2018-10-03'),
('7775026761', '1', '1', '8', 'NULL', 'NULL', 'OFF', '13:10:46', '2018-10-03'),
('7775026761', '1', '1', '7', 'NULL', 'NULL', 'OFF', '13:10:52', '2018-10-03'),
('7775026761', '1', '1', '8', 'NULL', 'NULL', 'OFF', '13:10:57', '2018-10-03'),
('7775026761', '1', '1', '7', 'NULL', 'NULL', 'OFF', '13:11:02', '2018-10-03'),
('7775026761', '1', '1', '8', 'NULL', 'NULL', 'OFF', '13:11:08', '2018-10-03'),
('7775026761', '1', '1', '8', 'NULL', 'NULL', 'OFF', '13:11:13', '2018-10-03'),
('7775026761', '1', '1', '7', 'NULL', 'NULL', 'OFF', '13:11:18', '2018-10-03'),
('7775026761', '1', '1', '39', 'NULL', 'NULL', 'OFF', '13:11:24', '2018-10-03'),
('7775026761', '1', '1', '427', 'NULL', 'NULL', 'OFF', '13:11:29', '2018-10-03'),
('7775026761', '1', '1', '396', 'NULL', 'NULL', 'OFF', '13:11:34', '2018-10-03'),
('7775026761', '1', '1', '411', 'NULL', 'NULL', 'OFF', '13:11:39', '2018-10-03'),
('7775026761', '1', '1', '418', 'NULL', 'NULL', 'OFF', '13:11:45', '2018-10-03'),
('7775026761', '1', '1', '399', 'NULL', 'NULL', 'OFF', '13:11:50', '2018-10-03'),
('7775026761', '1', '1', '387', 'NULL', 'NULL', 'OFF', '13:11:55', '2018-10-03'),
('7775026761', '1', '1', '366', 'NULL', 'NULL', 'OFF', '13:12:00', '2018-10-03'),
('7775026761', '1', '1', '348', 'NULL', 'NULL', 'OFF', '13:12:06', '2018-10-03'),
('7775026761', '1', '1', '337', 'NULL', 'NULL', 'OFF', '13:12:11', '2018-10-03'),
('7775026761', '1', '1', '329', 'NULL', 'NULL', 'OFF', '13:12:17', '2018-10-03'),
('7775026761', '1', '1', '328', 'NULL', 'NULL', 'OFF', '13:12:22', '2018-10-03'),
('7775026761', '1', '1', '325', 'NULL', 'NULL', 'ON', '13:12:27', '2018-10-03'),
('7775026761', '1', '1', '324', 'NULL', 'NULL', 'ON', '13:12:33', '2018-10-03'),
('7775026761', '1', '1', '324', 'NULL', 'NULL', 'ON', '13:12:38', '2018-10-03'),
('7775026761', '1', '1', '321', 'NULL', 'NULL', 'ON', '13:12:43', '2018-10-03'),
('7775026761', '1', '1', '320', 'NULL', 'NULL', 'ON', '13:12:48', '2018-10-03'),
('7775026761', '1', '1', '319', 'NULL', 'NULL', 'ON', '13:12:53', '2018-10-03'),
('7775026761', '1', '1', '319', 'NULL', 'NULL', 'ON', '13:12:59', '2018-10-03'),
('7775026761', '1', '1', '317', 'NULL', 'NULL', 'ON', '13:13:04', '2018-10-03'),
('7775026761', '1', '1', '315', 'NULL', 'NULL', 'ON', '13:13:09', '2018-10-03'),
('7775026761', '1', '1', '315', 'NULL', 'NULL', 'ON', '13:13:14', '2018-10-03'),
('7775026761', '1', '1', '314', 'NULL', 'NULL', 'ON', '13:13:19', '2018-10-03'),
('7775026761', '1', '1', '315', 'NULL', 'NULL', 'ON', '13:13:25', '2018-10-03'),
('7775026761', '1', '1', '315', 'NULL', 'NULL', 'ON', '13:13:30', '2018-10-03'),
('7775026761', '1', '1', '314', 'NULL', 'NULL', 'ON', '13:13:35', '2018-10-03'),
('7775026761', '1', '1', '310', 'NULL', 'NULL', 'ON', '13:13:40', '2018-10-03'),
('7775026761', '1', '1', '308', 'NULL', 'NULL', 'ON', '13:13:45', '2018-10-03'),
('7775026761', '1', '1', '307', 'NULL', 'NULL', 'ON', '13:13:51', '2018-10-03'),
('7775026761', '1', '1', '307', 'NULL', 'NULL', 'ON', '13:13:56', '2018-10-03'),
('7775026761', '1', '1', '312', 'NULL', 'NULL', 'ON', '13:14:01', '2018-10-03'),
('7775026761', '1', '1', '300', 'NULL', 'NULL', 'ON', '13:14:07', '2018-10-03'),
('7775026761', '1', '1', '288', 'NULL', 'NULL', 'ON', '13:14:12', '2018-10-03'),
('7775026761', '1', '1', '220', 'NULL', 'NULL', 'ON', '13:14:19', '2018-10-03'),
('7775026761', '1', '1', '197', 'NULL', 'NULL', 'ON', '13:14:25', '2018-10-03'),
('7775026761', '1', '1', '182', 'NULL', 'NULL', 'ON', '13:14:30', '2018-10-03'),
('7775026761', '1', '1', '135', 'NULL', 'NULL', 'ON', '13:14:36', '2018-10-03'),
('7775026761', '1', '1', '137', 'NULL', 'NULL', 'OFF', '13:14:41', '2018-10-03'),
('7775026761', '1', '1', '132', 'NULL', 'NULL', 'OFF', '13:14:46', '2018-10-03'),
('7775026761', '1', '1', '494', 'NULL', 'NULL', 'OFF', '13:14:51', '2018-10-03'),
('7775026761', '1', '1', '468', 'NULL', 'NULL', 'OFF', '13:14:57', '2018-10-03'),
('7775026761', '1', '1', '437', 'NULL', 'NULL', 'OFF', '13:15:02', '2018-10-03'),
('7775026761', '1', '1', '418', 'NULL', 'NULL', 'OFF', '13:15:07', '2018-10-03'),
('7775026761', '1', '1', '410', 'NULL', 'NULL', 'OFF', '13:15:12', '2018-10-03'),
('7775026761', '1', '1', '392', 'NULL', 'NULL', 'OFF', '13:15:18', '2018-10-03'),
('7775026761', '1', '1', '382', 'NULL', 'NULL', 'OFF', '13:15:23', '2018-10-03'),
('7775026761', '1', '1', '389', 'NULL', 'NULL', 'OFF', '13:15:28', '2018-10-03'),
('7775026761', '1', '1', '397', 'NULL', 'NULL', 'OFF', '13:15:37', '2018-10-03'),
('7775026761', '1', '1', '385', 'NULL', 'NULL', 'OFF', '13:15:42', '2018-10-03'),
('7775026761', '1', '1', '374', 'NULL', 'NULL', 'OFF', '13:15:47', '2018-10-03'),
('7775026761', '1', '1', '373', 'NULL', 'NULL', 'OFF', '13:15:53', '2018-10-03'),
('7775026761', '1', '1', '375', 'NULL', 'NULL', 'OFF', '13:15:58', '2018-10-03'),
('7775026761', '1', '1', '365', 'NULL', 'NULL', 'OFF', '13:16:03', '2018-10-03'),
('7775026761', '1', '1', '356', 'NULL', 'NULL', 'OFF', '13:16:09', '2018-10-03'),
('7775026761', '1', '1', '361', 'NULL', 'NULL', 'OFF', '13:16:14', '2018-10-03'),
('7775026761', '1', '1', '358', 'NULL', 'NULL', 'OFF', '13:16:19', '2018-10-03'),
('7775026761', '1', '1', '363', 'NULL', 'NULL', 'OFF', '13:16:24', '2018-10-03'),
('7775026761', '1', '1', '352', 'NULL', 'NULL', 'OFF', '13:16:29', '2018-10-03'),
('7775026761', '1', '1', '353', 'NULL', 'NULL', 'OFF', '13:16:35', '2018-10-03'),
('7775026761', '1', '1', '516', 'NULL', 'NULL', 'ON', '13:16:45', '2018-10-03'),
('7775026761', '1', '1', '496', 'NULL', 'NULL', 'ON', '13:16:50', '2018-10-03'),
('7775026761', '1', '1', '596', 'NULL', 'NULL', 'OFF', '13:16:55', '2018-10-03'),
('7775026761', '1', '1', '430', 'NULL', 'NULL', 'OFF', '13:17:01', '2018-10-03'),
('7775026761', '1', '1', '484', 'NULL', 'NULL', 'OFF', '13:17:06', '2018-10-03'),
('7775026761', '1', '1', '602', 'NULL', 'NULL', 'OFF', '13:17:11', '2018-10-03'),
('7775026761', '1', '1', '545', 'NULL', 'NULL', 'OFF', '13:17:16', '2018-10-03'),
('7775026761', '1', '1', '601', 'NULL', 'NULL', 'OFF', '13:17:22', '2018-10-03'),
('7775026761', '1', '1', '441', 'NULL', 'NULL', 'OFF', '13:17:27', '2018-10-03'),
('7775026761', '1', '1', '376', 'NULL', 'NULL', 'OFF', '13:17:32', '2018-10-03'),
('7775026761', '1', '1', '365', 'NULL', 'NULL', 'OFF', '13:17:38', '2018-10-03'),
('7775026761', '1', '1', '346', 'NULL', 'NULL', 'OFF', '13:17:53', '2018-10-03'),
('7775026761', '1', '1', '298', 'NULL', 'NULL', 'ON', '13:17:58', '2018-10-03'),
('7775026761', '1', '1', '288', 'NULL', 'NULL', 'ON', '13:18:04', '2018-10-03'),
('7775026761', '1', '1', '609', 'NULL', 'NULL', 'ON', '13:18:09', '2018-10-03'),
('7775026761', '1', '1', '573', 'NULL', 'NULL', 'ON', '13:18:14', '2018-10-03'),
('7775026761', '1', '1', '559', 'NULL', 'NULL', 'ON', '13:18:19', '2018-10-03'),
('7775026761', '1', '1', '556', 'NULL', 'NULL', 'ON', '13:18:24', '2018-10-03'),
('7775026761', '1', '1', '546', 'NULL', 'NULL', 'OFF', '13:18:30', '2018-10-03'),
('7775026761', '1', '1', '542', 'NULL', 'NULL', 'OFF', '13:18:35', '2018-10-03'),
('7775026761', '1', '1', '537', 'NULL', 'NULL', 'OFF', '13:18:40', '2018-10-03'),
('7775026761', '1', '1', '537', 'NULL', 'NULL', 'OFF', '13:18:45', '2018-10-03'),
('7775026761', '1', '1', '577', 'NULL', 'NULL', 'OFF', '13:18:50', '2018-10-03'),
('7775026761', '1', '1', '554', 'NULL', 'NULL', 'OFF', '13:18:56', '2018-10-03'),
('7775026761', '1', '1', '542', 'NULL', 'NULL', 'OFF', '13:19:01', '2018-10-03'),
('7775026761', '1', '1', '461', 'NULL', 'NULL', 'OFF', '13:19:06', '2018-10-03'),
('7775026761', '1', '1', '1024', 'NULL', 'NULL', 'OFF', '13:21:21', '2018-10-03'),
('7775026761', '1', '1', '1024', 'NULL', 'NULL', 'OFF', '13:21:26', '2018-10-03'),
('7775026761', '1', '1', '1024', 'NULL', 'NULL', 'OFF', '13:21:31', '2018-10-03'),
('7775026761', '1', '1023', '1024', 'NULL', 'NULL', 'ON', '13:22:03', '2018-10-03'),
('7775026761', '1', '1023', '1024', 'NULL', 'NULL', 'ON', '13:22:09', '2018-10-03'),
('7775026761', '1', '1023', '475', 'NULL', 'NULL', 'ON', '13:22:14', '2018-10-03'),
('7775026761', '1', '1023', '495', 'NULL', 'NULL', 'ON', '13:22:19', '2018-10-03'),
('7775026761', '1', '1023', '532', 'NULL', 'NULL', 'ON', '13:22:25', '2018-10-03'),
('7775026761', '1', '1023', '594', 'NULL', 'NULL', 'ON', '13:22:30', '2018-10-03'),
('7775026761', '1', '1023', '615', 'NULL', 'NULL', 'ON', '13:22:35', '2018-10-03'),
('7775026761', '1', '1023', '620', 'NULL', 'NULL', 'ON', '13:22:41', '2018-10-03'),
('7775026761', '1', '1023', '621', 'NULL', 'NULL', 'ON', '13:22:46', '2018-10-03'),
('7775026761', '1', '1023', '621', 'NULL', 'NULL', 'ON', '13:22:51', '2018-10-03'),
('7775026761', '1', '1023', '622', 'NULL', 'NULL', 'ON', '13:22:56', '2018-10-03'),
('7775026761', '1', '1023', '617', 'NULL', 'NULL', 'ON', '13:23:02', '2018-10-03'),
('7775026761', '1', '1023', '620', 'NULL', 'NULL', 'ON', '13:23:07', '2018-10-03'),
('7775026761', '1', '614', '614', 'NULL', 'NULL', 'ON', '13:23:39', '2018-10-03'),
('7775026761', '1', '614', '614', 'NULL', 'NULL', 'ON', '13:23:44', '2018-10-03'),
('7775026761', '1', '584', '583', 'NULL', 'NULL', 'ON', '13:23:49', '2018-10-03'),
('7775026761', '1', '609', '608', 'NULL', 'NULL', 'ON', '13:23:54', '2018-10-03'),
('7775026761', '1', '562', '562', 'NULL', 'NULL', 'ON', '13:24:00', '2018-10-03');

-- --------------------------------------------------------

--
-- Table structure for table `user_verification`
--

DROP TABLE IF EXISTS `user_verification`;
CREATE TABLE IF NOT EXISTS `user_verification` (
  `contactNo` varchar(50) NOT NULL,
  `timeCounter` time NOT NULL,
  `otp` int(20) NOT NULL,
  KEY `contactNo` (`contactNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`contactNo`) REFERENCES `user_details` (`contactNo`) ON DELETE CASCADE;

--
-- Constraints for table `user_plant_rel`
--
ALTER TABLE `user_plant_rel`
  ADD CONSTRAINT `user_plant_rel_ibfk_1` FOREIGN KEY (`contactNo`) REFERENCES `user_details` (`contactNo`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_plant_rel_ibfk_2` FOREIGN KEY (`plantId`) REFERENCES `plant_details` (`plantId`) ON DELETE CASCADE;

--
-- Constraints for table `user_verification`
--
ALTER TABLE `user_verification`
  ADD CONSTRAINT `user_verification_ibfk_1` FOREIGN KEY (`contactNo`) REFERENCES `user_details` (`contactNo`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
