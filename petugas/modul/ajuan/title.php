<?php
$nomor_ajuan = mt_rand(1000, 9999);
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
      $id = $_SESSION['idinv2'];
      include '../koneksi.php';
      $sql = "SELECT * FROM tb_petugas WHERE id_petugas = '$id'";
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
              <form class="" action="logout.php" onclick="return confirm('yakin ingin logout?');" method="post">
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
              <a href="?m=barangMasuk&s=awal">
                <i class="fa fa-cart-arrow-down"></i> Data Barang Masuk
              </a>
            </li>
            <li>
              <a href="?m=ajuan&s=awal">
                <i class="fa fa-gift"></i> Data Ajuan Barang Keluar
              </a>
            </li>
            <li>
              <a href="?m=ajuanPembelian&s=awal">
                <i class="fa fa-gift"></i> Data Ajuan Pembelian Barang
              </a>
            </li>
            <li>
              <a href="logout.php" onclick="return confirm('yakin ingin logout?');">
                <i class="fa fa-warning"></i> Logout
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Data Ajuan</h1>
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
            <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Ajuan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="?m=ajuan&s=simpan" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleInputEmail1">No Ajuan</label>
                <!-- Isi nilai input nomor barang keluar dengan nomor yang dihasilkan -->
                <input type="text" class="form-control" id="exampleInputEmail1" name="no_ajuan"
                  aria-describedby="emailHelp" readonly value="<?php echo $nomor_ajuan; ?>">
                <small id="emailHelp" class="form-text text-muted">Nomor Ajuan</small>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tanggal</label>
                <input type="date" class="form-control" value="<?php echo $tanggalSekarang; ?>" id="exampleInputEmail1"
                  name="tanggal" aria-describedby="emailHelp" placeholder="Masukkan Tanggal">
                <small id="emailHelp" class="form-text text-muted">Masukkan Tanggal</small>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Kode Barang</label>

                <?php
                include ("../koneksi.php");
                $supp = ("SELECT * FROM tb_barang");
                $result = mysqli_query($koneksi, $supp);

                $jsArray = "var prdName = new Array();";

                echo '<select name="kode_brg" onchange="changeValue(this.value)">';
                echo '<option>--- PILIH ---</option>';

                while ($row = mysqli_fetch_array($result)) {
                  echo '<option value="' . $row['kode_brg'] . '">' . $row['kode_brg'] . '</option>';
                  $jsArray .= "prdName['" . $row['kode_brg'] . "'] 
              = {nama_brg:'" . addslashes($row['nama_brg']) . "',
                stok:'" . addslashes($row['stok']) . "', supplier:'" . addslashes($row['supplier']) . "'
              };";
                }


                echo '</select>';
                ?>
                <script type="text/javascript">
                  <?php echo $jsArray; ?>
                  function changeValue(id) {

                    document.getElementById('prd_nmbrg').value = prdName[id].nama_brg;
                    document.getElementById('prd_stk').value = prdName[id].stok;
                    document.getElementById('prd_sup').value = prdName[id].supplier;
                  }
                </script>

              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Barang</label>
                <input type="text" name="nama_brg" readonly="" id="prd_nmbrg" size="67">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Stok</label>
                <input type="text" class="form-control" id="prd_stk" name="stok" readonly=""
                  aria-describedby="emailHelp" placeholder="Masukkan Stok Barang">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Ajuan Permintaan</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="jml_ajuan"
                  aria-describedby="emailHelp" placeholder="Masukkan Jumlah Permintaan">
                <small id="emailHelp" class="form-text text-muted">Masukkan Jumlah Permintaan</small>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Keterangan</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="keterangan"
                  aria-describedby="emailHelp" placeholder="Masukkan Keterangan">
                <small id="emailHelp" class="form-text text-muted">Masukkan Keterangan Pengajuan</small>
              </div>
              <div class="form-group">
                <label for="petugas">Nama Petugas</label>
                <select class="form-control" id="petugas" name="petugas">
                  <option value="">Silakan pilih nama Petugas</option>
                  <option value="Maibu Barwis Sugiharto, S.ST., M.Si.">Maibu Barwis Sugiharto, S.ST., M.Si.</option>
                  <option value="Kismia Hartatik, SST">Kismia Hartatik, SST</option>
                  <option value="Urip Puji Raharjo, SST, MAP">Urip Puji Raharjo, SST, MAP</option>
                  <option value="Ir. Nuringtijas Priharjani, M.M">Ir. Nuringtijas Priharjani, M.M</option>
                  <option value="Aufarul Faroh, SE., M.Sc">Aufarul Faroh, SE., M.Sc</option>
                  <option value="Eko Sujadi, SE, M.M.">Eko Sujadi, SE, M.M.</option>
                  <option value="Okris Jubaidi, SST, Msi">Okris Jubaidi, SST, Msi</option>
                  <option value="Sri Mulyati, SST, M.M">Sri Mulyati, SST, M.M</option>
                  <option value="Arif Muttaqin, SST">Arif Muttaqin, SST</option>
                  <option value="Rani Kirnawati, SST">Rani Kirnawati, SST</option>
                  <option value="Suko Prayogi, SP.,M.E">Suko Prayogi, SP.,M.E</option>
                  <option value="Sari Dewi Mashunah, A.Md">Sari Dewi Mashunah, A.Md</option>
                  <option value="Mutiara Salsabella, A.P.Kb.N.">Mutiara Salsabella, A.P.Kb.N.</option>
                  <option value="Intan Puspita Dewi, A.Md">Intan Puspita Dewi, A.Md</option>
                  <option value="Andhika Misriyanto, A.Md">Andhika Misriyanto, A.Md</option>
                  <option value="Trubus Setiabudi A.Md">Trubus Setiabudi A.Md</option>
                  <option value="Aprilia Ummi Mujahidah, A. Md. Stat">Aprilia Ummi Mujahidah, A. Md. Stat</option>
                  <option value="Anita Rokhawati, SST">Anita Rokhawati, SST</option>
                  <option value="Abdul Khamid, A.Md">Abdul Khamid, A.Md</option>
                  <option value="Windya Nugroho, A.Md.">Windya Nugroho, A.Md.</option>
                  <option value="Novy Febriana, SST">Novy Febriana, SST</option>
                  <option value="Ita Rokhaini, A.Md">Ita Rokhaini, A.Md</option>
                  <option value="April Nugroho Sri H, SE">April Nugroho Sri H, SE</option>
                  <option value="Munir, A.Md">Munir, A.Md</option>
                  <option value="Saifudin Zuhri, SE, M.Acc">Saifudin Zuhri, SE, M.Acc</option>
                  <option value="Harjito">Harjito</option>
                  <option value="Hayati Sriwigati, A.Md">Hayati Sriwigati, A.Md</option>
                  <option value="Achmad Subchan, A.Md">Achmad Subchan, A.Md</option>
                  <option value="Mochamad Habibi,S,Si">Mochamad Habibi,S,Si</option>
                  <option value="Ibnu Utomo, A.Md">Ibnu Utomo, A.Md</option>
                  <option value="Arinda Purbeni, A.Md">Arinda Purbeni, A.Md</option>
                  <option value="Arif Santoso, SST,M.Ak">Arif Santoso, SST,M.Ak</option>
                  <option value="Akhmad Ghozien, SST">Akhmad Ghozien, SST</option>
                  <option value="Risa Bella Rosanti, A.Md">Risa Bella Rosanti, A.Md</option>
                </select>
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
          <label>Cari Data Ajuan Barang Keluar</label>
          <input type="text" name="cari"> <button type="submit" name="tbcari" class="btn btn-success">Cari</button>
        </form>
      </center>
    </div>
    <div class="row">
      <div class="table-responsive table--no-card m-b-30">
        <table class="table table-bordered table-striped table-earning">
          <thead>
            <tr>
              <th>No Ajuan</th>
              <th>Tanggal</th>
              <th>Kode Barang</th>
              <th>Nama Barang</th>
              <th>Jumlah Permintaan</th>
              <th>Keterangan</th>
              <th>Petugas</th>
              <th>Validasi</th>
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
                echo "href='?m=ajuan&s=awal&halaman=$previous'";
              } ?>>Previous</a>
            </li>
            <?php
            for ($x = 1; $x <= $total_halaman; $x++) {
              ?>
              <li class="page-item"><a class="page-link" href="?m=ajuan&s=awal&halaman=<?php echo $x ?>">
                  <?php echo $x; ?>
                </a></li>
              <?php
            }
            ?>
            <li class="page-item">
              <a class="page-link" <?php if ($halaman < $total_halaman) {
                echo "href='?m=ajuan&s=awal&halaman=$next'";
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
              <script>document.write(new Date().getFullYear());</script> Sistem Inventory Barang BPS. All rights
              reserved
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