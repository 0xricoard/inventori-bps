<?php
include '../koneksi.php';

$batas = 20;
$halaman = isset($_GET['halaman']) ? (int) $_GET['halaman'] : 1;
$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

if (isset($_POST['tbcari'])) {
    $cari = $_POST['cari'];
    // Pencarian dengan menggabungkan beberapa kolom
    $query = "SELECT * FROM tb_ajuan_pembelian WHERE 
              no_ajuan LIKE '%" . $cari . "%' OR
              nama_brg LIKE '%" . $cari . "%' OR 
              kode_brg LIKE '%" . $cari . "%' OR 
              tanggal LIKE '%" . $cari . "%' OR 
              petugas LIKE '%" . $cari . "%' OR 
              jml_ajuan LIKE '%" . $cari . "%' OR 
              keterangan LIKE '%" . $cari . "%'";
    $data_rak = mysqli_query($koneksi, $query);
    $jumlah_data = mysqli_num_rows($data_rak);
} else {
    $query = "SELECT * FROM tb_ajuan_pembelian LIMIT $halaman_awal, $batas";
    $data_rak = mysqli_query($koneksi, $query);
    $jumlah_data = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_ajuan_pembelian"));
}

$total_halaman = ceil($jumlah_data / $batas);
$nomor = $halaman_awal + 1;

while ($row = mysqli_fetch_array($data_rak)) {
?>
    <tr>
        <td><?php echo $row['no_ajuan']; ?></td>
        <td><?php echo $row['tanggal']; ?></td>
        <td><?php echo $row['kode_brg']; ?></td>
        <td><?php echo $row['nama_brg']; ?></td>
        <td><?php echo $row['jml_ajuan']; ?></td>
        <td><?php echo $row['keterangan']; ?></td>
        <td><?php echo $row['petugas']; ?></td>
        <td>
            <?php if ($row['val'] == 1) { ?>
                <span class="badge badge-pill badge-primary">Proses</span>
            <?php } else { ?>
                <span class="badge badge-pill badge-success">Pengajuan Pembelian berhasil disetujui</span>
            <?php } ?>
        </td>
        <td><a href="index.php?m=ajuanPembelian&s=hapus&no_ajuan=<?php echo $row['no_ajuan']; ?>" onclick="return confirm('Yakin Akan dihapus?')"><button class="btn btn-danger">Hapus</button></a></td>
    </tr>
<?php } ?>
