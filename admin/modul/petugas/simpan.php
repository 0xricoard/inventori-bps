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
	if (isset($_POST['simpan'])) {
		include "../koneksi.php";
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$nama = $_POST['nama'];
		$telepon = $_POST['telepon'];

		$sql = "SELECT * FROM tb_petugas WHERE username = '" . $username . "'";
		$tambah = mysqli_query($koneksi, $sql);
		$row = mysqli_fetch_row($tambah);

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
			$sql = "INSERT INTO tb_petugas SET username='$username', password='$password', nama='$nama', telepon='$telepon'";
			mysqli_query($koneksi, $sql);
			echo "<script>
				Swal.fire({
				  title: 'Sukses!',
				  text: 'Data berhasil disimpan',
				  icon: 'success',
				  confirmButtonText: 'OK'
				}).then((result) => {
				  if (result.isConfirmed) {
					window.location.href = '?m=petugas&s=awal';
				  }
				});
			  </script>";
		}

	} else {
		echo "gagal";
	}
	?>

</body>

</html>