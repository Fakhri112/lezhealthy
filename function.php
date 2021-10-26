<?php 

    //inisialisasi koneksi mysqli
    $conn = mysqli_connect("localhost","root","","food_and_health");

    //baca dan masukkan query resep
    function queryResep($x){

    global $conn;  
    $result = $conn->query($x);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
    return $rows;
    }

    //cari keyword
    function cari($x){
        $query = "SELECT * FROM resep WHERE 
                    judul LIKE '%$x%' OR
                    deskripsi LIKE '%$x%' OR
                    tag1 LIKE '%$x%' OR
                    tag2 LIKE '%$x%' OR
                    tag3 LIKE '%$x%' OR
                    tag4 LIKE '%$x%'
                ";
        return queryResep($query);
    }

    //kirim status bookmark
    function bookmark_check($username, $blog_name){
    global $conn;
    $query = "SELECT * FROM bookmark WHERE username = '$username' AND blog_name = '$blog_name'";
    $result = $conn->query($query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    if(!isset($rows[0]["status"])){
        return "OFF";
    }
    else
    $bookmark_status = $rows[0]["status"];
    return $bookmark_status;
    error_reporting(0);
    }

    //login function
    function login(){
        global $conn;
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = $conn->query("SELECT * FROM user WHERE username = '$username'");
        if(mysqli_num_rows($result)===1)
        {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"]))
            {
                $_SESSION["username"] = $username;
                header("Location:index.php");
            exit;
            }
        }
    }

    //register function
    function register(){
        global $conn;
        $username = stripslashes($_POST["username"]);
        $password = $conn->real_escape_string($_POST["password"]);
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
          }
        else{
            $email = $_POST["email"];
        }

        $password = password_hash($password,PASSWORD_DEFAULT);
        $insert = "INSERT INTO user (username, password, email) VALUES ('$username', '$password', '$email')";
        $conn->query($insert);
        $_SESSION["username"] = $username;
        header("Location:index.php");
    }

    function kirim_resep(){
        global $conn;
        $username = $_POST["username"];
        $nama_resep = $_POST["nama_resep"];
        $komposisi = $_POST["komposisi"];
        $cara_buat = $_POST["cara_buat"];
        $deskripsi_resep = $_POST["deskripsi_resep"];
        $status_resep = $_POST["status_resep"];
        $gambar = gambar_validasi();

        if (!$gambar){
            return false;
        }

        $insert = "INSERT INTO submit_resep (username, nama_resep, deskripsi_resep, komposisi, cara_buat, gambar, status_resep) VALUES ('$username', '$nama_resep', '$deskripsi_resep', '$komposisi', '$cara_buat', '$gambar','$status_resep')";
        $conn->query($insert);
        return true;


    }

    function gambar_validasi(){
        $namafile = $_FILES["gambar"]["name"];
        $error = $_FILES["gambar"]["error"];
        $tmpName = $_FILES["gambar"]["tmp_name"];

        if ($error === 4){
            echo "<script>alert('Tidak ada gambar dipilih');</script>";
            return false;

        }
        $allowedextension = ['jpg', 'jpeg', 'png', 'jfif'];
        $extension = pathinfo($namafile,PATHINFO_EXTENSION);
        if (!in_array($extension, $allowedextension)){
            echo "<script>alert('Format file tidak mendukung');</script>";
            return false;
        }

        move_uploaded_file($tmpName, 'upload/submit-resep/'.$namafile);
        return $namafile;
    }

    function ubah_foto_profil(){
        global $conn;
        $username = $_SESSION["username"];
        $namafile = $_FILES["profile_pic"]["name"];
        $error = $_FILES["profile_pic"]["error"];
        $tmpName = $_FILES["profile_pic"]["tmp_name"];

        if ($error === 4){
            echo "<script>alert('Tidak ada gambar dipilih');</script>";
            return false;

        }
        $allowedextension = ['jpg', 'jpeg', 'png', 'jfif'];
        $extension = pathinfo($namafile,PATHINFO_EXTENSION);
        if (!in_array($extension, $allowedextension)){
            echo "<script>alert('Format file tidak mendukung');</script>";
            return false;
        }

        $update = "UPDATE user SET gambar = '$namafile' WHERE username = '$username'";
        $conn->query($update);
        move_uploaded_file($tmpName, 'upload/foto-profil/'.$namafile);
    }

    function apply_foto_profil(){
        error_reporting(0);
        global $conn;
        $username = $_SESSION["username"];
        $result = $conn->query("SELECT * FROM user WHERE username = '$username'");
        $rows = [];
        while ($row = $result -> fetch_assoc()){
            $rows[] = $row;
        }

        if (isset($rows[0]["gambar"])) {
            $namafile = $rows[0]["gambar"];
            return $namafile;
        }
        else{
            return false;
        }
    }

   

?>