<?php 
    session_start();
    $_SESSION["filename"]=pathinfo(basename(__FILE__),PATHINFO_FILENAME);
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Teh Cocktail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style><?php include '../gaya.css'; ?></style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body class="mt-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <div class="container">
            <div class="container-fluid">
              <a class="navbar-brand font-weight-bold" href="../index.php">LEZHEALTY</a>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <form class="d-flex">
                    <input class="form-control me-2" style="width:200px" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn ml-2 btn-default" type="submit">Cari</button>
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
                <a class="navbar-brand ml-4" href="../login.php">
                  <img class="rounded-circle"src="../img/default-avatar-profile-icon-social-260nw-1677509740.jpg" alt="..." height="36">
                </a>
              </div>
            </div>
        </div>
      </nav>

    <div class="container py-4" id="test">
      <div class="card" style="width: 50rem;">
        <img class="card-img-top" src="<?=pathinfo(basename(__FILE__), PATHINFO_FILENAME).".jpg";?>" alt="Card image cap">
        <div class="card-body">
          <h3 class="card-title">Resep Teh Cocktail</h3>
          <p class="card-text">Cocktail buah atau koktil adalah makanan yang terbuat dari potongan buah dan sirup serta disajikan dalam keadaan dingin. Meskipun namanya mirip dengan minuman beralkohol yang disebut “koktail”, koktail buah sama sekali tidak dicampur atau mengandung alkohol. Cocktail buah dapat dikreasikan menjadi aneka resep yang menggugah selera.</p>
          <p class="card-text">Salah satu minuman yang dapat kamu coba buat adalah Teh Cocktail Buah. Minuman satu ini simple untuk kamu buat dan kamu pun dapat merasakan sensasi teh yang bercampur buah.</p><br>
          <h5 class="card-text">Bahan-Bahan</h5>
          <ul>
             <li>1,5 liter air</li>
             <li>3 bungkus teh celup hijau siap pakai</li>
             <li>5 jeruk manis, peras dan ambil airnya</li>
             <li>5000 ml jus nanas</li>
             <li>100 ml jus lemon 1 buah mangga, kupas, potong dadu</li>
             <li>250 gr stroberi, potong tipis</li>
             <li>2 buah kiwi, kupas, potong tipis</li>
             <li>2 sdm air perasan jahe</li>
             <li>5 sdm sirop vanili (secukupnya)</li>
             <li>Es batu secukupnya</li>
          </ul>
          <h5 class="card-text">Cara Membuat</h5>
          <ol>
              <li>Rebus air hingga mendidih, celupkan teh celup hijau hingga larut, dinginkan.</li>
              <li>Masukkan air jeruk, air jahe, jus nanas, jus lemon, dan sirup ke dalam panci atau teko. Untuk tingkat kemanisan sesuai selera.</li>
              <li>Sajikan ke dalam gelas saji dan hias sesuai selera.</li>
          </ol><br>
          <p>Nah, bagaimana mudah bukan? Yuk, buat Teh Cocktail di rumah.</p>
        </div>
      </div>
    </div>


  <?php if (isset($_SESSION["username"])) : ?>
      <div class="container">
      <h5>Komentar</h5>
       <form method="POST" id="comment_form" action="">
        <div class="form-group">
         <input type="hidden" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" value="<?= $_SESSION["username"]?>"/>
        </div>
        <div class="form-group">
         <textarea name="comment_content" id="comment_content" class="form-control" style="width: 53rem" placeholder="Enter Comment" rows="5"></textarea>
        </div>
        <div class="form-group">
         <input type="hidden" name="comment_id" id="comment_id"/>    
         <input type="hidden" name="blog_name" id="blog_name" value="<?=pathinfo(basename(__FILE__),PATHINFO_FILENAME);?>"/>
         <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
        </div>
       </form>
      </div>
  <?php else : ?>
    <div class="container">
      <div class="card-body" style="background-color: rgba(210, 199, 147, 0.8);">
        <h3 class="text-center p-3">Anda Perlu Log-in Untuk Berkomentar</h3>
        <div class="text-center">
          <form action="../login.php">
            <button class="btn btn-info">Login</button>
          </form>
      </div>
      </div>
  </div>
  <?php endif ?>

  <?php 

var_dump($_POST);

?>


  <!-- show comment -->
  <div class="container">
  <div id="display_comment"></div>
  </div>

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
                    <a class="text-right nav-link px-2 " style="color:rgb(226, 226, 226);">&copy; 2021 LEZHEALTY, Corp</a>
                  </div>
              </div>
          </footer>
        </div>
      </footer>

</body>
</html>
<script src="../comment_script.js"></script>
<script></script>