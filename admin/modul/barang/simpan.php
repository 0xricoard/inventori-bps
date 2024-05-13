<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>
		<?php echo $judul; ?>
	</title>
	<!-- SweetAlert2 -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
	<?php
	include "sesi_admin.php";
	if (isset($_POST['simpan'])) {
		include "../koneksi.php";
		$kode_brg = $_POST['kode_brg'];
		$nama_brg = $_POST['nama_brg'];
		$satuan = $_POST['satuan'];
		$stok = $_POST['stok'];
		$tim = $_POST['tim'];
		$supplier = $_POST['supplier'];
		//cek id
		$sql_cek = mysqli_query($koneksi, "SELECT * FROM tb_barang WHERE id_barang = '$id'");
		$cek = mysqli_fetch_row($sql_cek);

		if ($cek) {
			echo '<script>
		        Swal.fire({
		          icon: "error",
		          title: "Kode barang sudah ada",
		          showConfirmButton: false,
		          timer: 1500
		        }).then((result) => {
		            window.history.back();
		        });
		      </script>';
		} else {
			$sql = "INSERT INTO tb_barang SET kode_brg='$kode_brg', nama_brg='$nama_brg', satuan='$satuan', stok='$stok', tim='$tim', supplier='$supplier'";
			mysqli_query($koneksi, $sql);
			if ($sql) {
				echo "<script>
				Swal.fire({
				  title: 'Sukses!',
				  text: 'OK',
				  icon: 'success',
				  confirmButtonText: 'OK'
				}).then((result) => {
				  if (result.isConfirmed) {
					window.location.href = '?m=barang&s=awal';
				  }
				});
			  </script>";
			} else {
				echo '<script>
		        Swal.fire({
		          icon: "error",
		          title: "Gagal menyimpan data",
		          showConfirmButton: false,
		          timer: 1500
		        }).then((result) => {
		            window.history.back();
		        });
		      </script>';
			}
		}
	} else {
		echo "gagal";
	}
	?>
</body>

</html>