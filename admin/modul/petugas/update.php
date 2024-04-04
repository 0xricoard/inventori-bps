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
	$id_petugas = $_POST['id_petugas'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$nama = $_POST['nama'];
	$telepon = $_POST['telepon'];

	if (empty($password)) {
		$sql = "UPDATE tb_petugas SET username='$username', nama='$nama', telepon='$telepon' WHERE id_petugas='$id_petugas'";
		mysqli_query($koneksi, $sql);

	}else{
		$sql = "UPDATE tb_petugas SET username='$username', password='$password', nama='$nama', telepon='$telepon' WHERE id_petugas='$id_petugas'";
		mysqli_query($koneksi, $sql);
	}

	if ($sql) {
		echo "<script>
				Swal.fire({
				  title: 'Sukses!',
				  text: 'Data berhasil diperbarui',
				  icon: 'success',
				  confirmButtonText: 'OK'
				}).then((result) => {
				  if (result.isConfirmed) {
					window.location.href = '?m=petugas&s=awal';
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
					window.location.href = '?m=petugas&s=awal';
				  }
				});
			  </script>";
	}
}
?>
</body>
</html>