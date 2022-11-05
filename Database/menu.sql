-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 10:41 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `coffe`
--

CREATE TABLE `coffe` (
  `id` int(11) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(2000) NOT NULL,
  `tgl_upload` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coffe`
--

INSERT INTO `coffe` (`id`, `gambar`, `nama`, `harga`, `tgl_upload`) VALUES
(20, 'cappuchino.jpg', 'Cappuchino', '24.000', '28-10-2022 23:16:05'),
(21, 'caramel macchiato.jpeg', 'Caramel Macchiato', '20.000', '28-10-2022 23:41:45'),
(22, 'kopi mocha.jpeg', 'Mocha', '21.000', '28-10-2022 23:42:03'),
(23, 'kopi late.jpeg', 'Latte', '34.000', '28-10-2022 23:42:23'),
(24, 'kopi americano.jpeg', 'Americano', '36.000', '28-10-2022 23:43:35'),
(25, 'kopi au lait.jpeg', 'Au Lait', '21.000', '28-10-2022 23:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `user_akun`
--

CREATE TABLE `user_akun` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_akun`
--

INSERT INTO `user_akun` (`id`, `username`, `password`) VALUES
(1, 'galuh', '$2y$10$peRGxAEcgmcrdXzX2wpXsO8RnWGghZPJnVPGkT0t91si6.iacrfLG'),
(2, 'tes', '$2y$10$WYrRS6xoMyNz8gKAu0BlUOohVH7y5I8NfBCcMQDCJl6wpKQAvPG62');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coffe`
--
ALTER TABLE `coffe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_akun`
--
ALTER TABLE `user_akun`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coffe`
--
ALTER TABLE `coffe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_akun`
--
ALTER TABLE `user_akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
