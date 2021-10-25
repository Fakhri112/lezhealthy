<?php

$connect = mysqli_connect("localhost","root","","food_and_health");

$username = $_POST["username"];
$status = $_POST["status"];


$query = "SELECT * FROM bookmark WHERE username = '$username'";
$result = $connect->query($query);


//cek apakah username pernah ada di table
if(mysqli_num_rows($result) == 0)
{
 $query = "INSERT INTO bookmark (username, blog_name, status) VALUES (?, ?, ?)";
 $statement = $connect->prepare($query);
 $statement->bind_param("sss", $username, $blog_name, $status);

 $username = $_POST["username"];
 $blog_name = $_POST["blog_name"];
 $status = $_POST["status"];
 $statement->execute();
}
else
{
    $update = "UPDATE bookmark SET status='$status' WHERE username='$username'";
    $connect->query($update);
      

}

?>