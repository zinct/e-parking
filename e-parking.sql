-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2020 at 02:34 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_e-parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kendaraan`
--

CREATE TABLE `tb_kendaraan` (
  `kendaraan_id` int(11) NOT NULL,
  `nama_jenis` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kendaraan`
--

INSERT INTO `tb_kendaraan` (`kendaraan_id`, `nama_jenis`, `harga`) VALUES
(1, 'Motor', 3000),
(2, 'Mobil', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_masuk`
--

CREATE TABLE `tb_masuk` (
  `id` int(11) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `kode_parkir` char(5) NOT NULL,
  `kendaraan_id` int(11) NOT NULL,
  `nama_kendaraan` varchar(255) NOT NULL,
  `plat` char(11) NOT NULL,
  `waktu_masuk` time NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_masuk`
--

INSERT INTO `tb_masuk` (`id`, `nama_petugas`, `kode_parkir`, `kendaraan_id`, `nama_kendaraan`, `plat`, `waktu_masuk`, `tarif`) VALUES
(11, 'Indra Mahesa', 'BN001', 2, 'Avanza Model YZT', 'D 4353 SWS', '18:26:32', 5000),
(12, 'Indra Mahesa', 'BN001', 1, 'Beat Series Y Tahun 2012', 'D 2523 TGT', '19:28:29', 3000),
(13, 'Indra Mahesa', 'BN001', 1, 'Spaci Series A 2013', 'D 4212 FGT', '06:46:25', 3000),
(14, 'Sandhika Galih', 'BN001', 2, 'Xenia Putih', 'D 4341 HFS', '07:08:07', 5000),
(15, 'Indra Mahesa', 'BN001', 2, 'Supra', 'D 7823 KA', '19:33:33', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_role`
--

INSERT INTO `tb_role` (`id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama_user`, `username`, `password`, `role_id`) VALUES
(1, 'Indra Mahesa', 'indra', '$2y$10$YH8OXLQb9zg0tWdKLfeHCeDkRvT4oSv9Al240jXqqHm9M.skE5vDW', 1),
(3, 'David Fadlillah', 'david', '$2y$10$mJ7Yr7cZ2wRYirdRJnqfSOPhe7KrBIZa8F61hBEDzfuFO/oRU.4za', 2),
(4, 'Adi Saputra', 'adi', '$2y$10$JBEY96XtzcR1x2///98tTuVnYXkSCyVXwMwS/K9x3ZDG691dgTS.C', 2),
(5, 'Fajrur Rahman', 'fajrur', '$2y$10$qxEnaX7CIPHEtFhjYG0cZu5OJAd/nCDTzoyH1IKl/6wafsmB2Q3py', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  ADD PRIMARY KEY (`kendaraan_id`);

--
-- Indexes for table `tb_masuk`
--
ALTER TABLE `tb_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  MODIFY `kendaraan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_masuk`
--
ALTER TABLE `tb_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
