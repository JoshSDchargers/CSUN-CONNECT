<?php

$title = $_POST['header'];
$uid = $_POST['uid'];
$postid = $_POST['postid'];
$comment =htmlspecialchars($_POST['comment']);
$oldcomment =htmlspecialchars($_POST['oldcomment']);




echo $comment; 
echo $oldcomment; 
echo $title; 
echo $uid;

$date = date_create();
$hello = $date->format('m/d/Y');

echo $hello;





$servername = "localhost";
$username = "root";
$password = "Connect_root123!";
$database= "post";



$conn = new mysqli($servername, $username, $password, $database);


$sql = "INSERT INTO comments (date, comment, oldcomment, uid, title) VALUES ('$hello', '$comment', '$oldcomment', '$uid', '$title')";
$result = mysqli_query($conn, $sql);
$conn->close();


header('Location: /website/categories/category/Free.php#'.$postid);
?>
