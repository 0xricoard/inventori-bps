<?php 
include 'sesi_petugas.php';
$modul = (isset($_GET['s']))?$_GET['s']:"awal";
switch($modul){
	case 'awal': default: include "modul/ajuanPembelian/title.php"; break;
	case 'simpan': include "modul/ajuanPembelian/simpan.php"; break;
	case 'hapus': include "modul/ajuanPembelian/hapus.php"; break;
	case 'ubah': include "modul/ajuanPembelian/ubah.php"; break;
	case 'update': include "modul/ajuanPembelian/update.php"; break;
	
}
 ?>