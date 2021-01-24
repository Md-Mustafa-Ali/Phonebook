-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 24, 2021 at 06:15 PM
-- Server version: 10.4.10-MariaDB
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
-- Database: `phonebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(100) NOT NULL,
  `phone` int(150) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `phone`, `email`) VALUES
('Ahmed', 1234567898, 'ahmed81@gmail.com'),
('Akash', 1234567891, 'akash12@gmail.com'),
('Hatim', 1234567802, 'hati88@gmail.com'),
('Irfaan', 1234567800, 'irfaan55@gmail.com'),
('karan', 1234567897, 'karan18@yahoo.com'),
('Kashmira', 1234567801, 'kash99@gmail.com'),
('Kunal', 1234567893, 'kunal67@yahoo.com'),
('Rakesh ', 1234567890, 'rakesh123@gmail.com'),
('Sahil', 1234567896, 'sahil01@gmail.com'),
('Samar', 1234567892, 'samar45@gmail.com'),
('Sonali', 1234567899, 'sonali28@yahoo.com'),
('Sonam', 1234567894, 'sonam78@gmail.com'),
('Vaasu', 1234567803, 'vaasu74@gmail.com'),
('Veer', 1234567895, 'veer72@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(100) NOT NULL,
  `pass` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `pass`) VALUES
('user', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
