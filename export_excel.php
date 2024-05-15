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
$sheet->setCellValue('I1', 'Stok Saat Ini');

// Query untuk mendapatkan data dari database untuk tabel tb_barang_out dengan format tanggal DD-MM-YYYY
$sql_out = "SELECT DATE_FORMAT(tanggal_out, '%d-%m-%Y') AS tanggal, kode_brg, nama_brg, stok, NULL AS jml_masuk, jml_keluar, keterangan, petugas 
            FROM tb_barang_out
            UNION ALL
            SELECT DATE_FORMAT(tanggal, '%d-%m-%Y') AS tanggal, kode_brg, nama_brg, stok, jml_masuk, NULL AS jml_keluar, keterangan, petugas 
            FROM tb_barang_in
            ORDER BY STR_TO_DATE(tanggal, '%d-%m-%Y'), nama_brg";
$result = mysqli_query($koneksi, $sql_out);

// Inisialisasi baris awal dan stok awal
$row = 2;
$current_stocks = []; // Array untuk menyimpan stok saat ini untuk setiap barang

// Looping untuk mengisi data ke dalam spreadsheet
while ($row_data = mysqli_fetch_assoc($result)) {
    $kode_brg = $row_data['kode_brg'];

    // Jika barang belum ada di array stok saat ini, inisialisasi dengan stok awal
    if (!isset($current_stocks[$kode_brg])) {
        $current_stocks[$kode_brg] = $row_data['stok'];
    }

    // Update stok saat ini berdasarkan jumlah masuk atau jumlah keluar
    if (!is_null($row_data['jml_masuk'])) {
        $current_stocks[$kode_brg] += $row_data['jml_masuk'];
    }
    if (!is_null($row_data['jml_keluar'])) {
        $current_stocks[$kode_brg] -= $row_data['jml_keluar'];
    }

    // Mengisi data ke dalam spreadsheet
    $sheet->setCellValue('A'.$row, $row_data['tanggal']);
    $sheet->setCellValue('B'.$row, $row_data['kode_brg']);
    $sheet->setCellValue('C'.$row, $row_data['nama_brg']);
    $sheet->setCellValue('D'.$row, $row_data['stok']);
    $sheet->setCellValue('E'.$row, $row_data['jml_masuk']);
    $sheet->setCellValue('F'.$row, $row_data['jml_keluar']);
    $sheet->setCellValue('G'.$row, $row_data['keterangan']);
    $sheet->setCellValue('H'.$row, $row_data['petugas']);
    $sheet->setCellValue('I'.$row, $current_stocks[$kode_brg]);

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
