-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 22, 2024 at 01:19 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siib`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `telepon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `nama`, `telepon`, `foto`) VALUES
(12, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '0812838281', '22092020020607employee1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ajuan`
--

CREATE TABLE `tb_ajuan` (
  `no_ajuan` int NOT NULL,
  `tanggal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `kode_brg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `nama_brg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `stok` int NOT NULL,
  `jml_ajuan` int NOT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `petugas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `val` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `tb_ajuan`
--

INSERT INTO `tb_ajuan` (`no_ajuan`, `tanggal`, `kode_brg`, `nama_brg`, `stok`, `jml_ajuan`, `keterangan`, `petugas`, `val`) VALUES
(4773, '2024-04-19', '1111', 'ACER LAPTOP', 25, 1, 'Pemakaian', 'pegawai', 0),
(5335, '2024-04-18', '1111', 'ACER LAPTOP', 18, 1, 'Pemakaian', 'pegawai', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int NOT NULL,
  `tim` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `kode_brg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `nama_brg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `satuan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `stok` int NOT NULL,
  `supplier` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `tim`, `kode_brg`, `nama_brg`, `satuan`, `stok`, `supplier`) VALUES
(1, 'UMUM', '1111', 'ACER LAPTOP', 'buah', 25, 'BPS Kabupaten Pekalongan'),
(11, 'UMUM', '1.01.03.02.001.00000', 'Kertas HVS kwarto', '70 gram', 60, 'BPS Kabupaten Pekalongan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang_in`
--

CREATE TABLE `tb_barang_in` (
  `id_brg_in` int NOT NULL,
  `tanggal` date NOT NULL,
  `noinv` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `supplier` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `kode_brg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `nama_brg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `stok` int NOT NULL,
  `jml_masuk` int NOT NULL,
  `jam` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `petugas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `tb_barang_in`
--

INSERT INTO `tb_barang_in` (`id_brg_in`, `tanggal`, `noinv`, `supplier`, `kode_brg`, `nama_brg`, `stok`, `jml_masuk`, `jam`, `keterangan`, `petugas`) VALUES
(23, '2024-04-18', 'INV/000/XXXX', 'BPS Kabupaten Pekalongan', '1111', 'ACER LAPTOP', 18, 2, '03:19', 'Pembelian', 'pegawai'),
(25, '2024-04-12', 'INV/000/XXXXX', 'BPS Kabupaten Pekalongan', '1111', 'ACER LAPTOP', 20, 2, '03:32', 'Pembelian', 'pegawai'),
(28, '2024-04-19', '435435', 'BPS Kabupaten Pekalongan', '1111', 'ACER LAPTOP', 24, 1, '02:24', 'Penambahan', 'pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang_out`
--

CREATE TABLE `tb_barang_out` (
  `no_brg_out` int NOT NULL,
  `no_ajuan` int NOT NULL,
  `tanggal_ajuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `tanggal_out` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `petugas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `kode_brg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `nama_brg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `stok` int NOT NULL,
  `jml_ajuan` int NOT NULL,
  `jml_keluar` int NOT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `admin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `tb_barang_out`
--

INSERT INTO `tb_barang_out` (`no_brg_out`, `no_ajuan`, `tanggal_ajuan`, `tanggal_out`, `petugas`, `kode_brg`, `nama_brg`, `stok`, `jml_ajuan`, `jml_keluar`, `keterangan`, `admin`) VALUES
(1014, 5335, '2024-04-18', '2024-04-18', 'pegawai', '1111', 'ACER LAPTOP', 20, 1, 2, 'Pemakaian', 'admin'),
(3401, 4773, '2024-04-19', '2024-04-19', 'pegawai', '1111', 'ACER LAPTOP', 25, 1, 0, 'Pemakaian', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `username`, `password`, `nama`, `telepon`) VALUES
(20, 'pegawai', '047aeeb234644b9e2d4138ed3bc7976a', 'pegawai', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sup`
--

CREATE TABLE `tb_sup` (
  `id_sup` int NOT NULL,
  `nama_sup` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `kontak_sup` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `alamat_sup` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `telepon_sup` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `tb_sup`
--

INSERT INTO `tb_sup` (`id_sup`, `nama_sup`, `kontak_sup`, `alamat_sup`, `telepon_sup`) VALUES
(6, 'BPS Kabupaten Pekalongan', '6576577', 'ytujytujytj', '54654656');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tim`
--

CREATE TABLE `tb_tim` (
  `id_tim` int NOT NULL,
  `nama_tim` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `tb_tim`
--

INSERT INTO `tb_tim` (`id_tim`, `nama_tim`) VALUES
(13, 'UMUM'),
(14, 'SOSIAL'),
(15, 'DISTRIBUSI'),
(16, 'PRODUKSI'),
(17, 'NERACA'),
(18, 'IPDS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_ajuan`
--
ALTER TABLE `tb_ajuan`
  ADD PRIMARY KEY (`no_ajuan`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_barang_in`
--
ALTER TABLE `tb_barang_in`
  ADD PRIMARY KEY (`id_brg_in`);

--
-- Indexes for table `tb_barang_out`
--
ALTER TABLE `tb_barang_out`
  ADD PRIMARY KEY (`no_brg_out`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tb_sup`
--
ALTER TABLE `tb_sup`
  ADD PRIMARY KEY (`id_sup`);

--
-- Indexes for table `tb_tim`
--
ALTER TABLE `tb_tim`
  ADD PRIMARY KEY (`id_tim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_barang_in`
--
ALTER TABLE `tb_barang_in`
  MODIFY `id_brg_in` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_sup`
--
ALTER TABLE `tb_sup`
  MODIFY `id_sup` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_tim`
--
ALTER TABLE `tb_tim`
  MODIFY `id_tim` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
