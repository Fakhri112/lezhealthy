<?php
  session_start();
  require 'function.php';

  if(isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if(mysqli_num_rows($result)===1)
    {
      $row = mysqli_fetch_assoc($result);
      if($password == $row["password"])
      {
        $_SESSION["username"] = $username;
        header("Location:index.php");
      exit;
      }
    }

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

  <div class="container" style="margin-top: 80px;"></div>
    <form action="" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" id="username">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password" id="password">
    </div>
    <button type="submit" class="btn btn-primary" name="login">Submit</button>
  </form>
                

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