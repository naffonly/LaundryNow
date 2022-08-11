-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 04:30 AM
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
-- Database: `db_laundrynow`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `nama` varchar(68) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nomer_hp` int(12) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `no_keranjang` int(16) NOT NULL,
  `berat` int(128) NOT NULL,
  `diskon` int(128) NOT NULL,
  `total_bayar` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama`, `alamat`, `nomer_hp`, `tgl_masuk`, `tgl_keluar`, `no_keranjang`, `berat`, `diskon`, `total_bayar`) VALUES
(9, 'naufal adjie nadhir ar rachman', 'jl. Manuskan', 1234567890, '2022-06-23', '2022-06-23', 4, 2, 9000, 3000),
(15, 'Yusman', 'jl. Sukapura', 89765455, '2022-06-23', '2022-06-24', 6, 4, 3000, 21000),
(16, 'asep', 'jl. lestari 3', 2147483647, '2022-05-13', '2022-05-22', 9, 5, 4000, 26000),
(19, 'Jajang', 'jl. Singo 3', 866772123, '2022-03-15', '2022-06-26', 2, 2, 2000, 10000),
(21, 'Sutid', 'jl. Singo 3', 866772123, '2022-03-15', '2022-01-23', 2, 2, 2000, 10000),
(24, 'Sule', 'jl. Pajajaran Kulon', 89654111, '2022-02-11', '2022-05-25', 8, 3, 5000, 13000),
(28, 'Rifki', 'Jl. Logam', 2147483647, '2022-06-29', '2022-06-29', 25, 6, 6000, 30000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
