-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 03:18 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_my_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookdemand`
--

CREATE TABLE `bookdemand` (
  `demand_id` int(10) NOT NULL,
  `wisher_name` varchar(20) DEFAULT NULL,
  `demand_name` varchar(20) DEFAULT NULL,
  `demand_desc` varchar(50) DEFAULT NULL,
  `wisher_no` varchar(12) DEFAULT NULL,
  `wisher_location` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookdemand`
--

INSERT INTO `bookdemand` (`demand_id`, `wisher_name`, `demand_name`, `demand_desc`, `wisher_no`, `wisher_location`) VALUES
(1, 'Amit', 'Maths Discrete', 'Need it asap', '889825698', 'Mumbai'),
(2, 'shreyas', 'calculus', 'need it urgent please contact', '9892891698', 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(10) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `seller_name` varchar(20) DEFAULT NULL,
  `category` varchar(20) NOT NULL,
  `mrp` int(10) NOT NULL,
  `resale_value` int(10) NOT NULL,
  `book_condition` varchar(10) NOT NULL,
  `description` longtext NOT NULL,
  `location` varchar(20) NOT NULL,
  `user_phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `seller_name`, `category`, `mrp`, `resale_value`, `book_condition`, `description`, `location`, `user_phone`) VALUES
(3, 'Operating systems', 'Shreyas', 'Computers & Programm', 500, 250, 'Good', 'great book for cs students', 'Mumbai', '9892891698\''),
(4, 'Economics Today', 'shreyas', 'Commerce', 800, 400, 'Average', 'Book is in good condition.', 'Mumbai', '9892891698\'');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `phone_no` varchar(12) DEFAULT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`user_id`, `user_name`, `phone_no`, `email`, `password`) VALUES
(15, 'Ramalakshmi', '8655063999', 'ramavn29@gmail.com', 'vishram'),
(16, 'amit', '8898286541', 'amit@gmail.com', 'amityada'),
(17, 'shreyas', '9892891698', 'shreyasnaidu98@gmail.com', 'shreyasn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookdemand`
--
ALTER TABLE `bookdemand`
  ADD PRIMARY KEY (`demand_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookdemand`
--
ALTER TABLE `bookdemand`
  MODIFY `demand_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
