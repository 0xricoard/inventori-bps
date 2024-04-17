<?php
// Mengimpor PhpSpreadsheet
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

include 'koneksi.php'; // Sesuaikan dengan nama file koneksi Anda

// Membuat objek Spreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Menambahkan judul kolom
$sheet->setCellValue('A1', 'Tanggal');
$sheet->setCellValue('B1', 'Kode Barang');
$sheet->setCellValue('C1', 'Nama Barang');
$sheet->setCellValue('D1', 'Stok');
$sheet->setCellValue('E1', 'Jumlah Masuk');
$sheet->setCellValue('F1', 'Jumlah Keluar');
$sheet->setCellValue('G1', 'Keterangan');
$sheet->setCellValue('H1', 'Nama');

// Query untuk mendapatkan data dari database untuk tabel tb_barang_out
$sql_out = "SELECT tanggal_out, kode_brg, nama_brg, stok, jml_keluar, keterangan, petugas FROM tb_barang_out";
$result_out = mysqli_query($koneksi, $sql_out);

// Query untuk mendapatkan data dari database untuk tabel tb_barang_in
$sql_in = "SELECT tanggal, kode_brg, jml_masuk FROM tb_barang_in";
$result_in = mysqli_query($koneksi, $sql_in);

// Inisialisasi baris awal
$row = 2;

// Looping untuk mengisi data barang keluar
while ($row_data_out = mysqli_fetch_assoc($result_out)) {
  $sheet->setCellValue('A'.$row, $row_data_out['tanggal_out']);
  $sheet->setCellValue('B'.$row, $row_data_out['kode_brg']);
  $sheet->setCellValue('C'.$row, $row_data_out['nama_brg']);
  $sheet->setCellValue('D'.$row, $row_data_out['stok']);
  $sheet->setCellValue('F'.$row, $row_data_out['jml_keluar']);
  $sheet->setCellValue('G'.$row, $row_data_out['keterangan']);
  $sheet->setCellValue('H'.$row, $row_data_out['petugas']);
  $row++;
}

// Looping untuk mengisi data barang masuk
while ($row_data_in = mysqli_fetch_assoc($result_in)) {
  // Ambil data nama barang, stok, keterangan, dan petugas dari tabel tb_barang_in
  $sql_barang_in = "SELECT nama_brg, stok, keterangan, petugas FROM tb_barang_in WHERE kode_brg = '".$row_data_in['kode_brg']."' AND tanggal = '".$row_data_in['tanggal']."'";
  $result_barang_in = mysqli_query($koneksi, $sql_barang_in);
  $row_data_barang_in = mysqli_fetch_assoc($result_barang_in);

  $sheet->setCellValue('A'.$row, $row_data_in['tanggal']);
  $sheet->setCellValue('B'.$row, $row_data_in['kode_brg']);
  $sheet->setCellValue('C'.$row, $row_data_barang_in['nama_brg']); // Gunakan data nama barang dari tb_barang_in
  $sheet->setCellValue('D'.$row, $row_data_barang_in['stok']); // Gunakan data stok dari tb_barang_in
  $sheet->setCellValue('E'.$row, $row_data_in['jml_masuk']);
  // Kosongkan kolom jumlah keluar karena ini adalah transaksi barang masuk
  $sheet->setCellValue('F'.$row, '');
  // Isi kolom keterangan dan petugas dari tb_barang_in
  $sheet->setCellValue('G'.$row, $row_data_barang_in['keterangan']);
  $sheet->setCellValue('H'.$row, $row_data_barang_in['petugas']);
  $row++;
}
// Mengatur header untuk menghasilkan file Excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="data_barang_keluar_masuk.xlsx"');
header('Cache-Control: max-age=0');

// Menulis file Excel
$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
