-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2021 at 06:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajaxtask`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajaxdb`
--

CREATE TABLE `ajaxdb` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ajaxdb`
--

INSERT INTO `ajaxdb` (`id`, `name`, `email`, `number`, `password`, `pic`, `gender`, `type`) VALUES
(5, 'manav bhatt ', 'manav123@gmail.com', '989989898', '77981306d2e60bcff5e16d2b693d322cd25833d03a548134f20d5cd113f14cbc', 'upload/download1.jfif', 'male', 'newuser'),
(7, 'Rahul Gupta', 'rahulgupta123@gmail.com', '9632565478', 'af4a400a2ceb7963a424d9cf3779175c8d258facf8a31ee8bc1949dc060e10e6', 'upload/junaid1.jpg', 'male', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajaxdb`
--
ALTER TABLE `ajaxdb`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajaxdb`
--
ALTER TABLE `ajaxdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
