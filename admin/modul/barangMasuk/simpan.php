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
if(isset($_POST['simpan'])) {
	include('../koneksi.php');
	$tanggal 	= $_POST['tanggal'];
	$noinv 		= $_POST['noinv'];
	$supplier	= $_POST['supplier'];
	$kode_brg	= $_POST['kode_brg'];
	$nama_brg	= $_POST['nama_brg'];
	$stok	    = $_POST['stok'];
	$jml_masuk	= $_POST['jml_masuk'];
	$jam		= $_POST['jam'];
	$keterangan	= $_POST['keterangan'];
	$petugas	= $_POST['petugas'];

	$sql_cek = mysqli_query($koneksi, "SELECT * FROM tb_barang_in WHERE noinv='$noinv'");
	$cek = mysqli_fetch_row($sql_cek);

	if ($cek) {
		echo "<script>
		Swal.fire({
			icon: 'error',
			title: 'Oops...',
			text: 'No Invoice sudah ada!'
		}).then((result) => {
			window.history.back();
		});
		</script>";
	} else {
		$tambahStok = $stok + $jml_masuk;

		$update = ("UPDATE tb_barang SET stok = '". $tambahStok ."' WHERE kode_brg = '". $kode_brg ."' ");
		$result = mysqli_query($koneksi, $update) or die(mysql_error());
	
		$sql = "INSERT INTO tb_barang_in SET tanggal='$tanggal', noinv='$noinv', supplier='$supplier', kode_brg='$kode_brg', nama_brg='$nama_brg', stok='$stok', jml_masuk='$jml_masuk', jam='$jam', keterangan='$keterangan', petugas='$petugas'";
		mysqli_query($koneksi, $sql);
		if(mysqli_affected_rows($koneksi) > 0) {
			echo "<script>
			Swal.fire({
				icon: 'success',
				title: 'Sukses',
				text: 'Data berhasil disimpan!'
			}).then((result) => {
				window.location.href = '?m=barangMasuk&s=awal';
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