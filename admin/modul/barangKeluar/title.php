<?php
date_default_timezone_set("Asia/Jakarta");
$tanggalSekarang = date("Y-m-d");
$jamSekarang = date("h:i a");
$nomor_barang_keluar = mt_rand(1000, 9999);
?>
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

  <!-- boootstrap -->
  <link href="../vendor/css/bootstrap/bootstrap.min.css" rel="stylesheet">

  <link href="../vendor/css/bootstrap/bootstrap.css" rel="stylesheet">

  <!-- icon dan fonts -->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- tema css -->
  <link href="../css/tampilanadmin.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>
</head>

<body>
  <!-- Menu -->
  <div id="wrapper">

    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">navigation</span> Menu <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand">Inventory</a>
      </div>
      <?php
      $id = $_SESSION['idinv'];
      include '../koneksi.php';
      $sql = "SELECT * FROM tb_admin WHERE id_admin = '$id'";
      $query = mysqli_query($koneksi, $sql);
      $r = mysqli_fetch_array($query);

      ?>
      <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            </i>
            <?php echo $r['nama']; ?>
          </a>
          <ul class="dropdown-menu dropdown-user">
            <li>
              <form class="" action="keluar_admin.php" method="post">
                <button class="btn btn-default" type="submit" name="keluar"><i class="fa fa-sign-out"></i>
                  Keluar</button>
              </form>
            </li>
          </ul>
        </li>
      </ul>

      <!-- menu samping -->
      <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
          <ul class="nav" id="side-menu">
            <li>
              <a href="?m=awal.php">
                <i class="fa fa-dashboard"></i> Beranda
              </a>
            </li>
            <li>
              <a href="?m=admin&s=awal">
                <i class="fa fa-user"></i> Data Admin
              </a>
            </li>
            <li>
              <a href="?m=petugas&s=awal">
                <i class="fa fa-users"></i> Data Petugas
              </a>
            </li>
            <li>
              <a href="?m=supplier&s=awal">
                <i class="fa fa-building"></i> Data UAKPB
              </a>
            </li>
            <li>
              <a href="?m=rak&s=awal">
                <i class="fa fa-cubes"></i> Data TIM
              </a>
            </li>
            <li>
              <a href="?m=barang&s=awal">
                <i class="fa fa-archive"></i> Data Barang
              </a>
            </li>
            <li>
              <a href="?m=barangMasuk&s=awal">
                <i class="fa fa-cart-plus"></i> Data Barang Masuk
              </a>
            <li>
            <li>
              <a href="?m=barangKeluar&s=awal">
                <i class="fa fa-cart-arrow-down"></i> Data Barang Keluar
              </a>
            </li>
            <li>
              <a href="?m=laporan&s=awal">
                <i class="fa fa-file"></i> Laporan
              </a>
            </li>
            <li>
              <a href="logout.php" onclick="return confirm('yakin ingin logout?')">
                <i class="fa fa-warning"></i> Logout
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Data Barang Keluar</h1>
        </div>
      </div>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Tambah data
      </button>
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Barang Keluar</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="?m=barangKeluar&s=simpan" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="exampleInputEmail1">No Barang Keluar</label>
                  <!-- Isi nilai input nomor barang keluar dengan nomor yang dihasilkan -->
                  <input type="text" class="form-control" id="exampleInputEmail1" name="no_brg_out"
                    aria-describedby="emailHelp" value="<?php echo $nomor_barang_keluar; ?>">
                  <small id="emailHelp" class="form-text text-muted">Nomor Barang Keluar</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nomor Ajuan</label>
                  <?php
                  include ("../koneksi.php");

                  $query = "SELECT a.*, b.stok 
          FROM tb_ajuan a
          INNER JOIN tb_barang b ON a.kode_brg = b.kode_brg 
          WHERE a.val = '1'";
                  $result = mysqli_query($koneksi, $query);

                  $jsArray = "var prdName = new Array();";

                  echo '<select name="no_ajuan" onchange="changeValue(this.value)">';
                  echo '<option>--- PILIH ---</option>';

                  while ($row = mysqli_fetch_array($result)) {
                    echo '<option value="' . $row['no_ajuan'] . '">' . $row['no_ajuan'] . '</option>';
                    $jsArray .= "prdName['" . $row['no_ajuan'] . "'] 
                = {
                  tanggal_ajuan:'" . addslashes($row['tanggal']) . "',
                  petugas:'" . addslashes($row['petugas']) . "',
                  kode_brg:'" . addslashes($row['kode_brg']) . "',
                  nama_brg:'" . addslashes($row['nama_brg']) . "',
                  stok:'" . addslashes($row['stok']) . "',
                  jml_ajuan:'" . addslashes($row['jml_ajuan']) . "',
                  keterangan:'" . addslashes($row['keterangan']) . "',
                  val:'" . addslashes($row['val']) . "'
                };";
                  }

                  echo '</select>';
                  ?>
                  <script type="text/javascript">
                    <?php echo $jsArray; ?>
                    function changeValue(id) {
                      document.getElementById('prd_tanggal').value = prdName[id].tanggal_ajuan;
                      document.getElementById('prd_petugas').value = prdName[id].petugas;
                      document.getElementById('prd_kodebrng').value = prdName[id].kode_brg;
                      document.getElementById('prd_namabrg').value = prdName[id].nama_brg;
                      document.getElementById('prd_stokbrga').value = prdName[id].stok;
                      document.getElementById('prd_jmlajuan').value = prdName[id].jml_ajuan;
                      document.getElementById('prd_keterangan').value = prdName[id].keterangan;

                      // AJAX request to fetch keterangan from tb_ajuan
                      var xhr = new XMLHttpRequest();
                      xhr.onreadystatechange = function () {
                        if (xhr.readyState == 4 && xhr.status == 200) {
                          var response = JSON.parse(xhr.responseText);
                          document.getElementById('prd_keterangan').value = response.keterangan;
                        }
                      };
                      xhr.open('GET', 'get_keterangan.php?id=' + id, true);
                      xhr.send();
                    }
                  </script>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Ajuan</label>
                  <input type="text" readonly="" class="form-control" id="prd_tanggal" name="tanggal_ajuan"
                    aria-describedby="emailHelp" placeholder="Masukkan Tanggal Ajuan">
                  <small id="emailHelp" class="form-text text-muted">Masukkan Tanggal Ajuan</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Keluar</label>
                  <input type="date" class="form-control" id="exampleInputEmail1" name="tanggal_out"
                    value="<?php echo $tanggalSekarang; ?>" aria-describedby="emailHelp"
                    placeholder="Masukkan Tanggal Keluar">
                  <small id="emailHelp" class="form-text text-muted">Masukkan Tanggal Keluar</small>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Petugas</label>
                  <input type="text" readonly="" class="form-control" id="prd_petugas" name="petugas"
                    aria-describedby="emailHelp" placeholder="Masukkan Petugas">

                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Barang</label>
                  <input type="text" readonly="" class="form-control" id="prd_kodebrng" name="kode_brg"
                    aria-describedby="emailHelp" placeholder="Masukkan Tanggal Ajuan">


                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Barang</label>
                  <input type="text" name="nama_brg" readonly="" id="prd_namabrg" size="67">

                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Stok</label>
                  <input type="text" class="form-control" id="prd_stokbrga" name="stok" readonly=""
                    aria-describedby="emailHelp" placeholder="Masukkan Stok Barang">

                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah Ajuan</label>
                  <input type="text" class="form-control" readonly="" id="prd_jmlajuan" name="jml_ajuan"
                    aria-describedby="emailHelp" placeholder="Jumlah Ajuan">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah Keluar</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="jml_keluar"
                    aria-describedby="emailHelp" placeholder="Masukkan Jumlah Keluar">
                  <small id="emailHelp" class="form-text text-muted">Masukkan Jumlah Keluar</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Keterangan</label>
                  <input type="text" class="form-control" id="prd_keterangan" name="keterangan"
                    aria-describedby="emailHelp" placeholder="Masukkan Keterangan" readonly>
                  <small id="emailHelp" class="form-text text-muted">Keterangan</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Admin</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $r['nama']; ?>"
                    readonly="" name="admin" aria-describedby="emailHelp" placeholder="Masukkan Nama Admin">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="simpan" class="btn btn-primary">Save changes</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <center>
          <form action="" method="POST">
            <label>Cari No Barang Keluar</label>
            <input type="text" name="cari"> <button type="submit" name="go" class="btn btn-success">Cari Barang</button>
          </form>
        </center>
      </div>
      <div class="row">
        <div class="table-responsive table--no-card m-b-30">
          <table class="table table-bordered table-striped table-earning">
            <thead>
              <tr>
                <th>No Barang Keluar</th>
                <th>No Ajuan</th>
                <th>Tanggal Ajuan</th>
                <th>Tanggal Keluar</th>
                <th>Petugas</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>stok</th>
                <th>Jumlah Ajuan</th>
                <th>Jumlah Keluar</th>
                <th>Keterangan</th>
                <th>Admin</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>

              <?php
              include 'paging.php';
              ?>
            </tbody>
          </table>

          <center>
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link" <?php if ($halaman > 1) {
                  echo "href='?m=barangKeluar&s=awal&halaman=$previous'";
                } ?>>Previous</a>
              </li>
              <?php
              for ($x = 1; $x <= $total_halaman; $x++) {
                ?>
                <li class="page-item"><a class="page-link" href="?m=barangKeluar&s=awal&halaman=<?php echo $x ?>">
                    <?php echo $x; ?>
                  </a></li>
                <?php
              }
              ?>
              <li class="page-item">
                <a class="page-link" <?php if ($halaman < $total_halaman) {
                  echo "href='?m=barangKeluar&s=awal&halaman=$next'";
                } ?>>Next</a>
              </li>
            </ul>
          </center>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer -->
  <footer class="text-center">
    <div class="footer-below">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p class="text-muted" style="font-size: 16px;">Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script> Sistem Inventory Barang BPS. All rights reserved
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- jQuery -->
  <script src="../vendor/jquery/jquery.min.js"></script>

  <!--include-->
  <script src="../vendor/css/js/bootstrap.min.js"></script>

</body>

</html>