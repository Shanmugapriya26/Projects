-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 09:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sahodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `sahotable`
--

CREATE TABLE `sahotable` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Genere` text NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dDate` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `ppin` text NOT NULL,
  `sstate` varchar(100) NOT NULL,
  `ppassword` varchar(100) NOT NULL,
  `plink` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sahotable`
--

INSERT INTO `sahotable` (`firstname`, `lastname`, `email`, `Genere`, `gender`, `dDate`, `city`, `ppin`, `sstate`, `ppassword`, `plink`) VALUES
('Sasireka', 'Hello', 'abs@gmail.com', 'Biology', 'female', '2022', 'Tiruppur', '0', 'tn', 'hello', ''),
('Jei', 'S', 'jackstarkling@gmail.com', 'CS', 'male', '2002-10-14', 'Coimbatore', 'Software Developer', 'Tamilnadu', 'Jack@123', 'http://localhost/saho/profilebe/Jei.php'),
('Sasireka', 'Priya', 'priya@gmail.com', 'IT', 'female', '2022', 'Tiruppur', '0', 'SECE', 'priya', ''),
('Sasireka', 'S', 'sreka3019@gmail.com', 'CS', 'female', '2002-09-18', 'Tiruppur', 'Student', 'Tamilnadu', 'sasi@123', 'http://localhost/saho/profilebe/Sasireka.php'),
('Suganthi', 'Suganthi', 'sugan@gmail.com', 'IT', 'female', '2022', 'Tiruppur', '0', 'SECE', 'sugan', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sahotable`
--
ALTER TABLE `sahotable`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `password` (`ppassword`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
