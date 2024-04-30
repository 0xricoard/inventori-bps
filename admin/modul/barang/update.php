<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php 
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $id_barang = $_POST['id_barang'];
    $kode_brg = $_POST['kode_brg'];
    $nama_brg = $_POST['nama_brg'];
    $satuan = $_POST['satuan'];
    $stok = $_POST['stok'];
    $tim = $_POST['tim'];
    $supplier = $_POST['supplier'];

    $sql = "UPDATE tb_barang SET kode_brg='$kode_brg', nama_brg='$nama_brg', satuan='$satuan', stok='$stok', tim='$tim', supplier='$supplier' WHERE id_barang='$id_barang'";
    $update = mysqli_query($koneksi, $sql);

    if ($update) {
        echo "<script>
                Swal.fire({
                  title: 'Sukses!',
                  text: 'Data berhasil diperbarui',
                  icon: 'success',
                  confirmButtonText: 'OK'
                }).then((result) => {
                  if (result.isConfirmed) {
                    window.location.href = '?m=barang&s=awal';
                  }
                });
              </script>";
    } else {
        echo "<script>
                Swal.fire({
                  title: 'Error!',
                  text: 'Gagal memperbarui data',
                  icon: 'error',
                  confirmButtonText: 'OK'
                }).then((result) => {
                  if (result.isConfirmed) {
                    window.location.href = '?m=barang&s=awal';
                  }
                });
              </script>";
    }
}
?>
</body>
</html>