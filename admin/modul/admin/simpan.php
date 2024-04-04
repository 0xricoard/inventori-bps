<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simpan</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
include "sesi_admin.php";
if(isset($_POST['simpan'])){
	include "../koneksi.php";
	include "../fungsi/upload.php";
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$nama = $_POST['nama'];
	$telepon = $_POST['telepon'];
	$lokasi = $_FILES['foto']['tmp_name'];
	$namafile = $_FILES['foto']['name'];
	$fotobaru = date('dmYHis') . $namafile;
	$tipefile = $_FILES['foto']['type'];

	//cek username
	$sql    = "SELECT * FROM tb_admin WHERE username = '" . $username . "'";
	$tambah = mysqli_query($koneksi, $sql);
	$row    = mysqli_fetch_row($tambah);

	if ($row) {
		echo "<script>
				Swal.fire({
				  title: 'Error!',
				  text: 'Username sudah ada',
				  icon: 'error',
				  confirmButtonText: 'OK'
				}).then((result) => {
				  if (result.isConfirmed) {
					window.history.back();
				  }
				});
			  </script>";
	} else {
		if (!empty($lokasi)) {
			$folder = "../images/admin/";
			$ukuran = 100;
			UploadFoto($fotobaru, $folder, $ukuran);
			$sql = "INSERT INTO tb_admin SET username='$username', password='$password', nama='$nama', telepon='$telepon', foto='$fotobaru'";
		} else {
			// Tambahkan NULL jika tidak ada file yang diunggah
			$sql = "INSERT INTO tb_admin SET username='$username', password='$password', nama='$nama', telepon='$telepon', foto=NULL";
		}

		mysqli_query($koneksi, $sql);
		echo "<script>
				Swal.fire({
				  title: 'Sukses!',
				  text: 'OK',
				  icon: 'success',
				  confirmButtonText: 'OK'
				}).then((result) => {
				  if (result.isConfirmed) {
					window.location.href = '?m=admin&s=awal';
				  }
				});
			  </script>";
	}
} else {
	//echo "gagal";
}
?>
</body>
</html>
