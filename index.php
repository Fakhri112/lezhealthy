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
    <!-- Content ---------------------------------------------------->
    <div class="container" style="margin-top: 2rem;">
      <div class="row">
        <!-- Main Content ---------------------------------------------------->
        <div class="col-sm-8">
          <div class="container">
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <a href="https://www.google.com"><img src="img/food1.jpg" class="d-block w-100" alt="..."></a>
                      <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="img/food2.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="img/food3.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
              </div>
              <!-- Blog ---------------------------------------------------->
              <?php foreach($recipe as $res) : ?>
              <div class="card" style="width: auto; margin-top: 2rem;">
                <img src="blog/<?= $res["sumber"] . ".jpg" ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <div class="text-justify">
                    <a href="" class="stretched-link"><h5><?= $res["judul"] ?></h5></a>
                    <p><?= $res["deskripsi"] ?></p>
                    <?php if ( strlen($res["tag1"])) :?>
              <button type="submit" class="btn btn-primary" name="register" value=<?php echo $res["tag1"]?>><?php echo $res["tag1"]?></button>
            <?php endif ?>
            <?php if (strlen($res["tag2"])) :?>
              <button type="submit" class="btn btn-primary" name="register" value=<?php echo $res["tag2"]?>><?php echo $res["tag2"]?></button>
            <?php endif ?>
            <?php if ( strlen($res["tag3"])) :?>
              <button type="submit" class="btn btn-primary" name="register" value=<?php echo $res["tag3"]?>><?php echo $res["tag3"]?></button>
            <?php endif ?>
            <?php if ( strlen($res["tag4"])) :?>
              <button type="submit" class="btn btn-primary" name="register" value=<?php echo $res["tag4"]?>><?php echo $res["tag4"]?></button>
            <?php endif ?>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
              <!--  ---------------------------------------------------->
                <!-- End Blog ---------------------------------------------------->
                <nav aria-label="...">
        <ul class="pagination justify-content-center mt-3">
            <?php if($halamanAktif > 1 ) : ?>
                <li class="page-item"><a class="page-link" href="?halaman=<?= $halamanAktif-1 ?>">Previous</a></li>
            <?php else : ?>
                <li class="page-item disabled"><a class="page-link" href="?halaman=<?= $halamanAktif-1 ?>">Previous</a></li>
            <?php endif;?>
              
            <?php for ($i=1; $i<=$jumlahHalaman; $i++) : ?>
              <?php if ($i == $halamanAktif) : ?>
                <li class="page-item active">
                  <a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                </li>
              <?php else : ?>
                <li class="page-item">
                  <a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                </li>
                
              <?php endif;?>
            <?php endfor; ?>

            <?php if($halamanAktif < $jumlahHalaman ) : ?>
                <li class="page-item"><a class="page-link" href="?halaman=<?= $halamanAktif+1 ?>">Next</a></li>
            <?php else : ?>
                <li class="page-item disabled"><a class="page-link" href="?halaman=<?= $halamanAktif-1 ?>">Next</a></li>
            <?php endif;?>

        </ul>
    </nav>
        </div>
      </div>
      <!-- End Main Content ---------------------------------------------------->
      <!-- Trend ---------------------------------------------------->
      <div class="col-sm-4">
        <p>Date/Time: <span id="datetime"></span></p>

        <script>
          var dt = new Date();
          document.getElementById("datetime").innerHTML = dt.toLocaleString();
        </script>

        <br />
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <br />

        <div class="row row-cols-1 row-cols-md-1 g-4">
          <div class="col">
            <div class="card">
              <img src="img/food1.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="img/food2.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="img/food3.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="img/Fruit.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
       <!-- End Trend ---------------------------------------------------->
  </div>
<!-- End Content ---------------------------------------------------->

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
