-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Nov 2019 pada 18.28
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_outsourcearea`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cabang`
--

CREATE TABLE `tb_cabang` (
  `id_cabang` int(4) NOT NULL,
  `id_perusahaan` int(4) NOT NULL,
  `nama_cabang` varchar(10) NOT NULL,
  `alamat_cabang` varchar(30) NOT NULL,
  `kontak_cabang` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_client`
--

CREATE TABLE `tb_client` (
  `id_client` int(4) NOT NULL,
  `id_pekerja` int(4) NOT NULL,
  `id_perusahaan` int(4) NOT NULL,
  `nama_client` varchar(30) NOT NULL,
  `kontak_client` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gaji_pekerja`
--

CREATE TABLE `tb_gaji_pekerja` (
  `id_pekerja` int(4) NOT NULL,
  `nama_pekerja` varchar(30) NOT NULL,
  `gaji_pokok` int(12) NOT NULL,
  `asuransi_kesehatan` int(12) NOT NULL,
  `asuransi_kecelakaan` int(12) NOT NULL,
  `asuransi_jiwa` int(12) NOT NULL,
  `pesangon` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nama_pekerjaan`
--

CREATE TABLE `tb_nama_pekerjaan` (
  `id_nampek` int(4) NOT NULL,
  `gaji_pokok` int(12) NOT NULL,
  `nama_pekerjaan` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pekerja`
--

CREATE TABLE `tb_pekerja` (
  `id_pekerja` int(4) NOT NULL,
  `id_perusahaan` int(4) NOT NULL,
  `id_nampek` int(4) NOT NULL,
  `nama_pekerja` varchar(30) NOT NULL,
  `alamat_pekerja` varchar(30) NOT NULL,
  `kontak` int(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `status_pek` varchar(15) NOT NULL,
  `kontrak` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perusahaan`
--

CREATE TABLE `tb_perusahaan` (
  `id_perusahaan` int(4) NOT NULL,
  `id_client` int(4) NOT NULL,
  `nama_perusahaan` varchar(10) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `kontak` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_visi`
--

CREATE TABLE `tb_visi` (
  `id_visi` int(5) NOT NULL,
  `visi` varchar(255) NOT NULL,
  `misi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_cabang`
--
ALTER TABLE `tb_cabang`
  ADD PRIMARY KEY (`id_cabang`),
  ADD UNIQUE KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indeks untuk tabel `tb_client`
--
ALTER TABLE `tb_client`
  ADD PRIMARY KEY (`id_client`),
  ADD UNIQUE KEY `id_pekerja` (`id_pekerja`);

--
-- Indeks untuk tabel `tb_gaji_pekerja`
--
ALTER TABLE `tb_gaji_pekerja`
  ADD PRIMARY KEY (`gaji_pokok`),
  ADD UNIQUE KEY `id_pekerja` (`id_pekerja`);

--
-- Indeks untuk tabel `tb_nama_pekerjaan`
--
ALTER TABLE `tb_nama_pekerjaan`
  ADD PRIMARY KEY (`id_nampek`),
  ADD UNIQUE KEY `nama_pekerjaan` (`nama_pekerjaan`),
  ADD UNIQUE KEY `gaji_pokok` (`gaji_pokok`);

--
-- Indeks untuk tabel `tb_pekerja`
--
ALTER TABLE `tb_pekerja`
  ADD PRIMARY KEY (`id_pekerja`),
  ADD UNIQUE KEY `id_perusahaan` (`id_perusahaan`),
  ADD UNIQUE KEY `id_nampek` (`id_nampek`);

--
-- Indeks untuk tabel `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`),
  ADD UNIQUE KEY `id_client` (`id_client`);

--
-- Indeks untuk tabel `tb_visi`
--
ALTER TABLE `tb_visi`
  ADD PRIMARY KEY (`id_visi`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_cabang`
--
ALTER TABLE `tb_cabang`
  ADD CONSTRAINT `tb_cabang_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `tb_perusahaan` (`id_perusahaan`);

--
-- Ketidakleluasaan untuk tabel `tb_client`
--
ALTER TABLE `tb_client`
  ADD CONSTRAINT `tb_client_ibfk_1` FOREIGN KEY (`id_pekerja`) REFERENCES `tb_pekerja` (`id_pekerja`);

--
-- Ketidakleluasaan untuk tabel `tb_nama_pekerjaan`
--
ALTER TABLE `tb_nama_pekerjaan`
  ADD CONSTRAINT `tb_nama_pekerjaan_ibfk_1` FOREIGN KEY (`gaji_pokok`) REFERENCES `tb_gaji_pekerja` (`gaji_pokok`);

--
-- Ketidakleluasaan untuk tabel `tb_pekerja`
--
ALTER TABLE `tb_pekerja`
  ADD CONSTRAINT `tb_pekerja_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `tb_perusahaan` (`id_perusahaan`),
  ADD CONSTRAINT `tb_pekerja_ibfk_2` FOREIGN KEY (`id_nampek`) REFERENCES `tb_nama_pekerjaan` (`id_nampek`);

--
-- Ketidakleluasaan untuk tabel `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD CONSTRAINT `tb_perusahaan_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `tb_client` (`id_client`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
