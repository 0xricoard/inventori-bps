<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hapus Data Admin</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
include "sesi_admin.php";
if(isset($_GET['id_admin'])){
	include "../koneksi.php";
	$id=$_GET['id_admin'];
	$sql   = "SELECT * FROM tb_admin WHERE id_admin='$id'";
	$hapus = mysqli_query($koneksi,$sql);
	$r     = mysqli_fetch_array($hapus);
	
	$foto=$r['foto'];
	// hapus file gambar yang berhubungan dengan berita tersebut
	unlink("../images/admin/$foto");
	$sql1   = "DELETE FROM tb_admin WHERE id_admin='$id'";
	$hapus1 = mysqli_query($koneksi,$sql1);
	if($hapus1){
		echo "<script>
				Swal.fire({
				  title: 'Sukses!',
				  text: 'Data Berhasil di Hapus',
				  icon: 'success',
				  confirmButtonText: 'OK'
				}).then((result) => {
				  if (result.isConfirmed) {
					window.location.href = 'index.php?m=admin';
				  }
				});
			  </script>";
	}else{
		echo "<script>
				Swal.fire({
				  title: 'Error!',
				  text: 'Data GAGAL di Hapus',
				  icon: 'error',
				  confirmButtonText: 'OK'
				}).then((result) => {
				  if (result.isConfirmed) {
					window.location.href = 'index.php';
				  }
				});
			  </script>";
	}
}
?>
</body>
</html>