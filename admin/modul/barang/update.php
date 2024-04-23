<?php 
	
	include '../koneksi.php';

	if (isset($_POST['simpan'])) {
	$kode_brg = $_POST['kode_brg'];
	$nama_brg = $_POST['nama_brg'];
	$satuan = $_POST['satuan'];
	$stok = $_POST['stok'];
	$tim = $_POST['tim'];
	$supplier = $_POST['supplier'];

	}

	$sql = "UPDATE tb_barang SET nama_brg='$nama_brg', satuan='$satuan', stok='$stok', tim='$tim', supplier='$supplier' WHERE kode_brg='$kode_brg'";
	$update = mysqli_query($koneksi, $sql);

	if ($update) {
		header("location: ?m=barang&s=awal");
	}else{
		echo "gagal";
	}




 ?>