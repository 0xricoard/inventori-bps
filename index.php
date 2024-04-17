<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Inventory Barang BPS Kab. Pekalongan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/tampilan.css" rel="stylesheet">
    <style>
      .carousel-item img {
        width: 50%; /* Set the width to 100% */
        height: auto; /* Set the height to auto */
        margin: auto; /* Center the image */
      }
    </style>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Sistem Inventory Barang BPS Kab. Pekalongan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#beranda">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#login">Masuk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tentang">Tentang</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

  <section id="beranda" class="section-margin">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/logistic1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/logistic2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/logistic3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
  </section>

<!-- Login Section -->
<section id="login" class="section-margin">
    <div class="container text-center">
        <h2 class="section-heading">Masuk Sebagai ....</h2>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <a href="admin/login.php" target="_blank" class="btn btn-primary btn-lg btn-block mb-3">ADMIN</a>
            </div>
            <div class="col-lg-4">
                <a href="petugas/login_petugas.php" target="_blank" class="btn btn-warning btn-lg btn-block">PETUGAS</a>
            </div>
        </div>
    </div>
</section>

<!-- Tentang Section -->
<section id="tentang" class="section-margin bg-light">
    <div class="container text-center">
        <h2 class="section-heading">Tentang Website Inventory</h2>
        <p class="text-muted">Website inventory adalah aplikasi berbasis Web untuk mengatur dan mencatat keluar masuk barang di masing-masing gudang dalam satu perusahaan, yang meliputi pencatatan barang masuk dari Supplier dan pencatatan barang keluar.</p>
    </div>
</section>

<!-- Footer -->
<footer class="footer bg-dark text-light">
    <div class="container text-center">
        <ul class="list-inline mb-3">
            <li class="list-inline-item">
                <a href="https://www.facebook.com/0xricoard" target="_blank" class="text-light"><i class="fab fa-facebook fa-2x"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="https://github.com/0xricoard" target="_blank" class="text-light"><i class="fab fa-github fa-2x"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/0xricoard" target="_blank" class="text-light"><i class="fab fa-linkedin fa-2x"></i></a>
            </li>
        </ul>
        <hr class="medium">
        <p class="text-light">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Sistem Inventory Barang BPS. All rights reserved</p>
    </div>
</footer>

</body>
</html>
