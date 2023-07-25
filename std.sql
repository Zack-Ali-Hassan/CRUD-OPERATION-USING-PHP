-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 02:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `std`
--

CREATE TABLE `std` (
  `student_id` varchar(20) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `std`
--

INSERT INTO `std` (`student_id`, `student_name`, `student_class`) VALUES
('1', 'Abdirahman Ali Hussein', 'CA203'),
('2', 'Zack Ali Hassan', 'CA202'),
('3', 'Hashi Khalif Mohamed', 'CA204'),
('4', 'Hanan Hashi Ali', 'CA206'),
('5', 'Shuip Abshir Adan', 'CA204');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
