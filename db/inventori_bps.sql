-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 16, 2024 at 01:58 AM
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
-- Database: `inventori_bps`
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
(162, '4/1/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 45, 1, 'Pemakaian', 'Suko Prayogi', 0),
(686, '2/22/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 44, 1, 'Pemakaian', 'Siti Mardiyah', 0),
(804, '4/1/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 8, 1, 'Pemakaian', 'Andhika', 0),
(841, '3/19/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 9, 1, 'Pemakaian', 'Munir', 0),
(1028, '2024-01-22', '0070', 'Ballpoint Trendee 02 FKP 2023', 571, 89, 'Pemakaian', 'Andhika', 0),
(1089, '2024-03-29', '0046', 'Stick Notes', 93, 1, 'Pemakaian', 'Trubus', 0),
(1195, '2024-02-29', '0051', 'Amplop Coklat Kecil Logo BPS', 28, 1, 'Pemakaian', 'Suko Prayogi', 0),
(1208, '2024-03-28', '0040', 'Lakban Coklat', 40, 1, 'Pemakaian', 'Kismia', 0),
(1303, '2024-01-03', '0035', 'Isi Staples Kecil-1', 69, 1, 'Pemakaian', 'Sari Dewi', 0),
(1383, '2024-02-29', '0008', 'Bolpoint Tizo Hitam', 65, 1, 'Pemakaian', 'Ita', 0),
(1495, '2024-01-03', '0051', 'Amplop Coklat Kecil Logo BPS', 29, 50, 'Pemakaian', 'Aufarul', 0),
(1584, '2024-03-07', '0058', 'Tinta Epson L3110 (003)', 18, 1, 'Pemakaian', 'Mutiara', 0),
(1666, '2024-04-23', '0030', 'Isolasi Double tip 1 cm', 21, 1, 'Pemakaian', 'Saifudin Z', 0),
(1691, '2024-02-05', '0058', 'Tinta Epson L3110 (003)', 15, 1, 'Pemakaian', 'Arif M', 0),
(1906, '8/3/2024', '0022', 'Stofmap Polos', 39, 5, 'Pemakaian', 'arif m ', 0),
(2044, '3/8/2024', '0018', 'Clip Trigonal Seagull no.3', 494, 2, 'Pemakaian', 'Krismia', 0),
(2061, '4/5/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 10, 5, 'Pemakaian', 'Abdul Hamid', 0),
(2071, '1/10/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 15, 1, 'Pemakaian', 'Arif M', 0),
(2096, '2/13/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 16, 1, 'Pemakaian', 'Windya Nugroho', 0),
(2335, '1/3/2024', '0018', 'Clip Trigonal Seagull no.3', 495, 1, 'Pemakaian', 'arif m', 0),
(2387, '2024-04-03', '0064', 'Batu baterai Alkaline AAA', 4, 1, 'Pemakaian', 'Eko Sujadi', 0),
(2453, '4/1/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 17, 1, 'Pemakaian', 'Noviana', 0),
(2548, '2024-03-06', '0024', 'Stopmap Cetak Kop', 801, 1, 'Pemakaian', 'Habibi', 0),
(2558, '1/22/2024', '0021', 'Karet Penghapus Safari Brand', 121, 89, 'Pemakaian', 'andhika', 0),
(2577, '3/21/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 18, 1, 'Pemakaian', 'Aprilia', 0),
(2782, '2024-01-05', '0028', 'Lem Povinal', 3, 1, 'Pemakaian', 'Aprilia', 0),
(2836, '2024-03-22', '0038', 'Isi Staples Kecil', 0, 10, 'Pemakaian', 'Ita', 0),
(3019, '2024-01-09', '0051', 'Amplop Coklat Kecil Logo BPS', 79, 20, 'Pemakaian', 'Noviana', 0),
(3211, '2024-03-04', '0024', 'Stopmap Cetak Kop', 792, 10, 'Pemakaian', 'Urip', 0),
(3333, '3/5/2024', '0019', 'Binder Klip no.105', 121, 1, 'Pemakaian', 'sari dewi', 0),
(3369, '4/26/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 22, 1, 'Pemakaian', 'M. Habibi', 0),
(3598, '4/17/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 19, 1, 'Pemakaian', 'Mutiara', 0),
(3618, '2024-02-29', '0005', 'Bolpoint 4 Warna', 223, 27, 'Pemakaian', 'Anita', 0),
(3639, '2/29/2024', '0013', 'Bolpoin B-gel', 86, 2, 'Pemakaian', 'okris', 0),
(3652, '1/9/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 20, 1, 'Pemakaian', 'Noviana', 0),
(3689, '2024-04-25', '0024', 'Stopmap Cetak Kop', 801, 1, 'Pemakaian', 'Mutiara', 0),
(3724, '2024-03-05', '0024', 'Stopmap Cetak Kop', 798, 4, 'Pemakaian', 'Kismia', 0),
(3743, '2024-02-05', '0024', 'Stopmap Cetak Kop', 792, 10, 'Pemakaian', 'Risa', 0),
(3924, '3/13/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 21, 1, 'Pemakaian', 'Arif M', 0),
(3925, '2024-02-05', '0058', 'Tinta Epson L3110 (003)', 16, 1, 'Pemakaian', 'Siti Mardiyah', 0),
(4066, '1/3/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 23, 1, 'Pemakaian', 'Mutiara', 0),
(4209, '2024-02-29', '0024', 'Stopmap Cetak Kop', 797, 5, 'Pemakaian', 'ita', 0),
(4557, '2024-04-16', '0024', 'Stopmap Cetak Kop', 801, 1, 'Pemakaian', 'Mutiara', 0),
(4578, '1/3/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 37, 3, 'Pemakaian', 'Aufarul', 0),
(4729, '2024-01-11', '0051', 'Amplop Coklat Kecil Logo BPS', 99, 1, 'Pemakaian', 'Hayati', 0),
(4957, '2024-04-18', '0024', 'Stopmap Cetak Kop', 800, 2, 'Pemakaian', 'Aprilia', 0),
(5064, '2/29/2024', '0013', 'Bolpoin B-gel', 87, 1, 'Pemakaian', 'ita', 0),
(5066, '2024-03-25', '0033', 'Lakban Coklat2', 0, 2, 'Pemakaian', 'Sari Dewi', 0),
(5108, '2024-02-19', '0024', 'Stopmap Cetak Kop', 797, 5, 'Pemakaian', 'sari dewi', 0),
(5204, '2024-01-03', '0024', 'Stopmap Cetak Kop', 801, 1, 'Pemakaian', 'aufarul ', 0),
(5316, '4/22/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 24, 1, 'Pemakaian', 'Abdul Hamid', 0),
(5475, '3/27/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 43, 1, 'Pemakaian', 'Ibnu Utomo', 0),
(5483, '2/6/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 25, 1, 'Pemakaian', 'Trubus', 0),
(5645, '1/30/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 26, 1, 'Pemakaian', 'Abdul Hamid', 0),
(5755, '2/29/2024', '0046', 'Stick Notes', 94, 1, 'Pemakaian', 'Mutiara', 0),
(5784, '2024-03-04', '0024', 'Stopmap Cetak Kop', 782, 20, 'Pemakaian', 'Rani', 0),
(5797, '3/19/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 27, 1, 'Pemakaian', 'Windya Nugroho', 0),
(5913, '2024-01-18', '0050', 'Amplop Biru Cetak Kop 24,5 x 35 cm', 571, 1, 'Pemakaian', 'Mutiara', 0),
(5954, '2024-03-07', '0064', 'Batu baterai Alkaline AAA', 3, 1, 'Pemakaian', 'Kismia/Reto', 0),
(5993, '4/22/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 28, 1, 'Pemakaian', 'Ita', 0),
(6090, '2024-04-03', '0056', 'Tinta Epson L3110', 49, 1, 'Pemakaian', 'Okris Jubaidi', 0),
(6287, '2024-02-26', '0064', 'Batu baterai Alkaline AAA', 2, 1, 'Pemakaian', 'Aufarul', 0),
(6503, '2024-03-28', '0051', 'Amplop Coklat Kecil Logo BPS', 100, 1, 'Pemakaian', 'Intan', 0),
(6663, '2024-01-03', '0011', 'Buku Folio', 6, 1, 'Pemakaian', 'Arindra', 0),
(6827, '2024-03-13', '0064', 'Batu baterai Alkaline AAA', 1, 1, 'Pemakaian', 'Saifudin Z', 0),
(6878, '2024-04-22', '0051', 'Amplop Coklat Kecil Logo BPS', 120, 300, 'Pemakaian', 'Rani', 1),
(6954, '2024-04-26', '0056', 'Tinta Epson L3110', 50, 1, 'Pemakaian', 'Aprilia', 0),
(6956, '2024-04-25', '0051', 'Amplop Coklat Kecil Logo BPS', 101, 12, 'Pemakaian', 'Abdul Hamid', 0),
(7006, '2024-02-19', '0051', 'Amplop Coklat Kecil Logo BPS', 113, 5, 'Pemakaian', 'Aufarul', 0),
(7013, '2024-04-05', '0056', 'Tinta Epson L3110', 51, 1, 'Pemakaian', 'Abdul Hamid', 0),
(7035, '3/19/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 29, 1, 'Pemakaian', 'Suko Prayogi', 0),
(7062, '2024-03-22', '0024', 'Stopmap Cetak Kop', 799, 3, 'Pemakaian', 'Arif M', 0),
(7086, '2024-02-06', '0024', 'Stopmap Cetak Kop', 792, 10, 'Pemakaian', 'Trubus', 0),
(7369, '2024-03-27', '0024', 'Stopmap Cetak Kop', 800, 2, 'Pemakaian', 'Aprilia', 0),
(7515, '2024-01-12', '0064', 'Batu baterai Alkaline AAA', 0, 1, 'Pemakaian', 'Kismia', 0),
(7592, '3/7/2024', '0015', 'Spidol whiteboard permanen', 99, 1, 'Pemakaian', 'sari dewi', 0),
(7617, '2024-03-28', '0040', 'Lakban Coklat', 41, 1, 'Pemakaian', 'Trubus', 0),
(7697, '3/22/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 30, 1, 'Pemakaian', 'Ita', 0),
(7698, '4/23/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 31, 1, 'Pemakaian', 'Rani', 0),
(7833, '1/3/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 32, 1, 'Pemakaian', 'Mutiara', 0),
(8034, '4/22/2024', '0019', 'Binder Klip no.105', 121, 1, 'Pemakaian', 'sari dewi', 0),
(8160, '1/8/2024', '0019', 'Binder Klip no.105', 121, 1, 'Pemakaian', 'mutiara', 0),
(8238, '2024-03-22', '0038', 'Isi Staples Kecil', 10, 10, 'Pemakaian', 'Ita', 0),
(8343, '4/26/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 33, 1, 'Pemakaian', 'Aprilia', 0),
(8477, '2024-01-15', '0007', 'Bolpenku', 581, 2, 'Pemakaian', 'Arif M', 0),
(8559, '3/4/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 34, 1, 'Pemakaian', 'Urip', 0),
(8633, '2024-02-29', '0064', 'Batu baterai Alkaline AAA', 5, 1, 'Pemakaian', 'Ita', 1),
(8800, '3/25/2024', '0015', 'Spidol whiteboard permanen', 99, 1, 'Pemakaian', 'sari dewi ', 0),
(8827, '4/22/2024', '0018', 'Clip Trigonal Seagull no.3', 495, 1, 'Pemakaian', 'sari dewi', 0),
(8979, '4/19/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 35, 1, 'Pemakaian', 'Sari Dewi', 0),
(8986, '3/8/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 36, 1, 'Pemakaian', 'Trubus', 0),
(9087, '2024-04-01', '0024', 'Stopmap Cetak Kop', 801, 1, 'Pemakaian', 'Achmad Subchan', 0),
(9227, '4/1/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 40, 1, 'Pemakaian', 'Eko Sujadi', 0),
(9241, '2024-02-05', '0024', 'Stopmap Cetak Kop', 801, 1, 'Pemakaian', 'anita ', 0),
(9276, '2024-04-19', '0051', 'Amplop Coklat Kecil Logo BPS', 118, 2, 'Pemakaian', 'Aprilia', 0),
(9366, '2024-04-22', '0024', 'Stopmap Cetak Kop', 800, 2, 'Pemakaian', 'Ita', 0),
(9481, '4/26/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 41, 1, 'Pemakaian', 'Trubus', 0),
(9582, '2024-02-26', '0056', 'Tinta Epson L3110', 52, 1, 'Pemakaian', 'Aufarul', 0),
(9584, '3/7/2024', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 42, 1, 'Pemakaian', 'Mutiara', 0),
(9889, '2024-01-16', '0064', 'Batu baterai Alkaline AAA', 5, 1, 'Pemakaian', 'Hayati', 1),
(9999, '2024-02-05', '0058', 'Tinta Epson L3110 (003)', 17, 1, 'Pemakaian', 'Ibnu Utomo', 0);

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
(139, '0001', 'pensil mekanik', 'buah', 1, 'UMUM', 'BPS Kabupaten Pekalongan'),
(140, '0002', 'Isi pensil mekanik', 'buah', 10, 'UMUM', 'BPS Kabupaten Pekalongan'),
(141, '0003', 'Spidol Kecil Biru', 'buah', 3, 'UMUM', 'BPS Kabupaten Pekalongan'),
(142, '0004', 'Pensil 2B Steadler-2', 'buah', 89, 'UMUM', 'BPS Kabupaten Pekalongan'),
(143, '0005', 'Bolpoint 4 Warna', 'buah', 223, 'UMUM', 'BPS Kabupaten Pekalongan'),
(144, '0006', 'Bolpoint Tizo Biru', 'buah', 74, 'UMUM', 'BPS Kabupaten Pekalongan'),
(145, '0007', 'Bolpenku', 'buah', 581, 'UMUM', 'BPS Kabupaten Pekalongan'),
(146, '0008', 'Bolpoint Tizo Hitam', 'buah', 65, 'UMUM', 'BPS Kabupaten Pekalongan'),
(147, '0009', 'Isi Pensil Mekanik-1', 'buah', 1, 'UMUM', 'BPS Kabupaten Pekalongan'),
(148, '0010', 'Stabilo Varco', 'buah', 5, 'UMUM', 'BPS Kabupaten Pekalongan'),
(149, '0011', 'Buku Folio', 'buah', 6, 'UMUM', 'BPS Kabupaten Pekalongan'),
(150, '0012', 'Pensil Mekanik Set', 'buah', 8, 'UMUM', 'BPS Kabupaten Pekalongan'),
(151, '0013', 'Bolpoin B-gel', 'buah', 87, 'UMUM', 'BPS Kabupaten Pekalongan'),
(152, '0014', 'Bolpoint Standart AE7', 'buah', 54, 'UMUM', 'BPS Kabupaten Pekalongan'),
(153, '0015', 'Spidol whiteboard permanen', 'buah', 99, 'UMUM', 'BPS Kabupaten Pekalongan'),
(154, '0016', 'CLIP BOARD', 'buah', 4, 'UMUM', 'BPS Kabupaten Pekalongan'),
(155, '0017', 'Binder Klip no.155', 'dus', 92, 'UMUM', 'BPS Kabupaten Pekalongan'),
(156, '0018', 'Clip Trigonal Seagull no.3', 'dus', 495, 'UMUM', 'BPS Kabupaten Pekalongan'),
(157, '0019', 'Binder Klip no.105', 'dus', 121, 'UMUM', 'BPS Kabupaten Pekalongan'),
(158, '0020', 'Binder no. 260', 'buah', 111, 'UMUM', 'BPS Kabupaten Pekalongan'),
(159, '0020', 'Re Type Tip Ex', 'buah', 3, 'UMUM', 'BPS Kabupaten Pekalongan'),
(160, '0021', 'Karet Penghapus Safari Brand', 'buah', 121, 'UMUM', 'BPS Kabupaten Pekalongan'),
(161, '0022', 'Stofmap Polos', 'buah', 39, 'UMUM', 'BPS Kabupaten Pekalongan'),
(162, '0023', 'Stofmap Plastik', 'buah', 3, 'UMUM', 'BPS Kabupaten Pekalongan'),
(163, '0024', 'Stopmap Cetak Kop', 'buah', 800, 'UMUM', 'BPS Kabupaten Pekalongan'),
(164, '0025', 'Peruncing pensil bulat', 'buah', 15, 'UMUM', 'BPS Kabupaten Pekalongan'),
(165, '0026', 'Gunting', 'buah', 60, 'UMUM', 'BPS Kabupaten Pekalongan'),
(166, '0027', 'Cutter L-500 Kenko', 'buah', 60, 'UMUM', 'BPS Kabupaten Pekalongan'),
(167, '0028', 'Lem Povinal', 'buah', 3, 'UMUM', 'BPS Kabupaten Pekalongan'),
(168, '0029', 'Lakban Bening', 'buah', 4, 'UMUM', 'BPS Kabupaten Pekalongan'),
(169, '0030', 'Isolasi Double tip 1 cm', 'buah', 21, 'UMUM', 'BPS Kabupaten Pekalongan'),
(170, '0031', 'Lakban Hitam2', 'buah', 2, 'UMUM', 'BPS Kabupaten Pekalongan'),
(171, '0032', 'Double Tipe Foam', 'buah', 2, 'UMUM', 'BPS Kabupaten Pekalongan'),
(172, '0033', 'Lakban Coklat2', 'buah', 0, 'UMUM', 'BPS Kabupaten Pekalongan'),
(173, '0034', 'Staples', 'buah', 1, 'UMUM', 'BPS Kabupaten Pekalongan'),
(174, '0035', 'Isi Staples Kecil-1', 'dus', 69, 'UMUM', 'BPS Kabupaten Pekalongan'),
(175, '0036', 'Isi Staples Great wall', 'dus', 1, 'UMUM', 'BPS Kabupaten Pekalongan'),
(176, '0037', 'Isi Staples Besar  Kangaro', 'dus', 12, 'UMUM', 'BPS Kabupaten Pekalongan'),
(177, '0038', 'Isi Staples Kecil', 'buah', 0, 'UMUM', 'BPS Kabupaten Pekalongan'),
(178, '0039', 'Lakban Bening', 'buah', 42, 'UMUM', 'BPS Kabupaten Pekalongan'),
(179, '0040', 'Lakban Coklat', 'buah', 40, 'UMUM', 'BPS Kabupaten Pekalongan'),
(180, '0041', 'Lakban Hitam', 'buah', 42, 'UMUM', 'BPS Kabupaten Pekalongan'),
(181, '0042', 'Kertas HVS Folio 70 gram Sinar Dunia', 'buah', 17, 'UMUM', 'BPS Kabupaten Pekalongan'),
(182, '0043', 'Kertas HVS Kwarto 70 gram Sinar Dunia-2', 'set', 64, 'UMUM', 'BPS Kabupaten Pekalongan'),
(183, '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 'set', 8, 'UMUM', 'BPS Kabupaten Pekalongan'),
(184, '0045', 'Kertas A3', 'buah', 5, 'UMUM', 'BPS Kabupaten Pekalongan'),
(185, '0046', 'Stick Notes', 'buah', 93, 'UMUM', 'BPS Kabupaten Pekalongan'),
(186, '0047', 'Stick Notes besar', 'buah', 92, 'UMUM', 'BPS Kabupaten Pekalongan'),
(187, '0048', 'Kertas Foto', 'buah', 1, 'UMUM', 'BPS Kabupaten Pekalongan'),
(188, '0049', 'Amplop Putih sedang', 'buah', 1, 'UMUM', 'BPS Kabupaten Pekalongan'),
(189, '0050', 'Amplop Biru Cetak Kop 24,5 x 35 cm', 'buah', 571, 'UMUM', 'BPS Kabupaten Pekalongan'),
(190, '0051', 'Amplop Coklat Kecil Logo BPS', 'buah', 28, 'UMUM', 'BPS Kabupaten Pekalongan'),
(191, '0052', 'Amplop coklat kecil', 'buah', 160, 'UMUM', 'BPS Kabupaten Pekalongan'),
(192, '0053', 'Snellhecter Cetak Kop', 'buah', 234, 'UMUM', 'BPS Kabupaten Pekalongan'),
(193, '0054', 'Kertas Sampul Coklat', 'buah', 7, 'UMUM', 'BPS Kabupaten Pekalongan'),
(194, '0055', 'COVER CD KOTAK', 'buah', 6, 'UMUM', 'BPS Kabupaten Pekalongan'),
(195, '0056', 'Tinta Epson L3110', 'buah', 49, 'UMUM', 'BPS Kabupaten Pekalongan'),
(196, '0057', 'Tinta Epson M2140(005)', 'buah', 15, 'UMUM', 'BPS Kabupaten Pekalongan'),
(197, '0058', 'Tinta Epson L3110 (003)', 'buah', 15, 'UMUM', 'BPS Kabupaten Pekalongan'),
(198, '0059', 'Toner 107a', 'buah', 23, 'UMUM', 'BPS Kabupaten Pekalongan'),
(199, '0060', 'Tooner M3140', 'set', 10, 'UMUM', 'BPS Kabupaten Pekalongan'),
(200, '0061', 'Tinta 008 Hitam', 'buah', 6, 'UMUM', 'BPS Kabupaten Pekalongan'),
(201, '0062', 'Tinta 008 Warna', 'set', 10, 'UMUM', 'BPS Kabupaten Pekalongan'),
(202, '0063', 'Keyboard Logitech', 'set', 3, 'UMUM', 'BPS Kabupaten Pekalongan'),
(203, '0064', 'Batu baterai Alkaline AAA', 'set', 0, 'UMUM', 'BPS Kabupaten Pekalongan'),
(204, '0065', 'Pisau Peruncing SP2020', 'set', 6, 'UMUM', 'BPS Kabupaten Pekalongan'),
(205, '0066', 'Papan Jalan SP2020', 'set', 14, 'UMUM', 'BPS Kabupaten Pekalongan'),
(206, '0067', 'ID CARD SP2020', 'set', 8, 'UMUM', 'BPS Kabupaten Pekalongan'),
(207, '0068', 'Map Prop', 'set', 832, 'UMUM', 'BPS Kabupaten Pekalongan'),
(208, '0069', 'Tas Susenas MKP', 'buah', 1, 'UMUM', 'BPS Kabupaten Pekalongan'),
(209, '0070', 'Ballpoint Trendee 02 FKP 2023', 'buah', 571, 'UMUM', 'BPS Kabupaten Pekalongan');

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

--
-- Dumping data for table `tb_barang_out`
--

INSERT INTO `tb_barang_out` (`no_brg_out`, `no_ajuan`, `tanggal_ajuan`, `tanggal_out`, `petugas`, `kode_brg`, `nama_brg`, `stok`, `jml_ajuan`, `jml_keluar`, `keterangan`, `admin`) VALUES
(1026, 2387, '2024-04-03', '2024-04-03', 'Eko Sujadi', '0064', 'Batu baterai Alkaline AAA', 5, 1, 1, 'Pemakaian', 'admin'),
(1094, 5993, '4/22/2024', '2024-04-22', 'Ita', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 29, 1, 1, 'Pemakaian', 'admin'),
(1315, 9584, '3/7/2024', '2024-03-07', 'Mutiara', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 43, 1, 1, 'Pemakaian', 'admin'),
(1360, 8034, '4/22/2024', '2024-04-22', 'sari dewi', '0019', 'Binder Klip no.105', 122, 1, 1, 'Pemakaian', 'admin'),
(1461, 2453, '4/1/2024', '2024-04-01', 'Noviana', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 18, 1, 1, 'Pemakaian', 'admin'),
(1560, 4557, '2024-04-16', '2024-04-16', 'Mutiara', '0024', 'Stopmap Cetak Kop', 802, 1, 1, 'Pemakaian', 'admin'),
(1612, 8800, '3/25/2024', '2024-03-25', 'sari dewi ', '0015', 'Spidol whiteboard permanen', 100, 1, 1, 'Pemakaian', 'admin'),
(1698, 5064, '2/29/2024', '2024-02-29', 'ita', '0013', 'Bolpoin B-gel', 88, 1, 1, 'Pemakaian', 'admin'),
(1749, 3724, '2024-03-05', '2024-03-05', 'Kismia', '0024', 'Stopmap Cetak Kop', 802, 4, 4, 'Pemakaian', 'admin'),
(1794, 7617, '2024-03-28', '2024-03-28', 'Trubus', '0040', 'Lakban Coklat', 42, 1, 1, 'Pemakaian', 'admin'),
(1873, 7515, '2024-01-12', '2024-01-12', 'Kismia', '0064', 'Batu baterai Alkaline AAA', 1, 1, 1, 'Pemakaian', 'admin'),
(1929, 6503, '2024-03-28', '2024-03-28', 'Intan', '0051', 'Amplop Coklat Kecil Logo BPS', 101, 1, 1, 'Pemakaian', 'admin'),
(2013, 3618, '2024-02-29', '2024-02-29', 'Anita', '0005', 'Bolpoint 4 Warna', 250, 27, 27, 'Pemakaian', 'admin'),
(2101, 9481, '4/26/2024', '2024-04-26', 'Trubus', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 42, 1, 1, 'Pemakaian', 'admin'),
(2283, 4729, '2024-01-11', '2024-01-11', 'Hayati', '0051', 'Amplop Coklat Kecil Logo BPS', 100, 1, 1, 'Pemakaian', 'admin'),
(2341, 3211, '2024-03-04', '2024-03-04', 'Urip', '0024', 'Stopmap Cetak Kop', 802, 10, 10, 'Pemakaian', 'admin'),
(2614, 8827, '4/22/2024', '2024-04-22', 'sari dewi', '0018', 'Clip Trigonal Seagull no.3', 496, 1, 1, 'Pemakaian', 'admin'),
(2730, 4209, '2024-02-29', '2024-02-29', 'ita', '0024', 'Stopmap Cetak Kop', 802, 5, 5, 'Pemakaian', 'admin'),
(3033, 1906, '8/3/2024', '2024-03-08', 'arif m ', '0022', 'Stofmap Polos', 44, 5, 5, 'Pemakaian', 'admin'),
(3249, 7369, '2024-03-27', '2024-03-27', 'Aprilia', '0024', 'Stopmap Cetak Kop', 802, 2, 2, 'Pemakaian', 'admin'),
(3250, 5475, '3/27/2024', '2024-03-27', 'Ibnu Utomo', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 44, 1, 1, 'Pemakaian', 'admin'),
(3492, 8343, '4/26/2024', '2024-04-26', 'Aprilia', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 34, 1, 1, 'Pemakaian', 'admin'),
(3839, 8160, '1/8/2024', '2024-01-08', 'mutiara', '0019', 'Binder Klip no.105', 122, 1, 1, 'Pemakaian', 'admin'),
(3841, 804, '4/1/2024', '2024-04-01', 'Andhika', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 9, 1, 1, 'Pemakaian', 'admin'),
(3925, 6956, '2024-04-25', '2024-04-25', 'Abdul Hamid', '0051', 'Amplop Coklat Kecil Logo BPS', 113, 12, 12, 'Pemakaian', 'admin'),
(3935, 3639, '2/29/2024', '2024-02-29', 'okris', '0013', 'Bolpoin B-gel', 88, 2, 2, 'Pemakaian', 'admin'),
(3942, 8477, '2024-01-15', '2024-01-15', 'Arif M', '0007', 'Bolpenku', 583, 2, 2, 'Pemakaian', 'admin'),
(3979, 5316, '4/22/2024', '2024-04-22', 'Abdul Hamid', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 25, 1, 1, 'Pemakaian', 'admin'),
(4118, 3598, '4/17/2024', '2024-04-17', 'Mutiara', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 20, 1, 1, 'Pemakaian', 'admin'),
(4250, 9582, '2024-02-26', '2024-02-26', 'Aufarul', '0056', 'Tinta Epson L3110', 53, 1, 1, 'Pemakaian', 'admin'),
(4341, 5204, '2024-01-03', '2024-01-03', 'aufarul ', '0024', 'Stopmap Cetak Kop', 802, 1, 1, 'Pemakaian', 'admin'),
(4369, 9241, '2024-02-05', '2024-02-05', 'anita ', '0024', 'Stopmap Cetak Kop', 802, 1, 1, 'Pemakaian', 'admin'),
(4506, 5797, '3/19/2024', '2024-03-19', 'Windya Nugroho', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 28, 1, 1, 'Pemakaian', 'admin'),
(4615, 4957, '2024-04-18', '2024-04-18', 'Aprilia', '0024', 'Stopmap Cetak Kop', 802, 2, 2, 'Pemakaian', 'admin'),
(4668, 6287, '2024-02-26', '2024-02-26', 'Aufarul', '0064', 'Batu baterai Alkaline AAA', 3, 1, 1, 'Pemakaian', 'admin'),
(4802, 162, '4/1/2024', '2024-04-01', 'Suko Prayogi', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 46, 1, 1, 'Pemakaian', 'admin'),
(4819, 8559, '3/4/2024', '2024-03-04', 'Urip', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 35, 1, 1, 'Pemakaian', 'admin'),
(4853, 2836, '2024-03-22', '2024-03-22', 'Ita', '0038', 'Isi Staples Kecil', 10, 10, 10, 'Pemakaian', 'admin'),
(4871, 7697, '3/22/2024', '2024-03-22', 'Ita', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 31, 1, 1, 'Pemakaian', 'admin'),
(4898, 6090, '2024-04-03', '2024-04-03', 'Okris Jubaidi', '0056', 'Tinta Epson L3110', 50, 1, 1, 'Pemakaian', 'admin'),
(4921, 5755, '2/29/2024', '2024-02-29', 'Mutiara', '0046', 'Stick Notes', 95, 1, 1, 'Pemakaian', 'admin'),
(4925, 3019, '2024-01-09', '2024-01-09', 'Noviana', '0051', 'Amplop Coklat Kecil Logo BPS', 99, 20, 20, 'Pemakaian', 'admin'),
(4976, 1195, '2024-02-29', '2024-02-29', 'Suko Prayogi', '0051', 'Amplop Coklat Kecil Logo BPS', 29, 1, 1, 'Pemakaian', 'admin'),
(5016, 1208, '2024-03-28', '2024-03-28', 'Kismia', '0040', 'Lakban Coklat', 41, 1, 1, 'Pemakaian', 'admin'),
(5101, 7086, '2024-02-06', '2024-02-06', 'Trubus', '0024', 'Stopmap Cetak Kop', 802, 10, 10, 'Pemakaian', 'admin'),
(5137, 3333, '3/5/2024', '2024-03-05', 'sari dewi', '0019', 'Binder Klip no.105', 122, 1, 1, 'Pemakaian', 'admin'),
(5193, 3369, '4/26/2024', '2024-04-26', 'M. Habibi', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 23, 1, 1, 'Pemakaian', 'admin'),
(5194, 2335, '1/3/2024', '2024-01-03', 'arif m', '0018', 'Clip Trigonal Seagull no.3', 496, 1, 1, 'Pemakaian', 'admin'),
(5374, 5645, '1/30/2024', '2024-01-30', 'Abdul Hamid', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 27, 1, 1, 'Pemakaian', 'admin'),
(5655, 5784, '2024-03-04', '2024-03-04', 'Rani', '0024', 'Stopmap Cetak Kop', 802, 20, 20, 'Pemakaian', 'admin'),
(5666, 1691, '2024-02-05', '2024-02-05', 'Arif M', '0058', 'Tinta Epson L3110 (003)', 16, 1, 1, 'Pemakaian', 'admin'),
(5876, 2044, '3/8/2024', '2024-03-08', 'Krismia', '0018', 'Clip Trigonal Seagull no.3', 496, 2, 2, 'Pemakaian', 'admin'),
(5942, 1383, '2024-02-29', '2024-02-29', 'Ita', '0008', 'Bolpoint Tizo Hitam', 66, 1, 1, 'Pemakaian', 'admin'),
(5943, 2548, '2024-03-06', '2024-03-06', 'Habibi', '0024', 'Stopmap Cetak Kop', 802, 1, 1, 'Pemakaian', 'admin'),
(6042, 9999, '2024-02-05', '2024-02-05', 'Ibnu Utomo', '0058', 'Tinta Epson L3110 (003)', 18, 1, 1, 'Pemakaian', 'admin'),
(6226, 3689, '2024-04-25', '2024-04-25', 'Mutiara', '0024', 'Stopmap Cetak Kop', 802, 1, 1, 'Pemakaian', 'admin'),
(6230, 2577, '3/21/2024', '2024-03-21', 'Aprilia', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 19, 1, 1, 'Pemakaian', 'admin'),
(6404, 6663, '2024-01-03', '2024-01-03', 'Arindra', '0011', 'Buku Folio', 7, 1, 1, 'Pemakaian', 'admin'),
(6435, 3743, '2024-02-05', '2024-02-05', 'Risa', '0024', 'Stopmap Cetak Kop', 802, 10, 10, 'Pemakaian', 'admin'),
(6458, 7698, '4/23/2024', '2024-04-23', 'Rani', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 32, 1, 1, 'Pemakaian', 'admin'),
(6673, 9087, '2024-04-01', '2024-04-01', 'Achmad Subchan', '0024', 'Stopmap Cetak Kop', 802, 1, 1, 'Pemakaian', 'admin'),
(6675, 5108, '2024-02-19', '2024-02-19', 'sari dewi', '0024', 'Stopmap Cetak Kop', 802, 5, 5, 'Pemakaian', 'admin'),
(6686, 7062, '2024-03-22', '2024-03-22', 'Arif M', '0024', 'Stopmap Cetak Kop', 802, 3, 3, 'Pemakaian', 'admin'),
(6709, 3925, '2024-02-05', '2024-02-05', 'Siti Mardiyah', '0058', 'Tinta Epson L3110 (003)', 17, 1, 1, 'Pemakaian', 'admin'),
(6777, 6827, '2024-03-13', '2024-03-13', 'Saifudin Z', '0064', 'Batu baterai Alkaline AAA', 2, 1, 1, 'Pemakaian', 'admin'),
(6779, 841, '3/19/2024', '2024-03-10', 'Munir', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 10, 1, 1, 'Pemakaian', 'admin'),
(6795, 7035, '3/19/2024', '2024-03-19', 'Suko Prayogi', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 30, 1, 1, 'Pemakaian', 'admin'),
(6880, 7013, '2024-04-05', '2024-04-05', 'Abdul Hamid', '0056', 'Tinta Epson L3110', 52, 1, 1, 'Pemakaian', 'admin'),
(6920, 1028, '2024-01-22', '2024-01-22', 'Andhika', '0070', 'Ballpoint Trendee 02 FKP 2023', 660, 89, 89, 'Pemakaian', 'admin'),
(6941, 1584, '2024-03-07', '2024-03-07', 'Mutiara', '0058', 'Tinta Epson L3110 (003)', 19, 1, 1, 'Pemakaian', 'admin'),
(7065, 9366, '2024-04-22', '2024-04-22', 'Ita', '0024', 'Stopmap Cetak Kop', 802, 2, 2, 'Pemakaian', 'admin'),
(7083, 3652, '1/9/2024', '2024-01-09', 'Noviana', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 21, 1, 1, 'Pemakaian', 'admin'),
(7211, 8986, '3/8/2024', '2024-03-08', 'Trubus', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 37, 1, 1, 'Pemakaian', 'admin'),
(7433, 9227, '4/1/2024', '2024-04-01', 'Eko Sujadi', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 41, 1, 1, 'Pemakaian', 'admin'),
(7607, 1089, '2024-03-29', '2024-03-29', 'Trubus', '0046', 'Stick Notes', 94, 1, 1, 'Pemakaian', 'admin'),
(7690, 5954, '2024-03-07', '2024-03-07', 'Kismia/Reto', '0064', 'Batu baterai Alkaline AAA', 4, 1, 1, 'Pemakaian', 'admin'),
(7756, 1303, '2024-01-03', '2024-01-03', 'Sari Dewi', '0035', 'Isi Staples Kecil-1', 70, 1, 1, 'Pemakaian', 'admin'),
(7976, 3924, '3/13/2024', '2024-03-13', 'Arif M', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 22, 1, 1, 'Pemakaian', 'admin'),
(8049, 8238, '2024-03-22', '2024-03-22', 'Ita', '0038', 'Isi Staples Kecil', 20, 10, 10, 'Pemakaian', 'admin'),
(8122, 8979, '4/19/2024', '2024-04-19', 'Sari Dewi', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 36, 1, 1, 'Pemakaian', 'admin'),
(8231, 686, '2/22/2024', '2024-02-22', 'Siti Mardiyah', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 45, 1, 1, 'Pemakaian', 'admin'),
(8326, 2558, '1/22/2024', '2024-01-22', 'andhika', '0021', 'Karet Penghapus Safari Brand', 210, 89, 89, 'Pemakaian', 'admin'),
(8437, 5913, '2024-01-18', '2024-01-18', 'Mutiara', '0050', 'Amplop Biru Cetak Kop 24,5 x 35 cm', 572, 1, 1, 'Pemakaian', 'admin'),
(8495, 7592, '3/7/2024', '2024-03-07', 'sari dewi', '0015', 'Spidol whiteboard permanen', 100, 1, 1, 'Pemakaian', 'admin'),
(8584, 1495, '2024-01-03', '2024-01-03', 'Aufarul', '0051', 'Amplop Coklat Kecil Logo BPS', 79, 50, 50, 'Pemakaian', 'admin'),
(8600, 2061, '4/5/2024', '2024-04-05', 'Abdul Hamid', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 15, 5, 5, 'Pemakaian', 'admin'),
(8775, 7006, '2024-02-19', '2024-01-03', 'Aufarul', '0051', 'Amplop Coklat Kecil Logo BPS', 118, 5, 5, 'Pemakaian', 'admin'),
(8893, 5483, '2/6/2024', '2024-02-06', 'Trubus', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 26, 1, 1, 'Pemakaian', 'admin'),
(9017, 7833, '1/3/2024', '2024-03-01', 'Mutiara', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 33, 1, 1, 'Pemakaian', 'admin'),
(9036, 2096, '2/13/2024', '2024-02-13', 'Windya Nugroho', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 17, 1, 1, 'Pemakaian', 'admin'),
(9529, 6954, '2024-04-26', '2024-04-26', 'Aprilia', '0056', 'Tinta Epson L3110', 51, 1, 1, 'Pemakaian', 'admin'),
(9538, 1666, '2024-04-23', '2024-04-23', 'Saifudin Z', '0030', 'Isolasi Double tip 1 cm', 22, 1, 1, 'Pemakaian', 'admin'),
(9568, 4578, '1/3/2024', '2024-03-01', 'Aufarul', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 40, 3, 3, 'Pemakaian', 'admin'),
(9609, 4066, '1/3/2024', '2024-01-03', 'Mutiara', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 24, 1, 1, 'Pemakaian', 'admin'),
(9648, 2782, '2024-01-05', '2024-01-05', 'Aprilia', '0028', 'Lem Povinal', 4, 1, 1, 'Pemakaian', 'admin'),
(9721, 5066, '2024-03-25', '2024-03-25', 'Sari Dewi', '0033', 'Lakban Coklat2', 2, 2, 2, 'Pemakaian', 'admin'),
(9853, 2071, '1/10/2024', '2024-01-10', 'Arif M', '0044', 'Kertas HVS Kwarto 70 gram Sinar Dunia-3', 16, 1, 1, 'Pemakaian', 'admin'),
(9877, 9276, '2024-04-19', '2024-04-19', 'Aprilia', '0051', 'Amplop Coklat Kecil Logo BPS', 120, 2, 2, 'Pemakaian', 'admin');

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
  MODIFY `id_barang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `tb_barang_in`
--
ALTER TABLE `tb_barang_in`
  MODIFY `id_brg_in` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
  MODIFY `id_tim` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
