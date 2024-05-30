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
$sheet->setCellValue('G1', 'Stok Terakhir'); // Tambahkan kolom Stok Terakhir
$sheet->setCellValue('H1', 'Keterangan');
$sheet->setCellValue('I1', 'Nama');

// Query untuk mendapatkan data dari database untuk tabel tb_barang_out
$sql_out = "SELECT tanggal_out AS tanggal, kode_brg, nama_brg, stok, NULL AS jml_masuk, jml_keluar, keterangan, petugas 
            FROM tb_barang_out
            UNION ALL
            SELECT tanggal, kode_brg, nama_brg, stok, jml_masuk, NULL AS jml_keluar, keterangan, petugas 
            FROM tb_barang_in
            ORDER BY tanggal, nama_brg";
$result = mysqli_query($koneksi, $sql_out);

// Inisialisasi baris awal
$row = 2;

// Looping untuk mengisi data ke dalam spreadsheet
while ($row_data = mysqli_fetch_assoc($result)) {
    // Menghitung stok terakhir
    $current_stock = $row_data['stok'] + $row_data['jml_masuk'] - $row_data['jml_keluar'];
    
    $sheet->setCellValue('A'.$row, $row_data['tanggal']);
    $sheet->setCellValue('B'.$row, $row_data['kode_brg']);
    $sheet->setCellValue('C'.$row, $row_data['nama_brg']);
    $sheet->setCellValue('D'.$row, $row_data['stok']);
    $sheet->setCellValue('E'.$row, $row_data['jml_masuk']);
    $sheet->setCellValue('F'.$row, $row_data['jml_keluar']);
    $sheet->setCellValue('G'.$row, $current_stock); // Mengisi kolom Stok Terakhir
    $sheet->setCellValue('H'.$row, $row_data['keterangan']);
    $sheet->setCellValue('I'.$row, $row_data['petugas']);
    $row++;
}

// Mengatur header untuk menghasilkan file Excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="data_barang_keluar_masuk.xlsx"');
header('Cache-Control: max-age=0');

// Menulis file Excel
$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
?>
