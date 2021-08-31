-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 10:11 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `outsourcearea`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `id_cabang` varchar(10) NOT NULL,
  `nama_cabang` varchar(10) NOT NULL,
  `alamat_cabang` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`id_cabang`, `nama_cabang`, `alamat_cabang`, `no_telepon`, `email`) VALUES
('CB001', 'Yogyakarta', 'Jalan Raya Bantul, Yogyakarta', '08777123234', 'outsourcearea.bantul@gmail.com'),
('CB002', 'Malang', 'Jalan Raya Batu, Malang', '08777234345', 'outsourcearea.batu@gmail.com'),
('CB003', 'Palembang', 'Jalan Raya Jakabaring, Palembang', '08777345456', 'outsoutcearea.jakabaring@gmail.com'),
('CB004', 'Bandung', 'Jalan Raya Jatinangor, Bandung', '08777567678', 'outsourcearea.jatinangor@gmail.com'),
('CB005', 'Jakarta', 'Jalan Raya Meruya Utara, Jakarta', '08777678789', 'outsourcearea.meruya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_perusahaan` varchar(15) NOT NULL,
  `nama_perusahaan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_perusahaan`, `nama_perusahaan`) VALUES
('PER001', 'BCA'),
('PER003', 'BSD City'),
('PER002', 'Danamon'),
('PER004', 'Lippo Group'),
('PER005', 'UPH');

-- --------------------------------------------------------

--
-- Table structure for table `data_diri_pekerja`
--

CREATE TABLE `data_diri_pekerja` (
  `id_pekerja` varchar(10) NOT NULL,
  `no_ktp` varchar(15) NOT NULL,
  `id_perusahaan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `respon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `no_telepon`, `email`, `respon`) VALUES
('K201902', 'Tengku Iqbal', '08777234345', 'tengkyuiqbal@gmail.com', 'Belum Dibalas'),
('K201903', 'Master Jodi', '08777345456', 'master.jodi@gmail.com', 'Sudah Dibalas'),
('K201904', 'Hafid Daminudin', '08777567678', 'hafid@gmail.com', 'Belum Dibalas');

-- --------------------------------------------------------

--
-- Table structure for table `perekrutan`
--

CREATE TABLE `perekrutan` (
  `no_ktp` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `posisi` varchar(15) NOT NULL,
  `id_cabang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perekrutan`
--

INSERT INTO `perekrutan` (`no_ktp`, `nama`, `no_telepon`, `jenis_kelamin`, `alamat`, `posisi`, `id_cabang`) VALUES
('201912065', 'Hendra Pratik Aditama', '08777123234', 'Laki-laki', 'Jalan Mawar', 'MobProm', 'CB001'),
('201912066', 'Niko Aji Prasetya', '08777234345', 'Laki-laki', 'Jalan Melati', 'DeskProm', 'CB002'),
('201912067', 'Eka Pramudia', '08777345456', 'Laki-laki', 'Jalan Kamboja', 'WebProm', 'CB004'),
('201912068', 'Muhammad Alfin Ramzy', '08777345456', 'Laki-laki', 'Jalan Flamboyan', 'DeskProm', 'CB003');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` varchar(10) NOT NULL,
  `no_ktp` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  `lama_kontrak` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `no_ktp`, `status`, `lama_kontrak`) VALUES
('S0001', '201912065', 'Disalurkan', '2 Bulan'),
('S0002', '201912066', 'Belum Disalurkan', '-'),
('S0003', '201912067', 'Belum Disalurkan', '-'),
('S0004', '201912068', 'Disalurkan', '4 Bulan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_visi`
--

CREATE TABLE `tb_visi` (
  `visi` varchar(100) NOT NULL,
  `misi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_visi`
--

INSERT INTO `tb_visi` (`visi`, `misi`) VALUES
('wafdsf', 'dfdsfsfaaaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id_cabang`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_perusahaan`),
  ADD UNIQUE KEY `nama_perusahaan` (`nama_perusahaan`);

--
-- Indexes for table `data_diri_pekerja`
--
ALTER TABLE `data_diri_pekerja`
  ADD PRIMARY KEY (`id_pekerja`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `perekrutan`
--
ALTER TABLE `perekrutan`
  ADD PRIMARY KEY (`no_ktp`),
  ADD UNIQUE KEY `id_cabang` (`id_cabang`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`),
  ADD UNIQUE KEY `no_ktp` (`no_ktp`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `perekrutan`
--
ALTER TABLE `perekrutan`
  ADD CONSTRAINT `perekrutan_ibfk_1` FOREIGN KEY (`id_cabang`) REFERENCES `cabang` (`id_cabang`);

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_ibfk_1` FOREIGN KEY (`no_ktp`) REFERENCES `perekrutan` (`no_ktp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
