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
    function bookmark_check($username){
    global $conn;
    $query = "SELECT * FROM bookmark WHERE username = '$username'";
    $result = $conn->query($query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    $bookmark_status = $rows[0]["status"];
    return $bookmark_status;

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
        return $conn -> affected_rows;
    }

   

?>