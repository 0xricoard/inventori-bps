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
if (isset($_POST['simpan'])) {
	include('../koneksi.php');
	$no_brg_out = $_POST['no_brg_out'];
	$no_ajuan 	= $_POST['no_ajuan'];
	$tanggal_ajuan = $_POST['tanggal_ajuan'];
	$tanggal_out = $_POST['tanggal_out'];
	$petugas = $_POST['petugas'];
	$kode_brg = $_POST['kode_brg'];
	$nama_brg = $_POST['nama_brg'];
	$stok = $_POST['stok'];
	$jml_ajuan = $_POST['jml_ajuan'];
	$jml_keluar = $_POST['jml_keluar'];
	$keterangan = $_POST['keterangan'];
	$admin = $_POST['admin'];
	

	$sql_cek = mysqli_query($koneksi, "SELECT * FROM tb_barang_out WHERE no_brg_out = '$no_brg_out'");
	$cek = mysqli_fetch_row($sql_cek);

	if ($cek) {
		echo '<script>
		        Swal.fire({
		          icon: "error",
		          title: "No barang keluar sudah ada",
		          showConfirmButton: false,
		          timer: 1500
		        }).then((result) => {
		            window.history.back();
		        });
		      </script>';
		echo '<script>window.history.back()</script>';
	}else {
	$kurangStok 	= $stok - $jml_keluar;

	$update = ("UPDATE tb_barang SET stok = '". $kurangStok ."' WHERE kode_brg = '". $kode_brg ."' ");
	$result = mysqli_query($koneksi, $update) or die(mysql_error());

	$simpan		= ("INSERT INTO tb_barang_out () VALUES ('$no_brg_out','$no_ajuan','$tanggal_ajuan','$tanggal_out','$petugas','$kode_brg','$nama_brg', '$stok', '$jml_ajuan', '$jml_keluar', '$keterangan', '$admin')");
	$result		= mysqli_query($koneksi, $simpan);

	$sqlval = "UPDATE tb_ajuan SET val='0', stok='" . $kurangStok . "' WHERE no_ajuan = '". $no_ajuan ."' ";
	if (mysqli_query($koneksi, $sqlval)) {
		echo '<script>
				Swal.fire({
				  icon: "success",
				  title: "Data berhasil disimpan",
				  showConfirmButton: false,
				  timer: 1500
				}).then((result) => {
					window.location.href = "?m=barangKeluar&s=awal";
				});
			  </script>';
	} else {
		echo '<script>
				Swal.fire({
				  icon: "error",
				  title: "Penyimpanan data gagal",
				  showConfirmButton: false,
				  timer: 1500
				}).then((result) => {
					window.history.back();
				});
			  </script>';
	}
}
}
?>

</body>
</html>
