<?php
include '../koneksi.php';

$batas = 15;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$sql_out = "SELECT tanggal_out AS tanggal, b.kode_brg, b.nama_brg, b.stok AS stok, NULL AS jml_masuk, jml_keluar, keterangan, petugas 
            FROM tb_barang_out AS bo
            JOIN tb_barang AS b ON bo.kode_brg = b.kode_brg
            UNION ALL
            SELECT tanggal, b.kode_brg, b.nama_brg, b.stok AS stok, jml_masuk, NULL AS jml_keluar, keterangan, petugas 
            FROM tb_barang_in AS bi
            JOIN tb_barang AS b ON bi.kode_brg = b.kode_brg
            ORDER BY tanggal, nama_brg";
              $query_out = mysqli_query($koneksi, $sql_out);
              $batas = 15;
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
