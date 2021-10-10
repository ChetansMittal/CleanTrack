-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 05:39 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `gender` enum('m','f','o') NOT NULL,
  `email` int(30) NOT NULL,
  `region` varchar(20) NOT NULL,
  `number` bigint(10) NOT NULL,
  `adhar` int(12) NOT NULL,
  `file` varchar(30) NOT NULL,
  `complaint` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstName`, `lastName`, `gender`, `email`, `region`, `number`, `adhar`, `file`, `complaint`) VALUES
(62, 'qwert', 'wqwqw', 'm', 0, 'kothrud', 12121212, 2121212, '20200806_222358.jpg', 'Type here212'),
(63, 'qwert', 'wqwqw', 'm', 0, 'aundh', 12121212, 2121212, '20200806_222358.jpg', 'Type here212'),
(64, 'qwert', 'wqwqw', 'm', 0, 'shivajinagar', 12121212, 2121212, '20200806_222358.jpg', 'Type here212'),
(65, 'qwert', 'wqwqw', 'm', 0, 'kothrud', 12121212, 2121212, '20200806_222358.jpg', 'Type here212'),
(66, 'qwert', 'wqwqw', 'm', 0, 'yerwada', 12121212, 2121212, '20200806_222358.jpg', 'Type here212'),
(67, 'chetan', 'agarwal', 'm', 0, 'yerwada', 9834710110, 2147483647, '20200806_222358.jpg', 'Type here chetan ahaha'),
(68, 'chetan', 'agarwal', 'm', 0, 'yerwada', 9834710110, 2147483647, '20200806_222358.jpg', 'Type here chetan ahaha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
