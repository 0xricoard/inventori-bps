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
$sheet->setCellValue('A1', 'Kode Barang');
$sheet->setCellValue('B1', 'Nama Barang');
$sheet->setCellValue('C1', 'Stok');
$sheet->setCellValue('D1', 'Jumlah Ajuan');
$sheet->setCellValue('E1', 'Jumlah Keluar');
$sheet->setCellValue('F1', 'Keterangan');

// Query untuk mendapatkan data dari database
$sql = "SELECT kode_brg, nama_brg, stok, jml_ajuan, jml_keluar, keterangan FROM nama_tabel"; // Ganti nama_tabel dengan nama tabel yang sesuai
$result = mysqli_query($koneksi, $sql);

// Mengisi data ke sheet Excel
$row = 2;
while ($row_data = mysqli_fetch_assoc($result)) {
  $sheet->setCellValue('A'.$row, $row_data['kode_brg']);
  $sheet->setCellValue('B'.$row, $row_data['nama_brg']);
  $sheet->setCellValue('C'.$row, $row_data['stok']);
  $sheet->setCellValue('D'.$row, $row_data['jml_ajuan']);
  $sheet->setCellValue('E'.$row, $row_data['jml_keluar']);
  $sheet->setCellValue('F'.$row, $row_data['keterangan']);
  $row++;
}

// Mengatur header untuk menghasilkan file Excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="data_barang_keluar.xlsx"');
header('Cache-Control: max-age=0');

// Menulis file Excel
$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
