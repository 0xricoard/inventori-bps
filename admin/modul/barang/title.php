<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo $judul; ?></title>

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
  <style>
    body {

      /* Menyisakan ruang di bagian bawah untuk footer */
      background-color: #f8f9fa;
      /* Warna latar belakang halaman */
      color: #333;
      /* Warna teks halaman */
    }

    footer {
      position: relative;
      left: 0;
      bottom: 0;
      width: 100%;

    }

    #page-wrapper {
      min-height: calc(100vh - 160px);
      /* 100% tinggi viewport - tinggi header - tinggi footer */
      position: relative;
    }
  </style>
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
      include '../admin/modul/admin/simpan.php';
      $sql = "SELECT * FROM tb_admin WHERE id_admin = '$id'";
      $query = mysqli_query($koneksi, $sql);
      $r = mysqli_fetch_array($query);
      ?>
      <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <img src="../images/admin/<?php echo $r['foto']; ?>" height="35"></i> <?php echo $r['nama']; ?>
          </a>
          <ul class="dropdown-menu dropdown-user">
            <li>
              <form class="" action="logout.php" onclick="return confirm('yakin ingin logout?');" method="post">
                <button class="btn btn-default" type="submit" name="keluar"><i class="fa fa-sign-out"></i>
                  Logout</button>
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
      <script>
        document.addEventListener("DOMContentLoaded", () => {
          let printLink = document.getElementById("print");
          let container = document.getElementById("table-responsive table--no-card m-b-30");

          printLink.addEventListener("click", event => {
            event.preventDefault();
            printLink.style.display = "none";
            window.print();
          }, false);

          container.addEventListener("click", event => {
            printLink.style.display = "flex";
          }, false);

        }, false);
      </script>
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Data Barang</h1>
        </div>
      </div>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Tambah data
      </button>
      <a href="#" class="btn btn-success" role="button" id="print">Cetak</a>
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Tambah data barang</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="?m=barang&s=simpan" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Barang</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="kode_brg" maxlength="20"
                    aria-describedby="emailHelp" placeholder="Masukkan Kode Barang">
                  <small id="emailHelp" class="form-text text-muted">Masukkan Kode Barang</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Barang</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nama_brg"
                    aria-describedby="emailHelp" placeholder="Masukkan Nama Barang">
                  <small id="emailHelp" class="form-text text-muted">Masukkan Nama Barang</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Satuan</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="satuan"
                    aria-describedby="emailHelp" placeholder="Masukkan Satuan">
                  <small id="emailHelp" class="form-text text-muted">Masukkan Satuan</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Stok Barang</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="stok"
                    aria-describedby="emailHelp" placeholder="Masukkan Stok Barang">
                  <small id="emailHelp" class="form-text text-muted">Masukkan Stok Barang</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tim</label>
                  <select class="form-control" name="tim" required="">
                    <?php
                    include '../koneksi.php';
                    $sql = "SELECT * FROM tb_tim";
                    $hasil = mysqli_query($koneksi, $sql);
                    while ($data = mysqli_fetch_array($hasil)) {
                      ?>
                      <option value="<?php echo $data['nama_tim']; ?>"><?php echo $data['nama_tim']; ?></option>
                    <?php } ?>
                  </select>
                  <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">UAKPB</label>
                  <select class="form-control" name="supplier" required="">
                    <?php
                    include '../koneksi.php';
                    $sql = "SELECT * FROM tb_sup";
                    $hasil = mysqli_query($koneksi, $sql);
                    while ($data = mysqli_fetch_array($hasil)) {
                      ?>
                      <option value="<?php echo $data['nama_sup']; ?>"><?php echo $data['nama_sup']; ?></option>
                    <?php } ?>
                  </select>
                  <small id="emailHelp" class="form-text text-muted"></small>
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
            <label>Cari Barang</label>
            <input type="text" name="cari"> <button type="submit" name="go" class="btn btn-success">Cari Barang</button>
          </form>
        </center>
      </div>
      <div class="row">
        <div class="table-responsive table--no-card m-b-30">
          <table class="table table-bordered table-striped table-earning">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Satuan</th>
                <th>Stok</th>
                <th>TIM</th>
                <th>UAKPB</th>
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
                  echo "href='?m=barang&s=awal&halaman=$previous'";
                } ?>>Previous</a>
              </li>
              <?php
              for ($x = 1; $x <= $total_halaman; $x++) {
                ?>
                <li class="page-item"><a class="page-link"
                    href="?m=barang&s=awal&halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                <?php
              }
              ?>
              <li class="page-item">
                <a class="page-link" <?php if ($halaman < $total_halaman) {
                  echo "href='?m=barang&s=awal&halaman=$next'";
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