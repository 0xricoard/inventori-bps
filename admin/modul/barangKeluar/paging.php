<?php
include '../koneksi.php';

$batas = 10;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

// Query pencarian
if (isset($_POST['go'])) {
    $cari = $_POST['cari'];

    $data_rak = mysqli_query($koneksi, "SELECT * FROM tb_barang_out WHERE no_brg_out LIKE '%" . $cari . "%' LIMIT $halaman_awal, $batas");
} else {
    $data_rak = mysqli_query($koneksi, "SELECT * FROM tb_barang_out LIMIT $halaman_awal, $batas");
}

// Mendapatkan jumlah data untuk pagination
$data = mysqli_query($koneksi, "SELECT * FROM tb_barang_out");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

// Perulangan untuk menampilkan data
$nomor = $halaman_awal + 1;
while ($row = mysqli_fetch_array($data_rak)) {
?>
    <tr>
        <td><?php echo $row['no_brg_out']; ?></td>
        <td><?php echo $row['no_ajuan']; ?></td>
        <td><?php echo $row['tanggal_ajuan']; ?></td>
        <td><?php echo $row['tanggal_out']; ?></td>
        <td><?php echo $row['petugas']; ?></td>
        <td><?php echo $row['kode_brg']; ?></td>
        <td><?php echo $row['nama_brg']; ?></td>
        <td><?php echo $row['stok']; ?></td>
        <td><?php echo $row['jml_ajuan']; ?></td>
        <td><?php echo $row['jml_keluar']; ?></td>
        <td><?php echo $row['keterangan']; ?></td>
        <td><?php echo $row['admin']; ?></td>
        <td>
            <a href="index.php?m=barangKeluar&s=hapus&no_brg_out=<?php echo $row['no_brg_out']; ?>" onclick="return confirm('Yakin Akan dihapus?')">
                <button class="btn btn-danger">Hapus</button>
            </a>
        </td>
    </tr>
<?php } ?>
