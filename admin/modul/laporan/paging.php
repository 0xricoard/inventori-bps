<?php
include '../koneksi.php';

$batas = 10;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$sql_out = "SELECT tanggal_out AS tanggal, kode_brg, nama_brg, stok, NULL AS jml_masuk, jml_keluar, keterangan, petugas 
                          FROM tb_barang_out
                          UNION ALL
                          SELECT tanggal, kode_brg, nama_brg, stok, jml_masuk, NULL AS jml_keluar, keterangan, petugas 
                          FROM tb_barang_in
                          ORDER BY tanggal, nama_brg";
              $query_out = mysqli_query($koneksi, $sql_out);
              $batas = 10;
              $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
              $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;
              $previous = $halaman - 1;
              $next = $halaman + 1;
              $data = mysqli_query($koneksi, "$sql_out LIMIT $halaman_awal, $batas");
              while ($row = mysqli_fetch_array($data)) {
                echo "<tr>";
                echo "<td>" . $row['tanggal'] . "</td>";
                echo "<td>" . $row['kode_brg'] . "</td>";
                echo "<td>" . $row['nama_brg'] . "</td>";
                echo "<td>" . $row['stok'] . "</td>";
                echo "<td>" . $row['jml_masuk'] . "</td>";
                echo "<td>" . $row['jml_keluar'] . "</td>";
                echo "<td>" . $row['keterangan'] . "</td>";
                echo "<td>" . $row['petugas'] . "</td>";
                echo "</tr>";
              }
?>
