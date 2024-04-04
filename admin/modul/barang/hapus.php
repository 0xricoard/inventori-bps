<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hapus Data Barang</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
include "sesi_admin.php";
if(isset($_GET['kode_brg'])){
	include "../koneksi.php";
	$id=$_GET['kode_brg'];
	
		$sql1   = "DELETE FROM tb_barang WHERE id= '$id'";
	
		
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
						window.location.href = 'index.php?m=barang';
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