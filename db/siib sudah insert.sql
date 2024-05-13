-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 13, 2024 at 08:47 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int NOT NULL,
  `kode_brg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `nama_brg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `satuan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `stok` int NOT NULL,
  `tim` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `supplier` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `kode_brg`, `nama_brg`, `satuan`, `stok`, `tim`, `supplier`) VALUES
(1, '001', 'Pensil Mekanik', 'Buah', 1, 'UMUM', 'BPS Kabupaten Pekalongan'),
(3, '002', 'Isi pensil mekanik', 'buah', 10, 'UMUM', 'BPS Kabupaten Pekalongan'),
(4, '003', 'Spidol Kecil Biru', 'buah', 3, 'UMUM', 'BPS Kabupaten Pekalongan'),
(5, '004', 'Pensil 2B Steadler-2', 'buah', 89, 'UMUM', 'BPS Kabupaten Pekalongan'),
(6, '005', 'Bolpoint 4 Warna', 'buah', 250, 'UMUM', 'BPS Kabupaten Pekalongan'),
(7, '006', 'Bolpoint Tizo Biru', 'buah', 74, 'UMUM', 'BPS Kabupaten Pekalongan'),
(8, '0011', 'Buku Folio', 'buah', 8, 'UMUM', 'BPS Kabupaten Pekalongan'),
(9, '0001', 'pensil mekanik', 'buah', 1, 'UMUM', 'BPS Kabupaten Pekalongan'),
(10, '0002', 'Isi pensil mekanik', 'buah', 10, 'UMUM', 'BPS Kabupaten Pekalongan'),
(11, '0003', 'Spidol Kecil Biru', 'buah', 3, 'UMUM', 'BPS Kabupaten Pekalongan'),
(12, '0004', 'Pensil 2B Steadler-2', 'buah', 89, 'UMUM', 'BPS Kabupaten Pekalongan'),
(13, '0005', 'Bolpoint 4 Warna', 'buah', 250, 'UMUM', 'BPS Kabupaten Pekalongan'),
(14, '0006', 'Bolpoint Tizo Biru', 'buah', 74, 'UMUM', 'BPS Kabupaten Pekalongan'),
(15, '0007', 'Bolpenku', 'buah', 583, 'UMUM', 'BPS Kabupaten Pekalongan'),
(16, '0008', 'Bolpoint Tizo Hitam', 'buah', 66, 'UMUM', 'BPS Kabupaten Pekalongan'),
(17, '0009', 'Isi Pensil Mekanik-1', 'buah', 1, 'UMUM', 'BPS Kabupaten Pekalongan'),
(18, '0010', 'Stabilo Varco', 'buah', 5, 'UMUM', 'BPS Kabupaten Pekalongan'),
(19, '0011', 'Buku Folio', 'buah', 7, 'UMUM', 'BPS Kabupaten Pekalongan'),
(20, '0012', 'Pensil Mekanik Set', 'buah', 8, 'UMUM', 'BPS Kabupaten Pekalongan'),
(21, '0013', 'Bolpoin B-gel', 'buah', 88, 'UMUM', 'BPS Kabupaten Pekalongan'),
(22, '0014', 'Bolpoint Standart AE7', 'buah', 54, 'UMUM', 'BPS Kabupaten Pekalongan'),
(23, '0015', 'Spidol whiteboard permanen', 'buah', 100, 'UMUM', 'BPS Kabupaten Pekalongan'),
(24, '0016', 'CLIP BOARD', 'buah', 4, 'UMUM', 'BPS Kabupaten Pekalongan'),
(25, '0017', 'Binder Klip no.155', 'dus', 92, 'UMUM', 'BPS Kabupaten Pekalongan'),
(26, '0018', 'Clip Trigonal Seagull no.3', 'dus', 496, 'UMUM', 'BPS Kabupaten Pekalongan'),
(27, '0019', 'Binder Klip no.105', 'dus', 122, 'UMUM', 'BPS Kabupaten Pekalongan'),
(28, '0020', 'Binder no. 260', 'buah', 111, 'UMUM', 'BPS Kabupaten Pekalongan'),
(29, '0020', 'Re Type Tip Ex', 'buah', 3, 'UMUM', 'BPS Kabupaten Pekalongan'),
(30, '0021', 'Karet Penghapus Safari Brand', 'buah', 210, 'UMUM', 'BPS Kabupaten Pekalongan'),
(31, '0022', 'Stofmap Polos', 'buah', 44, 'UMUM', 'BPS Kabupaten Pekalongan'),
(32, '0023', 'Stofmap Plastik', 'buah', 3, 'UMUM', 'BPS Kabupaten Pekalongan'),
(33, '0024', 'Stopmap Cetak Kop', 'buah', 802, 'UMUM', 'BPS Kabupaten Pekalongan'),
(34, '0025', 'Peruncing pensil bulat', 'buah', 15, 'UMUM', 'BPS Kabupaten Pekalongan'),
(35, '0026', 'Gunting', 'buah', 60, 'UMUM', 'BPS Kabupaten Pekalongan'),
(36, '0027', 'Cutter L-500 Kenko', 'buah', 60, 'UMUM', 'BPS Kabupaten Pekalongan'),
(37, '0028', 'Lem Povinal', 'buah', 4, 'UMUM', 'BPS Kabupaten Pekalongan'),
(38, '0029', 'Lakban Bening', 'buah', 4, 'UMUM', 'BPS Kabupaten Pekalongan'),
(39, '0030', 'Isolasi Double tip 1 cm', 'buah', 22, 'UMUM', 'BPS Kabupaten Pekalongan'),
(40, '0031', 'Lakban Hitam2', 'buah', 2, 'UMUM', 'BPS Kabupaten Pekalongan'),
(41, '0032', 'Double Tipe Foam', 'buah', 2, 'UMUM', 'BPS Kabupaten Pekalongan'),
(42, '0033', 'Lakban Coklat2', 'buah', 2, 'UMUM', 'BPS Kabupaten Pekalongan'),
(43, '0034', 'Staples', 'buah', 1, 'UMUM', 'BPS Kabupaten Pekalongan'),
(44, '0035', 'Isi Staples Kecil-1', 'dus', 70, 'UMUM', 'BPS Kabupaten Pekalongan'),
(45, '0036', 'Isi Staples Great wall', 'dus', 1, 'UMUM', 'BPS Kabupaten Pekalongan'),
(46, '0037', 'Isi Staples Besar  Kangaro', 'dus', 12, 'UMUM', 'BPS Kabupaten Pekalongan'),
(47, '0038', 'Isi Staples Kecil', 'buah', 20, 'UMUM', 'BPS Kabupaten Pekalongan'),
(48, '0039', 'Lakban Bening', 'buah', 42, 'UMUM', 'BPS Kabupaten Pekalongan'),
(49, '0040', 'Lakban Coklat', 'buah', 42, 'UMUM', 'BPS Kabupaten Pekalongan'),
(50, '0041', 'Lakban Hitam', 'buah', 42, 'UMUM', 'BPS Kabupaten Pekalongan'),
(51, '0042', 'Kertas HVS Folio 70 gram Sinar Dunia', 'buah', 17, 'UMUM', 'BPS Kabupaten Pekalongan'),
(52, '0043', 'Kertas HVS Kwarto 70 gram Sinar Dunia-2', 'set', 64, 'UMUM', 'BPS Kabupaten Pekalongan'),
(53, '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 'set', 46, 'UMUM', 'BPS Kabupaten Pekalongan'),
(54, '0045', 'Kertas A3', 'buah', 5, 'UMUM', 'BPS Kabupaten Pekalongan'),
(55, '0046', 'Stick Notes', 'buah', 95, 'UMUM', 'BPS Kabupaten Pekalongan'),
(56, '0047', 'Stick Notes besar', 'buah', 92, 'UMUM', 'BPS Kabupaten Pekalongan'),
(57, '0048', 'Kertas Foto', 'buah', 1, 'UMUM', 'BPS Kabupaten Pekalongan'),
(58, '0049', 'Amplop Putih sedang', 'buah', 1, 'UMUM', 'BPS Kabupaten Pekalongan'),
(59, '0050', 'Amplop Biru Cetak Kop 24,5 x 35 cm', 'buah', 572, 'UMUM', 'BPS Kabupaten Pekalongan'),
(60, '0051', 'Amplop Coklat Kecil Logo BPS', 'buah', 120, 'UMUM', 'BPS Kabupaten Pekalongan'),
(61, '0052', 'Amplop coklat kecil', 'buah', 160, 'UMUM', 'BPS Kabupaten Pekalongan'),
(62, '0053', 'Snellhecter Cetak Kop', 'buah', 234, 'UMUM', 'BPS Kabupaten Pekalongan'),
(63, '0054', 'Kertas Sampul Coklat', 'buah', 7, 'UMUM', 'BPS Kabupaten Pekalongan'),
(64, '0055', 'COVER CD KOTAK', 'buah', 6, 'UMUM', 'BPS Kabupaten Pekalongan'),
(65, '0056', 'Tinta Epson L3110', 'buah', 53, 'UMUM', 'BPS Kabupaten Pekalongan'),
(66, '0057', 'Tinta Epson M2140(005)', 'buah', 15, 'UMUM', 'BPS Kabupaten Pekalongan'),
(67, '0058', 'Tinta Epson L3110 (003)', 'buah', 19, 'UMUM', 'BPS Kabupaten Pekalongan'),
(68, '0059', 'Toner 107a', 'buah', 23, 'UMUM', 'BPS Kabupaten Pekalongan'),
(69, '0060', 'Tooner M3140', 'set', 10, 'UMUM', 'BPS Kabupaten Pekalongan'),
(70, '0061', 'Tinta 008 Hitam', 'buah', 6, 'UMUM', 'BPS Kabupaten Pekalongan'),
(71, '0062', 'Tinta 008 Warna', 'set', 10, 'UMUM', 'BPS Kabupaten Pekalongan'),
(72, '0063', 'Keyboard Logitech', 'set', 3, 'UMUM', 'BPS Kabupaten Pekalongan'),
(73, '0064', 'Batu baterai Alkaline AAA', 'set', 5, 'UMUM', 'BPS Kabupaten Pekalongan'),
(74, '0065', 'Pisau Peruncing SP2020', 'set', 6, 'UMUM', 'BPS Kabupaten Pekalongan'),
(75, '0066', 'Papan Jalan SP2020', 'set', 14, 'UMUM', 'BPS Kabupaten Pekalongan'),
(76, '0067', 'ID CARD SP2020', 'set', 8, 'UMUM', 'BPS Kabupaten Pekalongan'),
(77, '0068', 'Map Prop', 'set', 832, 'UMUM', 'BPS Kabupaten Pekalongan'),
(78, '0069', 'Tas Susenas MKP', 'buah', 1, 'UMUM', 'BPS Kabupaten Pekalongan'),
(79, '0070', 'Ballpoint Trendee 02 FKP 2023', 'buah', 660, 'UMUM', 'BPS Kabupaten Pekalongan');

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
  ADD PRIMARY KEY (`id_barang`);

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
  MODIFY `id_barang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `tb_barang_in`
--
ALTER TABLE `tb_barang_in`
  MODIFY `id_brg_in` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

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
  MODIFY `id_tim` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
