<?php
date_default_timezone_set("Asia/Jakarta");
$tanggalSekarang = date("Y-m-d");
$jamSekarang = date("h:i a");
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
  <style>
    footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: #f8f9fa;
      /* Warna latar belakang footer */
      color: #333;
      /* Warna teks footer */
      padding: 10px 0;
      /* Padding atas dan bawah footer */
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
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Laporan Branag Keluar dan Masuk</h1>
        </div>
      </div>
          <!-- Button untuk cetak Excel -->
<button type="button" class="btn btn-success" onclick="exportToExcel()">Cetak Excel</button>
<script type="text/javascript">
  function exportToExcel() {
    // Mengirim permintaan ke server untuk menghasilkan file Excel
    window.location.href = '../export_excel.php';
  }
</script>
      <div class="row">
        <div class="table-responsive table--no-card m-b-30">
          <table class="table table-bordered table-striped table-earning">
            <thead>
              <tr>
                <th>Tanggal</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Jumlah Masuk</th>
                <th>Jumlah Keluar</th>
                <th>Keterangan</th>
                <th>Petugas</th>
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
                                        echo "href='?m=laporan&s=awal&halaman=$previous'";
                                      } ?>>Previous</a>
              </li>
              <?php
              $query_total = mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah FROM ($sql_out) AS tb");
              $total_data = mysqli_fetch_assoc($query_total);
              $total_halaman = ceil($total_data['jumlah'] / $batas);
              for ($x = 1; $x <= $total_halaman; $x++) {
                ?>
                <li class="page-item"><a class="page-link" href="?m=laporan&s=awal&halaman=<?php echo $x ?>">
                    <?php echo $x; ?>
                  </a></li>
              <?php
              }
              ?>
              <li class="page-item">
                <a class="page-link" <?php if ($halaman < $total_halaman) {
                                        echo "href='?m=laporan&s=awal&halaman=$next'";
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
