<?php
//insert.php

if(isset($_POST["name"]))
{
 $connect = new PDO("mysql:host=localhost;dbname=test", "root", "");
 $query = "
 INSERT INTO tbl_users (name, gender) 
 VALUES(:name, :gender)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':name'   => $_POST['name'],
   ':gender'  => $_POST['gender']
  )
 );

 $result = $statement->fetchAll();
 if(isset($result))
 {
  echo 'done';
 }
}

?>