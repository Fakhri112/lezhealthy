<?php 
    session_start();
    include '../function.php';
    $_SESSION["filename"]=pathinfo(basename(__FILE__),PATHINFO_FILENAME);
    if (isset($_SESSION["username"])){
    $status = bookmark_check($_SESSION["username"]);
    }
    

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubur edamame telur puyuh</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style><?php include '../gaya.css'; ?></style>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

  
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top p-3 navbar4bg">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container">
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link text-white" href="../index.php">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="../kitchen-tips.php">Kitchen Tips</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="../category.php">Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="../submit-recipe.php">Submit Resep</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Tools</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../health-calculator.php">Health Calculator</a>
                <a class="dropdown-item" href="../food-composer.php">Food Composer</a>
              </div>
            </li>
          </ul>

        <form class="form-inline my-2 my-lg-0" action="result.php" method="get">
           <input class="form-control me-2" style="width:200px" name="keyword" placeholder="Search" aria-label="Search">
        </form>
        <span>
            <a class="navbar-brand ml-4" href="../login.php">
              <img class="rounded-circle" src="../img/avatar.jpg" alt="..." height="36" />
            </a>
        </span>
      </div>
      </div>
    </nav>

    <div class="container" id="test" style="margin-top: 110px;">
      <div class="card" style="width: 50rem;">
        <img class="card-img-top" src="<?=pathinfo(basename(__FILE__), PATHINFO_FILENAME).".jpg";?>" alt="Card image cap">
        <div class="card-body">
          <h3 class="card-title">Bubur edamame telur puyuh</h3>
          <p class="card-text">Edamame merupakan sumber protein nabati untuk membangun otot dan sel-sel tubuh.</p>
          <p class="card-text">Edamame juga mengandung serat yang baik untuk pencernaan anak.</p>
          <p class="card-text">Anda dapat menyajikan MPASI telur burung puyuh dengan edamame bersama bubur dari beras putih untuk si kecil yang berusia 6 bulan.</p><br>
          <p class="card-text">Berdasarkan fakta gizi yang dipaparkan oleh Data Komposisi Pangan Indonesia, dalam 100 gram (g) telur ayam kampung yang dimasak rata-rata memiliki komposisi gizi sebagai berikut:</p>
          <h5 class="card-text">Komposisi Gizi</h5>
          <ul>
             <li>Protein: 16.3 g</li>
             <li>Energi: 251 kalori (Kal)</li>
             <li>Karbohidrat: 1,4 g</li>
             <li>Lemak: 19,4 g</li>
             <li>Fosfor: 250 miligram (mg)</li>
             <li>Kalsium: 62 mg</li>
             <li>Besi: 2,5 mg</li>
             <li>Vitamin A: 36 mikrogram (mcg)</li>
             <li>Karoten: 221 mcg</li>
          </ul>
          <p class="card-text">Selain sebagai sumber protein yang berkualitas, telur ayam kampung juga tersusun atas kandungan lain seperti vitamin B1, omega-3, dan antioksidan.</p>
          <h5 class="card-text">Bahan-Bahan</h5>
          <ul>
             <li>1 ½ sdm beras putih.</li>
             <li>2 buah telur puyuh.</li>
             <li>3-4 buah kacang edamame.</li>
             <li>3 kuntum brokoli.</li>
             <li>¼ unsalted butter.</li>
          </ul>
          <h5 class="card-text">Cara Membuat</h5>
          <ol>
              <li>Cuci semua bahan dengan air mengalir sampai bersih.</li>
              <li>Rebus telur puyuh sampai matang, dinginkan, lalu ambil kuning telurnya saja.</li>
              <li>Cincang brokoli hingga halus.</li>
              <li>Cuci tangan dan cuci semua bahan dengan air mengalir sampai bersih Masukkan semua bahan ke dalam slow cooker, lalu atur waktu masak selama 2 jam.</li>
              <li>Setelah matang, blender semua bahan sampai tekstur yg diinginkan.</li>
              <li>Bagi menjadi 2 porsi makan atau sesuai selera.</li>
              <li>Tambahkan 1/4 unsalted butter ke dalam porsi yg akan dimakan. Bubur siap disajikan.</li>
          </ol><br>
          <p>Nah, bagaimana mudah bukan? Yuk, buat Bubur edamame telur puyuh di rumah.</p>
        </div>
        <!-- bookmark button -->
        <?php if (isset($_SESSION["username"])) : ?>
        <div class="container p-3 text-right">
          <form method="POST" id="bookmark">
          <h5>Bookmark :

          <?php if ($status == "ON") : ?>
          <span><input type="checkbox" name="slider" id="slider" data-width="70" data-height="40" checked /></span>
          <?php else : ?>
          <span><input type="checkbox" name="slider" id="slider" data-width="70" data-height="40"/></span>
          <?php endif?>

          </h5>
          <input type="hidden" name="status" id="status"/>
          <input type="hidden" name="blog_name" id="blog_name" value="<?=pathinfo(basename(__FILE__),PATHINFO_FILENAME);?>"/>
          <input type="hidden" name="username" id="username" class="form-control" placeholder="Enter Name" value="<?= $_SESSION["username"]?>"/>
          <input type="submit" name="submit_bk" id="submit_bk" class="btn btn-info" value="Submit" style="display:none;"/>
          
          </form>
        </div>
        <?php endif?>
      </div>
    </div>

    <?php 

    ?>

  <?php if (isset($_SESSION["username"])) : ?>
      <div class="container mt-3">
       <form method="POST" id="comment_form" action="">
       <h5>Komentar</h5>
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
    <div class="container mt-3">
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

  <!-- show comment -->
  <div class="container">
  <div id="display_comment"></div>
  </div>

  <footer>
      <div class="container">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          </ul>
          <ul class="nav justify-content-center">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted footerhoover">Contact</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted footerhoover">About</a></li>
          </ul>
        </footer>
      </div>
    </footer>

</body>
<script src="../comment_script.js"></script>
<script src="../bookmark_button.js"></script>
</html>