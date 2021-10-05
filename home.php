<?php
  session_start();
  require 'function.php';

  //pagination
  $jumlahDataPerHalaman = 6;
  $jumlahData = count(queryResep("SELECT * FROM resep"));
  $jumlahHalaman = ceil($jumlahData/$jumlahDataPerHalaman);
  $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
  $awalData = ($jumlahDataPerHalaman*$halamanAktif)-$jumlahDataPerHalaman;
  
  $recipe = queryResep("SELECT * FROM resep ORDER BY id DESC LIMIT $awalData, $jumlahDataPerHalaman");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags ---------------------------------------------------->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS ---------------------------------------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />

    <!-- CSS ---------------------------------------------------->
    <link rel="stylesheet" href="gaya.css" />

    <title>Lezhealty.com</title>
  </head>

  <body>
    <!-- Nav ---------------------------------------------------->
    <nav class="p-3 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap" /></svg>
          </a>

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="home.php" class="nav-link px-2 text-secondary">Home</a></li>
            <li><a href="index.php" class="nav-link px-2 text-white">Kichen Tips</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Category</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Contact</a></li>
            <li><a href="#" class="nav-link px-2 text-white">About</a></li>
          </ul>

          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search" />
          </form>

          <div>
            <a class="navbar-brand ml-4" href="#">
              <img class="rounded-circle" src="img/avatar.jpg" alt="..." height="36" />
            </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Nav ---------------------------------------------------->
    <!-- Jumbotron ---------------------------------------------------->
    <section class="jumbotron text-center" style="background-image: url('img/jumbotron.jpg')">
      <div class="container">
        <h1 class="lead text-white" style="font-size: 300%;"><strong>WELCOME</strong></h1>
        <div class="intro-heading text-uppercase text-dark font-weigt-bold text-white" style="font-size: 700%"><span>lezhealty</span></div>
        <a class="btn btn-dark btn-lg" href="#" role="button">Click Gan</a>
      </div>
    </section>
    <!-- End Jumbotron ---------------------------------------------------->
    <!-- Footer ---------------------------------------------------->
    <footer>
      <div class="container">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Food</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Tips</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contact</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
          </ul>
          <p class="text-center text-muted">&copy; 2021 Company, Inc</p>
        </footer>
      </div>
    </footer>
    <!-- End Footer ---------------------------------------------------->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>
