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
if(isset($_POST['simpan'])) {
	include('../koneksi.php');
	$no_ajuan 	= $_POST['no_ajuan'];
	$tanggal 	= $_POST['tanggal'];
	$kode_brg	= $_POST['kode_brg'];
	$nama_brg	= $_POST['nama_brg'];
	$stok	    = $_POST['stok'];
	$jml_ajuan	= $_POST['jml_ajuan'];
	$keterangan	= $_POST['keterangan'];
	$petugas	= $_POST['petugas'];
	$sql_cek = mysqli_query($koneksi, "SELECT * FROM tb_ajuan_pembelian WHERE no_ajuan='$no_ajuan'");
	$cek = mysqli_fetch_row($sql_cek);
	if ($cek) {
		echo "<script>
		Swal.fire({
			icon: 'error',
			title: 'Oops...',
			text: 'No Ajuan sudah ada!'
		}).then((result) => {
			window.history.back();
		});
		</script>";
	} else {
		$sql = "INSERT INTO tb_ajuan_pembelian SET no_ajuan='$no_ajuan', tanggal='$tanggal', kode_brg='$kode_brg', nama_brg='$nama_brg', stok='$stok', jml_ajuan='$jml_ajuan', keterangan='$keterangan', petugas='$petugas', val=1";
		mysqli_query($koneksi, $sql);
		if(mysqli_affected_rows($koneksi) > 0) {
			echo "<script>
			Swal.fire({
				icon: 'success',
				title: 'Sukses',
				text: 'Data Ajuan berhasil disimpan!'
			}).then((result) => {
				window.location.href = '?m=ajuanPembelian&s=awal';
			});
			</script>";
		} else {
			echo "<script>
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Gagal menyimpan data!'
			});
			</script>";
		}
	}
}
?>
</body>
</html>