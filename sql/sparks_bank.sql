-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 09:19 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparks_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(5, 'Priyanka', 'Yash', 3000, '2021-06-11 01:44:29'),
(6, 'Abhishek', 'Sairaj', 4000, '2021-06-13 17:06:56'),
(7, 'Abhishek', 'Yash', 2000, '2021-06-13 17:08:56'),
(8, 'Anushka', 'Ranvir', 6000, '2021-06-13 21:35:33'),
(9, 'Deepika', 'Virat', 4500, '2021-06-13 21:35:54'),
(10, 'Yash', 'Virat', 4000, '2021-06-14 00:19:33'),
(11, 'Sairaj', 'Riya', 7500, '2021-06-14 00:20:17'),
(12, 'Virat', 'Priyanka', 8500, '2021-06-14 00:21:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Abhishek', 'abhishek@gmail.com', 44000),
(2, 'Riya', 'riya123@gmail.com', 36500),
(3, 'Sairaj', 'sairaj45@gmail.com', 36500),
(4, 'Priyanka', 'priyanka@gmail.com', 53500),
(5, 'Yash', 'yash@gmail.com', 38000),
(6, 'Ranvir', 'ranvirsingh@gmail.com', 44000),
(7, 'Deepika', 'padukone@gmail.com', 48500),
(8, 'Anushka', 'anushka768@gmail.com', 34000),
(9, 'Virat', 'viratkohli@gmail.com', 60000),
(10, 'Vijay', 'vijay3344@gmail.com', 50000),
(11, 'Ajinkya', 'ajinkya@gmail.com', 55000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
