<?php

session_start();

$connect = new PDO('mysql:host=localhost;dbname=food_and_health', 'root', '');

$blog_name = $_SESSION["filename"];

$query = "SELECT * FROM tbl_comment WHERE parent_comment_id = '0' AND blog_name = '$blog_name' ORDER BY comment_id DESC";
// 
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
 $output .= '

<div class="card mt-3" style="width: 53rem">
  <div class="card-head bg-secondary text-white p-3">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
  <div class="card-body">'.$row["comment"];
  if (isset($_SESSION["username"])){
    $output .= '<div class="panel-footer" align="right">
    <button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button>
    <button type="button" class="btn btn-danger delete" id="'.$row["comment_id"].'">Delete</button></div>
    </div></div>';
    if (!empty($_POST["id"]) && $_POST["id"]==$row["comment_id"]){
      $output .='<div style="margin-left: 48px; width: 50rem">
        <form method="POST" id="reply" action="" name="reply">
        <div class="form-group">
         <input type="hidden" name="comment_name" id="comment_name" value="'.$_SESSION["username"].'"/>
        </div>
        <div class="form-group">
         <textarea name="comment_content" id="comment_content" class="form-control" style="width: 50rem" placeholder="Enter Comment" rows="5"></textarea>
        </div>
        <div class="form-group">
         <input type="hidden" name="comment_id" id="comment_id" value="'.$_POST["id"].'"/>    
         <input type="hidden" name="blog_name" id="blog_name" value="'. $_SESSION["filename"].'"/>
         <input type="submit" name="submit_reply" id="submit_reply" class="btn btn-info" value="Submit" />
        </div>
       </form>
       </div>';
    }
  }
  else{
    $output .='</div></div>';
  }

 $output .= get_reply_comment($connect, $row["comment_id"]);
}

echo $output;

function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
{
 $query = "SELECT * FROM tbl_comment WHERE parent_comment_id = '".$parent_id."'";
 $output = '';
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $count = $statement->rowCount();
 if($parent_id == 0)
 {
  $marginleft = 0;
 }
 else
 {
  $marginleft = $marginleft + 48;
 }

 if($count > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   <div class="card mt-3" style="margin-left:'.$marginleft.'px; width: 50rem">
    <div class="bg-secondary text-white p-3">By <b>'.$_SESSION["username"].'</b> on <i>'.$row["date"].'</i></div>
    <div class="card-body">'.$row["comment"].'
    </div>
   </div>
   </div>
   ';
  }
 }
 return $output;
}

?>