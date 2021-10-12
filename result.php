<?php
  require 'function.php';

  //pagination
  $jumlahDataPerHalaman = 6;
  $jumlahData = count(queryResep("SELECT * FROM resep"));
  $jumlahHalaman = ceil($jumlahData/$jumlahDataPerHalaman);
  $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
  $awalData = ($jumlahDataPerHalaman*$halamanAktif)-$jumlahDataPerHalaman;
  
  if (isset($_GET["keyword"])) {
     $recipe = cari($_GET["keyword"]);
  }

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEZHEALTY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style><?php include 'gaya.css'; ?></style>
</head>
<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top p-3 navbar4bg">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container">
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="kitchen-tips.php">Kitchen Tips</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="category.php">Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="submit-recipe.php">Submit Resep</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Tools</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="health-calculator.php">Health Calculator</a>
                <a class="dropdown-item" href="food-composer.php">Food Composer</a>
              </div>
            </li>
          </ul>

        <form class="form-inline my-2 my-lg-0" action="result.php" method="get">
           <input class="form-control me-2" style="width:200px" name="keyword" placeholder="Search" aria-label="Search">
        </form>
        <span>
            <a class="navbar-brand ml-4" href="login.php">
              <img class="rounded-circle" src="img/avatar.jpg" alt="..." height="36" />
            </a>
        </span>
      </div>
      </div>
    </nav>

  <div class="container" style="margin-top:90px">
    <h3>Search Result</h3><hr/>
        <nav>
          <div class="nav nav-tabs bg-warning rounded py-3 mb-3 justify-content-center" id="nav-tab" role="tablist";">
            <a class="nav-item nav-link select active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Resep</a>
            <a class="nav-item nav-link select" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Kitchen Tips</a>
          </div>
        </nav>
        <div class="tab-content " id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                <?php foreach($recipe as $card) : ?>
                  <?php $link_img = $card["sumber"].".jpg";?>
                    <div class="card mb-3" style="max-width: 900px;">
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="blog/<?= $link_img;?>" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <a class="hover-orange" href=""><h5 class="card-title"><?=$card["judul"]?></h5></a>
                            <p class="card-text"><?=$card["deskripsi"]?></p>
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
                    </div>
                <?php endforeach; ?>
                
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
        </div>
    </div>


  <footer class="bg-dark mt-auto">
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