-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2016 at 05:52 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmw_lot1`
--
CREATE DATABASE IF NOT EXISTS `bmw_lot1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bmw_lot1`;

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `tag_number` varchar(20) NOT NULL,
  `wash` varchar(20) NOT NULL,
  `serviced` varchar(20) NOT NULL,
  `ready` varchar(20) NOT NULL,
  `make_model` varchar(20) NOT NULL,
  `comments` varchar(50) NOT NULL,
  `date_departure` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`tag_number`, `wash`, `serviced`, `ready`, `make_model`, `comments`, `date_departure`) VALUES
('5737', 'No', 'No', 'No', '', '', '2016-07-01 19:02:06'),
('5747', 'No', 'No', 'No', '', '', '2016-07-01 18:52:38');

-- --------------------------------------------------------

--
-- Table structure for table `car_info`
--

CREATE TABLE `car_info` (
  `tag_number` varchar(20) NOT NULL,
  `location` int(4) NOT NULL,
  `wash` varchar(20) NOT NULL,
  `serviced` varchar(20) NOT NULL,
  `ready` varchar(20) NOT NULL,
  `make_model` varchar(20) NOT NULL,
  `comments` varchar(50) NOT NULL,
  `date_arrived` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_info`
--

INSERT INTO `car_info` (`tag_number`, `location`, `wash`, `serviced`, `ready`, `make_model`, `comments`, `date_arrived`) VALUES
('3512', 58, 'No', 'No', 'No', '', '', '2016-07-01 18:57:10'),
('3634', 46, 'No', 'No', 'No', '', '', '2016-07-01 18:54:47'),
('3707', 18, 'No', 'No', 'No', '', '', '2016-07-01 18:43:27'),
('3744', 34, 'No', 'No', 'No', '', '', '2016-07-01 18:47:07'),
('4012', 21, 'No', 'No', 'No', '', '', '2016-07-01 18:44:27'),
('4083', 4, 'No', 'No', 'No', '', '', '2016-07-01 18:39:37'),
('5064', 36, 'No', 'No', 'No', '', '', '2016-07-01 18:47:43'),
('5128', 37, 'No', 'No', 'No', '', '', '2016-07-01 18:48:09'),
('5202', 14, 'No', 'No', 'No', '', '', '2016-07-01 18:42:21'),
('5214', 61, 'No', 'Yes', 'No', '', '', '2016-07-01 19:07:17'),
('5216', 13, 'No', 'No', 'No', '', '', '2016-07-01 18:42:02'),
('5218', 49, 'No', 'No', 'No', '', '', '2016-07-01 18:55:24'),
('5701', 2, 'No', 'No', 'No', '', '', '2016-07-01 18:32:42'),
('5703', 53, 'No', 'No', 'No', '', '', '2016-07-01 18:55:59'),
('5712', 19, 'No', 'No', 'No', '', '', '2016-07-01 18:43:48'),
('5723', 47, 'No', 'No', 'No', '', '', '2016-07-01 18:55:04'),
('5727', 3, 'No', 'No', 'No', '', '', '2016-07-01 18:39:16'),
('5732', 5, 'No', 'No', 'No', '', '', '2016-07-01 18:40:53'),
('5735', 42, 'No', 'No', 'No', '', '', '2016-07-01 18:54:02'),
('5740', 20, 'No', 'No', 'No', '', '', '2016-07-01 18:44:06'),
('5749', 55, 'No', 'Yes', 'No', '', '', '2016-07-01 18:48:52'),
('5750', 7, 'No', 'No', 'No', '', '', '2016-07-01 18:41:43'),
('5752', 57, 'No', 'No', 'No', '', '', '2016-07-01 18:56:53'),
('5762', 41, 'No', 'Yes', 'No', '', '', '2016-07-01 18:53:43'),
('5778', 54, 'No', 'No', 'No', '', '', '2016-07-01 18:56:14'),
('5785', 22, 'No', 'No', 'No', '', '', '2016-07-01 18:44:45'),
('5789', 60, 'No', 'No', 'No', '', '', '2016-07-01 18:57:30'),
('5793', 56, 'No', 'No', 'No', '', '', '2016-07-01 18:56:35'),
('5795', 50, 'No', 'No', 'No', '', '', '2016-07-01 18:55:40'),
('5812', 26, 'No', 'No', 'No', '', '', '2016-07-01 18:45:43'),
('5818', 6, 'No', 'No', 'No', '', '', '2016-07-01 18:41:25'),
('5842', 16, 'No', 'No', 'No', '', '', '2016-07-01 18:42:45'),
('5849', 40, 'No', 'Yes', 'No', '', '', '2016-07-01 18:53:28'),
('5924', 17, 'No', 'No', 'No', '', '', '2016-07-01 18:43:03'),
('5942', 23, 'No', 'No', 'No', '', '', '2016-07-01 18:45:25'),
('BB50098L', 28, 'No', 'No', 'No', '', '', '2016-07-01 18:46:46'),
('BB6S174A', 27, 'No', 'No', 'No', '', 'Ford', '2016-07-01 18:46:21'),
('L65', 38, 'No', 'No', 'No', '', '', '2016-07-01 19:00:25');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_combined`
--
CREATE TABLE `vw_combined` (
);

-- --------------------------------------------------------

--
-- Structure for view `vw_combined`
--
DROP TABLE IF EXISTS `vw_combined`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_combined`  AS  select `car_info`.`tag_number` AS `tag_number`,`car_info`.`location` AS `location`,`car_info`.`wash` AS `wash`,`car_info`.`serviced` AS `serviced`,`car_info`.`ready` AS `ready`,`car_info`.`make_model` AS `make_model`,`car_info`.`comments` AS `comments`,`car_info`.`date_arrived` AS `date_arrived` from `car_info` union all select `archive`.`tag_number` AS `tag_number`,`archive`.`location` AS `location`,`archive`.`wash` AS `wash`,`archive`.`serviced` AS `serviced`,`archive`.`ready` AS `ready`,`archive`.`make_model` AS `make_model`,`archive`.`comments` AS `comments`,`archive`.`date_departure` AS `date_departure` from `archive` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`tag_number`),
  ADD UNIQUE KEY `tag_number` (`tag_number`);

--
-- Indexes for table `car_info`
--
ALTER TABLE `car_info`
  ADD PRIMARY KEY (`tag_number`),
  ADD UNIQUE KEY `tag_number` (`tag_number`),
  ADD UNIQUE KEY `location` (`location`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
