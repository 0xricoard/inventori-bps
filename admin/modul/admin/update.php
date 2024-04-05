<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
include '../koneksi.php';

//proses input
if (isset($_POST['simpan'])) {
  $id_admin=$_POST['id_admin'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $nama = $_POST['nama'];
  $telepon = $_POST['telepon'];

  if(isset($_POST['ubahfoto'])){ // Cek apakah user ingin mengubah fotonya atau tidak
    $foto     = $_FILES['inpfoto']['name'];
    $tmp      = $_FILES['inpfoto']['tmp_name'];
    $fotobaru = date('dmYHis').$foto;
    $path     = "../images/admin/".$fotobaru;

    if(move_uploaded_file($tmp, $path)){ //awal move upload file
      $sql    = "SELECT * FROM tb_admin WHERE id_admin = '".$id_admin."' ";
      $query  = mysqli_query($koneksi, $sql);
      $hapus_f = mysqli_fetch_array($query);

      //proses hapus gambar
      $file = "../images/admin/".$hapus_f['foto'];
      unlink($file);//nama variabel yang ada di server

      // Proses ubah data ke Database
      $sql_f="UPDATE tb_admin SET username='$username',  password='$password', nama='$nama', telepon='$telepon', foto='$fotobaru' WHERE id_admin='$id_admin'";
      $ubah  = mysqli_query($koneksi, $sql_f);
      if($ubah){
        echo "<script>
                Swal.fire({
                  title: 'Sukses!',
                  text: 'Ubah Data Dengan ID Admin $id_admin Berhasil',
                  icon: 'success',
                  confirmButtonText: 'OK'
                }).then((result) => {
                  if (result.isConfirmed) {
                    window.location.href = 'index.php?m=admin';
                  }
                });
              </script>";
      } else {
        echo "<script>
                Swal.fire({
                  title: 'Error!',
                  text: 'Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.',
                  icon: 'error',
                  confirmButtonText: 'OK'
                }).then((result) => {
                  if (result.isConfirmed) {
                    window.history.back();
                  }
                });
              </script>";
      }
    } //akhir move upload file
    else{
      // Jika gambar gagal diupload, Lakukan :
      echo "<script>
              Swal.fire({
                title: 'Error!',
                text: 'Maaf, Gambar gagal untuk diupload.',
                icon: 'error',
                confirmButtonText: 'OK'
              }).then((result) => {
                if (result.isConfirmed) {
                  window.history.back();
                }
              });
            </script>";
    }
 } //akhir ubah foto
 else { //hanya untuk mengubah data
  $sql_d="UPDATE tb_admin SET username='$username', password='$password', nama='$nama', telepon='$telepon' WHERE id_admin='$id_admin'";
   $data    = mysqli_query($koneksi, $sql_d);
   if ($data) {
     echo "<script>
             Swal.fire({
               title: 'Sukses!',
               text: 'Ubah Data Dengan ID Admin $id_admin Berhasil',
               icon: 'success',
               confirmButtonText: 'OK'
             }).then((result) => {
               if (result.isConfirmed) {
                 window.location.href = 'index.php?m=awal';
               }
             });
           </script>";
   } else {
     echo "<script>
             Swal.fire({
               title: 'Error!',
               text: 'Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.',
               icon: 'error',
               confirmButtonText: 'OK'
             }).then((result) => {
               if (result.isConfirmed) {
                 window.history.back();
               }
             });
           </script>";
   }
 } //akhir untuk mengubah data
}
?>
</body>
</html>
