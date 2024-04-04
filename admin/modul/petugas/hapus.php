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
if(isset($_GET['id_petugas'])){
	include "../koneksi.php";
	$id=$_GET['id_petugas'];
	
	$sql1   = "DELETE FROM tb_petugas WHERE id_petugas= '$id'";	
	$hapus1 = mysqli_query($koneksi,$sql1);
	if($hapus1){
		echo "<script>
				Swal.fire({
				  title: 'Sukses!',
				  text: 'Data berhasil dihapus',
				  icon: 'success',
				  confirmButtonText: 'OK'
				}).then((result) => {
				  if (result.isConfirmed) {
					window.location.href = '?m=petugas&s=awal';
				  }
				});
			  </script>";
	}else{
		echo "<script>
				Swal.fire({
				  title: 'Error!',
				  text: 'Gagal menghapus data',
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