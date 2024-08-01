-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2024 at 05:04 PM
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
-- Database: `peternakandesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `kambingdomba`
--

CREATE TABLE `kambingdomba` (
  `id` int(5) NOT NULL,
  `namaproduk` varchar(20) NOT NULL,
  `berat` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kambingdomba`
--

INSERT INTO `kambingdomba` (`id`, `namaproduk`, `berat`, `harga`) VALUES
(1, 'Kambing Domba', '18-20', '2.300.000'),
(2, 'Kambing Domba', '21-23', '2.600.000'),
(3, 'Kambing Domba', '24-26', '2.900.000'),
(4, 'Kambing Domba', '27-30', '3.200.000'),
(5, 'Kambing Domba', '31-33', '3.500.000'),
(6, 'Kambing Domba', '34-36', '3.800.000'),
(7, 'Kambing Domba', '37-40', '4.000.000'),
(8, 'Kambing Domba', '41-43', '4.300.000'),
(9, 'Kambing Domba', '44-46', '4.600.000'),
(10, 'Kambing Domba', '47-49', '5.000.000'),
(11, 'Kambing Domba', '50-52', '5.300.000'),
(12, 'Kambing Domba', '53-55', '5.500.000'),
(13, 'Kambing Domba', '56-59', '5.800.000'),
(14, 'Kambing Domba', '60-70', '6-7.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `sapibali`
--

CREATE TABLE `sapibali` (
  `id` int(5) NOT NULL,
  `namaproduk` varchar(20) NOT NULL,
  `berat` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sapibali`
--

INSERT INTO `sapibali` (`id`, `namaproduk`, `berat`, `harga`) VALUES
(1, 'Sapi Bali', '200-220', '17.000.000'),
(2, 'Sapi Bali', '230-250', '18.000.000'),
(3, 'Sapi Bali', '260-280', '20.000.000'),
(4, 'Sapi Bali', '290-310', '22.000.000'),
(5, 'Sapi Bali', '320-340', '24.000.000'),
(6, 'Sapi Bali', '350-370', '26.000.000'),
(7, 'Sapi Bali', '380-400', '29.000.000'),
(8, 'Sapi Bali', '410-430', '31.000.000'),
(9, 'Sapi Bali', '440-460', '33.000.000'),
(10, 'Sapi Bali', '470-480', '35.000.000'),
(11, 'Sapi Bali', '490-510', '37.000.000'),
(12, 'Sapi Bali', '520-540', '39.000.000'),
(13, 'Sapi Bali', '550-570', '42.000.000'),
(14, 'Sapi Bali', '580-600', '45.000.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kambingdomba`
--
ALTER TABLE `kambingdomba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sapibali`
--
ALTER TABLE `sapibali`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
