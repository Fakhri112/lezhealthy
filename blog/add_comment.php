<?php

//add_comment.php

$connect = new PDO('mysql:host=localhost;dbname=food_and_health', 'root', '');

$kosong = '';
$comment_name = '';
$comment_content = '';
$blog_name = '';

if(empty($_POST["comment_name"]))
{
 $kosong = "1";
}
else
{
 $comment_name = $_POST["comment_name"];
}

if(empty($_POST["comment_content"]))
{
 $kosong = "1";
}
else
{
 $comment_content = $_POST["comment_content"];
}

if($kosong == '')
{
 $query = "INSERT INTO tbl_comment (parent_comment_id, comment, comment_sender_name, blog_name) 
 VALUES (:parent_comment_id, :comment, :comment_sender_name, :blog_name)";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':comment'    => $comment_content,
   ':comment_sender_name' => $comment_name,
   ':blog_name' => $_POST["blog_name"]
  )
 );
}

$data = array('kosong1'  => $kosong);

echo json_encode($data);

?>