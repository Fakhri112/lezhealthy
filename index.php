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
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEZHEALTY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style><?php include 'gaya.css'; ?></style>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body class="mt-5">
  
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top navbar-static-top">
    <div class="container">
        <div class="container-fluid">
          <a class="navbar-brand font-weight-bold" href="index.php">LEZHEALTY</a>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <form class="d-flex" action="result.php" method="get">
                <input class="form-control me-2" style="width:200px" name="keyword" placeholder="Search" aria-label="Search">
                <button class="btn ml-2 btn-default" type="submit" name="cari">Cari</button>
              </form>
            </div>
          </div>
          <div class="navbar-nav">
            <a class="nav-link" href="#">Kitchen Tips</a>
            <a class="nav-link" href="#">Category</a>
            <a class="nav-link" href="#">Submit Recipe</a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Tools</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Health Calculator</a>
                <a class="dropdown-item" href="#">Food Composer</a>
              </div>
            </li>
          </div>
          <div>
            <a class="navbar-brand ml-4" href="login.php">
              <img class="rounded-circle"src="img/default-avatar-profile-icon-social-260nw-1677509740.jpg" alt="..." height="36">
            </a>
          </div>
        </div>
    </div>
  </nav>
      

      <div class="container">
          <div class="row">
            <div class="col-8">
              <div class="card w-60 mt-5">
                <div class="card-header" style="background-color: orange;">
                  <h5 class="card-title">Daily Fact</h5>
                </div>
                <div class="card-body p-0">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner">
                              <div class="carousel-item active">
                                  <img class="d-block w-100" src="img/animals.jfif" alt="First slide">
                                  <div class="carousel-caption d-none d-md-block">
                                      <h5>My Caption Title (1st Image)</h5>
                                      <p>The whole caption will only show up if the screen is at least medium size.</p>
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100" src="img/arch.jfif" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100" src="img/nature.jfif" alt="Third slide">
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
                    </div>
                  </div>
                </div>

                <!-- PHP TESTING-->
                <?php
                

                ?>


              <div class="col-md-4 mt-5">
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Popular</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Recent</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Comment</a>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                </div>
              </div>
            </div>
          </div>
        </div>      
    </div>

    <!--Hero Section-->



    <?php 
    // if (isset($_POST["register"])) {
    //     var_dump($result);
    //  };
    ?>
  

  <!-- Hero Section -->
  <div class="container">
  <?php foreach($recipe as $card) : ?>

  <?php $link_img = $card["sumber"].".jpg";?>
    <form action="" method="post">  
      <div class="card mt-4" style="width: 66%;">
        <img src="blog/<?php echo $link_img?>" class="card-img-top" alt="...">
        <div class="card-body">
          <div class="text-justify">
            <a href="" class="text-decoration-none"><h5><?php echo $card["judul"]?></h5></a>
            <p><?php echo $card["deskripsi"] ?></p>

            <?php if ( strlen($card["tag1"])) :?>
              <button type="submit" class="btn btn-primary" name="register" value=<?php echo $card["tag1"]?>><?php echo $card["tag1"]?></button>
            <?php endif ?>
            <?php if (strlen($card["tag2"])) :?>
              <button type="submit" class="btn btn-primary" name="register" value=<?php echo $card["tag2"]?>><?php echo $card["tag2"]?></button>
            <?php endif ?>
            <?php if ( strlen($card["tag3"])) :?>
              <button type="submit" class="btn btn-primary" name="register" value=<?php echo $card["tag3"]?>><?php echo $card["tag3"]?></button>
            <?php endif ?>
            <?php if ( strlen($card["tag4"])) :?>
              <button type="submit" class="btn btn-primary" name="register" value=<?php echo $card["tag4"]?>><?php echo $card["tag4"]?></button>
            <?php endif ?>
          </div>
        </div>
      </div>
    </form>

  <?php endforeach; ?>
  </div> 

  <!-- Pagi Nasi -->

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


  <!-- Footer -->
      <footer class="bg-dark">
        <div class="container">
          <footer class="py-4 mt-3">
              <div class="row">
                <div class="col">
                  <ul class="nav">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contact</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <p class="text-right" style="color:rgb(226, 226, 226);">&copy; 2021 LEZHEALTY, Corp</p>
                </div>
              </div>
          </footer>
        </div>
      </footer>


</body>
</html>