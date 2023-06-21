-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 06:21 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fifa`
--

-- --------------------------------------------------------

--
-- Table structure for table `fifa`
--

CREATE TABLE `fifa` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `lang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fifa`
--

INSERT INTO `fifa` (`id`, `first_name`, `last_name`, `pass`, `email`, `country`, `lang`) VALUES
(1, 'yousuf', 'shahid', '1234', 'ys937721@gmail.com', 'Pakistan', 'English'),
(2, 'Yousuf2', 'shahid', 'abc123', 'abc123@gmail.com', 'Pakistan', 'Pakistan'),
(3, 'Yousuf2', 'sh', 'abc2', 'abc2@gmail.com', 'Pakistan', 'Pakistan'),
(4, 'red', 'check', 'check', 'checkred@abc.com', 'Afghanistan', 'Afghanistan'),
(5, 'red', 'check', 'abc2', 'checkred@abc.com', 'Afghanistan', 'Afghanistan'),
(20, 'Hammad', 'Yosaf', 'abcdf', 'hammad@rush3r.com', 'Algeria', 'Algeria'),
(21, 'basit', 'azhar', 'bdkagbkd', 'basit.in@gmail.com', 'Pakistan', 'Pakistan'),
(22, 'rush3r', 'fast', '6fjmAJyFE2LH2M7', 'ishr@rush3r.com', 'Algeria', 'Algeria');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fifa`
--
ALTER TABLE `fifa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fifa`
--
ALTER TABLE `fifa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
