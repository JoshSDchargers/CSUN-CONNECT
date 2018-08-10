<?php

$uid = $_POST['loginuid'];
$rid = $_POST['commentuid'];
$comment = $_POST['comment'];
$date = date_create();
$hello = $date->format('Y-m-d H:i:s');

echo $uid;
echo $rid;
echo $comment;
echo $hello;




$localhost="localhost";
$username="root";
$password="Connect_root123!";
$database="rating";


$conn = new mysqli($servername, $username, $password, $database);


	if ($conn->connect_error) {
   		 die("Connection failed: " . $conn->connect_error);
				}
$sql = "INSERT INTO comment (uid, rid, comment, date) VALUES ('$uid', '$rid', '$comment', '$hello')";

$result = mysqli_query($conn, $sql);
$conn->close();

header("Location: ../profile.php? test=$uid");

?>
