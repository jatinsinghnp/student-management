-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 07:34 PM
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
-- Database: `db_studentmgmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`username`, `email`, `password`) VALUES
('', '1234', '1234'),
('', 'jatinsingh@gmail.com.in', '12345'),
('jatinsinngh', 'jatinsingh@gmail.com.in', 'jjjjj'),
('rma', '123@gamil.com', 'test'),
('Ram', 'jatinsingh@gmail.com.in', 'test'),
('root', 'jatinsingh@gmail.com.in', 'root'),
('Admin', 'jatinsingh@gmail.com.in', 'Admin77@'),
('Ram', 'jatinsingh@gmail.com.in', 'test'),
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `std_id` int(11) NOT NULL,
  `std_name` varchar(50) NOT NULL,
  `std_year` int(4) NOT NULL,
  `std_sem` varchar(6) NOT NULL,
  `std_roll` int(100) NOT NULL,
  `std_contact` bigint(10) NOT NULL,
  `std_adress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`std_id`, `std_name`, `std_year`, `std_sem`, `std_roll`, `std_contact`, `std_adress`) VALUES
(6, 'jatinsignh', 1880, '1stsem', 18, 1234567890, 'bafal,km'),
(8, 'pankaj ', 2021, '2ndsem', 18, 9880388741, 'jadibuti,ktm'),
(9, 'sunil lama ', 2021, '3rdsem', 20, 1234567890, 'baneepa,kavrea'),
(10, 'jatinSingh', 2020, '2ndsem', 300, 1234567890, 'bafal'),
(11, 'jatinSingh', 2020, '2ndsem', 20, 982388888, 'jadibuti,ktm'),
(12, 'jatin', 2020, '1stsem', 18, 9880388741, 'bafal,ktm'),
(13, 'hari', 2020, '1stsem', 20, 89899898989, 'baneepa,kavrea');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
