<?php 
include '../koneksi.php';
include 'sesi_petugas';
if (isset($_GET['no_ajuan'])) {
	$id = $_GET['no_ajuan'];

	$sql = "DELETE FROM tb_ajuan_pembelian WHERE no_ajuan='$id'";
	mysqli_query($koneksi, $sql);

	if ($sql) {
		header("location: ?m=ajuanPembelian&s=awal");
	}else{
		echo "gagal";
	}
}


 ?>