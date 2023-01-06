-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20230105.cdc2f37a1d
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 10:26 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_psb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nm_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nm_admin`, `username`, `password`) VALUES
(2, 'desire fitri', 'desicantik', '4833b60ea6a56d8217861d86766ce339');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `tgl_daftar` date NOT NULL DEFAULT current_timestamp(),
  `nm_member` varchar(50) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `tgl_daftar`, `nm_member`, `tmp_lahir`, `tgl_lahir`, `no_tlp`, `jk`, `alamat`, `username`, `password`) VALUES
(26, '2022-12-30', 'Desire Fitri', 'Banjarmasin', '2000-12-27', '085274638920', 'Perempuan', 'Belgia', '', ''),
(27, '2022-12-30', 'Mumun Karimun', 'Sungai Andai', '2000-06-14', '081278649308', 'Perempuan', 'Jl. Sana Sini', '', ''),
(29, '2022-12-30', 'Joko Santiko', 'Belitung', '1998-01-13', '089867546732', 'Laki-laki', 'Jl. Ujung Pandang ', '', ''),
(30, '2022-12-30', 'Isty Cantik', 'Anjir', '2000-12-07', '081274838475', 'Perempuan', 'Jl. Pinggir Jalan', '', ''),
(31, '2022-12-30', 'Rizka Amalia', 'Nagara', '2000-11-30', '0815273686895', 'Perempuan', 'Jl. Situ', '', ''),
(32, '2023-01-03', 'desire fitri', 'banjarmasin', '2022-12-03', '74812423', 'Perempuan', 'Arab', '', ''),
(33, '2023-01-03', 'desire fitri', 'banjarmasin', '2023-01-18', '556783940238', 'Perempuan', 'ghsdfajks', 'desire', 'desire'),
(34, '2023-01-03', 'desire fitri', 'banjarmasin', '2023-01-04', '3456789876', 'Perempuan', 'mana', 'desiiii', 'a67d4182ece5ef0feddbd5c2ffda6f23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
