-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jul 2024 pada 03.54
-- Versi server: 10.4.28-MariaDB-log
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peternakan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kambingdomba`
--

CREATE TABLE `kambingdomba` (
  `id` int(5) NOT NULL,
  `namaproduk` varchar(20) NOT NULL,
  `berat` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kambingdomba`
--

INSERT INTO `kambingdomba` (`id`, `namaproduk`, `berat`, `harga`) VALUES
(1, 'kambingdomba', '18-20', '2.300000'),
(2, 'kambingdomba', '21-23', '2.600000'),
(3, 'kambingdomba', '24-26', '2.900000'),
(4, 'kambingdomba', '27-30', '3.200000'),
(5, 'kambingdomba', '31-33', '3.500000'),
(6, 'kambingdomba', '34-36', '3.800000'),
(7, 'kambingdomba', '37-40', '4000000'),
(8, 'kambingdomba', '41-43', '4.300000'),
(9, 'kambingdomba', '44-46', '4.600000'),
(10, 'kambingdomba', '47-49', '5000000'),
(11, 'kambingdomba', '50-52', '5.300000'),
(12, 'kambingdomba', '53-55', '5.500000'),
(13, 'kambingdomba', '56-59', '5.800000'),
(14, 'kambingdomba', '60-70', '6-7 000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sapi bali`
--

CREATE TABLE `sapi bali` (
  `id` int(5) NOT NULL,
  `namaproduk` varchar(20) NOT NULL,
  `berat` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sapi bali`
--

INSERT INTO `sapi bali` (`id`, `namaproduk`, `berat`, `harga`) VALUES
(1, 'sapi bali', '200-220', '17000000'),
(2, 'sapi bali', '230-250', '18000000'),
(3, 'sapi bali', '260-280', '20000000'),
(4, 'sapi bali', '290-310', '22000000'),
(5, 'sapi bali', '320-340', '24000000'),
(6, 'sapi bali', '350-370', '26000000'),
(7, 'sapi bali', '380-400', '29000000'),
(8, 'sapi bali', '410-430', '31000000'),
(9, 'sapi bali', '440-460', '33000000'),
(10, 'sapi bali', '470-480', '35000000'),
(11, 'sapi bali', '490-510', '37000000'),
(12, 'sapi bali', '520-540', '39000000'),
(13, 'sapi bali', '550-570', '42000000'),
(14, 'sapi bali', '580-600', '45000000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kambingdomba`
--
ALTER TABLE `kambingdomba`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sapi bali`
--
ALTER TABLE `sapi bali`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
