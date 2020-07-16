-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 04:57 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `hak_akses` enum('superadmin','admin','adminlokasi') NOT NULL,
  `nama` varchar(32) NOT NULL,
  `jk` enum('laki-laki','perempuan') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `hak_akses`, `nama`, `jk`, `tanggal_lahir`, `alamat`, `no_hp`, `email`) VALUES
(1, 'dsf', 'sdfs', 'superadmin', 'weq', 'laki-laki', '0000-00-00', 'dsdaasd', '68586', '5645656'),
(26, 'yoga', '', 'admin', 'asep', 'laki-laki', '2020-07-08', 'disana', '0812345677', 'asepjuna@gmail.com'),
(27, 'yoga', '', 'admin', 'asep', 'laki-laki', '2020-07-03', 'disana', '0812345677', 'asepjuna@gmail.com'),
(28, 'asep1', '', 'admin', 'asep', 'laki-laki', '2020-08-05', 'disana', '12333331', 'asepjuna@gmail.com'),
(29, '181106041077', 'd9b1d7db4cd6e70935368a1efb10e377', 'admin', 'qwe', 'laki-laki', '2111-03-03', 'qweqwe', 'qweqew', 'qweqwe');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_wisata` varchar(50) NOT NULL,
  `alamat_wisata` text NOT NULL,
  `harga` varchar(11) NOT NULL,
  `jarak` varchar(5) NOT NULL,
  `tikor_wisata` text NOT NULL,
  `fasilitas` text NOT NULL,
  `kategori` enum('kawah','curug','gunung','') NOT NULL,
  `lampiran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `id_user`, `nama_wisata`, `alamat_wisata`, `harga`, `jarak`, `tikor_wisata`, `fasilitas`, `kategori`, `lampiran`) VALUES
(1, 0, 'kebon', 'jalan sini', '15rb', '12km', 'lbcsee', 'qwesad', 'gunung', 'qweasdasdqweqwe'),
(123123, 0, 'kebon', 'jalan sini', '15rb', '12km', 'lbcsee', 'qwesad', 'gunung', 'qweasdasdqweqwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
